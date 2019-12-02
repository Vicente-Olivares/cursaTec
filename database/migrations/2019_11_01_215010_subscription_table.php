<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('subscriptions', function (Blueprint $table) {
            
            $table->increments('id')->change();
            $table->unsignedInteger('user_id')->change();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name')->change();
            $table->string('stripe_id')->change();
           // $table->string('stripe_plan')->change();
            $table->integer('quantity')->change();
            //$table->timestamp('trial_ends_at')->nullable()->change();
            //$table->timestamp('ends_at')->nullable()->change();
            //$table->timestamps()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('subscriptions');
    }
}
