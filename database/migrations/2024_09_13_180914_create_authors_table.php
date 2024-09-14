<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author_id')->unsigned();
            $table->bigInteger('author_name')->unsigned();
            $table->bigInteger('author_email')->unsigned();
            $table->timestamps();

            $table->foreign('author_id', 'authorid_foreign')->references('id')->on('users');
            $table->foreign('author_name', 'authorname_foreign')->references('id')->on('users');
            $table->foreign('author_email', 'authoremail_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
