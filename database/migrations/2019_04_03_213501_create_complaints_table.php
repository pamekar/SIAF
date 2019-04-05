<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->longText('description');
            $table->string('type');
            $table->string('state');
            $table->string('location');
            $table->text('tags');
            $table->enum('status',['pending','resolved','closed']);
            $table->timestamp('occurred_at');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
