<?php namespace Zak\Category\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakCategoryPs extends Migration
{
    public function up()
    {
        Schema::create('zak_category_ps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('index');
            $table->string('name');
            $table->string('image');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('status')->default(true);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zak_category_ps');
    }
}
