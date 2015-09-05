<?php 

/*
 * galleryController
 * 
 * @author Adam Majchrzak
 * @jusee.pl
 */

class galleryController extends Engine_Controller	{
	
	public $_gallery;
	
	public function __construct($engine)	{
		
		parent::__construct($engine);
		
		$session_uid = $this->_router->getItemSegments(3); // upload auth
		
		if(!$this->_auth->hasIdentity() && ($this->_acl->checkSessionUid($session_uid) == false ))	{
			
			$this->_engine->addHttpHeader("Location: ".$this->_router->getUrl('cms', 'auth'));
			exit();
		}
		
		$this->_gallery = GalleryModel::Instance();
		
		$this->_head->addStyleFile('jquery.ui.all.css', 'screen', true, '/css/jquery-ui/'); 	// JqueryUI CSS
		$this->_head->addStyleFile('jquery.ui.uniform.css', 'screen', true, '/css/jquery-ui/'); 	// JqueryUI CSS
		$this->_head->addStyleToImport('index', 'cms', 'base.css');		
		$this->_head->addStyleFile('colorbox.css', 'screen', true, '/css/');
		
		$this->_head->addScriptFile('jquery-ui-'.$this->_config->jqueryui.'.min.js', true, '/scripts/jquery-ui/');		// JqueryUI JS
		$this->_head->addScriptFile('jquery.uniform.min.js', true, '/scripts/cms/');		// JqueryUI JS
		$this->_head->addScriptFile('jquery.colorbox.js', true, '/scripts/');
		$this->_head->addScriptFile('gallery.js', true, '/scripts/cms/');		// JqueryUI JS
        $this->_head->addScriptFile('ckeditor.js', true, '/scripts/cms/ckeditor/');
		
		if($this->_config->multi_locale == '1')	{
			$this->_view->locale_list	=	$this->_function->getSiteLocaleList();
			$this->_locale_codes		=	$this->_function->flattenArray($this->_function->getSiteLocaleList(),'lang_code');
			if(!$this->_session->lang_code) {
				$this->_session->lang_code	=	$this->_locale_codes[0];
			}
		}
		
		$this->_view->sidebar =  $this->_view->render('modules/'.$this->_engine->getModuleName().'/cms/templates/sidebar.tpl');	
	}
	
	public function index()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'view'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if(in_array($this->_router->getItemSegments(2), $this->_locale_codes)) {
			$this->_session->lang_code = $this->_router->getItemSegments(2);
		}

		$this->_view->gallery_list = $this->_gallery->getGalleryList($this->_session->lang_code);
		
