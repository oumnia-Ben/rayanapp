<?php

namespace App\Admin\Selectable;

use App\Models\User;
use Encore\Admin\Grid\Filter;
use Encore\Admin\Grid\Selectable;

class Users extends Selectable
{
    public $model = User::class;

    public function make()
    {
        $this->column('id', __('ID'))->sortable()->filter();
        $this->column('name', __('Nom'))->sortable()->filter('like');
        $this->column('stage', __('Etage'))->sortable()->filter();
        $this->column('apartment', __('Appartement'))->sortable()->filter();

        $this->filter(function (Filter $filter) {
            $filter->like('name');
        });
    }
}
