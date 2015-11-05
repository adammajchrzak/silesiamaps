<?php 

class IndexModel extends Engine_Model {
	
	static 	$_instance = null;
	
	public function __construct()	{
		parent::__construct();
	}
	
    
	public function Instance()	{
		
		if(!isset(IndexModel::$_instance))	{
			IndexModel::$_instance = new IndexModel();
		}
		
		return IndexModel::$_instance;
	}	
	
	
	public function getProjectList($where = array())	{
		
		$select = $this->_db->select()
            ->from(array('cp' => 'cms_project'))
            ->joinLeft(
                array('cbt' => 'cms_btype'),
                'cp.btype_id = cbt.btype_id',
                array('*')
            )
            ->joinLeft(
                array('cpt' => 'cms_ptype'),
                'cp.ptype_id = cpt.ptype_id',
                array('*')
            )
            ->joinLeft(
                array('cs' => 'cms_state'),
                'cp.state_id = cs.state_id',
                array('*')
            )
            ->joinLeft(
                array('cr' => 'cms_region'),
                'cp.region_id = cr.region_id',
                array('*')
            )
            ->joinLeft(
                array('co' => 'cms_commune'),
                'cp.commune_id = co.commune_id',
                array('*')
            )
            ->joinLeft(
                array('cc' => 'cms_city'),
                'cp.city_id = cc.city_id',
                array('*')
            )
            ->joinLeft(
                array('cg' => 'cms_gallery'),
                'cp.gallery_id = cg.gallery_id',
                array('*')
            )
            ;
		
        if(empty($where) === false) {
            if(empty($where['title']) === false) {
                $select->where('cp.project_title LIKE ?', '%'.$where['title'].'%');
            }
            
            if(is_numeric($where['stateId'])) {
                $select->where('cs.state_id = ?', intval($where['stateId']));
            }
            
            if(is_numeric($where['regionId'])) {
                $select->where('cr.region_id = ?', intval($where['regionId']));
            }
            
            if(is_numeric($where['regionId'])) {
                $select->where('cr.region_id = ?', intval($where['regionId']));
            }
            
            if(is_numeric($where['communeId'])) {
                $select->where('co.commune_id = ?', intval($where['communeId']));
            }
            
            if(is_numeric($where['cityId'])) {
                $select->where('cc.city_id = ?', intval($where['cityId']));
            }
            
            if(is_numeric($where['bTypeId'])) {
                $select->where('cbt.btype_id = ?', intval($where['bTypeId']));
            }
            
            if(is_numeric($where['pTypeId'])) {
                $select->where('cpt.ptype_id = ?', intval($where['pTypeId']));
            }
        }
        $select->order('project_id');
        
		$result = $this->_db->fetchAll($select);
		
		return $result;
	}
    
