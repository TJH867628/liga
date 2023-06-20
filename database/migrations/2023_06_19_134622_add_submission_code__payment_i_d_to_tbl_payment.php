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
        Schema::table('tbl_payment', function (Blueprint $table) {
            $table->string("submissionCode")->after("id");
            $table->string("paymentID")->after("submissionCode");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_payment', function (Blueprint $table) {
            $table->removeColumn('submissionCode');
            $table->removeColumn('paymentID');
        });
    }
};
