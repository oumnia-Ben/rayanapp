<?php

namespace App\Admin\Controllers;

use App\Helpers\Helper;
Use Encore\Admin\Widgets\Table;
use App\Models\Banque;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BanqueController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Banque';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banque());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('name', __('Nom'))->sortable()->filter('like')->expand(function ($model) {

            $wallets = $model->wallets()->get()->map(function ($wallet) {
                return [
                    $wallet->user?->id,
                    $wallet->user?->name,
                    Helper::money($wallet->solde)
                ];
            });

            return new Table(['ID', 'Nom', 'Solde'], $wallets->toArray());
        });
        $grid->column('rib', __('Rib'))->sortable()->filter('like');
        $grid->column('solde_init', __('Solde de départ'))->sortable()->filter();
        $grid->column('solde', __('Solde réel'))->sortable()->filter();
        $grid->column('solde_virt', __('Solde virtuel'))->sortable()->filter();
        $grid->column('ecart', __('Ecart'))->display(function(){
            return Helper::money($this->solde - $this->solde_virt);
        });
        $grid->column('created_at', __('Crée le'))->sortable()->filter('range', 'date')->hide();
        $grid->column('updated_at', __('Edité le'))->sortable()->filter('range', 'date')->hide();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Banque::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('rib', __('Rib'));
        $show->field('solde', __('Solde'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Banque());

        $form->text('name', __('Nom'))->required();
        $form->text('rib', __('Rib'))->required();
        $form->text('solde_init', __('Solde de départ'))->required();

        return $form;
    }
}
