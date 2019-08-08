<?php
namespace Modules\Page;

use \App\Controller as BaseController;
use App\Core;
use RuntimeException;
use ReflectionException;


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
		echo $this->Decorate($page, $params['view'] ?: 'item');
	}

	public function action_view()
	{
		throw new RuntimeException('Проба!');
	}

	public function event_AfterStartCore($params, $core, &$hook)
	{

	}
}