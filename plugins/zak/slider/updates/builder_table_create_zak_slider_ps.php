<?php namespace Zak\Slider\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakSliderPs extends Migration
{
    public function up()
    {
        Schema::create('zak_slider_ps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('image');
            $table->string('heading');
            $table->string('sub_heading');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zak_slider_ps');
    }
}
