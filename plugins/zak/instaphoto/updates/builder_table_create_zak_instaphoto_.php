<?php namespace Zak\Instaphoto\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakInstaphoto extends Migration
{
    public function up()
    {
        Schema::create('zak_instaphoto_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('image');
            $table->string('insta_link')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zak_instaphoto_');
    }
}
