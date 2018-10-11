<?php
/**
 * Created by PhpStorm.
 * User: jsantos
 * Date: 10/11/18
 * Time: 7:20 PM
 */

namespace App\Http\Controllers\Traits;


trait HasCRUDTrait
{
    /**
     * @var string $controller - Controller's name to be used
     */
    public $controller = '';

    /**
     * @var string $allItems - Controller's associated model
     */
    public $allItems = '';

    public function add() {
        return view($this->controller . '.add');
    }

    public function list() {
        return view($this->controller . '.list', ['list' => $this->allItems]);
    }
}