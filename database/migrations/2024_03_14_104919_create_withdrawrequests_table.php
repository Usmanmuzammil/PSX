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
        Schema::create('withdrawrequests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('bank_id');
            $table->string('accountholder');
            $table->string('accountnumber');
            $table->string('withdrawamount');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawrequests');
    }
};
