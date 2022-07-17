<?php
/*
Author: Noor Abdi
Company: Drongo Technology
 */

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
        Schema::create(config('ip_log_table', 'ip_log'), function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('type', 8)->nullable();
            $table->string('continent_code')->nullable();
            $table->string('continent_name')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('region_code')->nullable();
            $table->string('region_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->json('location')->nullable();
            $table->string('country_flag')->nullable();
            $table->string('country_flag_emoji')->nullable();
            $table->string('country_flag_emoji_unicode')->nullable();
            $table->string('calling_code')->nullable();
            $table->string('is_eu')->nullable();
            $table->json('time_zone')->nullable();
            $table->json('currency')->nullable();
            $table->json('connection')->nullable();

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
        Schema::dropIfExists('ip_log');
    }
};
