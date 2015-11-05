<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS - Content Managment System</title>
{*	załadowanie plików styli  *}
{foreach from=$head->getStyles() item=style }
<link href="{$style.path}{$style.file}" media="{$style.media}" rel="stylesheet" type="text/css" />
{/foreach}
{foreach from=$head->getStylesToImport() item=style }
{import_css module=$style.module mode=$style.mode file=$style.file}
{/foreach}

{*	załadowanie plików scryptów *}
{foreach from=$head->getScripts() item=script }
<script src="{$script.path}{$script.file}" type="text/javascript" ></script>
{/foreach}
</head>
<body>
<div id="page-body">	

{if $_auth->hasIdentity()}
	<div id="page-top">
		<div id="page-logo">CMS - Mapa projektów 2007 - 2013</div>
		<ul id="page-top-menu">
			<li><a href="/{$router->getUrl('cms', 'auth', 'logout')}">wyloguj</a></li>
		</ul>
	</div>
	{include file="templates/cms/menu.tpl"}
{/if}


<div id="page-container">
	<div id="page-content">