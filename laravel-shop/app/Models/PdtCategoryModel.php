<?php

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 产品分类表
 */
class PdtCategoryModel extends BaseModel
{
    protected $table      = 'pdt_category';
    protected $primaryKey = '';
    protected $guarded    = [];
    public $timestamp     = false;
    use SoftDeletes;
}
