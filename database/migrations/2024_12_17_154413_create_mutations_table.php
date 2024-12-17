<?php

use App\Models\Invitation;
use App\Models\User;
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
        Schema::create('mutations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->references("id")->on("users");
            $table->foreignIdFor(Invitation::class)->references("id")->on("invitations");
            $table->unsignedInteger("credit")->default(0);
            $table->unsignedInteger("debit")->default(0);
            $table->unsignedInteger("amount_before")->default(0);
            $table->unsignedInteger("amount_after")->default(0);
            $table->string("description", 200)->default("-");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutations');
    }
};
