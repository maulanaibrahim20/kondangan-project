<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->references("id")->on("users");
            $table->string("title", 150)->default("-");
            $table->string("contact", 100)->default("-");
            $table->date("schedule_at", 150)->default(DB::raw("CURRENT_DATE"));
            $table->unsignedInteger("amount")->default(0);
            $table->string("image", 150)->default("-");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
