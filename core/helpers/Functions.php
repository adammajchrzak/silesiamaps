<?php 

/*
 * 
 * funkcje pomocnicze
 * 
 * @author Adam Majchrzak
 * 
 */

class Functions extends Engine_Model 	{
	
	static $_instance = false;
	public $month_list = array();
	
	
	public function __construct()	{
		parent::__construct();
	}
	
	public static function Instance()	{
		
		if (self::$_instance === false) {
			self::$_instance = new Functions();
		}
		return self::$_instance;
	}
	
	public function flattenArray($array, $index)	{
    	
    	foreach($array as $key=>$value )	{
    		if(is_array($index))	{
    			$elem = "";
    			foreach($index as $k=>$v)	{
    				$elem .= $value[$v]." "; 
    			}
    			$flattenArray[] = trim($elem);
    		}	else	{
    			$flattenArray[] = $value[$index];
    		} 
    	}
    	
    	return $flattenArray;
    } 
	
	public function getSiteLocaleList()	{
		
		$select = $this->_db->select()
									->from(array('l' => 'site_language'), array('*'))
									->order('_order');
		
		$this->_cSelect->setTags(array('core', 'getSiteLocale' , 'locales'));							
		$result = $this->_cSelect->fetchAll($select);

		return $result;
	}
	
	public function ToSlug($string, $maxLength=255, $separator='_') {
		
		$url = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string);
		$url = preg_replace('/[^a-zA-Z0-9 -]/', '', $url);
		$url = trim(substr(strtolower($url), 0, $maxLength));
		// $url = preg_replace('/[' . $separator . ']+/', $separator, $url);
		$url = preg_replace('/\s+/', $separator, $url);
		return $url;
	}
}
?>