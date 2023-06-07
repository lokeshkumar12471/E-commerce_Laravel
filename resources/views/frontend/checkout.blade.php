<x-guest-layout>
    <div class="modal fade" id="delete-address-modal" tabindex="-1" role="dialog" aria-labelledby="delete-address"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delete-address">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0 text-black">Are you sure you want to delete this xxxxx?</p>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary">DELETE</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add-address-modal" tabindex="-1" role="dialog" aria-labelledby="add-address"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-address">Add Delivery Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Company <span class="required">*</span></label>
                                <input class="form-control border-form-control" value="Osahan Company Ltd." placeholder
                                    type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country <span class="required">*</span></label>
                                <select class="select2 form-control border-form-control">
                                    <option value>Select Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia, Plurinational State of</option>
                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curaçao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran, Islamic Republic of</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory, Occupied</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="VI">Virgin Islands, U.S.</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>City <span class="required">*</span></label>
                                <select class="select2 form-control border-form-control">
                                    <option value>Select City</option>
                                    <option value="AF">Alaska</option>
                                    <option value="AX">New Hampshire</option>
                                    <option value="AL">Oregon</option>
                                    <option value="DZ">Toronto</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label">Zip Code <span class="required">*</span></label>
                                <input class="form-control border-form-control" value placeholder="123456"
                                    type="number">
                            </div>
                            <div class="form-group col-md-6">
                                <label>State <span class="required">*</span></label>
                                <select class="select2 form-control border-form-control">
                                    <option value>Select State</option>
                                    <option value="AF">California</option>
                                    <option value="AX">Florida</option>
                                    <option value="AL">Georgia</option>
                                    <option value="DZ">Idaho</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Delivery Area <span
                                        class="required text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Delivery Area">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="button-addon2"><i class="icofont-ui-pointer"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Complete Address <span
                                        class="required text-danger">*</span>
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="Complete Address e.g. house number, street name, landmark">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Delivery Instructions <span
                                        class="required text-danger">*</span>
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="Delivery Instructions e.g. Opposite Gold Souk Mall">
                            </div>
                            <div class="form-group mb-0 col-md-12">
                                <label for="inputPassword4">Nickname
                                </label>
                                <div class="btn-group btn-group-toggle d-flex justify-content-center"
                                    data-toggle="buttons">
                                    <label class="btn btn-info active">
                                        <input type="radio" name="options" id="option1" autocomplete="off"
                                            checked>
                                        Home
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> Work
                                    </label>
                                    <label class="btn btn-info">
                                        <input type="radio" name="options" id="option3" autocomplete="off">
                                        Other
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <section class="checkout-body py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout-body-left">
                        <div class="accordion checkout-step" id="accordionExample">
                            <div class="bg-white rounded shadow-sm mb-3 overflow-hidden">
                                <div class="card-header bg-white" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i class="icofont-simple-down float-right mt-1"></i>
                                            1. Phone Number Verification
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>We need your phone number so that we can update you about your order.</p>
                                        <form>
                                            <div class="form-row align-items-center">
                                                <div class="col-auto">
                                                    <label class="sr-only">phone number</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i
                                                                    class="icofont-smart-phone"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter phone number">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <button type="button" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo"
                                                        class="btn btn-primary mb-2 collapsed">NEXT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow-sm mb-3 overflow-hidden">
                                <div class="card-header bg-white" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="icofont-simple-down float-right mt-1"></i>
                                            2. Delivery Address
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="bg-white card addresses-item mb-0  shadow-sm">
                                                    <div class="gold-members p-3">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="badge badge-danger">Default - Home</span>
                                                                <h6 class="mb-3 mt-3 text-dark">Gurdeep Singh Osahan
                                                                </h6>
                                                                <p>Model Town Rd Delhi Bypass Rd, Jawaddi Taksal,
                                                                    Ludhiana, Punjab 141002, India
                                                                </p>
                                                                <p class="text-secondary">Phone: <span
                                                                        class="text-dark">+91 85680-79956</span></p>
                                                                <button data-toggle="collapse"
                                                                    data-target="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree" type="button"
                                                                    class="btn btn-primary btn-block">DELIVER
                                                                    HERE</button>
                                                                <hr>
                                                                <p class="mb-0 text-black"><a
                                                                        class="text-success mr-3" data-toggle="modal"
                                                                        data-target="#add-address-modal"
                                                                        href="#"><i class="icofont-ui-edit"></i>
                                                                        EDIT</a> <a class="text-danger"
                                                                        data-toggle="modal"
                                                                        data-target="#delete-address-modal"
                                                                        href="#"><i
                                                                            class="icofont-ui-delete"></i>
                                                                        DELETE</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="bg-white card addresses-item mb-0  shadow-sm">
                                                    <div class="gold-members p-3">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <span class="badge badge-secondary">Office</span>
                                                                <h6 class="mb-3 mt-3 text-dark">Askbootstrap</h6>
                                                                <p>MT, Model Town Rd, Pritm Nagar, Model Town, Ludhiana,
                                                                    Punjab 141002, India
                                                                </p>
                                                                <p class="text-secondary">Phone: <span
                                                                        class="text-dark">8568079956</span></p>
                                                                <button data-toggle="collapse"
                                                                    data-target="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree" type="button"
                                                                    class="btn btn-outline-primary btn-block">DELIVER
                                                                    HERE</button>
                                                                <hr>
                                                                <p class="mb-0 text-black"><a
                                                                        class="text-success mr-3" data-toggle="modal"
                                                                        data-target="#add-address-modal"
                                                                        href="#"><i class="icofont-ui-edit"></i>
                                                                        EDIT</a> <a class="text-danger"
                                                                        data-toggle="modal"
                                                                        data-target="#delete-address-modal"
                                                                        href="#"><i
                                                                            class="icofont-ui-delete"></i>
                                                                        DELETE</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <a data-toggle="modal" data-target="#add-address-modal"
                                                    href="#">
                                                    <div
                                                        class="bg-light p-4 border rounded  mb-0  shadow-sm text-center h-100 d-flex align-items-center">
                                                        <h6 class="text-center m-0 w-100"><i
                                                                class="icofont-plus-circle icofont-3x mb-5"></i><br><br>Add
                                                            New Address</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow-sm mb-3 overflow-hidden">
                                <div class="card-header bg-white" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            <i class="icofont-simple-down float-right mt-1"></i>
                                            3. Review Order
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body p-0">
                                        <div class="cart-table">
                                            <div class="table-responsive">
                                                <table class="table cart_summary">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Description</th>
                                                            <th>Delivery Options</th>
                                                            <th>Quantity</th>
                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="cart_product"><a href="#"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('frontend/img/item/1.jpg') }}"
                                                                        alt></a>
                                                            </td>
                                                            <td class="cart_description">
                                                                <h6 class="product-name"><a href="#">Floret
                                                                        Printed Ivory Skater Dress </a></h6>
                                                                <p class="f-12 text-secondary mb-1 pt-1 pb-1">5/4
                                                                    Review</p>
                                                                <hr>
                                                                <a class="text-info" href="#"><i
                                                                        class="icofont-heart"></i> Move to
                                                                    Shortlist</a> &nbsp; &nbsp; <a class="text-danger"
                                                                    href="#"><i class="icofont-trash"></i>
                                                                    Remove Item</a>
                                                            </td>
                                                            <td>
                                                                <p class="text-secondary"><i
                                                                        class="icofont-check-circled"></i> 17 Aug to 19
                                                                    Aug <span class="text-dark">+$. 49</span></p>
                                                            </td>
                                                            <td class="qty">
                                                                <select class="custom-select custom-select-sm">
                                                                    <option selected>1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                </select>
                                                            </td>
                                                            <td class="price">
                                                                <p class="f-14 mb-0 text-dark">$250.00<br> <del
                                                                        class="small text-secondary">$ 500.00 </del>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cart_product"><a href="#"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('frontend/img/item/2.jpg') }}"
                                                                        alt></a>
                                                            </td>
                                                            <td class="cart_description">
                                                                <h6 class="product-name"><a href="#">Floret
                                                                        Printed Ivory Skater Dress </a></h6>
                                                                <p class="f-12 text-secondary mb-1 pt-1 pb-1">5/4
                                                                    Review</p>
                                                                <hr>
                                                                <a class="text-info" href="#"><i
                                                                        class="icofont-heart"></i> Move to
                                                                    Shortlist</a> &nbsp; &nbsp; <a class="text-danger"
                                                                    href="#"><i class="icofont-trash"></i>
                                                                    Remove Item</a>
                                                            </td>
                                                            <td>
                                                                <p class="text-secondary"><i
                                                                        class="icofont-check-circled"></i> 17 Aug to 19
                                                                    Aug <span class="text-dark">+$. 49</span></p>
                                                            </td>
                                                            <td class="qty">
                                                                <select class="custom-select custom-select-sm">
                                                                    <option selected>1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                </select>
                                                            </td>
                                                            <td class="price">
                                                                <p class="f-14 mb-0 text-dark">$250.00 <br><del
                                                                        class="small text-secondary">$ 500.00 </del>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cart_product"><a href="#"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('frontend/img/item/3.jpg') }}"
                                                                        alt></a>
                                                            </td>
                                                            <td class="cart_description">
                                                                <h6 class="product-name"><a href="#">Floret
                                                                        Printed Ivory Skater Dress </a></h6>
                                                                <p class="f-12 text-secondary mb-1 pt-1 pb-1">5/4
                                                                    Review</p>
                                                                <hr>
                                                                <a class="text-info" href="#"><i
                                                                        class="icofont-heart"></i> Move to
                                                                    Shortlist</a> &nbsp; &nbsp; <a class="text-danger"
                                                                    href="#"><i class="icofont-trash"></i>
                                                                    Remove Item</a>
                                                            </td>
                                                            <td>
                                                                <p class="text-secondary"><i
                                                                        class="icofont-check-circled"></i> 17 Aug to 19
                                                                    Aug <span class="text-dark">+$. 49</span></p>
                                                            </td>
                                                            <td class="qty">
                                                                <select class="custom-select custom-select-sm">
                                                                    <option selected>1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                </select>
                                                            </td>
                                                            <td class="price">
                                                                <p class="f-14 mb-0 text-dark">$250.00<br><del
                                                                        class="small text-secondary">$ 500.00 </del>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="cart_product"><a href="#"><img
                                                                        class="img-fluid"
                                                                        src="{{ asset('frontend/img/item/4.jpg') }}"
                                                                        alt></a>
                                                            </td>
                                                            <td class="cart_description">
                                                                <h6 class="product-name"><a href="#">Floret
                                                                        Printed Ivory Skater Dress </a></h6>
                                                                <p class="f-12 text-secondary mb-1 pt-1 pb-1">5/4
                                                                    Review</p>
                                                                <hr>
                                                                <a class="text-info" href="#"><i
                                                                        class="icofont-heart"></i> Move to
                                                                    Shortlist</a> &nbsp; &nbsp; <a class="text-danger"
                                                                    href="#"><i class="icofont-trash"></i>
                                                                    Remove Item</a>
                                                            </td>
                                                            <td>
                                                                <p class="text-secondary"><i
                                                                        class="icofont-check-circled"></i> 17 Aug to 19
                                                                    Aug <span class="text-dark">+$. 49</span></p>
                                                            </td>
                                                            <td class="qty">
                                                                <select class="custom-select custom-select-sm">
                                                                    <option selected>1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                </select>
                                                            </td>
                                                            <td class="price">
                                                                <p class="f-14 mb-0 text-dark">$250.00 <br><del
                                                                        class="small text-secondary">$ 500.00 </del>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3">
                                                                <form class="form-inline float-right">
                                                                    <div class="form-group">
                                                                        <input type="text"
                                                                            placeholder="Have a promo code?"
                                                                            class="form-control border-form-control form-control-sm">
                                                                    </div>
                                                                    &nbsp;
                                                                    <button
                                                                        class="btn btn-outline-primary float-left btn-sm"
                                                                        type="submit">Apply</button>
                                                                </form>
                                                            </td>
                                                            <td colspan="2">Discount : $237.88 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="3">Total products (tax
                                                                incl.)</td>
                                                            <td colspan="2">$437.88 </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="3"><strong>You
                                                                    Pay</strong></td>
                                                            <td class="text-danger" colspan="2"><strong>$337.88
                                                                </strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <button data-toggle="collapse" data-target="#collapsefour"
                                                aria-expanded="false" aria-controls="collapsefour"
                                                class="btn btn-primary btn-lg btn-block text-left"
                                                type="button"><span class="float-left"><i
                                                        class="icofont icofont-cart"></i> PROCEED TO
                                                    PAYMENT
                                                </span><span class="float-right"><strong>$1200.69</strong> <span
                                                        class="icofont icofont-bubble-right"></span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow-sm overflow-hidden">
                                <div class="card-header bg-white" id="headingfour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapsefour" aria-expanded="true"
                                            aria-controls="collapsefour">
                                            <i class="icofont-simple-down float-right mt-1"></i> 4. Make Payment
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsefour" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body osahan-payment">
                                        <div class="row">
                                            <div class="col-sm-4 pr-0">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-pills-home-tab"
                                                        data-toggle="pill" href="#v-pills-home" role="tab"
                                                        aria-controls="v-pills-home" aria-selected="true"><i
                                                            class="icofont-credit-card"></i>
                                                        Credit/Debit Cards</a>
                                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                        href="#v-pills-profile" role="tab"
                                                        aria-controls="v-pills-profile" aria-selected="false"><i
                                                            class="icofont-id-card"></i> Shop Cards</a>
                                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                                        href="#v-pills-messages" role="tab"
                                                        aria-controls="v-pills-messages" aria-selected="false"><i
                                                            class="icofont-card"></i> Credit</a>
                                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                                        href="#v-pills-settings" role="tab"
                                                        aria-controls="v-pills-settings" aria-selected="false"><i
                                                            class="icofont-bank-alt"></i> Netbanking</a>
                                                    <a class="nav-link" id="v-pills-cash-tab" data-toggle="pill"
                                                        href="#v-pills-cash" role="tab"
                                                        aria-controls="v-pills-cash" aria-selected="false"><i
                                                            class="icofont-money"></i> Pay on
                                                        Delivery</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 pl-0">
                                                <div class="tab-content h-100" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home"
                                                        role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <h6 class="mb-3 mt-0 mb-3">Add new card</h6>
                                                        <p>WE ACCEPT <span class="osahan-card">
                                                                <i class="icofont-visa-alt"></i> <i
                                                                    class="icofont-mastercard-alt"></i> <i
                                                                    class="icofont-american-express-alt"></i> <i
                                                                    class="icofont-payoneer-alt"></i> <i
                                                                    class="icofont-apple-pay-alt"></i> <i
                                                                    class="icofont-bank-transfer-alt"></i> <i
                                                                    class="icofont-discover-alt"></i> <i
                                                                    class="icofont-jcb-alt"></i>
                                                            </span>
                                                        </p>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="inputPassword4">Card number</label>
                                                                    <div class="input-group">
                                                                        <input type="number" class="form-control"
                                                                            placeholder="Card number">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-outline-secondary"
                                                                                type="button" id="button-addon2"><i
                                                                                    class="icofont-card"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <label>Valid through(MM/YY)
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Enter Valid through(MM/YY)">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>CVV
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Enter CVV Number">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Name on card
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter Card number">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck1">
                                                                        <label class="custom-control-label"
                                                                            for="customCheck1">Securely save this card
                                                                            for a faster checkout next time.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 mb-0">
                                                                    <a href="thanks.html"
                                                                        class="btn btn-primary btn-block btn-lg">PAY
                                                                        $1329
                                                                        <i class="icofont-long-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                        aria-labelledby="v-pills-profile-tab">
                                                        <h6 class="mb-3 mt-0 mb-3">Add new shop Card</h6>
                                                        <p>WE ACCEPT <span class="osahan-card">
                                                                <i class="icofont-sage-alt"></i> <i
                                                                    class="icofont-stripe-alt"></i> <i
                                                                    class="icofont-google-wallet-alt-1"></i>
                                                            </span>
                                                        </p>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label for="inputPassword4">Card number</label>
                                                                    <div class="input-group">
                                                                        <input type="number" class="form-control"
                                                                            placeholder="Card number">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-outline-secondary"
                                                                                type="button" id="button-addon2"><i
                                                                                    class="icofont-card"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <label>Valid through(MM/YY)
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Enter Valid through(MM/YY)">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>CVV
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                        placeholder="Enter CVV Number">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Name on card
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter Card number">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            id="customCheck1">
                                                                        <label class="custom-control-label"
                                                                            for="customCheck1">Securely save this card
                                                                            for a faster checkout next time.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12 mb-0">
                                                                    <a href="thanks.html"
                                                                        class="btn btn-primary btn-block btn-lg">PAY
                                                                        $1329
                                                                        <i class="icofont-long-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                        aria-labelledby="v-pills-messages-tab">
                                                        <div
                                                            class="border shadow-sm-sm p-4 d-flex align-items-center bg-white mb-3">
                                                            <i class="icofont-apple-pay-alt mr-3 icofont-3x"></i>
                                                            <div class="d-flex flex-column">
                                                                <h5 class="card-title">Apple Pay</h5>
                                                                <p class="card-text">Apple Pay lets you order now &
                                                                    pay later at no extra cost.</p>
                                                                <a href="#"
                                                                    class="card-link font-weight-bold">LINK ACCOUNT <i
                                                                        class="icofont-link-alt"></i></a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="border shadow-sm-sm p-4 d-flex bg-white align-items-center mb-3">
                                                            <i class="icofont-paypal-alt mr-3 icofont-3x"></i>
                                                            <div class="d-flex flex-column">
                                                                <h5 class="card-title">Paypal</h5>
                                                                <p class="card-text">Paypal lets you order now & pay
                                                                    later at no extra cost.</p>
                                                                <a href="#"
                                                                    class="card-link font-weight-bold">LINK ACCOUNT <i
                                                                        class="icofont-link-alt"></i></a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="border shadow-sm-sm p-4 d-flex bg-white align-items-center">
                                                            <i class="icofont-diners-club mr-3 icofont-3x"></i>
                                                            <div class="d-flex flex-column">
                                                                <h5 class="card-title">Diners Club</h5>
                                                                <p class="card-text">Diners Club lets you order now &
                                                                    pay later at no extra cost.</p>
                                                                <a href="#"
                                                                    class="card-link font-weight-bold">LINK ACCOUNT <i
                                                                        class="icofont-link-alt"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                        aria-labelledby="v-pills-settings-tab">
                                                        <h6 class="mb-3 mt-0 mb-3">Netbanking</h6>
                                                        <form>
                                                            <div class="btn-group btn-group-toggle"
                                                                data-toggle="buttons">
                                                                <label class="btn btn-outline-primary active">
                                                                    <input type="radio" name="options"
                                                                        id="option1" autocomplete="off" checked>
                                                                    HDFC <i class="icofont-check-circled"></i>
                                                                </label>
                                                                <label class="btn btn-outline-primary">
                                                                    <input type="radio" name="options"
                                                                        id="option2" autocomplete="off"> ICICI <i
                                                                        class="icofont-check-circled"></i>
                                                                </label>
                                                                <label class="btn btn-outline-primary">
                                                                    <input type="radio" name="options"
                                                                        id="option3" autocomplete="off"> AXIS <i
                                                                        class="icofont-check-circled"></i>
                                                                </label>
                                                            </div>
                                                            <hr>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label>Select Bank
                                                                    </label>
                                                                    <br>
                                                                    <select class="custom-select form-control">
                                                                        <option selected>Bank</option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-12 mb-0">
                                                                    <a href="thanks.html"
                                                                        class="btn btn-primary btn-block btn-lg">PAY
                                                                        $1329
                                                                        <i class="icofont-long-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-cash" role="tabpanel"
                                                        aria-labelledby="v-pills-cash-tab">
                                                        <h6 class="mb-3 mt-0 mb-3">Cash</h6>
                                                        <p>Please keep exact change handy to help us serve you better
                                                        </p>
                                                        <hr>
                                                        <form>
                                                            <a href="thanks.html"
                                                                class="btn btn-primary btn-block btn-lg">PAY $1329
                                                                <i class="icofont-long-arrow-right"></i></a>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="osahan-cart-item">
                        <h5 class="mb-3 mt-0 text-dark">Summary <span class="small text-success">(5 Item)</span>
                        </h5>
                        <div class="bg-white rounded shadow-sm mb-3">
                            <div class="cart-list-product">
                                <a class="float-right remove-cart" href="#"><i
                                        class="icofont icofont-close-circled"></i></a>
                                <img class="img-fluid" src="{{ asset('frontend/img/item/1.jpg') }}" alt>
                                <span class="badge badge-success">50% OFF</span>
                                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                    <span>613</span>
                                </div>
                                <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$
                                        500.00 </del></p>
                                <p class="f-12 text-secondary float-left quantity-text">Quantity: 1</p>
                            </div>
                            <div class="cart-list-product">
                                <a class="float-right remove-cart" href="#"><i
                                        class="icofont icofont-close-circled"></i></a>
                                <img class="img-fluid" src="{{ asset('frontend/img/item/2.jpg') }}" alt>
                                <span class="badge badge-danger">55% OFF</span>
                                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                    <span>613</span>
                                </div>
                                <p class="f-14 mb-0 text-dark float-right">$250.00 <del class="small text-secondary">$
                                        500.00 </del> <span
                                        class="bg-info rounded-sm pl-1 ml-1 pr-1 text-white small">NEW</span> </p>
                                <p class="f-12 text-secondary float-left quantity-text">Quantity: 1</p>
                            </div>
                            <div class="cart-list-product border-0">
                                <a class="float-right remove-cart" href="#"><i
                                        class="icofont icofont-close-circled"></i></a>
                                <img class="img-fluid" src="{{ asset('frontend/img/item/3.jpg') }}" alt>
                                <span class="badge badge-info">NEW</span>
                                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i
                                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                                    <span>613</span>
                                </div>
                                <p class="f-14 mb-0 text-dark float-right">$900.00 <del class="small text-secondary">$
                                        500.00 </del></p>
                                <p class="f-12 text-secondary float-left quantity-text">Quantity: 1</p>
                            </div>
                        </div>
                        <div class="mb-3 bg-white rounded shadow-sm p-3 clearfix">
                            <p class="mb-1">Item Total <span class="float-right text-dark">$3140</span></p>
                            <p class="mb-1">GST Charges 10% <span class="float-right text-dark">$62.8</span></p>
                            <p class="mb-1">Delivery Fee <span class="text-info" data-toggle="tooltip"
                                    data-placement="top" title="Total discount breakup">
                                    <i class="icofont-info-circle"></i>
                                </span> <span class="float-right text-dark">$10</span>
                            </p>
                            <p class="mb-1 text-info">Total Discount
                                <span class="float-right text-info">$1884</span>
                            </p>
                            <hr />
                            <h6 class="font-weight-bold text-danger mb-0">TO PAY <span
                                    class="float-right">$1329</span>
                            </h6>
                        </div>
                    </div>
                    <div class="text-info">
                        You have saved <strong>$1,884</strong> on the bill
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cart-sidebar">
        <div class="cart-sidebar-header">
            <h5>
                My Cart <span class="text-info">(5 item)</span> <a data-toggle="offcanvas" class="float-right"
                    href="#"><i class="icofont icofont-close-line"></i>
                </a>
            </h5>
        </div>
        <div class="cart-sidebar-body">
            <div class="cart-list-product">
                <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
                <img class="img-fluid" src="{{ asset('frontend/img/item/1.jpg') }}" alt>
                <span class="badge badge-success">50% OFF</span>
                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                    <span>613</span>
                </div>
                <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$ 500.00 </del>
                </p>
                <span class="count-number float-left">
                    <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i>
                    </button>
                    <input class="count-number-input" type="text" value="1" readonly>
                    <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i>
                    </button>
                </span>
            </div>
            <div class="cart-list-product">
                <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
                <img class="img-fluid" src="{{ asset('frontend/img/item/2.jpg') }}" alt>
                <span class="badge badge-danger">55% OFF</span>
                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                    <span>613</span>
                </div>
                <p class="f-14 mb-0 text-dark float-right">$250.00 <del class="small text-secondary">$ 500.00 </del>
                    <span class="bg-info rounded-sm pl-1 ml-1 pr-1 text-white small">NEW</span>
                </p>
                <span class="count-number float-left">
                    <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i>
                    </button>
                    <input class="count-number-input" type="text" value="1" readonly>
                    <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i>
                    </button>
                </span>
            </div>
            <div class="cart-list-product">
                <a class="float-right remove-cart" href="#"><i class="icofont icofont-close-circled"></i></a>
                <img class="img-fluid" src="{{ asset('frontend/img/item/3.jpg') }}" alt>
                <span class="badge badge-info">NEW</span>
                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                    <span>613</span>
                </div>
                <p class="f-14 mb-0 text-dark float-right">$900.00 <del class="small text-secondary">$ 500.00 </del>
                    <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span>
                </p>
                <span class="count-number float-left">
                    <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i>
                    </button>
                    <input class="count-number-input" type="text" value="1" readonly>
                    <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i>
                    </button>
                </span>
            </div>
            <div class="cart-list-product">
                <a class="float-right remove-cart" href="#"><i
                        class="icofont icofont-close-circled"></i></a>
                <img class="img-fluid" src="{{ asset('frontend/img/item/4.jpg') }}" alt>
                <span class="badge badge-danger">NEW</span>
                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                    <span>613</span>
                </div>
                <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$ 500.00 </del>
                    <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span>
                </p>
                <span class="count-number float-left">
                    <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i>
                    </button>
                    <input class="count-number-input" type="text" value="1" readonly>
                    <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i>
                    </button>
                </span>
            </div>
            <div class="cart-list-product">
                <a class="float-right remove-cart" href="#"><i
                        class="icofont icofont-close-circled"></i></a>
                <img class="img-fluid" src="{{ asset('frontend/img/item/5.jpg') }}" alt>
                <span class="badge badge-info">NEW</span>
                <h5><a href="#">Floret Printed Ivory Skater Dress</a></h5>
                <div class="stars-rating"><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star active"></i><i
                        class="icofont icofont-star active"></i><i class="icofont icofont-star"></i>
                    <span>613</span>
                </div>
                <p class="f-14 mb-0 text-dark float-right">$135.00 <del class="small text-secondary">$ 500.00 </del>
                    <span class="bg-danger  rounded-sm pl-1 ml-1 pr-1 text-white small"> 50% OFF</span>
                </p>
                <span class="count-number float-left">
                    <button class="btn btn-outline-secondary  btn-sm left dec"> <i class="icofont-minus"></i>
                    </button>
                    <input class="count-number-input" type="text" value="1" readonly>
                    <button class="btn btn-outline-secondary btn-sm right inc"> <i class="icofont-plus"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="cart-sidebar-footer">
            <div class="cart-store-details">
                <p>Sub Total <strong class="float-right">$900.69</strong></p>
                <p>Delivery Charges <strong class="float-right text-danger">+ $29.69</strong></p>
                <h6>Your total savings <strong class="float-right text-danger">$55 (42.31%)</strong></h6>
            </div>
            <a href="checkout.html"><button class="btn btn-primary btn-lg btn-block text-left"
                    type="button"><span class="float-left"><i class="icofont icofont-cart"></i> Proceed to
                        Checkout </span><span class="float-right"><strong>$1200.69</strong> <span
                            class="icofont icofont-bubble-right"></span></span></button></a>
        </div>
    </div>
</x-guest-layout>
