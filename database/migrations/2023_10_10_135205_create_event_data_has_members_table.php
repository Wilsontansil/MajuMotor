<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_data_has_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('event_data');
            $table->foreignId('member_id')->constrained('members');
            $table->string('status')->default('waiting');
            $table->dateTime('payment_date')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_proof')->nullable();
            $table->decimal("nominal", $precision = 14, $scale = 3)->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_data_has_members');
    }
};
