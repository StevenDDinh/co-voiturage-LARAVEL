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
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->date("date_time_depart");
            $table->date("date_time_arrive");
            $table->foreignId("id_voiture")->constrained("voitures");
            $table->foreignId("id_campus_arrive")->constrained("campuses");
            $table->foreignId("id_campus_depart")->constrained("campuses");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
