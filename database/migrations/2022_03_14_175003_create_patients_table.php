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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->enum('gender',['male','female']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address');
            $table->string('city');
            $table->enum('parish',['St.Andrew','Kingston','St.Mary','St.Ann','St.Thomas','St.Elizabeth','Portland','St.Catherine','Manchester','Clarendon','Hanover','Westmoreland','St.James','Trelawny']);
            $table->string('home_number');
            $table->string('mobile_number');
            $table->string('work_number');
            $table->date('dob');
            $table->string('pob');
            $table->enum('birth_parish',['St.Andrew','Kingston','St.Mary','St.Ann','St.Thomas','St.Elizabeth','Portland','St.Catherine','Manchester','Clarendon','Hanover','Westmoreland','St.James','Trelawny']);
            $table->enum('emergency_title',['Ms','Mrs','Mr']);
            $table->string('emergency_first_name');
            $table->string('emergency_last_name');
            $table->string('emergency_street_address');
            $table->string('emergency_city');
            $table->enum('emergency_parish',['St.Andrew','Kingston','St.Mary','St.Ann','St.Thomas','St.Elizabeth','Portland','St.Catherine','Manchester','Clarendon','Hanover','Westmoreland','St.James','Trelawny']);
            $table->string('emergency_home_number');
            $table->string('emergency_mobile_number');
            $table->string('emergency_work_number');
            



            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
