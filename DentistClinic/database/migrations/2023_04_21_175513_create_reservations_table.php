<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('serviceId');
            $table->string('bookerName', 255);
            $table->string('bookerSurname', 255);
            $table->DateTime('reservationDate');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('dentistId');
            $table->timestamps();
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->foreign('serviceId')->references('id')->on('services');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('dentistId')->references('id')->on('dentists');
        });
    }
    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign('reservations_service_id_foreign');
            $table->dropForeign('reservations_user_id_foreign');
            $table->dropForeign('reservations_dentist_id_foreign');
        });
        Schema::dropIfExists('reservations');
    }
};
