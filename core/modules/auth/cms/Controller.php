<?php 

class authController extends Engine_Controller {

	private $_storage;
	private $_roles;
	
	public function __construct($engine)	{
		
		parent::__construct($engine);

		$this->_storage = $this->_auth->getStorage();
		
		$this->_head->addStyleFile('jquery.ui.all.css', 'screen', true, '/css/jquery-ui/'); 	// JqueryUI CSS
		//$this->_head->addStyleFile('jquery.ui.uniform.css', 'screen', true, '/css/jquery-ui/'); 	// JqueryUI CSS
		//$this->_head->addStyleFile('Aristo.css', 'screen', true, '/css/jquery-ui-aristo/');
		
		$this->_head->addStyleToImport('index', 'cms', 'base.css');
		$this->_head->addStyleToImport('auth', 'cms', 'auth.css');
		
		$this->_head->addScriptFile('jquery-ui-'.$this->_config->jqueryui.'.min.js', true, '/scripts/jquery-ui/');		// JqueryUI JS
		$this->_head->addScriptFile('base.js', true, '/scripts/cms/');		// JqueryUI JS
		$this->_head->addScriptFile('jquery.uniform.min.js', true, '/scripts/cms/');		// JqueryUI JS
		
		$this->_session->current_locale = $this->_config->default_locale;
	}
	
	public function index()	{
		
		$cache =  Zend_Registry::get('cache');
		
		print_r($this->_auth->getIdentity());
		
		if($this->_auth->hasIdentity())	{
			
			die('test');
			
		}	else	{
			
			$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms','auth','login'));
		}
	}
	
	public function login()	{
		
		if($this->_router->isPostRequest())	{
			
			if($_POST['login'] != '' && $_POST['passwd'] != '')	{
			
				$db = Zend_Db_Table::getDefaultAdapter();
				
				// tworzymy instancję adaptera autoryzacji
				$authAdapter = new Zend_Auth_Adapter_DbTable($db, 'cms_user', 'user_login', 'user_passwd');
				
				$authAdapter->setIdentity($_POST['login']);
				$authAdapter->setCredential(sha1($_POST['passwd']));
				
				// sprawdzamy, czy użytkownik jest aktywny
				$authAdapter->setCredentialTreatment("? AND user_active = '1'");
				
				// autoryzacja
				$result = $authAdapter->authenticate();
	
				if($result->isValid())	{
			
					$user_data = $authAdapter->getResultRowObject();
					
					/*	zapisanie roli zalogowanego uzytkownika	*/
					$this->_roles = RolesModel::Instance();
					$role = $this->_roles->getRoleData($user_data->role_id);				
					$user_data->role_code = $role['role_code'];
					$this->_storage->write($user_data);
					
					// ustawienie ACL dla użytkownika
					$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms','index'));
					
				}	else	{
					
					$this->_view->error =  '1';
				}
				
			}	else	{
				
				$this->_view->error =  '1';
			}
		}
		
		$this->_engine->setToRender('login.tpl');
	}
	
	public function logout()	{
		
		$this->_auth->clearIdentity();
		$this->_engine->addHttpHeader("Location: /".$this->_router->getUrl('cms', 'auth', 'login'));
		exit();
	}
}
?>