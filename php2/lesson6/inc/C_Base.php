<?phpinclude_once('inc/Controller.php');abstract class C_Base extends Controller{	protected $title;    protected $categoryTitle;	protected $content;	protected $photos;	function __construct()	{		$this->title = '';        $this->categoryTitle = '';		$this->content = '';		$this->photos = [];	}	public function render()	{		$vars = array('title' => $this->title, 'title2' => $this->categoryTitle, 'content' => $this->content);		$page = $this->Template('theme/v_main.php', $vars);						echo $page;	}	}