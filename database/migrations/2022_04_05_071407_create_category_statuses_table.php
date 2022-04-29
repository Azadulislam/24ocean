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
        Schema::create('category_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('nickname', 25);
            $table->text('description');
            $table->timestamps();
        });
        DB::table('category_statuses')->insert(['name'=> 'Active', 'nickname' => 'active', 'description' => 'Category is Active']);
        DB::table('category_statuses')->insert(['name'=> 'Inactive', 'nickname' => 'inactive', 'description' => 'Category is Active']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_statuses');
    }
};