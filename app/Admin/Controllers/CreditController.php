<?php

namespace App\Admin\Controllers;

use App\Models\Banque;
use App\Models\Contribution;
use App\Models\Credit;
use App\Models\User;
use App\Models\UserBanque;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CreditController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Credit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        // $ub = UserBanque::find(46);

        // dd($ub->unpaid_credits());

        $grid = new Grid(new Credit());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('user.name', __('Habitant'))->sortable()->filter();
        $grid->column('contribution.name', __('Contribution'))->sortable()->filter();
        $grid->column('banque.name', __('Banque'))->sortable()->filter();
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
        $show = new Show(Credit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('contribution_id', __('Contribution id'));
        $show->field('name', __('Name'));
        $show->field('amount', __('Amount'));
        $show->field('paid', __('Paid'));
        $show->field('rest', __('Rest'));
        $show->field('notified_at', __('Notified at'));
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
        $form = new Form(new Credit());

        $form->select('banque_id', __('Banque'))->options(Banque::all()->pluck('name', 'id')->toArray());
        $form->select('user_id', __('Utilisateur'))->options(User::all()->pluck('name', 'id')->toArray());
        $form->select('contribution_id', __('Contribution'))->options(Contribution::all()->pluck('name', 'id')->toArray());
        $form->text('name', __('Nom'));
        $form->date('date', __('Date'))->default(date('Y-m-d'))->required();
        $form->decimal('amount', __('Montant'))->default(0.00);

        return $form;
    }
}
