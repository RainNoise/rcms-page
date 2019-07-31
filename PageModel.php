<?php


namespace Modules\Page;


use App\Model;

/**
 * @method static find(int $int)
 */
class PageModel extends Model {
	protected $table = 'page';
	protected $fillable = ['text'];
}