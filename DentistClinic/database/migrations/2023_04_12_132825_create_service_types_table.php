<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name', 255);
            $table->timestamps();
        });
        Schema::table('services', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->after('description');
            $table->foreign('type_id')->references('id')->on('service_types');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign('services_type_id_foreign');
            $table->dropColumn('type_id');
        });
        Schema::dropIfExists('service_types');
    }
};
