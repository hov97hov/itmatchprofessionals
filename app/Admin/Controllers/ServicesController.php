<?php

namespace App\Admin\Controllers;

use App\Models\Services;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ServicesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'services';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Services());

        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('img', __('Image'));
        $grid->images()->display(function ($images) {

            return json_decode($images, true);

        })->map(function ($path) {

            return 'http://localhost/images/'. $path;

        })->image();

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
        $show = new Show(Services::findOrFail($id));

        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('img', __('Image'))->image('localhost/storage/images');;
        $show->avatar()->image();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Services());

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->image('img', __('Image'));

        return $form;
    }
}









