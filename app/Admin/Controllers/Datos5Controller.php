<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Datos5;

class Datos5Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Datos5';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Datos5());

        $grid->column('id', __('Id'));
        $grid->column('result_vulnerability', __('Result vulnerability'));
        $grid->column('result_risk', __('Result risk'));
        $grid->column('result_functionality')-> image();
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
        $show = new Show(Datos5::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('result_vulnerability', __('Result vulnerability'));
        $show->field('result_risk', __('Result risk'));
        $show->field('result_functionality', __('Result functionality'));
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
        $form = new Form(new Datos5());

        $form->decimal('result_vulnerability', __('Result vulnerability'));
        $form->decimal('result_risk', __('Result risk'));
        $form->decimal('result_functionality', __('Result functionality'));

        return $form;
    }
}
