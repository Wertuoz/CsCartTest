{capture name="mainbox_title"}{__("abt__unitheme")}: {__("abt__ut.microdata")}{/capture}
{capture name="mainbox"}
<form id='form' action="{""|fn_url}" method="post" name="microdata_update_form" class="form-horizontal form-edit cm-disable-empty-files">
<table class="table table-middle" width="100%">
<thead class="cm-first-sibling">
<tr>
<th width="25%">{__("name")}</th>
<th width="60%">{__("value")}</th>
<th width="15%">&nbsp;</th>
</tr>
</thead>
<tbody>
{foreach from=$microdata item="item" key="_key" name="prod_prices"}
<tr class="cm-row-item">
<td width="25%">
<input type="hidden" name="microdata[{$_key}][id]" value="{$item.id}" />
<select name="microdata[{$_key}][field]" class="abt_ut__field">
<option value=""> --- </option>
{foreach $schema as $name => $data}
<option {if $item.field == $name}selected{/if}>{$name}</option>
{/foreach}
</select>
</td>
<td width="60%">
<input type="text" name="microdata[{$_key}][value]" value="{$item.value nofilter}" class="abt_ut__value input-large" />
</td>
<td width="15%" class="right">
{include file="buttons/clone_delete.tpl" microformats="cm-delete-row" no_confirm=true}
</td>
</tr>
{/foreach}
{math equation="x+1" x=$_key|default:0 assign="new_key"}
<tr class="{cycle values="table-row , " reset=1}" id="box_add_value">
<td width="25%">
<select name="microdata[{$new_key}][field]" class="abt_ut__field">
<option value=""> --- </option>
{foreach $schema as $name => $data}
<option>{$name}</option>
{/foreach}
</select>
</td>
<td width="60%">
<input type="text" name="microdata[{$new_key}][value]" value="" class="abt_ut__value input-large" />
</td>
<td width="15%" class="right">
{include file="buttons/multiple_buttons.tpl" item_id="add_value"}
</td>
</tr>
</tbody>
</table>
{capture name="buttons"}
{include file="buttons/save.tpl" but_role="submit-link" but_name="dispatch[abt__ut.update_microdata]" but_target_form="microdata_update_form"}
{/capture}
</form>
{/capture}
{include file="common/mainbox.tpl" title=$smarty.capture.mainbox_title title_start = __("abt__unitheme") title_end = __("abt__ut.microdata") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar select_languages=true}
<script type="text/javascript">
(function (_,$) {
var schema = {$schema|json_encode nofilter};
$(document).on('change', '.abt_ut__field', function () {
var value = $(this).val();
var input = $(this).closest('tr').find('.abt_ut__value');
if (schema[value] !== undefined) {
input.val(schema[value]['default_value']);
}
});
})(Tygh, Tygh.$)
</script>