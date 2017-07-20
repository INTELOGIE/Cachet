<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableMetricsTableProps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    	Schema::table('metrics', function (Blueprint $table) {
    		$table->string('color')->default('#f7ca18');    		
    		$table->decimal('suggestedMax', 10, 2);
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    	$table->dropColumn('color');
    	$table->dropColumn('suggestedMax');
    }
}
