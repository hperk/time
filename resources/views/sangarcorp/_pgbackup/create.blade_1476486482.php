<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        @include('includes.head')
</head>     
    <body> 
        <hr> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-sm-10"> 
                    <h1>Create New Sangar Entity</h1> 
                </div>                 
            </div>             
            <div class="row pg-empty-placeholder"></div>             
        </div>         
        {!! Form::model($sangarcorp, ['action' => 'SangarcorpController@store']) !!}
        <div class="container"> 
            <div class="row"> 
                <fieldset> 
                    <legend>Company Information</legend>                     
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label class="control-label text-left" for="textinput">Name (dba)</label>                             
                            <input id="dba_name" name="dba_name" type="text" placeholder="placeholder" class="form-control input-md"> 
                        </div>                         
                        <div class="form-group"> 
                            <label class="control-label text-left" for="textinput">Legal Name</label>                             
                            <input id="legal_name" name="legal_name" type="text" placeholder="placeholder" class="form-control input-md"> 
                        </div>                         
                        <div class="form-group"> 
                            <label class="control-label" for="formInput740">Incorporation State</label>                             
                            <select id="incorp_state" class="form-control" name="incorp_state"> 
                                <option>1</option>                                 
                                <option>2</option>                                 
                                <option>3</option>                                 
                            </select>                             
                        </div>                         
                    </div>                     
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label class="control-label text-left" for="textinput">FEIN</label>                             
                            <input id="textinput" name="fein" type="text" placeholder="placeholder" class="form-control input-md" style="fein"> 
                        </div>                         
                        <div class="form-group"> 
                            <b>Security Lic #</b> 
                            <br> 
                            <input id="sec_lic" name="sec_lic" type="text" placeholder="placeholder" class="form-control input-md"> 
                        </div>                         
                        <div class="form-group"> 
                            <b>State Biz / Tax ID</b> 
                            <br> 
                            <input id="state_tax_id" name="state_tax_id" type="text" placeholder="placeholder" class="form-control input-md"> 
                        </div>                         
                    </div>                     
                    <div class="col-md-4"> 
                        <div class="form-group" style="outline-style: solid"> 
                            <label class="control-label" for="formInput740">SUBSIDIARY OF:</label>                             
                            <select id="sub_of" class="form-control" name="sub_of"> 
                                <option>1</option>                                 
                                <option>2</option>                                 
                                <option>3</option>                                 
                            </select>                             
                        </div>                         
                        <div class="form-group"> 
                            <b>Oasis ID</b> 
                            <br> 
                            <input id="oasis_id" name="oasis_id" type="text" placeholder="placeholder" class="form-control input-md"> 
                        </div>                         
                        <div class="form-group"> 
                            <b>QB Location Name</b> 
                            <br> 
                            <input id="qb_loc" name="qb_loc" type="text" placeholder="placeholder" class="form-control input-md"> 
                        </div>                         
                    </div>                     
                </fieldset>                 
            </div>             
            <div class="row"> 
                <!--/col-3-->                 
                <div class="container"> 
                    <ul class="nav nav-tabs"> 
                        <li class="active"> 
                            <a href="#tab1" data-toggle="tab">Corporate</a> 
                        </li>                         
                        <li> 
                            <a href="#tab2" data-toggle="tab">Security</a> 
                        </li>                         
                    </ul>                     
                    <div class="tab-content"> 
                        <div class="tab-pane active" id="tab1"> 
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Filing Next Due</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <b>Last Filed</b> 
                                            <input id="sos_date_filed" name="sos_date_filed" type="date" placeholder="placeholder" class="form-control input-md"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">Renew / File Every:</label>                                             
                                            <select id="sos_renew_interval" class="form-control" name="sos_renew_interval"> 
                                                <option value="1">1 year</option>                                                 
                                                <option value="2">2 years</option>                                                 
                                                <option value="3">3 years</option>                                                 
                                                <option value="NULL">Never</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Next File</label>                                             
                                            <input id="sos_date_due" type="date" placeholder="placeholder" class="form-control input-md" name="sos_date_due"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput1185">Notes</label>                                             
                                            <textarea class="form-control" id="sos_notes" rows="8" name="sos_notes"></textarea>                                             
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Physical Address</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">Office Type</label>                                             
                                            <select id="sos_office_type" class="form-control" name="sos_office_type"> 
                                                <option value="sangar">Sangar</option>                                                 
                                                <option value="client">Client Site</option>                                                 
                                                <option value="rental">Office Rental</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street</label>                                             
                                            <input id="phy_street" name="sos_phy_street" type="text" placeholder="placeholder" class="form-control input-md"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street 2</label>                                             
                                            <input id="phy_street_two" name="sos_phy_street_two" type="text" placeholder="placeholder" class="form-control input-md"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">City</label>                                             
                                            <input id="phy_city" type="text" placeholder="placeholder" class="form-control input-md" name="sos_phy_city"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">State</label>                                             
                                            <select id="sos_phy_state" class="form-control" name="sos_phy_state"> 
                                                <option>1</option>                                                 
                                                <option>2</option>                                                 
                                                <option>3</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Zipcode</label>                                             
                                            <input id="sos_phy_zip" type="text" placeholder="placeholder" class="form-control input-md" name="sos_phy_zip"> 
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Mail Address</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">Office Type</label>                                             
                                            <select id="mail_office_type" class="form-control" name="mail_office_type"> 
                                                <option value="sangar">Sangar</option>                                                 
                                                <option value="client">Client Site</option>                                                 
                                                <option value="rental">Office Rental</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street</label>                                             
                                            <input id="mail_street" type="text" placeholder="placeholder" class="form-control input-md" name="mail_street"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street 2</label>                                             
                                            <input id="mail_street_two" type="text" placeholder="placeholder" class="form-control input-md" name="mail_street_two"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">City</label>                                             
                                            <input id="mail_city" type="text" placeholder="placeholder" class="form-control input-md" name="mail_city"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">State</label>                                             
                                            <select id="mail_state" class="form-control" name="mail_state"> 
                                                <option>1</option>                                                 
                                                <option>2</option>                                                 
                                                <option>3</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Zipcode</label>                                             
                                            <input id="mail_zip" type="text" placeholder="placeholder" class="form-control input-md" name="mail_zip"> 
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Registered Agent</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Name</label>                                             
                                            <input id="ra_name" type="text" placeholder="placeholder" class="form-control input-md" name="ra_name"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street</label>                                             
                                            <input id="ra_street" type="text" placeholder="placeholder" class="form-control input-md" name="ra_street"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street 2</label>                                             
                                            <input id="ra_street_two" type="text" placeholder="placeholder" class="form-control input-md" name="ra_street_two"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">City</label>                                             
                                            <input id="ra_city" type="text" placeholder="placeholder" class="form-control input-md" name="ra_city"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">State</label>                                             
                                            <select id="ra_state" class="form-control" name="ra_state"> 
                                                <option>1</option>                                                 
                                                <option>2</option>                                                 
                                                <option>3</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Zipcode</label>                                             
                                            <input id="ra_zip" type="text" placeholder="placeholder" class="form-control input-md" name="ra_zip"> 
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                        </div>                         
                        <div class="tab-pane" id="tab2"> 
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Filing Next Due</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <b>Last Filed</b> 
                                            <input id="sec_date_filed" type="date" placeholder="placeholder" class="form-control input-md" name="sec_date_filed"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">Renew / File Every:</label>                                             
                                            <select id="sec_renew_interval" class="form-control" name="sec_renew_interval"> 
                                                <option value="1">1 year</option>                                                 
                                                <option value="2">2 years</option>                                                 
                                                <option value="3">3 years</option>                                                 
                                                <option value="NULL">Never</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Next File</label>                                             
                                            <input id="sec_date_due" name="sec_date_due" type="date" placeholder="placeholder" class="form-control input-md"> 
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Physical Address</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street</label>                                             
                                            <input id="sec_phy_street" type="text" placeholder="placeholder" class="form-control input-md" name="sec_phy_street"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street 2</label>                                             
                                            <input id="sec_phy_street_two" type="text" placeholder="placeholder" class="form-control input-md" name="sec_phy_street_two"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">City</label>                                             
                                            <input id="sec_phy_city" type="text" placeholder="placeholder" class="form-control input-md" name="sec_phy_city"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">State</label>                                             
                                            <select id="sec_phy_state" class="form-control" name="sec_phy_state"> 
                                                <option>1</option>                                                 
                                                <option>2</option>                                                 
                                                <option>3</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Zipcode</label>                                             
                                            <input id="sec_phy_zip" type="text" placeholder="placeholder" class="form-control input-md" name="sec_phy_zip"> 
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                            <div class="col-md-3"> 
                                <fieldset> 
                                    <legend>Mail Address</legend>                                     
                                    <div> 
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street</label>                                             
                                            <input id="sec_mail_street" type="text" placeholder="placeholder" class="form-control input-md" name="sec_mail_street"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Street 2</label>                                             
                                            <input id="sec_mail_street_two" type="text" placeholder="placeholder" class="form-control input-md" name="sec_mail_street_two"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">City</label>                                             
                                            <input id="sec_mail_city" type="text" placeholder="placeholder" class="form-control input-md" name="sec_mail_city"> 
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput740">State</label>                                             
                                            <select id="sec_mail_state" class="form-control" name="sec_mail_state"> 
                                                <option>1</option>                                                 
                                                <option>2</option>                                                 
                                                <option>3</option>                                                 
                                            </select>                                             
                                        </div>                                         
                                        <div class="form-group"> 
                                            <label class="control-label text-left" for="textinput">Zipcode</label>                                             
                                            <input id="sec_mail_zip" type="text" placeholder="placeholder" class="form-control input-md" name="sec_mail_zip"> 
                                        </div>                                         
                                    </div>                                     
                                </fieldset>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <!--/col-9-->             
        </div>         
        <button type="submit" class="btn btn-lg btn-success pull-right" style="position:relative;top:30px;right:15px ">Create</button>         
        {!! Form::close() !!}
        @include('includes.bodyend')   
    </body>     
</html>