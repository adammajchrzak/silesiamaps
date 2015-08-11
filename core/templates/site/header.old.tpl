<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{$head->title}</title>
		<meta name="keywords" content="{$head->keywords}" />
		<meta name="description" content="{$head->description}" />
		{*	załadowanie plików styli  *}
		{foreach from=$head->getStyles() item=style }
			<link href="{$style.path}{$style.file}" media="{$style.media}" rel="stylesheet" type="text/css" />
		{/foreach}
		
		{*	załadowanie plików scryptów *}
		{foreach from=$head->getScripts() item=script }
		    <script src="{$script.path}{$script.file}" type="text/javascript" ></script>
		{/foreach}
		<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript">//swfobject plugin</script>
{literal}
<script type="text/javascript">

</script>
{/literal}		
</head>
<body>
<div id="page-body">

<div id="page-top">
	<div id="page-short-menu">
		<ul>
			<li><a href="/" title="strona główna">Strona główna</a></li>
			<li>|</li>
			<li><a href="/index,kontakt,3.html" title="kontakt">Kontakt</a></li>
		</ul>
	</div>
	<div id="page-lang-menu">
		<ul>
			<li class="version-eng"><a href="http://www.euroregion-silesia.eu/show_text.php?language=2&id=en-index" target="_blank">english version</a></li>
			<li class="version-cz"><a href="http://www.euroregion-silesia.cz/" target="_blank">czech version</a></li>
		</ul>
	</div>
	<div id="page-banner"></div>
</div>

<div id="page-container">
	{include file="templates/site/sidebar-left.tpl"}
	<div id="page-main">
		<div id="page-menu-dropdown">
			<ul class="dropdown">
				<li style="width: 122px; height: 47px;"><a href="javascript:;" class="li-main">Stowarzyszenie</a>
					<ul>
						<li class="li-01-first"><a href="/index,o-stowarzyszeniu,17.html">O Stowarzyszeniu</a></li>		
						<li><a href="/index,wladze-stowarzyszenia,18.html">Władze Stowarzyszenia</a></li>
						<li><a href="/index,gminy-czlonkowskie-stowarzyszenia,19.html">Gminy członkowskie Stowarzyszenia</a></li>
						<li><a href="/index,mapa,20.html">Mapa</a></li>
						<li><a href="/index,dokumenty,21.html">Dokumenty</a></li>
					</ul>
				</li>
				<li style="width: 140px; height: 36px;"><a href="javascript:;" class="li-main">Euroregion Silesia</a>
					<ul>
						<li class="li-02-first"><a href="/index,o-euroregionie,23.html">O Euroregionie</a></li>
						<li><a href="/index,euroregion-silesia-w-liczbach,24.html">Euroregion Silesia w liczbach</a></li>
						<li><a href="/index,euroregion-silesia-w-programach-wspolpracy-transgranicznej,25.html">Euroregion Silesia w programach współpracy transgranicznej</a></li>
						<li><a href="/index,dzialalnosc-euroregionu-silesia,26.html">Działalność Euroregionu Silesia</a></li>
						<li><a href="/index,10-lat-wspolpracy-w-euroregionie-silesia,27.html">10 lat współpracy w Euroregionie Silesia</a></li>
						<li><a href="/index,organy-euroregionu,28.html">Organy Euroregionu</a></li>
						<li><a href="/index,kierunki-dzialan-euroregionu-silesia,29.html">Kierunki działań Euroregionu Silesia</a></li>		
					</ul>
				</li>
				<li style="width: 227px; height: 34px;"><a href="javascript:;" class="li-main">Członkowie Euroregionu Silesia</a>
					<ul>
						<li class="li-03-first"><a href="/index,czlonkowie-strony-polskiej,31.html">Członkowie strony polskiej</a></li>
						<li><a href="/index,czlonkowie-strony-czeskiej,32.html">Członkowie strony czeskiej</a></li>		
					</ul>
				</li>
				<li style="width: 125px; height: 34px;"><a href="javascript:;" class="li-main">Projekty własne</a>
					<ul>
						<li class="li-04-first"><a href="/index,realizowane-w-ramach-interreg-iiia-2004-2006,34.html">Realizowane w ramach INTERREG IIIA 2004-2006</a></li>
						<li><a href="/index,realizowane-w-ramach-powt-2007-2013,35.html">Realizowane w ramach POWT 2007-2013</a></li>
						<li><a href="/index,pozostale-projekty,36.html">Pozostałe projekty</a></li>		
					</ul>
				</li>
				<li style="width: 150px; height: 43px;"><a href="/index,1-podatku-dla-opp,37.html" class="li-main">1% podatku dla OPP</a></li>
			</ul>
		</div>
		<div id="page-content">