<?phpinclude_once('inc/C_Base.php');class C_Page extends C_Base{	function __construct(){				parent::__construct();	}		public function action_index(){		$this->title .= 'Главная';		$this->content = $this->Template('theme/v_index.php');	}		public function action_lk(){		$this->title .= 'Личный кабинет';        $name = $_POST['name'];		$this->content = $this->Template('theme/v_edit.php', array('name' => $name));	}}