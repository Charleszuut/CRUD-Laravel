<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gym_exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('sets');
            $table->integer('reps');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('gym_exercises');
    }
};