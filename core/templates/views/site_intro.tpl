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
	var flashvars = false;
	var params = {
	  menu: "false",
	  wmode: "transparent",
	  align: "center",
	  allowfullscreen: "true"
	};
	var attributes = {};
	swfobject.embedSWF("/images/intro.swf", "flashContent", "100%", "740", "9.0.0","expressInstall.swf", flashvars, params, attributes);
</script>
{/literal}		
</head>
<body style="background: none;  margin: 0 auto; padding:0;  height:100%;">
<div id="flashContent" style="width:100%; height:100%;"></div>
</body>
</html>