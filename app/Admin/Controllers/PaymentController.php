<?php

namespace App\Admin\Controllers;

use App\Models\Banque;
use App\Models\Payment;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PaymentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'payment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Payment());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('user.name', __('Habitant'))->sortable()->filter();
        $grid->column('date', __('Date'))->sortable()->filter('range', 'date');
        $grid->column('amount', __('Montant'))->sortable()->filter();
        $grid->column('banque.name', __('Banque'))->sortable()->filter();
        $grid->column('file', __('Fichier'))->image();
        $grid->column('is_confirmed', __('Confirmé'))->bool()->sortable()->filter();
        $grid->column('comment', __('Commentaire'))->sortable()->filter('like')->hide();
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
        $show = new Show(Payment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('date', __('Date'));
        $show->field('amount', __('Amount'));
        $show->field('banque_id', __('Banque id'));
        $show->field('file', __('File'));
        $show->field('is_confirmed', __('Is confirmed'));
        $show->field('comment', __('Comment'));
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
        $form = new Form(new Payment());

        $form->select('banque_id', __('Banque'))->options(Banque::all()->pluck('name', 'id')->toArray());
        $form->select('user_id', __('Habitant'))->options(User::all()->pluck('name', 'id')->toArray());
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->decimal('amount', __('Montant'))->default(0.00);
        $form->file('file', __('Fichier'));
        $form->switch('is_confirmed', __('Confirmé'));
        $form->textarea('comment', __('Commentaire'));


        return $form;
    }
}
