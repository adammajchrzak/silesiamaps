{literal}
<script type="text/javascript">	
$(function() {		
	$('#file_upload').uploadify({
		'uploader'  	:	'/scripts/cms/uploadify/uploadify.swf',
		'script'    	:	'/cms/gallery/upload/111/{/literal}{$gallery_details.gallery_id}{literal}.html',
		'cancelImg' 	:	'/scripts/cms/uploadify/cancel.png',
		'folder'    	:	'/upload',
		'auto'      	:	true,
		'multi'			:	true,
		'displayData' 	:	'speed',
		'sizeLimit'   	: 	10240000,
		'buttonText'  	:	'WYBIERZ PLIKI',
		'fileDataName'	:   'filedata',
		'fileExt'     	:   '*.jpg;*.jpeg,*.gif;*.png',
		'onComplete'	:	function(event, ID, fileObj, response, data){
		}
	});
	
	$( "#gallery-edit-tabs" ).tabs({
		ajaxOptions: {
			error: function( xhr, status, index, anchor ) {
				$( anchor.hash ).html(
					"Błąd ładowania listy. Skontaktuj się z administratorem systemu!"
					);
			}
		}
	});
});
</script>
{/literal}

<div id="dialog-message" title="Pole wymagane"></div>
<div class="ui-widget ui-widget-content ui-corner-all main-content">
<form id="form-edit-gallery" name="form-edit-gallery" method="post" action="/{$router->getUrl('cms','gallery', 'edit')}">
<input type="hidden" id="gallery_id" name="gallery_id" value="{$gallery_details.gallery_id}" />
<div class="header-module">Edytuj galerię</div>
<div style="text-align: right; margin-bottom: 10px;">
	<button type="button" onclick="document.location.href='/{$router->getUrl('cms','gallery')}';">anuluj</button>
	<button type="submit" class="button-add-gallery-save">zapisz zmiany</button>
</div>
	<input type="hidden" id="gallery_id" name="gallery_id" value="{$gallery_details.gallery_id}">
	<div id="gallery-edit-tabs">
		<ul>
			<li><a href="#tabs-1">Dane podstawowe</a></li>
			<li><a href="#tabs-2">Ustawienia zaawansowane</a></li>
			<li><a href="/{$router->getUrl('cms', 'gallery','picture_list',$gallery_details.gallery_id)}">Zarządzaj zdjęciami</a></li>
			<li><a href="#tabs-3">Dodaj zdjęcia</a></li>
		</ul>
		
		<div id="tabs-1">
			<p class="ui-helper-clearfix"><label>Nazwa galerii</label></p>
			<div><input type="text" id="_name" name="_name" value="{$gallery_details._name}" class="input-text" /></div>
			<p class="ui-helper-clearfix"><label>Opis galerii</label></p>
			<textarea id="_description" name="_description" class="input-textarea">{$gallery_details._description}</textarea>
		</div>
		<div id="tabs-2">
			<p class="ui-helper-clearfix"><label>Galeria aktywna</label><input id="_active" name="_active" type="checkbox" value="1"{if $gallery_details._active == '1'} checked{/if}/></p>
		</div>
		<div id="tabs-3">
			<div><input id="file_upload" name="file_upload" type="file" /></div>
		</div>
	</div>
</form>
</div>