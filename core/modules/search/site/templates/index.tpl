<div class="page-text" style="padding-bottom: 0px;">
	<h1>{$locale.site.search.text.header}</h1>
	<div style="padding: 15px 15px 15px 0px;">{$locale.site.search.text.search}: <strong>{$word}</strong></div>
</div>

<div style="padding: 0px 15px 0px 15px;">
	{if $search_list}
	<ul class="news-list">
	{foreach item=tree name=tree from=$search_list}	
		<li>
			<div class="news-list-title"><a href="/{$router->getUrl($config->current_locale, $tree.module,$router->getItemCode($tree.page_id,$config->current_locale),$tree.page_id)}">{$tree.node_title}</a></div>
			<div class="news-list-more"><a href="/{$router->getUrl($config->current_locale, $tree.module,$router->getItemCode($tree.page_id,$config->current_locale),$tree.page_id)}">{$locale.site.nav.more} &raquo;</a></div>
		</li>
	{/foreach}
	</ul>
	{include file="templates/site/pagination.tpl"}
	{else}
		<div>{$locale.site.search.text.noresult}</div>
	{/if}
</div>