    public function getPriorityList()
    {
        $select = $this->_db->select()->from(array('cp' => 'cms_priority'))->order('priority_id ASC');
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    public function getTopicList()
    {
        $select = $this->_db->select()->from(array('ct' => 'cms_topic'))->order('topic_id ASC');
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    
    public function getTypeList()
    {
        $select = $this->_db->select()->from(array('ct' => 'cms_type'))->order('type_id ASC');
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    public function getStateList()
    {
        $select = $this->_db->select()->from(array('cs' => 'cms_state'))->order('state_name ASC');
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    public function getRegionList($itemId = 0)
    {
        $select = $this->_db->select()
                ->from(array('cr' => 'cms_region'))
                ->order('region_name ASC');
        
        if($itemId !== 0) {
            $select->where('state_id = ?', $itemId);
        }
        
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    public function getCommuneList($itemId = 0)
    {
        $select = $this->_db->select()
                ->from(array('cc' => 'cms_commune'))
                ->order('commune_name ASC');
        
        if($itemId !== 0) {
            $select->where('region_id = ?', $itemId);
        }
        
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    public function getCityList($itemId = 0)
    {
        $select = $this->_db->select()
                ->from(array('cc' => 'cms_city'))
                ->order('city_name ASC');
        
        if($itemId !== 0) {
            $select->where('commune_id = ?', $itemId);
        }
        
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    
    public function getPTypeList()
    {
        $select = $this->_db->select()->from(array('cpt' => 'cms_ptype'))->order('ptype_name ASC');
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
    
    
    public function getBTypeList()
    {
        $select = $this->_db->select()->from(array('cbt' => 'cms_btype'))->order('btype_name ASC');
        $result = $this->_db->fetchAll($select);
        
        return $result;
    }
	
	
	/*	CMS FUNCTION	*/	
	public static function ToSlug($string, $maxLength=255, $separator='_') {
		
		$url = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
		$url = preg_replace('/[^a-zA-Z0-9 -]/', '', $url);
		$url = trim(substr(strtolower($url), 0, $maxLength));
		$url = preg_replace('/\s+/', $separator, $url);
		return $url;
	}
	
    
	public function getProjectDetails($projectId)	{
		
		$select = $this->_db->select()
            ->from(array('cp' => 'cms_project'))
            ->joinLeft(
                array('cbt' => 'cms_btype'),
                'cp.btype_id = cbt.btype_id',
                array('*')
            )
            ->joinLeft(
                array('cpt' => 'cms_ptype'),
                'cp.ptype_id = cpt.ptype_id',
                array('*')
            )
            ->joinLeft(
                array('ct' => 'cms_type'),
                'cp.type_id = ct.type_id',
                array('*')
            )
            ->joinLeft(
                array('cs' => 'cms_state'),
                'cp.state_id = cs.state_id',
                array('*')
            )
            ->joinLeft(
                array('cc' => 'cms_city'),
                'cp.city_id = cc.city_id',
                array('*')
            )
            ->where('cp.project_id = ?', (int)$projectId);
									
		$result = $this->_db->fetchRow($select);
		
		return $result;
	}

    
	public function addProjectDetails($data)	{
		
		$insert = array(
			"project_title"         =>  trim($data['project_title']),
            "_code"                 =>	$this->ToSlug(trim($data['project_title'])),
            "project_number"        =>	trim($data['project_number']),
            "project_program"       =>	trim($data['project_program']),
            "beneficiary"           =>	trim($data['beneficiary']),
            "unit_name"             =>	trim($data['unit_name']),
            "partner_pl"            =>	trim($data['partner_pl']),
            "partner_cz"            =>	trim($data['partner_cz']),
            "budget_full"           =>	trim($data['budget_full']),
            "budget_grant"          =>	trim($data['budget_grant']),
            "budget_done"           =>	trim($data['budget_done']),
            "budget_efrr"           =>	trim($data['budget_efrr']),
            "project_description"   =>	$data['project_description'],
            "project_report"        =>	$data['project_report'],
            "project_effect"        =>	$data['project_effect'],
            "project_www"           =>	$data['project_www'],
            "project_coordinator"   =>	$data['project_coordinator'],
            "priority_id"           =>	$data['priority_id'],
            "topic_id"              =>	$data['topic_id'],
            "type_id"               =>	$data['type_id'],
            "state_id"              =>  $data['state_id'],
            "region_id"             =>  $data['region_id'],
            "commune_id"            =>  $data['commune_id'],
            "city_id"               =>  $data['city_id'],
            "btype_id"              =>  $data['btype_id'],
            "ptype_id"              =>  $data['ptype_id'],
            "gallery_id"            =>  $data['gallery_id'],
            "_start"                =>	$data['_start'],
            "_end"                  =>	$data['_end'],
			"_active"               =>	@(int)$data['page_active'],
            "_order"                =>	@(int)$data['page_order '],
			"_created"              =>	date("Y-m-d H:i:s"),
			"_changed"              =>	date("Y-m-d H:i:s")
		);
		
		$this->_db->insert("cms_project", $insert);
		
		return true;
	}
	
    
	public function saveProjectDetails($data)	{
		
		$update = array(
			"project_title"         =>  trim($data['project_title']),
            "_code"                 =>	$this->ToSlug(trim($data['project_title'])),
            "project_number"        =>	trim($data['project_number']),
            "project_program"       =>	trim($data['project_program']),
            "beneficiary"           =>	trim($data['beneficiary']),
            "unit_name"             =>	trim($data['unit_name']),
            "partner_pl"            =>	trim($data['partner_pl']),
            "partner_cz"            =>	trim($data['partner_cz']),
            "budget_full"           =>	trim($data['budget_full']),
            "budget_grant"          =>	trim($data['budget_grant']),
            "budget_done"           =>	trim($data['budget_done']),
            "budget_efrr"           =>	trim($data['budget_efrr']),
            "project_description"   =>	$data['project_description'],
            "project_report"        =>	$data['project_report'],
            "project_effect"        =>	$data['project_effect'],
            "project_www"           =>	$data['project_www'],
            "project_coordinator"   =>	$data['project_coordinator'],
            "priority_id"           =>	$data['priority_id'],
            "topic_id"              =>	$data['topic_id'],
            "type_id"               =>	$data['type_id'],
            "state_id"              =>  $data['state_id'],
            "region_id"             =>  $data['region_id'],
            "commune_id"            =>  $data['commune_id'],
            "city_id"               =>  $data['city_id'],
            "btype_id"              =>  $data['btype_id'],
            "ptype_id"              =>  $data['ptype_id'],
            "gallery_id"            =>  $data['gallery_id'],
            "_start"                =>	$data['_start'],
            "_end"                  =>	$data['_end'],
			"_active"               =>	@(int)$data['page_active'],
            "_order"                =>	@(int)$data['page_order '],
			"_changed"              =>	date("Y-m-d H:i:s")
		);
		
		$this->_db->update("cms_project", $update, "project_id = '".(int)$data['project_id']."'");

		return true;
	}

	
	public function deleteProject($data)	{

		$this->_db->delete("cms_project", "project_id 	= '".(int)$data['project_id']."'");
		
		return true;
	}
}
?>