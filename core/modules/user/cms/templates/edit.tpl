<div id="dialog-message" title="Pole wymagane"></div>
<div class="ui-widget ui-widget-content ui-corner-all" style="margin: 10px; padding: 15px;">
<form id="form-edit-user" name="form-edit-user" method="post" action="/{$router->getUrl('cms', 'user', 'edit')}">
<input type="hidden" id="user_id" name="user_id" value="{$user_details.user_id}" />
<div class="header-module">Edycja użytkownika</div>
<div style="text-align: right; margin-bottom: 10px;">
	<button type="button" onclick="document.location.href='/{$router->getUrl('cms','user')}';">anuluj</button>
	<button type="submit" class="button-edit-user-save">zapisz zmiany</button>
</div>
	<div id="user-edit-tabs">
		<ul>
			<li><a href="#tabs-1">Dane podstawowe</a></li>
			<li><a href="#tabs-2">Ustawienia zaawansowane</a></li>
		</ul>
		
		<div id="tabs-1">
			<p class="ui-helper-clearfix"><label>Login</label></p>
			<div><input type="text" id="user_login" name="user_login" value="{$user_details.user_login}" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Hasło</label></p>
			<div><input type="password" id="user_passwd" name="user_passwd" value="" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Imię</label></p>
			<div><input type="text" id="user_firstname" name="user_firstname" value="{$user_details.user_firstname}" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Nazwisko</label></p>
			<div><input type="text" id="user_lastname" name="user_lastname" value="{$user_details.user_lastname}" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Adres e-mail</label></p>
			<div><input type="text" id="user_email" name="user_email" value="{$user_details.user_email}" class="input-text-850" /></div>
		</div>
		<div id="tabs-2">
			<p class="ui-helper-clearfix"><label>Użytkownik aktywny</label><input id="user_active" name="user_active" type="checkbox" value="1"{if $user_details.user_active == '1'} checked="checked"{/if} /></p>
			<p class="ui-helper-clearfix"><label>Rola</label>
				<select id="role_id" name="role_id" class="input-select-200">
					<option value="3"{if $user_details.role_id == '3'} selected="selected"{/if}>edytor strony</option>
					<option value="2"{if $user_details.role_id == '2'} selected="selected"{/if}>administrator strony</option>
				</select>
			</p>
		</div>
	</div>
</form>
</div>