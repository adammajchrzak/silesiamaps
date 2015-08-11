<div id="dialog-message" title="Pole wymagane"></div>
<div class="ui-widget ui-widget-content ui-corner-all" style="margin: 10px; padding: 15px;">
<form id="form-add-user" name="form-add-user" method="post" action="/{$router->getUrl('cms','user', 'edit')}">
<div class="header-module">Dodaj użytkownika</div>
<div style="text-align: right; margin-bottom: 10px;">
	<button type="button" onclick="document.location.href='/{$router->getUrl('cms','user')}';">anuluj</button>
	<button type="submit" class="button-add-user-save">zapisz zmiany</button>
</div>
	<div id="user-edit-tabs">
		<ul>
			<li><a href="#tabs-1">Dane podstawowe</a></li>
			<li><a href="#tabs-2">Ustawienia zaawansowane</a></li>
		</ul>
		
		<div id="tabs-1">
			<p class="ui-helper-clearfix"><label>Login</label></p>
			<div><input type="text" id="user_login" name="user_login" value="" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Hasło</label></p>
			<div><input type="password" id="user_passwd" name="user_passwd" value="" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Imię</label></p>
			<div><input type="text" id="user_firstname" name="user_firstname" value="" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Nazwisko</label></p>
			<div><input type="text" id="user_lastname" name="user_lastname" value="" class="input-text-850" /></div>
			<p class="ui-helper-clearfix"><label>Adres e-mail</label></p>
			<div><input type="text" id="user_email" name="user_email" value="" class="input-text-850" /></div>
		</div>
		<div id="tabs-2">
			<p class="ui-helper-clearfix"><label>Użytkownik aktywny</label><input id="user_active" name="user_active" type="checkbox" value="1" checked="checked" /></p>
			<p class="ui-helper-clearfix"><label>Rola</label>
				<select id="role_id" name="role_id" class="input-select-200">
					<option value="3" selected="selected">edytor strony</option>
					<option value="2">administrator strony</option>
				</select>
			</p>
		</div>
	</div>
</form>
</div>