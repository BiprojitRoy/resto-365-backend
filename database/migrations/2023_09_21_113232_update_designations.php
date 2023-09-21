<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('designations', function(Blueprint $table){
            if(!Schema::hasColumn('company_id', 'designations')){
                $table->unsignedBigInteger('company_id')->nullable(false)->after('name');
                $table->foreign('company_id')->references('id')->on('companies');
            }
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
    }
};
