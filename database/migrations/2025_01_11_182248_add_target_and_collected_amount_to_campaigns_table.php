<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTargetAndCollectedAmountToCampaignsTable extends Migration
{
    public function up()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->decimal('target_amount', 15, 2)->default(0.00); // Add target_amount column
            $table->decimal('collected_amount', 15, 2)->default(0.00); // Add collected_amount column
        });
    }

    public function down()
    {
        Schema::table('campaigns', function (Blueprint $table) {
            $table->dropColumn('target_amount');
            $table->dropColumn('collected_amount');
        });
    }
}
