<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_texts', function (Blueprint $table) {
            $table->id();
            $table->string('title_home_page')->nullable();
            $table->string('title_services_page')->nullable();
            $table->string('title_contact_page')->nullable();
            $table->string('info_home_page')->nullable();
            $table->string('info_services_page')->nullable();
            $table->string('info_contact_page')->nullable();
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
        Schema::dropIfExists('banner_texts');
    }
}
