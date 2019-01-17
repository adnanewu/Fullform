<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Houseinfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Household_Number');
            $table->string('Household_Name');
            $table->string('Father_Husband_Name');
            $table->string('Mother_Name');
            $table->string('Occupation');
            $table->string('Mobile');
            $table->string('NID_Passpoer');
            $table->string('Education');
            $table->string('Date_of_Birth');
            $table->string('Gender');
            $table->string('Religion');
            $table->string('Marital_Staus');
            $table->string('Present_Address');
            $table->string('Ward');
            $table->string('Thana');
            $table->string('District');
            $table->string('Affected_Land_No');
            $table->string('Yearly_income');
            $table->string('have_you_taken_any_traning_before');
            $table->string('If_yes_then_how_many_days');
            $table->string('Do_you_have_iny_particular_trainning?');
            $table->string('Do_you_want_any_training?');
            $table->rememberToken();
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
         Schema::defaultStringLength(191);
         Schema::dropIfExists('infos');
    }
}
