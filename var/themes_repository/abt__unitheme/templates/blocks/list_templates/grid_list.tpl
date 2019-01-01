{if $products}

    {script src="js/tygh/exceptions.js"}

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

    {if !$no_sorting}
        {include file="views/products/components/sorting.tpl"}
    {/if}

    {if !$show_empty}
        {split data=$products size=$columns|default:"2" assign="splitted_products"}
    {else}
        {split data=$products size=$columns|default:"2" assign="splitted_products" skip_complete=true}
    {/if}

    {math equation="100 / x" x=$columns|default:"2" assign="cell_width"}
    {if $item_number == "Y"}
        {assign var="cur_number" value=1}
    {/if}

    {* FIXME: Don't move this file *}
    {script src="js/tygh/product_image_gallery.js"}

    {if $settings.Appearance.enable_quick_view == 'Y'}
        {$quick_nav_ids = $products|fn_fields_from_multi_level:"product_id":"product_id"}
    {/if}
    
    {if $settings.abt__unitheme.show_sku_in_multicolumns_list.value == 'Y'}
    	{assign var="show_sku" value=true}
    	{assign var="show_sku_label" value=false}
	{/if}
    
    {if $settings.abt__unitheme.show_qty_in_multicolumns_list.value == 'Y'}
    	{assign var="show_qty" value=true}
    	{assign var="hide_qty_label" value=true}
	{/if}

    <div class="grid-list {if $settings.abt__unitheme.show_button_buy_in_product_lists.value == 'N' || !$show_add_to_cart}no-buttons{/if}">
        {strip}
            {foreach from=$splitted_products item="sproducts" name="sprod"}
                {foreach from=$sproducts item="product" name="sproducts"}
                    <div class="ty-column{$columns}">
                        {if $product}
                            {assign var="obj_id" value=$product.product_id}
                            {assign var="obj_id_prefix" value="`$obj_prefix``$product.product_id`"}
                            {include file="common/product_data.tpl" product=$product }

                            <div class="ty-grid-list__item">
                                {assign var="form_open" value="form_open_`$obj_id`"}
                                {$smarty.capture.$form_open nofilter}
                                {hook name="products:product_multicolumns_list"}
                                    <div class="ty-grid-body">
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
                                            <bdi>{$smarty.capture.$name nofilter}</bdi>
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
                                                <div class="button-container">
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
                                        
                                        {hook name="products:additional_info"}{/hook}

                                        {if $show_descr}
                                            <div class="ty-grid-list__ab-description">
                                                {assign var="prod_descr" value="prod_descr_`$obj_id`"}
                                                {$smarty.capture.$prod_descr nofilter}
                                            </div>
                                        {/if}

                                    </div>
                                {/hook}
                                {assign var="form_close" value="form_close_`$obj_id`"}
                                {$smarty.capture.$form_close nofilter}
                            </div>
                        {/if}
                    </div>
                {/foreach}
                {if $show_empty && $smarty.foreach.sprod.last}
                    {assign var="iteration" value=$smarty.foreach.sproducts.iteration}
                    {capture name="iteration"}{$iteration}{/capture}
                    {hook name="products:products_multicolumns_extra"}
                    {/hook}
                    {assign var="iteration" value=$smarty.capture.iteration}
                    {if $iteration % $columns != 0}
                        {math assign="empty_count" equation="c - it%c" it=$iteration c=$columns}
                        {section loop=$empty_count name="empty_rows"}
                            <div class="ty-column{$columns}">
                                <div class="ty-product-empty">
                                    <span class="ty-product-empty__text">{__("empty")}</span>
                                </div>
                            </div>
                        {/section}
                    {/if}
                {/if}
            {/foreach}
        {/strip}
    </div>

    {if !$no_pagination}
        {include file="common/pagination.tpl"}
    {/if}

{/if}

{capture name="mainbox_title"}{$title}{/capture}