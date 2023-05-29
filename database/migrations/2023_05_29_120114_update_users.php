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
        if(Schema::hasTable('users')){
            Schema::table('users', function(Blueprint $table){
                $table->string('user_nr')->after('name')->nullable(false);
                $table->string('user_name')->after('user_nr')->nullable(false)->unique();
                $table->string('mobile_nr')->after('email')->nullable(false)->unique();
                $table->text('address')->after('mobile_nr')->nullable(true);
                $table->enum('identification_type',['none', 'passport', 'national_id', 'driving_license'])->nullable(false)->default('none')->after('password');
                $table->string('identification_nr')->nullable(true);
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
