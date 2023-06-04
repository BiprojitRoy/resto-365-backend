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
        if(!Schema::hasTable('companies')){
            Schema::create('companies', function (Blueprint $table) {
                $table->id();
                $table->string('company_name')->nullable(false);
                $table->string('mobile_nr')->nullable(false);
                $table->text('address')->nullable(true);
                $table->string('web_link')->nullable(true);
                $table->string('fb_link')->nullable(true);
                $table->string('intagram_link')->nullable(true);
                $table->string('tweeter_link')->nullable(true);
                $table->timestamps();
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
        Schema::dropIfExists('companies');
    }
};
