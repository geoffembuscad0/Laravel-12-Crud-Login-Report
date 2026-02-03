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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('address')->nullable();
            $table->string('location_prefix')->nullable();
            $table->tinyInteger('under_maintenance')->default(0)->nullable();
            $table->boolean('active')->default(true);
            $table->softDeletes('deleted_at', precision: 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
