<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSecDatesToSangarcorps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('sangarcorps', function (Blueprint $table) {
            $table->datetime('sec_date_filed')->change();
            $table->datetime('sec_date_due')->change();
            //$table->text('sos_notes'); //need to create
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
