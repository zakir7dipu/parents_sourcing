<?php namespace Zak\Category\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZakCategoryPs extends Migration
{
    public function up()
    {
        Schema::table('zak_category_ps', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zak_category_ps', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
