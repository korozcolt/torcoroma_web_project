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
        Schema::create('slas', function (Blueprint $table) {
            $table->id();
            $table->enum('ticket_type', ['petition', 'complaint', 'claim', 'suggestion']);
            $table->enum('priority', ['low', 'medium', 'high', 'urgent']);
            $table->integer('response_time');  // Días para responder
            $table->integer('resolution_time');  // Días para resolver
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Índice compuesto para búsqueda de SLA aplicable
            $table->unique(['ticket_type', 'priority']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slas');
    }
};
