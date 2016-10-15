<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSangarcorpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sangarcorps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dba_name', 60);
            $table->string('legal_name', 60);
            $table->string('incorp_state', 2);
            $table->string('fein', 10);
            $table->string('sec_lic', 15);
            $table->string('state_tax_id', 20);
            
            $table->string('sub_of', 60);
            
            $table->string('oasis_id', 15);
            $table->string('qb_loc', 60);
            
            $table->date('sos_date_filed');
            $table->string('sos_renew_interval');
            $table->date('sos_date_due');
            $table->text('sos_notes');
            
            $table->string('sos_office_type', 30);
            $table->string('sos_phy_street', 60);
            $table->string('sos_phy_street_two', 60);
            $table->string('sos_phy_city', 60);
            $table->string('sos_phy_state', 2);
            $table->string('sos_phy_zip', 10);
            
            $table->string('sos_mail_type', 30);
            $table->string('sos_mail_street', 60);
            $table->string('sos_mail_street_two', 60);
            $table->string('sos_mail_city', 60);
            $table->string('sos_mail_state', 2);
            $table->string('sos_mail_zip', 10);
            
            $table->string('ra_name', 30);
            $table->string('ra_street', 60);
            $table->string('ra_street_two', 60);
            $table->string('ra_city', 60);
            $table->string('ra_state', 2);
            $table->string('ra_zip', 10);
            
            $table->string('sec_office_type', 30); //need to create on form
            $table->string('sec_phy_street', 60);
            $table->string('sec_phy_street_two', 60);
            $table->string('sec_phy_city', 60);
            $table->string('sec_phy_state', 2);
            $table->string('sec_phy_zip', 10);
            $table->text('sec_notes'); // need to create on form
            
            $table->string('sec_mail_type', 30); //need to create on form
            $table->string('sec_mail_street', 60);
            $table->string('sec_mail_street_two', 60);
            $table->string('sec_mail_city', 60);
            $table->string('sec_mail_state', 2);
            $table->string('sec_mail_zip', 10);
 
            $table->softDeletes();
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
        Schema::dropIfExists('sangarcorps');
    }
}
