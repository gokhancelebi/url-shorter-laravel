<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UrlTable extends Migration
{
    public function up()
    {
        Schema::create('url', function (Blueprint $table) {
            $table->string('hash',16)->primary();
            $table->string('originalURL',512);
            $table->integer('user_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('url');
    }
}
