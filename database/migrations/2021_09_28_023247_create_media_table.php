<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['IMAGE', 'VIDEO', 'FILE']);
            $table->string('name',100);
            $table->string('location');
            $table->string('url');
            $table->string('caption');
            $table->foreignId('author')->constrained('users');
            $table->unsignedTinyInteger('status');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('modified_by')->constrained('users');
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
        Schema::dropIfExists('media');
    }
}
