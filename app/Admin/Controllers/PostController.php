<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('slug', __('Slug'));
        $grid->column('description', __('Description'));
        $grid->column('content', __('Content'));
        $grid->column('status', __('Status'));
        $grid->column('feature_image', __('Feature image'));
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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('Description'));
        $show->field('content', __('Content'));
        $show->field('status', __('Status'));
        $show->field('feature_image', __('Feature image'));
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
        $form = new Form(new Post());

        $form->multipleSelect('categories', 'Categories')->options(Category::all()->pluck('name', 'id'));
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->simditor('content');
        $form->multipleSelect('tags', 'Tags')->options(Tag::all()->pluck('name', 'id'));
        $form->text('status', __('Status'));
        $form->text('feature_image', __('Feature image'));

        $form->saving(function ($form) {
            $form->slug = $form->title;
        });

        return $form;
    }
}
