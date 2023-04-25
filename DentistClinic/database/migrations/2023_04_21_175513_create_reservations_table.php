<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('serviceId');
            $table->string('bookerName', 255);
            $table->string('bookerSurname', 255);
            $table->DateTime('reservationDate');
            $table->timestamps();
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->foreign('serviceId')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign('reservations_service_id_foreign');
        });
        Schema::dropIfExists('reservations');
    }
};