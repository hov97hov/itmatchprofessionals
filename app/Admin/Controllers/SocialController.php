<?php

namespace App\Admin\Controllers;

use App\Models\Footer;
use App\Models\Services;
use App\Models\SocialLink;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class SocialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Social';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SocialLink());

        $grid->column('url', __('Url'));
        $grid->column('icon', __('Icon'));

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
        $show = new Show(SocialLink::findOrFail($id));

        $show->field('url', __('Url'));
        $show->field('icon', __('Icon'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SocialLink());

        $form->url('url', __('Url'));
        $form->icon('icon', __('Icon'));

        return $form;
    }
}









