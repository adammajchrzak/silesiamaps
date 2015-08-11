{literal}
<style type="text/css">
	.checker {
		line-height: 12px !important;	
		height: 12px !important;
	}
</style>
{/literal}
<div class="ui-widget ui-widget-content ui-corner-all main-content" style="width: 900px;">
<form id="form-edit-page" name="form-edit-page" method="post" action="">
<input type="hidden" id="user_id" name="user_id" value="{$user_id}" />	
	<div style="text-align: right; margin-bottom: 10px;">
		<button type="button" onclick="document.location.href='/{$router->getUrl('cms','user')}';">anuluj</button>
		<button type="submit" class="button-edit-page-save">zapisz zmiany</button>
	</div>

	{foreach item=tree name=tree from=$structure_tree}
		<div class="list-row">
			
			<div class="list-row-element-name">
				{section name=petla start=0 loop=$tree.page_level step=1}
					&nbsp;&nbsp;
				{/section}
				[{$tree.page_id}]{$tree.page_name|truncate}
			</div>

			<span style="float: right;">
				<input id="params[]" name="params[]" type="checkbox" value="{$tree.page_id}"{if in_array($tree.page_id, $st)} checked{/if} style="height: 10px;" />
			</span>
			
			<div class="ui-helper-clearfix"></div>
		</div>
	{/foreach}
</form>
</div>