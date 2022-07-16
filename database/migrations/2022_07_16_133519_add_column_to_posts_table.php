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
        Schema::table('posts', function (Blueprint $table) {
            $table->after('body',function($table){
                $table->bigInteger('votes');
                $table->string('email')->unique();
                $table->double('price',8,2)->default(0.00);
                $table->boolean('isActive');
                $table->date('birth')->nullable();
                $table->enum('lang',['en','mm']);
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
