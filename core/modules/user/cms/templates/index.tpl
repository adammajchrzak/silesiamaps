<div class="ui-widget ui-widget-content ui-corner-all"  style="margin: 10px; padding: 15px;">
	<div class="header-module">Użytkownicy systemu</div>
	<div style="text-align: right; margin-bottom: 10px;"><button onclick="document.location.href='/{$router->getUrl('cms','user','add')}'">dodaj użytkownika</button></div>
	<div style="height: 20px;">
		<ul class="list-header">
			<li style="width: 150px; padding-left: 10px;">Login</li>
			<li style="width: 200px; text-align: center;">Imię i nazwisko</li>
			<li style="width: 250px; text-align: center;">Adres e-mail</li>
			<li style="width: 150px; text-align: center;">Uprawnienie</li>
		</ul>
	</div>
	<div style="clear: both; border-bottom: 1px solid #ccc; margin-top: 10px; margin-bottom: 10px;"></div>
	{foreach item=list name=list from=$users_list}
		<div class="list-row">
			<div style="width: 150px; padding-left: 10px;"><a href="/{$router->getUrl('cms','user','edit',$list.user_id)}">{$list.user_login}</a></div>
			<div style="width: 200px; text-align: center;">{$list.user_firstname} {$list.user_lastname}</div>
			<div style="width: 250px; text-align: center;"><a href="mailto:{$list.user_email}">{$list.user_email}</a></div>
			<div style="width: 150px; text-align: center;">Uprawnienie: {$list.role_name}</div>
			<span class="edit-set">
				<button class="button-edit" onclick="document.location.href='/{$router->getUrl('cms','user','edit',$list.user_id)}'">edytuj</button>
				<button class="button-permission" onclick="document.location.href='/{$router->getUrl('cms','user','permission',$list.user_id)}'">dostęp</button>
				<button class="button-delete" title="delete" value="{$list.user_id}">usuń</button>
			</span>
		</div>
	{/foreach}
</div>