		$this->_view->main_content =  $this->_view->render('modules/gallery/cms/templates/list.tpl');
		$this->_engine->setToRender('index.tpl');
	}
	
	public function add()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'add'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		$gallery_details['lang_code']	=	$this->_session->lang_code;
		$this->_view->gallery_details	=	$gallery_details;
		$this->_view->main_content		= 	$this->_view->render('modules/gallery/cms/templates/add.tpl');
		$this->_engine->setToRender('index.tpl');
	}

	public function edit()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'edit'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isPostRequest())	{
			
			if($_POST['gallery_id'] == '0' || $_POST['gallery_id'] == '')	{
				
				$gallery_id = $this->_gallery->addGalleryDetails($_POST);
				$this->createGalleryDir(str_pad($gallery_id,4,'0',STR_PAD_LEFT));
				
				$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'gallery', 'edit', $gallery_id));
				
			}	else {
					
				$this->_gallery->saveGalleryDetails($_POST);	
			}
			
			$this->_engine->addHttpHeader("Location: ".$this->_router->getUrl('cms', 'gallery'));
			exit();
		}
		
		$this->_head->addStyleFile('uploadify.css', 'screen', true, '/scripts/cms/uploadify/');
		$this->_head->addScriptFile('swfobject.js', true, '/scripts/cms/uploadify/');
		$this->_head->addScriptFile('jquery.uploadify.v2.1.4.min.js', true, '/scripts/cms/uploadify/');
		
		$this->_view->gallery_details = $this->_gallery->getGalleryDetails((int)$this->_router->getItemSegments(3));
		
		$this->_view->main_content =  $this->_view->render('modules/gallery/cms/templates/edit.tpl');
		$this->_engine->setToRender('index.tpl');
	}
	
	public function upload() {
		
		if (!empty($_FILES)) {
			
			$dirname	=	str_pad((int)$this->_router->getItemSegments(4),4,'0',STR_PAD_LEFT);
			$filename	=	date("His").stripslashes($_FILES['filedata']['name']);
			$basename	=	stripslashes($_FILES['filedata']['name']);
			
			if(!is_writeable($_SERVER['DOCUMENT_ROOT'].$this->_config->gallery_dir))	{
	  	 			
	  	 		print $ErrorTxt .=" Can't write to the files's folder";
	  	 		die();
	  	 		return 1;
				
	  	 	}	else 	{
	  	 		
	  	 	    if(empty($_FILES['filedata']) ) {
		    		$ErrorTxt .= "Check all fields";
		      		return 1;
		    	}
				
				if($_FILES['filedata']['error']) { 
				
				    switch($_FILES['filedata']['error'])	{
					    case 0:
					    	if($_FILES['filedata']['type'] !='image/jpeg' && $_FILES['filedata']['type'] !='image/jpg' &&
					        	$_FILES['filedata']['type'] !='image/pjpeg' && $_FILES['filedata']['type'] !='image/png')	{
					               $ErrorTxt = "Niedozwolone rozszerzenie pliku!";
					               return 1;
					        }
					        break;
					    case 1:
					    case 2: 
					    	$ErrorTxt = "Plik jest zbyt duzy";
					        return 1;
					    	break;
					    case 3: 
					    	$ErrorTxt = "Proces przesyłania pliku nie został ukończony";
					        return 1;
					    	break;
					    case 4: 
					    	$ErrorTxt = "Nie przesłano pliku";
					        return 1;
					    	break;
					    default: 
					    	$ErrorTxt = "Wystapił nieznany błąd";
					        return 1;
					    	break;
				    }
				}
				
			    $postfix='';
			    
			    $extension = $this->getExtension($filename);
			    $extension = strtolower($extension);
	
				$alias = $filename;
			    
			    //skalowanie do max wymiarow
			    $oldImage				= imagecreatefromjpeg($_FILES['filedata']['tmp_name']);
			    list($width, $height) 	= getimagesize($_FILES['filedata']['tmp_name']);
			    $wymiar		=	$height / $width;
			    $widthN 	=	$width;
			    $heightN	=	$height;
			    
			    if($width > $height)	{
					if($width > $this->_config->gallery_max_x)	{
			      		$widthN		=	$this->_config->gallery_max_x;
			        	$heightN	=	$widthN * $wymiar;
			      	}
			    }	else {
			     	if($height > $this->_config->gallery_max_y)	{
			        	$heightN	= 	$this->_config->gallery_max_y;
			         	$widthN 	=	$heightN/$wymiar;
			      	}
			    }
			    
			    $newImage = imagecreatetruecolor($widthN, $heightN);
			    //kopiuje zmniejszone do max wymiarow zdjecie pod zmienna $newImage
			    imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $widthN, $heightN, $width, $height);
			    //tworzy katalog jesli taki nie istnieje
			    if(!imagejpeg($newImage, $_SERVER['DOCUMENT_ROOT'].$this->_config->gallery_dir.$dirname."/big/".$alias))	{
			    		
			    	imagedestroy($newImage);
			      	imagedestroy($oldImage);
			      	$ErrorTxt .= "Nie mozna zapisac zdjecia";
			      	return 1;
			    }
				
			    imagedestroy($newImage);
				
			    if($width > $height)	{
			    		
			    	$widthN		=	$this->_config->gallery_min_x;
			      	$heightN	=	$widthN * $wymiar;
					
			    }	else {
			
			      	$heightN	=	$this->_config->gallery_min_y;
			      	$widthN		=	$heightN/$wymiar;
			    }
				
			    $thumb = imagecreatetruecolor($widthN, $heightN);
			    imagecopyresampled($thumb, $oldImage,0,0,0,0,$widthN,$heightN,$width,$height);
			    if(!imagejpeg($thumb, $_SERVER['DOCUMENT_ROOT'].$this->_config->gallery_dir.$dirname."/small/".$alias))	{ //basename($dir)))
			      	
			      	imagedestroy($thumb);
			      	imagedestroy($oldImage);
			      	$ErrorTxt .= "Nie mozna zapisac miniaturki zdjecia";
			      	return 1;
			    }
	
			    imagedestroy($thumb);
				
			    imagedestroy($oldImage);
		    }

			$data = array('gallery_id' => $this->_router->getItemSegments(4), 'file_name' => $filename, 'file_basename' => $basename);
			
			$this->_gallery->addPictureToGallery($data);
			
			echo str_replace($_SERVER['DOCUMENT_ROOT'],'', $basename);
		}
		
		exit();
	}
	
	private function getExtension($str) {
			
		$i = strrpos($str, ".");
		if (!$i) { return ""; }
		$l= strlen($str) - $i;
		$ext = substr($str, $i+1, $l);
		
		return $ext;
	}
	
	private function createGalleryDir($dirname)	{
		
		if(!mkdir($_SERVER['DOCUMENT_ROOT'].$this->_config->gallery_dir.$dirname,0755))	{
	    	$ErrorTxt .= "Nie mozna  utworzyć jednego z katalogów";
		   	return 0;
	    }
		if(!mkdir($_SERVER['DOCUMENT_ROOT'].$this->_config->gallery_dir.$dirname."/small",0755))	{
	    	$ErrorTxt .= "Nie mozna  utworzyć jednego z katalogów";
		    return 0;
	    }
	    if(!mkdir($_SERVER['DOCUMENT_ROOT'].$this->_config->gallery_dir.$dirname."/big",0755))	{
	    	$ErrorTxt .= "Nie mozna  utworzyć jednego z katalogów";
		    return 0;
	    }
		
	    return 1;
	}

	public function delete()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'delete'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isAjaxRequest())	{
			$this->_gallery->deleteGallery($_REQUEST);
		}
		
		exit();
	}
	
	public function picture_list()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'view'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		$this->_view->gallery_id	=	(int)$this->_router->getItemSegments(3);
		$this->_view->picture_list 	=	$this->_gallery->getPictureForGalleryList((int)$this->_router->getItemSegments(3));
		print $this->_view->render('modules/gallery/cms/templates/picture.list.tpl');
		exit();
	}
	
	public function picture_edit()	{
			
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'edit'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}
		
		if($this->_router->isPostRequest())	{
								
			$this->_gallery->savePictureDetails($_POST);	
			
			$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'gallery', 'edit', $_POST['gallery_id']));
			exit();
		}
		
		$this->_view->picture_details =  $this->_gallery->getPictureDetails((int)$this->_router->getItemSegments(3));
		
		$this->_engine->setToRender('picture.edit.tpl');
	}
	
	public function picture_delete()	{
		
		if(	!$this->_acl->isAllowed($this->_auth->getIdentity()->role_code, $this->_engine->getModuleName(), 'delete'))	{
			$this->_acl->aclMessage($this->_auth->getIdentity()->user_id, __CLASS__, __METHOD__, 'brak uprawnień');
		}

		$this->_gallery->deletePicture((int)$this->_router->getItemSegments(3));
		
		exit();
	}
}
?>