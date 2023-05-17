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
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['enter', 'leave']);
            $table->float('value');
            $table->foreignId('material_id')->constrained();
            $table->foreignId('service_order_id')->constrained();
            $table->enum('payment_type', ['card', 'money', 'check', 'pix', 'other']);
            $table->dateTime('date');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_flows');
    }
};
