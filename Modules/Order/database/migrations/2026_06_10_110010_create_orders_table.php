<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\User\Models\Address;
use Modules\User\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Address::class)->constrained('addresses')->cascadeOnDelete();
            $table->string('order_number')->unique();
            $table->bigInteger('subtotal');
            $table->bigInteger('shiping_cost');
            $table->bigInteger('total');
            $table->text('notes')->nullable();
            $table->string('state');
            $table->timestamp('placed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
