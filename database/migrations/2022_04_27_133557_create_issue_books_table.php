<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateIssueBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issue_books', function (Blueprint $table) {
            $table->id();
            $table->string("Book_Name");
            $table->string("Author_Name");
            $table->unsignedBigInteger("client_id");
            $table->timestamp("Borrowed_Date");
            $table->unsignedBigInteger("location_id");
            $table->unsignedBigInteger("no_of_copy");
            $table->text("Status"); 
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
        Schema::dropIfExists('issue_books');
    }
}
