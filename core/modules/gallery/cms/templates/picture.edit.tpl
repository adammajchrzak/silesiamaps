<div id="dialog-message" title="Pole wymagane"></div>
<div class="ui-widget ui-widget-content ui-corner-all main-content">
<form id="form-edit-gallery" name="form-edit-gallery" method="post" action="/{$router->getUrl('cms','gallery', 'picture_edit')}">
<input type="hidden" id="gallery_id" name="gallery_id" value="{$picture_details.gallery_id}" />
<input type="hidden" id="picture_id" name="picture_id" value="{$picture_details.picture_id}" />
<div class="header-module">Edytuj zdjęcie</div>
<div style="text-align: right; margin-bottom: 10px;">
	<button type="button" onclick="document.location.href='/{$router->getUrl('cms','gallery')}';">anuluj</button>
	<button type="submit" class="button-add-gallery-save">zapisz zmiany</button>
</div>
	<div id="gallery-edit-tabs">
		<p class="ui-helper-clearfix"><label>Nazwa zdjęcia</label></p>
		<div><input type="text" id="picture_name" name="picture_name" value="{$picture_details.picture_name}" class="input-text-850" /></div>
		<p class="ui-helper-clearfix"><label>Opis zdjęcia</label></p>
		<textarea id="picture_description" name="picture_description" class="input-textarea-850" style="height: 100px;">{$picture_details.picture_description}</textarea>
	</div>
</form>
</div>