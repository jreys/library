<?php
/**
 * Created by PhpStorm.
 * User: jsantos
 * Date: 10/11/18
 * Time: 7:20 PM
 */

namespace Library\Http\Controllers\Traits;

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
        return view($this->controller . '.add',
            [
                'item' => $this->newItem,
                'action' => 'Add'
            ]
        );
    }

    public function update($id) {
        $this->newItem = $this->newItem->find($id);

        if ($this->newItem === null) {
            return redirect($this->controller);
        }

        return view($this->controller . '.add',
            [
                'item' => $this->newItem,
                'action' => 'Update'
            ]
        );
    }

    public function delete($id) {
        // Find a record dynamically depending on the class
        $record = $this->newItem->find($id);

        if ($record === null) {
            return redirect($this->controller);
        }

        // Delete the record
        $record->delete();

        // Return to the list view with the updated data
        return redirect($this->controller);
    }

    public function list() {
        return view($this->controller . '.list', ['list' => $this->allItems]);
    }

    public function store() {
        // Check if in add or edit mode
        if (\is_numeric(request('id'))) {
            $this->newItem = $this->newItem->find(request('id'));
        }

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