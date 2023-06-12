<?php

namespace App\Admin\Controllers;

use App\Models\AnnouncementUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnnouncementUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AnnouncementUser';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AnnouncementUser());

        $grid->column('id', __('Id'));
        $grid->column('announcement_id', __('Announcement id'));
        $grid->column('user_id', __('User id'));
        $grid->column('is_viewed', __('Is viewed'));
        $grid->column('is_confirmed', __('Is confirmed'));
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
        $show = new Show(AnnouncementUser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('announcement_id', __('Announcement id'));
        $show->field('user_id', __('User id'));
        $show->field('is_viewed', __('Is viewed'));
        $show->field('is_confirmed', __('Is confirmed'));
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
        $form = new Form(new AnnouncementUser());

        $form->number('announcement_id', __('Announcement id'));
        $form->number('user_id', __('User id'));
        $form->switch('is_viewed', __('Is viewed'));
        $form->switch('is_confirmed', __('Is confirmed'));

        return $form;
    }
}
