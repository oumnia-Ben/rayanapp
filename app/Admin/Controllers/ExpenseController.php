<?php

namespace App\Admin\Controllers;

use App\Models\Banque;
use App\Models\Expense;
use App\Models\Period;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ExpenseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Expense';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Expense());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('name', __('Nom'))->sortable()->filter('like');
        $grid->column('period.name', __('Période'))->sortable()->filter('like');
        $grid->column('date_payment', __('Date de paiement'))->sortable()->filter('range','date');
        $grid->column('banque.name', __('Banque'))->sortable()->filter();
        $grid->column('amount', __('Montant'))->sortable()->filter();
        $grid->column('stat', __('Etat'))->bool()->sortable()->filter();
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
        $show = new Show(Expense::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('period_id', __('Period id'));
        $show->field('date_payment', __('Date payment'));
        $show->field('banque_id', __('Banque id'));
        $show->field('stat', __('Stat'));
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
        $form = new Form(new Expense());

        $form->text('name', __('Nom'))->required();
        $form->select('banque_id', __('Banque'))->options(Banque::all()->pluck('name', 'id')->toArray())->required();
        $form->select('period_id', __('Période'))->options(Period::all()->pluck('name', 'id')->toArray())->required();
        $form->text('amount', __('montant'))->required();
        $form->date('date_payment', __('Date de paiement'))->default(date('Y-m-d'))->required();
        $form->switch('stat', __('Etat'))->default(1);

        return $form;
    }
}
