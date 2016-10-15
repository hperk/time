<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeOfficetypeNullable2 extends Migration
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
            $table->string('sec_office_type', 30)->nullable()->change();
            $table->string('sec_mail_type', 30)->nullable()->change();
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
