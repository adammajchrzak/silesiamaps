<?php 
class SearchModel extends Engine_Model {
	
	static 	$_instance = null;
	private	$_pages_tree = array();
	
	public function __construct()	{
		parent::__construct();
	}
	
	public function Instance()	{
		
		if(!isset(SearchModel::$_instance))	{
			SearchModel::$_instance = new SearchModel();
		}
		
		return SearchModel::$_instance;
	}
	
	public function getSearchListPagination($word = '1', $page = '0', $lang_code)	{
		
		$select = $this->_db->select()
									->from(array('sc' => 'site_content'))
									->joinLeft(
										array('sni' => 'site_node_item'),
										'sc.content_id = sni.object_id',
										array('node_id')
									)
									->joinLeft(
										array('sn' => 'site_node'),
										'sn.node_id = sni.node_id',
										array('page_id', 'node_title')
									)
									->where("sc.content_title LIKE '%".mysql_escape_string($word)."%' OR sc.content_text LIKE '%".mysql_escape_string($word)."%'")
									->where('sn.lang_code = ?', $lang_code)
									//->where('sni._active = ?', '1')
									->order('sc.content_id DESC');
		
		$result = Zend_Paginator::factory($select)
        	->setCurrentPageNumber($page)
        	->setItemCountPerPage($this->_config->pagination->itemsPerPage)
        	->setPageRange($this->_config->pagination->pagesInRange);
        Zend_Paginator::setDefaultScrollingStyle('Sliding');
		
		return $result;
	}
}
?>