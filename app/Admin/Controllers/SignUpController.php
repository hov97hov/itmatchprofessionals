<?php

namespace App\Admin\Controllers;

use App\Models\Footer;
use App\Models\Services;
use App\Models\SignUp;
use App\Models\SocialLink;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class SignUpController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Sign up table';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SignUp());

        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));

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
        $show = new Show(SignUp::findOrFail($id));

        $show->field('title', __('Title'));
        $show->field('description', __('Description'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SignUp());

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));

        return $form;
    }
}









