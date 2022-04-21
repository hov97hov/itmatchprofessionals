<?php

namespace App\Admin\Controllers;

use App\Models\Vacancy;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SearchJobController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'vacancies';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Vacancy());

        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('work_type', 'Work Type')->using(['Part Time', 'Full Time', 'Freelancer']);
        $grid->column('duration', __('Duration'));

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
        $show = new Show(Vacancy::findOrFail($id));

        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('work_type', 'Work Type')->using(['Part Time', 'Full Time', 'Freelancer']);
        $show->field('duration', __('Duration'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Vacancy());

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->radio('work_type', 'Work Type')->options(['Part Time', 'Full Time', 'Freelancer'])->default('Part Time')->stacked();
        $form->text('duration', __('Duration'));
        $form->image('images', __('Images'));

        return $form;
    }
}









