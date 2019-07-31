<?php
namespace Modules\Page;

use \App\Controller as BaseController;
use App\Core;
use ReflectionException;
use RuntimeException;

class Controller extends BaseController {
    /**
     * Controller constructor.
     * @param Core $core
     * @throws ReflectionException
     */
    public function __construct(Core $core){
		parent::__construct($core);
		
	}

	public function action_index($params) {
		$page = PageModel::find((int)$params['id']);
		echo $page->text;
	}

	public function action_view()
	{
		
	}

	public function event_AfterStartCore($params, Core $core, &$hook) {

	}

//	public function run(Core $core, array $params = [])
//	{
//		$matches = [];
//		preg_match('#^'. $this->moduleName() .'/([A-Za-z]\w+?)/#',  $params['request'], $matches);
//
//		if (in_array($matches[1], $this->actionsList())) {
//			$action = $matches[1];
//		}
//		elseif($this->cfg('defaultAction')) {
//			$action = $this->cfg('defaultAction');
//		}
//		else {
//			// 404 ?
//		}
//
//		if (empty($action)) {
//			throw new RuntimeException("Empty action name");
//		}
//		$this->actionStart();
//		$this->{"action_" . $action}($params, $core);
//		return $this->actionEnd();
//	}
}