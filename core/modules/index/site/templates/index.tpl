
<div id="home-news-field">
	<h3>{$locale.site.index.header.news}</h3>
	<table class="homepage-news-list">
		<tr>
		{foreach item=tree name=tree from=$news_list}
		<td><div class="homepage-news-list-title"><a href="/{$router->getUrl($config->current_locale, 'news',$tree._code,$tree.news_id)}">{$tree._title}</a></div></td>
		{/foreach}
		</tr>
		<tr>
		{foreach item=tree name=tree from=$news_list}
		<td><div class="homepage-news-list-date">{$tree._publish}</div></td>
		{/foreach}
		</tr>
		<tr>
		{foreach item=tree name=tree from=$news_list}
		<td><div class="homepage-news-list-lead">{$tree._lead}</div></td>
		{/foreach}
		</tr>
		<tr>
		{foreach item=tree name=tree from=$news_list}
		<td><div class="homepage-news-list-more"><a href="/{$router->getUrl($config->current_locale, 'news',$tree._code,$tree.news_id)}">{$locale.site.nav.more} &raquo;</a></div></td>
		{/foreach}
		</tr>
	</table>
</div>
<div class="ui-helper-clearfix" style="margin-top: 20px;"></div>

<div id="home-events-field">
	<h3>{$locale.site.index.header.events}</h3>
	<table class="homepage-news-list">
		<tr>
		{foreach item=tree name=tree from=$calendar_list}
			<td><div class="homepage-news-list-title"><a href="/{$router->getUrl($config->current_locale, 'calendar',$tree._code,$tree.event_id)}">{$tree.event_name}</a></div></td>
		{/foreach}
		</tr>
		<tr>
		{foreach item=tree name=tree from=$calendar_list}
			<td><div class="homepage-news-list-date">{$tree.event_start}</div></td>
		{/foreach}
		</tr>
		<tr>
		{foreach item=tree name=tree from=$calendar_list}
			<td><div class="homepage-news-list-lead">{if trim($tree.event_lead) != ''}{$tree.event_lead}{else}&nbsp;&nbsp;{/if}</div></td>
		{/foreach}
		</tr>
		<tr>
		{foreach item=tree name=tree from=$calendar_list}
			<td><div class="homepage-news-list-more"><a href="/{$router->getUrl($config->current_locale, 'calendar',$tree._code,$tree.event_id)}">{$locale.site.nav.more} &raquo;</a></div></td>
		{/foreach}
		</tr>
	</table>
</div>
<div class="ui-helper-clearfix" style="margin-top: 20px;"></div>

<div id="home-content-field">
	<h3>{$locale.site.header.home}</h3>
	<p>{$page_details.content_text}</p>
</div>