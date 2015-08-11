<?php 
class GalleryModel extends Engine_Model {
	
	static 	$_instance = null;
	private	$_pages_tree = array();
	
	public function __construct()	{
		parent::__construct();
	}
	
	public function Instance()	{
		
		if(!isset(GalleryModel::$_instance))	{
			GalleryModel::$_instance = new GalleryModel();
		}
		
		return GalleryModel::$_instance;
	}
	
	public function getGalleryList($lang_code = '')	{
		
		$select = $this->_db->select()
								->from(array('cg' => 'cms_gallery'))
								->order('_name')
								->order('_created DESC');
		
		if($lang_code != '')	{
			$select->where('cg.lang_code = ?', $lang_code);
		}
		
		$result = $this->_db->fetchAll($select);
		
		return $result;
	}
	
	public function getGalleryDetails($gallery_id)	{
		
		$select	=	$this->_db->select()
										->from(array('cg' => 'cms_gallery'))
										->where('cg.gallery_id = ?', (int)$gallery_id);
		$result = $this->_db->fetchRow($select);
		
		return $result;
	}
	
	public function getPictureDetails($picture_id)	{
		
		$select	=	$this->_db->select()
										->from(array('cgp' => 'cms_gallery_picture'))
										->where('cgp.picture_id = ?', (int)$picture_id);
		$result = $this->_db->fetchRow($select);
		
		return $result;
	}
	
	public function getPictureForGalleryList($gallery_id)	{
		
		$select	=	$this->_db->select()
										->from(array('cgp' => 'cms_gallery_picture'))
										->where('cgp.gallery_id = ?', (int)$gallery_id);
		$result = $this->_db->fetchAll($select);
		
		return $result;
	}
	
	public function addGalleryDetails($data)	{
		
		$insert	= array(
			'lang_code'			=>	$data['lang_code'],
			'_name' 			=>	$data['_name'],
			'_description'		=>	$data['_description'],
			'_active'			=>	(int)$data['_active'],
			'_created'			=>	date("Y-m-d H:i:s"),
			'_changed'			=>	date("Y-m-d H:i:s")	
		);
		
		$this->_db->insert('cms_gallery', $insert);
		
		return $this->_db->lastInsertId();
	}
	
	public function saveGalleryDetails($data)	{
		
		$update	= array(
			'_name' 				=>	$data['_name'],
			'_description'			=>	$data['_description'],
			'_active'				=>	(int)$data['_active'],
			'_changed'				=>	date("Y-m-d H:i:s")	
		);
		
		$this->_db->update("cms_gallery", $update, "gallery_id = '".(int)$gallery_id."'");
		
		return true;
	}
	
	public function deleteGallery($data)	{
		
		$this->_db->delete("cms_gallery", "gallery_id = '".(int)$data['gallery_id']."'");
		
		return true;
	}
	
	public function addPictureToGallery($data)	{
		
		
		$insert	=	array(
			'gallery_id'			=>	$data['gallery_id'],
			'picture_name'			=>	$data['file_basename'],
			'file_name'				=>	$data['file_name'],
			'file_basename'			=>	$data['file_basename'],
			'file_dir'				=>	$this->_config->gallery_dir.str_pad((int)$data['gallery_id'],4,'0',STR_PAD_LEFT),
			'_created'				=>	date("Y-m-d H:i:s"),
			'_changed'				=>	date("Y-m-d H:i:s")
		);
		
		$this->_db->insert('cms_gallery_picture', $insert);
		
		return true;
	}

	public function savePictureDetails($data)	{
		
		$update	= array(
			'picture_name' 			=>	$data['picture_name'],
			'picture_description'	=>	$data['picture_description'],
			'_changed'				=>	date("Y-m-d H:i:s")	
		);
		
		$this->_db->update("cms_gallery_picture", $update, "picture_id = '".(int)$data['picture_id']."'");
		
		return true;
	}
	
	public function deletePicture($picture_id)	{
			
			
		$select	=	$this->_db->select()
										->from(array('cgp' => 'cms_gallery_picture'))
										->where('cgp.picture_id = ?', (int)$picture_id);
		$result = $this->_db->fetchRow($select);	
		
		unlink($_SERVER['DOCUMENT_ROOT'].$result['file_dir']."/small/".$result['file_name']);
		unlink($_SERVER['DOCUMENT_ROOT'].$result['file_dir']."/big/".$result['file_name']);
		
		$this->_db->delete("cms_gallery_picture", "picture_id = '".(int)$picture_id."'");

		return true;
	}
}
?>