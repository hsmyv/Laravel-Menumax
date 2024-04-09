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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id')->constrained()->cascadeOnDelete();
            $table->string('name')->nullable();
            $table->text('about')->nullable();
            $table->string('address')->nullable();
            $table->text('map')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('delivery_fee')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
