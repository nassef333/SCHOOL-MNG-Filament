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
        Schema::create('branch_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId("teacher_id")->constrained("users", "id")->cascadeOnDelete();
            $table->foreignId("branch_id")->constrained("branches", "id")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_teacher');
    }
};
