<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sangarcorp;

class SangarcorpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $sangarcorp = new Sangarcorp;
        $data = array();
        $data['sangarcorp'] = $sangarcorp;
        return view('sangarcorp.create', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create the object
        $sangarcorp = new Sangarcorp;
        
        //link up request data to object vars
        $sangarcorp->dba_name = $request->dba_name;
        $sangarcorp->legal_name = $request->legal_name;
        $sangarcorp->incorp_state = $request->incorp_state;
        $sangarcorp->fein = $request->fein;
        $sangarcorp->sec_lic = $request->sec_lic;
        $sangarcorp->state_tax_id = $request->state_tax_id;
            
        $sangarcorp->sub_of = $request->sub_of;
            
        $sangarcorp->oasis_id = $request->oasis_id;
        $sangarcorp->qb_loc = $request->qb_loc;
            
        $sangarcorp->sos_date_filed = $request->sos_date_filed;
        $sangarcorp->sos_renew_interval = $request->sos_renew_interval;
        $sangarcorp->sos_date_due = $request->sos_date_due;
        $sangarcorp->sos_notes = $request->sos_notes;
            
        $sangarcorp->sos_office_type = $request->sos_office_type;
        $sangarcorp->sos_phy_street = $request->sos_phy_street;
        $sangarcorp->sos_phy_street_two = $request->sos_phy_street_two;
        $sangarcorp->sos_phy_city = $request->sos_phy_city;
        $sangarcorp->sos_phy_state = $request->sos_phy_state;
        $sangarcorp->sos_phy_zip = $request->sos_phy_zip;
            
        $sangarcorp->sos_mail_type = $request->sos_mail_type;
        $sangarcorp->sos_mail_street = $request->sos_mail_street;
        $sangarcorp->sos_mail_street_two = $request->sos_mail_street_two;
        $sangarcorp->sos_mail_city = $request->sos_mail_city;
        $sangarcorp->sos_mail_state = $request->sos_mail_state;
        $sangarcorp->sos_mail_zip = $request->sos_mail_zip;
            
        $sangarcorp->ra_name = $request->ra_name;
        $sangarcorp->ra_street = $request->ra_street;
        $sangarcorp->ra_street_two = $request->ra_street_two;
        $sangarcorp->ra_city = $request->ra_city;
        $sangarcorp->ra_state = $request->ra_state;
        $sangarcorp->ra_zip = $request->ra_zip;
            
        //$sangarcorp->sec_office_type', 30); //need to create on form
        $sangarcorp->sec_phy_street = $request->sec_phy_street;
        $sangarcorp->sec_phy_street_two = $request->sec_phy_street_two;
        $sangarcorp->sec_phy_city = $request->sec_phy_city;
        $sangarcorp->sec_phy_state = $request->sec_phy_state;
        $sangarcorp->sec_phy_zip = $request->sec_phy_zip;
        //$sangarcorp->sec_notes'); // need to create on form
            
        //$sangarcorp->sec_mail_type', 30); //need to create on form
        $sangarcorp->sec_mail_street = $request->sec_mail_street;
        $sangarcorp->sec_mail_street_two = $request->sec_mail_street_two;
        $sangarcorp->sec_mail_city = $request->sec_mail_city;
        $sangarcorp->sec_mail_state = $request->sec_mail_state;
        $sangarcorp->sec_mail_zip = $request->sec_mail_zip;
    
        //save the data
        $sangarcorp->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $sangarcorp = Sangarcorp::findOrFail($id);
        echo $sangarcorp;
        //return view('sangarcorp.show',['sangarcorp'=> $sangarcorp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit not in use. Using show for both show and edit. Edit reveal accomplished with javascript.
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
