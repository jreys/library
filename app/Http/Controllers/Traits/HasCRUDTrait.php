<?php
/**
 * Created by PhpStorm.
 * User: jsantos
 * Date: 10/11/18
 * Time: 7:20 PM
 */

namespace App\Http\Controllers\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

trait HasCRUDTrait
{
    /**
     * @var string $controller - Controller's name to be used
     */
    protected $controller = '';

    /**
     * @var Collection $allItems - Controller's associated model
     */
    protected $allItems = null;

    /**
     * @var Model $newItem - New item to store on the DB
     */
    protected $newItem = null;

    /**
     * @var array $attributes - Attributes to store in the db
     */
    protected $attributes = [];

    public function add() {
        return view($this->controller . '.add', ['item' => $this->newItem]);
    }

    public function list() {
        return view($this->controller . '.list', ['list' => $this->allItems]);
    }

    public function store() {
        // Get request params for each attribute to save
        foreach ($this->attributes as $attribute) {
            $this->newItem[$attribute] = request($attribute);
        }

        // Save the data persistently
        $this->newItem->save();

        // Redirect to the previous page
        return redirect($this->controller);
    }
}