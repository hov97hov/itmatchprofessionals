<?php

namespace App\Admin\Controllers;

use App\Models\BannerText;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BannerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Banner text';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BannerText());

        $grid->column('title_home_page', __('Home Page'));
        $grid->column('title_services_page', __('Services Page'));
        $grid->column('title_contact_page', __('Contact Page'));
        $grid->column('info_home_page', __('Home Page info'));
        $grid->column('info_services_page', __('Services Page info'));
        $grid->column('info_contact_page', __('Contact Page info'));

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
        $show = new Show(BannerText::findOrFail($id));

        $show->field('title_home_page', __('Home Page'));
        $show->field('title_services_page', __('Services Page'));
        $show->field('title_contact_page', __('Contact Page'));
        $show->field('info_home_page', __('Home Page info'));
        $show->field('info_services_page', __('Services Page info'));
        $show->field('info_contact_page', __('Contact Page info'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BannerText());

        $form->text('title_home_page', __('Home Page'));
        $form->text('title_services_page', __('Services Page'));
        $form->text('title_contact_page', __('Contact Page'));
        $form->text('info_home_page', __('Home Page info'));
        $form->text('info_services_page', __('Services Page info'));
        $form->text('info_contact_page', __('Contact Page info'));

        return $form;
    }
}









