<?php

namespace App\Admin\Controllers;

use App\Models\Banque;
use App\Models\BanqueCredit;
use App\Models\Expense;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BanqueCreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BanqueCredit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BanqueCredit());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('banque.name', __('banque'))->sortable()->filter();
        $grid->column('expense.name', __('Charge'))->sortable()->filter();
        $grid->column('name', __('Nom'))->sortable()->filter('like');
        $grid->column('date', __('Date'))->sortable()->filter('range','date');
        $grid->column('amount', __('Montant'))->sortable()->filter();
        $grid->column('paid', __('Payé'))->sortable()->filter();
        $grid->column('rest', __('Reste'))->sortable()->filter();
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
        $show = new Show(BanqueCredit::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BanqueCredit());

        $form->select('banque_id', __('Banque'))->options(Banque::all()->pluck('name', 'id')->toArray());
        $form->select('expense_id', __('Charge'))->options(Expense::all()->pluck('name', 'id')->toArray());
        $form->text('name', __('Nom'));
        $form->date('date', __('Date'))->default(date('Y-m-d'))->required();
        $form->decimal('amount', __('Montant'))->default(0.00);

        return $form;
    }
}
