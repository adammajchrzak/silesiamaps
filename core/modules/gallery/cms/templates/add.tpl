<div id="dialog-message" title="Pole wymagane"></div>
<div class="ui-widget ui-widget-content ui-corner-all main-content" style="width: 900px;">
<form id="form-add-gallery" name="form-add-gallery" method="post" action="/{$router->getUrl('cms','gallery', 'edit')}">
<div class="header-module">Dodaj galerię</div>
<div style="text-align: right; margin-bottom: 10px;">
	<button type="button" onclick="document.location.href='/{$router->getUrl('cms','gallery')}';">anuluj</button>
	<button type="submit" class="button-add-gallery-save">zapisz zmiany</button>
</div>
	<input type="hidden" id="gallery_id" name="gallery_id" value="0">
	<input type="hidden" id="lang_code" name="lang_code" value="{$gallery_details.lang_code}">
	<div id="page-edit-tabs">
		<ul>
			<li><a href="#tabs-1">Dane podstawowe</a></li>
			<li><a href="#tabs-2">Ustawienia zaawansowane</a></li>
		</ul>
		
		<div id="tabs-1">
			<p class="ui-helper-clearfix"><label>Nazwa galerii</label></p>
			<div><input type="text" id="_name" name="_name" value="" class="input-text" /></div>
			<p class="ui-helper-clearfix"><label>Opis galerii</label></p>
			<textarea id="_description" name="_description" class="input-textarea"></textarea>
		</div>
		<div id="tabs-2">
			<p class="ui-helper-clearfix"><label>Galeria aktywna</label><input id="_active" name="_active" type="checkbox" value="1" checked/></p>
		</div>
	</div>
</form>
</div>