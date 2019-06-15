<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdtCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdt_category', function (Blueprint $table) {
            $table->increments('pcate_id')->comment('产品分类主键id');
            $table->integer('pcate_upid')->unsigned()->index()->comment('产品分类的上级分类id');
            $table->string('pcate_idpath', 128)->comment('产品分类的所有上级分类的id，以 /开始，以/结束，不包含自己的id，例如/1/5/6/，6是此产品分类的上级分类的id');
            $table->string('pcate_name',32)->comment('产品分类名称');
            $table->string('pcate_namepath', 255)->comment('产品分类的所有上级分类的名称，以 /开始，以/结束，不包含自己的名称，例如/电子产品/电脑/笔记本/，笔记本是此产品分类的上级分类的名称');
            $table->timestamp('pcate_created_at')->nullable()->comment('产品分类创建时间');
            $table->timestamp('pcate_updated_at')->nullable()->comment('产品分类最后修改时间');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdt_category');
    }
}
