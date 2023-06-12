<?php

namespace App\Admin\Controllers;

use App\Models\Notification;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NotificationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Notification';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Notification());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('notifable_id', __('Notifable id'));
        $grid->column('notifable_type', __('Notifable type'));
        $grid->column('title', __('Title'));
        $grid->column('body', __('Body'));
        $grid->column('date_send', __('Date send'));
        $grid->column('is_send', __('Is send'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Notification::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('notifable_id', __('Notifable id'));
        $show->field('notifable_type', __('Notifable type'));
        $show->field('title', __('Title'));
        $show->field('body', __('Body'));
        $show->field('date_send', __('Date send'));
        $show->field('is_send', __('Is send'));
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
        $form = new Form(new Notification());

        $form->number('user_id', __('User id'));
        $form->number('notifable_id', __('Notifable id'));
        $form->text('notifable_type', __('Notifable type'));
        $form->text('title', __('Title'));
        $form->textarea('body', __('Body'));
        $form->datetime('date_send', __('Date send'))->default(date('Y-m-d H:i:s'));
        $form->switch('is_send', __('Is send'));

        return $form;
    }
}
