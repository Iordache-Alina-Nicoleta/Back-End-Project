<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("Book_Name");
            $table->integer("ISBN_no");
            $table->unsignedBigInteger("author_id");
            $table->unsignedBigInteger("location_id");
            $table->unsignedBigInteger("category_id");
            $table->text("Status");
            $table->integer("no_of_copy");
            $table->text("description");
            
            $table->timestamp("Created_On");
            $table->timestamp("Updated_On");
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
        Schema::dropIfExists('books');
    }
}
