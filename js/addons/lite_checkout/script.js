// Polifill reportValidity
(function () {
    if (!HTMLInputElement.prototype.reportValidity) {
        HTMLInputElement.prototype.reportValidity = function() {
            if (this.checkValidity()) return true;

            $.scrollToElm($(this));
            
            this.setAttribute('style', 'outline: 2px solid red !important;');
            $(this).on('focus', function () {
                this.setAttribute('style', '');
            });

            return false;
        }
    }
})();

(function (_, $) {

    var checkout,
        $country,
        $state,
        $city,
        $cityState,
        $phone,
        $email,
        $name,
        $address,
        $zipcode,
        $notes;

    var methods = {
        init: function ($jelm) {
            checkout = $jelm;
            $country = $('[data-ca-lite-checkout-element="country"]', checkout);
            $state = $('[data-ca-lite-checkout-element="state"]', checkout);
            $city = $('[data-ca-lite-checkout-element="city"]', checkout);
            $cityState = $('[data-ca-lite-checkout-element="city-state"]', checkout);
            $phone = $('[data-ca-lite-checkout-element="phone"]', checkout);
            $email = $('[data-ca-lite-checkout-element="email"]', checkout);
            $name = $('[data-ca-lite-checkout-element="name"]', checkout);
            $address = $('[data-ca-lite-checkout-element="address"]', checkout);
            $zipcode = $('[data-ca-lite-checkout-element="zipcode"]', checkout);
            $notes = $('[data-ca-lite-checkout-element="notes"]', checkout);

            $country.on('change', function (e) {
                $state.val('');
                $city.val('');
                $cityState.val('');

                methods.update_shipping();
            });

            methods.initAutocomplete($cityState);

            methods.toggle_address();
        },

        setup_payments_form: function ($paymentsForm) {
            $.ceEvent('on', 'ce.formpost_' + $paymentsForm.prop('name'), function (form) {
                var $paymentsForm = $(form);

                if ($paymentsForm.data('caLiteCheckoutReadyForCheckout') === true) {
                    return true;
                }

                return methods.check(function (result) {
                    if (!result) {
                        return false;
                    }

                    methods.update_customer_info(function (data) {
                        setTimeout(function () {
                            $paymentsForm.data('caLiteCheckoutReadyForCheckout', true);
                            $notes.val(data.customer_notes);
                            $paymentsForm.submit();
                        }, 100);
                    }, false);

                    return false;
                });
            });
        },

        check: function (callback) {
            callback = callback || false;

            var result = true;
            var fields = [
                $phone,
                $email,
                $name
            ];

            var selected_shipping = $('[data-ca-lite-checkout-element="shipping_method"]:checked');
            if (selected_shipping.data('caLiteCheckoutIsAddressRequired')) {
                fields.push($address, $zipcode);
            }

            fields.forEach(function (elm) {
                result = result && elm.get(0).reportValidity();
            });

            // validate 152fz checkbox
            $('.litecheckout .cm-subscribe-policy [id^="accept_subscribe_policy"]')
                .each(function (i, elm) {
                    result = result && elm.reportValidity();
                });

            if (callback === false) {
                return result;
            }

            return callback(result);
        },

        serialize_checkout: function () {
            var city = $city.val(),
                state = $state.val(),
                country = $country.val(),
                email = $email.val(),
                address = $address.val(),
                phone = $phone.val(),
                name = $name.val(),
                customer_notes = $notes.val();

            return {
                result_ids: 'litecheckout*,checkout_info*,checkout_order_info*',
                dispatch: 'checkout.update_steps',
                update_step: 'step_two',
                next_step: 'step_three',
                ship_to_another: 0,
                full_render: 'Y',
                user_data: {
                    s_city: city,
                    b_city: city,
                    s_state: state,
                    b_state: state,
                    s_country: country,
                    b_country: country,
                    b_address: address,
                    s_address: address,
                    b_phone: phone,
                    s_phone: phone,
                    email: email,
                    name: name
                },
                customer_notes: customer_notes
            };
        },

        update_shipping: function () {
            $.ceAjax('request', fn_url(''), {
                method: 'post',
                caching: false,
                data: methods.serialize_checkout()
            });
        },

        initAutocomplete: function ($elm) {
            $elm.autocomplete({
                appendTo: "#litecheckout_autocomplete_dropdown",

                source: function (request, response) {
                    var countryCode = $country.val();

                    $.ceAjax('request', fn_url('city.autocomplete_city'), {
                        method: 'get',
                        hidden: true,
                        caching: true,
                        data: {
                            q: request.term,
                            check_country: countryCode,
                            items_per_page: 15
                        },
                        callback: function (data) {
                            for (var i = 0; i < data.autocomplete.length; i++) {
                                data.autocomplete[i].label = data.autocomplete[i].value
                                    + ' ('
                                    + data.autocomplete[i].state
                                    + ')';
                            }
                            response(data.autocomplete);
                        }
                    });
                },

                select: function (event, ui) {
                    event.preventDefault();

                    var city = ui.item.value,
                        state = ui.item.state_code || ui.item.state;

                    $state.val(state);
                    $city.val(city);
                    $cityState.val(ui.item.label);

                    setTimeout(methods.update_shipping, 100);
                }
            });
        },

        toggle_address: function (is_enabled) {
            if (typeof is_enabled === 'undefined') {
                var $selected_shipping = $('[data-ca-lite-checkout-element="shipping_method"]:checked');
                is_enabled = $selected_shipping.data('caLiteCheckoutIsAddressRequired');
            }

            var $addressRow = $('[data-ca-lite-checkout-element="address_group"]');
            $addressRow.toggleClass('hidden', !is_enabled);
        },

        update_customer_info: function (callback, recalculate_cart) {
            if (typeof recalculate_cart === 'undefined') {
                recalculate_cart = true;
            }
            callback = callback || function () {
            };

            var data = methods.serialize_checkout();

            data.dispatch = 'checkout.customer_info';
            data.result_ids = 'litecheckout_step_buyer';
            data.full_render = null;
            data.recalculate_cart = recalculate_cart ? 'Y': 'N';

            $.ceAjax('request', fn_url(''), {
                method: 'post',
                caching: false,
                hidden: false,
                data: data,
                callback: function (response) {
                    for (var i in response.notifications) {
                        if (response.notifications[i].type === 'E') {
                            return;
                        }
                    }

                    methods.toggle_address();

                    callback(data, response);
                }
            });
        },

        register_newsletter_subscriber: function ($checkbox) {
            $checkbox.change(function (event) {
                methods.update_customer_info(function (data) {
                    if (data.user_data.email) {
                        var connected_checkbox_id = $checkbox.data('caTargetId');
                        $('#' + connected_checkbox_id).trigger('click');
                    }
                }, false);
            });
        }
    };

    $.extend({
        ceLiteCheckout: function (method) {
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else {
                $.error('ty.ceLiteCheckout: method ' + method + ' does not exist');
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        var $liteCheckoutForm = $('[data-ca-lite-checkout-element="form"]', context);
        if ($liteCheckoutForm.length) {
            $.ceLiteCheckout('init', $liteCheckoutForm);
        }

        var $paymentsForm = $('[data-ca-lite-checkout-element="payments-form"]', context);
        if ($paymentsForm.length) {
            $.ceLiteCheckout('setup_payments_form', $paymentsForm);
        }

        var $newsletterTogglers = $('[data-ca-lite-checkout-element="newsletter-toggler"]', context);
        $newsletterTogglers.each(function (i, elm) {
            $.ceLiteCheckout('register_newsletter_subscriber', $(elm));
        })
    });

    // Auto select all text in input at focus event
    $(document).on('focus', '[data-ca-lite-checkout-auto-select="true"]', function (e) {
        $(this).select();
    });

    $(document).on('click', '.cm-toggle-class', function (e) {
        $( $(this).data('target') ).toggleClass( $(this).data('toggle'), false );
    });

    $(document).on('click', '.cm-remove', function (e) {
        $(this).remove();
    });

    $(document).on('click', '.cm-open-pickups', function (e) {
        $( $(this).data('caTarget') )
            .toggleClass('hidden-phone', false)
            .ceDialog('open', { title: $(this).data('caTitle') });

        $dialogBody = $.ceDialog('get_last');
        $dialogBodyContainer = $dialogBody.parents('.ui-dialog');
        $objectContainer = $('.object-container', $dialogBody);

        _resize();

        $.ceEvent('on', 'ce.window.resize', function () {
            _resize();
        });

        function _resize () {
            $dialogBodyContainer.css({ width: 'auto', left: 0, right: 0, top: 0, bottom: 0, position: 'fixed' });
            $objectContainer.css({ padding: 0 });
        }
    });

})(Tygh, Tygh.$);
