<div id="login-form-page" class="ui-widget ui-widget-content ui-corner-all">
	
	<div id="page-auth-title">Mapa projektów 2007-2013 - CMS</div>
		
	<form id="page_login" action="/{$router->getUrl('cms','auth','login')}" method="post">
		<div class="ui-helper-clearfix"><label>{$locale.cms.auth.user}</label> <input type="text" id="login" name="login" class="input-text-200{if $error} ui-state-error{/if}" /></div>
		<div class="ui-helper-clearfix"><label>{$locale.cms.auth.password}</label> <input type="password" id="passwd" name="passwd" class="input-text-200{if $error} ui-state-error{/if}" /></div>
		{if $error}
			<div id="login-error">{$locale.cms.auth.error}</div>
		{/if}
		<div class="ui-helper-clearfix"><button type="submit">{$locale.cms.auth.login}</button></div>
	</form>

</div>