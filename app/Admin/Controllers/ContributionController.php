<?php

namespace App\Admin\Controllers;

use App\Helpers\Helper;
Use Encore\Admin\Widgets\Table;
use App\Models\Banque;
use App\Models\Contribution;
use App\Models\Period;
use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContributionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contribution';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contribution());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('name', __('Nom'))->sortable()->filter('like')->expand(function ($model) {

            $users = $model->user_contributions()->with('user')->get()->map(function ($user) {
                return [
                    $user->user?->id,
                    $user->user?->name,
                    $user->user?->stage,
                    $user->user?->apartment,
                    Helper::money($user->amount),
                ];
            });

            return new Table(['ID', 'Nom', 'Etage', 'Appartement', 'Montant'], $users->toArray());
        });
        $grid->column('amount', __('Montant'))->sortable()->filter('like');
        $grid->column('period.name', __('Période'))->sortable()->filter('like');
        $grid->column('date_payment', __('Date de paiement'))->sortable()->filter('range','date');
        $grid->column('banque.name', __('Banque'))->sortable()->filter();
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
        $show = new Show(Contribution::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('periode.name', __('Period id'));
        $show->field('date_payment', __('Date payment'));
        $show->field('periode.name', __('Banque id'));
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
    protected function form($id = null)
    {
        $form = new Form(new Contribution());

        $form->text('name', __('Nom'))->required();
        $form->select('banque_id', __('Banque'))->options(Banque::all()->pluck('name', 'id')->toArray())->required();
        $form->select('period_id', __('Période'))->options(Period::all()->pluck('name', 'id')->toArray())->required();
        $form->text('amount', __('Montant'))->required();
        $form->date('date_payment', __('Date de paiement'))->default(date('Y-m-d'))->required();
        $form->switch('stat', __('Etat'))->default(1);
        $form->select('user_id', __('Validateur'))->options(User::all()->pluck('name', 'id'));

        if($form->isEditing())
        {
            $form->hasMany('user_contributions', __('Habitants'), function (Form\NestedForm $form) {
                $form->select('user_id', 'Habitant')->options(User::listUsers());
                $form->text('amount')->default(0);
            });
        }

        return $form;
    }
}
