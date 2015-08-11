<div class="page-text">
	<h1>{$page_details.node_title}</h1>
	<div style="margin-top: 30px;">{$page_details.content_text}</div>
	{if $page_details.gallery_details}
	<div class="page-gallery">
		<ul class="gallery_images">
		{foreach from=$page_details.picture_list item=pl name=pl}
			<li><div style="background-image: url({$pl.file_dir}/small/{$pl.file_name});"><a href="{$pl.file_dir}/big/{$pl.file_name}" rel="colorbox" title="{$pl.picture_description}">zdjęcie: {$pl.picture_description}</a></div></li>
		{/foreach}
		</ul>
	</div>
	{/if}
</div>
