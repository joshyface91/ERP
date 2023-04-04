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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('itemName');
            $table->integer('itemId');
            $table->integer('itemQuantity');
            $table->text('itemSeller');
            $table->integer('itemCost');
            $table->string('itemPurpose');
            $table->string('itemShipped');
            $table->string('employeeName');
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
        Schema::dropIfExists('items');
    }
};
