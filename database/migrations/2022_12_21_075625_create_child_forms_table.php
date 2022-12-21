<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dob');
            $table->string('class');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('zipcode');
            $table->string('photo');
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
        Schema::dropIfExists('child_forms');
    }
}
