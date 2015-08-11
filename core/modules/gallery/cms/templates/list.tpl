<div class="ui-widget ui-widget-content ui-corner-all main-content">
	<div class="header-module">Galerie</div>
	<div style="text-align: right; margin-bottom: 10px;"><button onclick="document.location.href='/{$router->getUrl('cms','gallery','add')}'">dodaj galerię</button></div>
	<div style="height: 20px;">
		<ul class="list-header">
			<li style="width: 350px; padding-left: 10px;">Nazwa galerii</li>
			<li style="width: 150px; text-align: center;">Data utworzenia</li>
			<li style="width: 100px; text-align: center;">Aktywność</li>
		</ul>
	</div>
	<div style="clear: both; border-bottom: 1px solid #ccc; margin-top: 10px; margin-bottom: 10px;"></div>
	{foreach item=tree name=tree from=$gallery_list}
		<div class="list-row">
			<div class="list-row-element-name" style="width: 350px; padding-left: 10px;">
				<a href="/{$router->getUrl('cms','gallery','edit',$tree.gallery_id)}">{$tree._name}</a>
			</div>
			<div class="list-row-column" style="width: 150px; text-align: center;">{$tree._created}</div>
			<div class="list-row-column" style="width: 100px; text-align: center;">{if $tree._active =='1'}<span style="color: #00FF00;">TAK</span>{else}<span style="color: #FF0000;">NIE</span>{/if}</div>
			<span class="edit-set">
				<button class="button-edit" onclick="document.location.href='{$router->getUrl('cms','gallery','edit',$tree.gallery_id)}'">edytuj</button>
				<button class="button-delete" title="delete" value="{$tree.gallery_id}">usuń</button>
			</span>
		</div>
	{/foreach}
</div>