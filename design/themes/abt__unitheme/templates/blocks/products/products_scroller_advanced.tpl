{** block-description:tmpl_scroller_advanced **}

{if $block.properties.enable_quick_view == "Y"}
    {$quick_nav_ids = $items|fn_fields_from_multi_level:"product_id":"product_id"}
{/if}

{if $block.properties.hide_add_to_cart_button == "Y"}
    {assign var="show_add_to_cart" value=false}
{else}
    {assign var="show_add_to_cart" value=true}
{/if}

{if $settings.abt__unitheme.show_sku_in_multicolumns_list.value == 'Y'}
	{assign var="show_sku" value=true}
	{assign var="show_sku_label" value=false}
{/if}

{if $settings.abt__unitheme.show_qty_in_multicolumns_list.value == 'Y'}
	{assign var="show_qty" value=true}
	{assign var="hide_qty_label" value=true}
{/if}

{assign var="show_name" value=true}
{assign var="show_old_price" value=true}
{assign var="show_price" value=true}
{assign var="show_rating" value=true}
{assign var="show_clean_price" value=true}
{assign var="show_product_amount" value=false}
{assign var="show_list_discount" value=true}
{assign var="show_list_buttons" value=false}
{assign var="but_role" value="action"}
{assign var="show_discount_label" value=true}

{* FIXME: Don't move this file *}
{script src="js/tygh/product_image_gallery.js"}

{assign var="obj_prefix" value="`$block.block_id`000"}
{$block.properties.outside_navigation = "N"}

<div id="scroll_list_{$block.block_id}"
     class="jcarousel-skin owl-carousel ty-scroller-list grid-list {if !$show_add_to_cart}no-buttons{/if} ty-scroller-advanced">
    {foreach from=$items item="product" name="for_products"}
        {hook name="products:product_scroller_advanced_list"}
            <div class="ty-scroller-list__item">
                {if $product}
                    {assign var="obj_id" value=$product.product_id}
                    {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
                    {include file="common/product_data.tpl" product=$product}
                    <div class="ty-grid-list__item">
                        {assign var="form_open" value="form_open_`$obj_id`"}
                        {$smarty.capture.$form_open nofilter}

                        <div class="ty-grid-list__image">
                            {include file="views/products/components/product_icon.tpl" product=$product show_gallery=false}

                            {assign var="discount_label" value="discount_label_`$obj_prefix``$obj_id`"}
                            {$smarty.capture.$discount_label nofilter}
                            
                            {if $settings.abt__unitheme.show_sku_in_multicolumns_list.value == 'Y' and $product.product_code}
                                <div class="sku">{assign var="sku" value="sku_$obj_id"}{$smarty.capture.$sku nofilter}</div>
                            {/if}

                            <div class="grid-list-buttons">
                                {if !$quick_view && $settings.Appearance.enable_quick_view == 'Y'}
                                    {include file="views/products/components/quick_view_link.tpl" quick_nav_ids=$quick_nav_ids}
                                {/if}
                                {if $addons.wishlist.status == "A" && !$hide_wishlist_button}
                                    {include file="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" but_id="button_wishlist_`$obj_prefix``$product.product_id`" but_name="dispatch[wishlist.add..`$product.product_id`]" but_role="text"}
                                {/if}
                                {if $settings.General.enable_compare_products == "Y" && !$hide_compare_list_button || $product.feature_comparison == "Y"}
                                    {include file="buttons/add_to_compare_list.tpl" product_id=$product.product_id}
                                {/if}
                            </div>
                        </div>

                        {assign var="rating" value="rating_$obj_id"}
                        {if $smarty.capture.$rating|strlen > 40}
                            <div class="grid-list__rating">
                                {if ($ab_dotd_product_ids && $product.product_id|in_array:$ab_dotd_product_ids) or ($addons.ab__deal_of_the_day.status == 'A' && $product.promotions)}
                                    <div class="ab_dotd_product_label">{__('ab_dotd_product_label')}</div>
                                {/if}
                                {$smarty.capture.$rating nofilter}{if $product.discussion_amount_posts > 0}<span class="cn-comments">({$product.discussion_amount_posts})</span>{/if}
                            </div>
                        {else}
                            <div class="grid-list__rating no-rating">
                                {if ($ab_dotd_product_ids && $product.product_id|in_array:$ab_dotd_product_ids) or ($addons.ab__deal_of_the_day.status == 'A' && $product.promotions)}
                                    <div class="ab_dotd_product_label">{__('ab_dotd_product_label')}</div>
                                {/if}
                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>{if $product.discussion_amount_posts > 0}<span class="cn-comments">({$product.discussion_amount_posts})</span>{/if}
                            </div>
                        {/if}

                        <div class="ty-grid-list__item-name">
                            {if $item_number == "Y"}
                                <span class="item-number">{$cur_number}.&nbsp;</span>
                                {math equation="num + 1" num=$cur_number assign="cur_number"}
                            {/if}

                            {assign var="name" value="name_$obj_id"}
                            {$smarty.capture.$name nofilter}
                        </div>

                        <div class="ty-grid-list__price {if $product.price == 0}ty-grid-list__no-price{/if}">
                            {assign var="price" value="price_`$obj_id`"}
                            {$smarty.capture.$price nofilter}

                            {assign var="old_price" value="old_price_`$obj_id`"}
                            {if $smarty.capture.$old_price|trim}{$smarty.capture.$old_price nofilter}{/if}

                            {assign var="clean_price" value="clean_price_`$obj_id`"}
                            {$smarty.capture.$clean_price nofilter}

                            {assign var="list_discount" value="list_discount_`$obj_id`"}
                            {$smarty.capture.$list_discount nofilter}
                        </div>

                        {if $capture_options_vs_qty}{capture name="product_options"}{$smarty.capture.product_options nofilter}{/if}
                        <div class="stock-grid ty-product-block__field-group">
                            {assign var="product_amount" value="product_amount_`$obj_id`"}
                            {$smarty.capture.$product_amount nofilter}
                        </div>
                        {if $capture_options_vs_qty}{/capture}{/if}

                        <div class="ty-grid-list__control {if $addons.call_requests.buy_now_with_one_click == "Y"}two-buttons{/if}">
                            {if $show_add_to_cart}
                                <div class="button-container ty-quick-view-button__wrapper">
                    	            {if $settings.abt__unitheme.show_qty_in_multicolumns_list.value == 'Y'}
                                        <div class="grid-list-qty">
	                                        {assign var="qty" value="qty_`$obj_id`"}
                                        	{$smarty.capture.$qty nofilter}
                                        </div>
                                    {/if}
                                    {assign var="add_to_cart" value="add_to_cart_`$obj_id`"}
                                    {$smarty.capture.$add_to_cart nofilter}
                                </div>
                            {/if}
                        </div>

                        {assign var="form_close" value="form_close_`$obj_id`"}
                        {$smarty.capture.$form_close nofilter}
                    </div>
                {/if}
            </div>
        {/hook}
    {/foreach}
</div>

{include file="common/scroller_init.tpl"}