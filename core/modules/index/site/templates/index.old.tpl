
<div id="home-news-field">
	<h3>{$locale.site.index.header.news}</h3>
	<ul class="homepage-news-list">
	{foreach item=tree name=tree from=$news_list}
		<li>
			<div class="homepage-news-list-title"><a href="/{$router->getUrl($config->current_locale, 'news',$tree._code,$tree.news_id)}">{$tree._title}</a></div>
			<div class="homepage-news-list-date">{$tree._publish}</div>
			<div class="homepage-news-list-lead">{$tree._lead}</div>
			<div class="homepage-news-list-more"><a href="/{$router->getUrl($config->current_locale, 'news',$tree._code,$tree.news_id)}">{$locale.site.nav.more} &raquo;</a></div>
		</li>
	{/foreach}
	</ul>
</div>
<div class="ui-helper-clearfix"></div>

<div id="home-events-field">
	<h3>{$locale.site.index.header.events}</h3>
	<ul class="homepage-news-list">
	{foreach item=tree name=tree from=$calendar_list}
		<li>
			<div class="homepage-news-list-title"><a href="/{$router->getUrl($config->current_locale, 'calendar',$tree._code,$tree.event_id)}">{$tree.event_name}</a></div>
			<div class="homepage-news-list-date">{$tree.event_start}</div>
			<div class="homepage-news-list-lead">{$tree.event_lead}</div>
			<div class="homepage-news-list-more"><a href="/{$router->getUrl($config->current_locale, 'calendar',$tree._code,$tree.event_id)}">{$locale.site.nav.more} &raquo;</a></div>
		</li>
	{/foreach}
	</ul>
</div>
<div class="ui-helper-clearfix"></div>

<div id="home-content-field">
	<h3>{$locale.site.header.home}</h3>
	<p>{$page_details.content_text}</p>
</div>