<?php

namespace App\Admin\Controllers;

use App\Models\ContactMessage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactMsgController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ContactMessage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactMessage());

        $grid->column('id', __('Id'));
        $grid->column('subject', __('Subject'));
        $grid->column('email', __('Email'));
        $grid->column('name', __('Name'));
        $grid->column('content', __('Content'));
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
        $show = new Show(ContactMessage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('subject', __('Subject'));
        $show->field('email', __('Email'));
        $show->field('name', __('Name'));
        $show->field('content', __('Content'));
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
        $form = new Form(new ContactMessage());

        $form->text('subject', __('Subject'));
        $form->email('email', __('Email'));
        $form->text('name', __('Name'));
        $form->textarea('content', __('Content'));

        return $form;
    }
}
