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
        Schema::create('player_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('class_archetype_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->unique(['player_id', 'class_archetype_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_classes');
    }
};
