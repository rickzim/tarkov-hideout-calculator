<?php

use App\Models\Upgrade;
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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Upgrade::class)->constrained()->cascadeOnDelete();
            /*
            $table->string('type'); // 'item, trader, skill'
            $table->unsignedBigInteger('required_id');
            $table->unsignedBigInteger('required_amount');
            */
            $table->morphs('Requireable');
            $table->unsignedBigInteger('required_amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};