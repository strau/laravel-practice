<?php

namespace App\Admin\Controllers;

use App\Models\PdtCategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Layout\Content;

class PdtCategoryController extends AdminController
{
    public function create(Content $content)
    {
        return $content
            ->header('创建商品类目')
            ->body($this->form());
    }

    public function form()
    {
        $form = new Form(new PdtCategoryModel());
        $form->select('pcate_upid', '上级分类')->options(function($id) {
            $category = PdtCategoryModel::select(['pcate_id', 'pcate_name'])->pluck('pcate_name', 'pcate_id');
//            if ($category) {
                return $category;//[$category->pcate_id => $category->pcate_name];
//            }
        });
        $form->text('pcate_name', '分类名称');
            return $form;
    }
}
