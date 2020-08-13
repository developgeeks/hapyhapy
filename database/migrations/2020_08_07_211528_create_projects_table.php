<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('description', 200);
            $table->string('address', 50);
            $table->string('community', 50);
            $table->string('zoning', 50);
            $table->string('availability', 25);
            $table->string('term', 25);
            $table->string('parking', 50);
            $table->string('url_Image', 50);
            $table->enum('status', ['ACTIVE', 'INACTIVE']);
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
        Schema::dropIfExists('projects');
    }
}
