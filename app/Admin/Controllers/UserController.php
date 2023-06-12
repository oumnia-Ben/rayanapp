<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Hash;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('ID'))->sortable()->filter();
        $grid->column('name', __('Nom'))->sortable()->filter('like');
        $grid->column('stage', __('Etage'))->sortable()->filter()->editable();
        $grid->column('apartment', __('Appartement'))->sortable()->filter()->editable();
        $grid->column('phone', __('Téléphone'))->sortable()->filter('like')->editable();
        $grid->column('email', __('E-mail'))->sortable()->filter('like');
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('phone', __('Phone'));
        $show->field('stage', __('Stage'));
        $show->field('apartment', __('Apartment'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Nom'))->required();
        $form->text('stage', __('Etage'))->required();
        $form->text('apartment', __('Appartement'))->required();
        $form->mobile('phone', __('Téléphone'))->options(['mask' => '99 99 99 99 99']);
        $form->email('email', __('E-mail'))->required();

        $form->password('password', trans('admin.password'))->rules('confirmed');
        $form->password('password_confirmation', trans('admin.password_confirmation'));
        $form->ignore(['password_confirmation']);

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            }
            else
            {
                $form->password = $form->model()->password;
            }
        });


        return $form;
    }
}
