<?php

namespace App\Admin\Controllers;

use App\Models\Reunion;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ReunionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Reunion';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reunion());

        $grid->column('id', __('Id'));
        $grid->column('titre', __('Titre'));
        $grid->column('date', __('Date'));
        $grid->column('heure', __('Heure'));
        $grid->column('habitants', __('Habitants'));
        $grid->column('discription', __('Discription'));
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
        $show = new Show(Reunion::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titre', __('Titre'));
        $show->field('date', __('Date'));
        $show->field('heure', __('Heure'));
        $show->field('habitants', __('Habitants'));
        $show->field('discription', __('Discription'));
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
        $form = new Form(new Reunion());

        $form->text('titre', __('Titre'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->time('heure', __('Heure'))->default(date('H:i:s'));
        $form->text('habitants', __('Habitants'));
        $form->textarea('discription', __('Discription'));

        return $form;
    }
}
