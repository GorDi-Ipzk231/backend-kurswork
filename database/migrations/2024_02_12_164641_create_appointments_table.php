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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('stylist_id')->constrained('stylists')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade'); // поле для збереження інформації про те, хто створив запис
            $table->foreignId('manager_id')->nullable()->constrained('users')->onDelete('cascade'); // поле для збереження інформації про менеджера, якщо він створив запис
            $table->foreignId('admin_id')->nullable()->constrained('users')->onDelete('cascade'); // поле для збереження інформації про адміна, якщо він створив запис
            $table->dateTime('appointment_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
