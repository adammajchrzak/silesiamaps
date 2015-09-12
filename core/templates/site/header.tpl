<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{$head->title}</title>
		<meta name="keywords" content="{$head->keywords}" />
		<meta name="description" content="{$head->description}" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		{*	załadowanie plików styli  *}
		{foreach from=$head->getStyles() item=style }
			<link href="{$style.path}{$style.file}" media="{$style.media}" rel="stylesheet" type="text/css" />
		{/foreach}
		
		{*	załadowanie plików scryptów *}
		{foreach from=$head->getScripts() item=script }
		    <script src="{$script.path}{$script.file}" type="text/javascript" ></script>
		{/foreach}	
</head>
<body>
    <div id="header">
        <div id="header-content"><img src="/images/bg-header.png" alt="Mapa projektów 2007-2013 Euroregion Silesia" /></div>
    </div>
<div id="page-body">