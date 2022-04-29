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
        Schema::create('product_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('nickname', 255);
            $table->text('description');
            $table->timestamps();
        });
        DB::table('product_statuses')->insert(['name'=> 'Active', 'nickname' => 'active', 'description' => 'Product is Active']);
        DB::table('product_statuses')->insert(['name'=> 'Inactive', 'nickname' => 'inactive', 'description' => 'Product is inactive']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_statuses');
    }
};