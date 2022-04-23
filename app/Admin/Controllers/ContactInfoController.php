<?php

namespace App\Admin\Controllers;

use App\Models\ContactInfo;
use App\Models\SocialLink;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact form info';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactInfo());

        $grid->column('address', __('Address'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));

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
        $show = new Show(ContactInfo::findOrFail($id));

        $show->field('address', __('Address'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ContactInfo());

        $form->text('address', __('Address'));
        $form->text('email', __('Email'));
        $form->text('phone', __('Phone'));

        return $form;
    }
}









