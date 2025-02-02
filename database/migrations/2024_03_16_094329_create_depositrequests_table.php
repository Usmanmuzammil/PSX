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
        Schema::create('depositrequests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('bank_id');
            $table->string('accountholder');
            $table->string('accountnumber');
            $table->string('depositamount');
            $table->string('description')->nullable();
            $table->integer('status')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depositrequests');
    }
};
