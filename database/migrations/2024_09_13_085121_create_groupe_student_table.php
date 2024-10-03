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
        Schema::create('groupe_student', function (Blueprint $table) {
            $table->foreignId('groupe_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId( 'student_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->primary(['groupe_id', 'student_id']);    
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupe_student');
    }
};
