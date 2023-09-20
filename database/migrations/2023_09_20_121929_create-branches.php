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
        if(!Schema::hasTable('branches')){
            Schema::create('branches', function(Blueprint $table){
                $table->id();
                $table->string('name')->nullable(false);
                $table->unsignedBigInteger('company_id');
                $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
                $table->string('address')->nullable(true);
                $table->string('phone')->nullable(true);
                $table->string('email')->nullable(true);
            });
        }
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
