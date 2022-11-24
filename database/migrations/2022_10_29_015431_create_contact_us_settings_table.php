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
        Schema::create('contact_us_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('slug')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('phone_icon')->nullable();
            $table->string('address_text')->nullable();
            $table->string('address_icon')->nullable();
            $table->string('email_text')->nullable();
            $table->string('email_icon')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('whatsapp_text')->nullable();
            $table->string('whatsapp_icon')->nullable();
            $table->string('general_text')->nullable();
            $table->string('general_email')->nullable();
            $table->string('media_text')->nullable();
            $table->string('media_email')->nullable();
            $table->text('google_map')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('contact_us_settings');
    }
};
