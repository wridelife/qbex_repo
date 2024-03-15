<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->timestamp('expire_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('plan_id')
            ->references('id')
            ->on('plans')->onDelete('cascade');

            $table->foreign('provider_id')
            ->references('id')
            ->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
}
