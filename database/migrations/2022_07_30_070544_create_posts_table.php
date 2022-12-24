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
        Schema::create('posts', function (Blueprint $table) {
            

            $table->string('name',50);
            $table->string('lastName',50);
            $table->string('phone_no');
            $table->string('tittle');
            $table->text('description')->nullable();
            $table->string('block');
            $table->string('Adress');
         
            $table->string('restriction');
            $table->date('payment_date');
            $table->integer('price');
         
           
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
