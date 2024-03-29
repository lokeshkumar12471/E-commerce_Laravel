<x-guest-layout>
    <div class="modal fade" id="edit-profile-modal" tabindex="-1" role="dialog" aria-labelledby="edit-profile"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-profile">Edit profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action={{ route('profile_update', $userdetails[0]->id) }}>
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-0">
                                <label>Name
                                </label>
                                <input type="text" name="name" value="{{ $userdetails[0]->name }}"
                                    class="form-control" placeholder="Enter Your Name
                              ">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Phone number
                                </label>
                                <input type="text" name="number" value="{{ $userdetails[0]->number }}"
                                    class="form-control" placeholder="Enter Phone number">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Email id
                                </label>
                                <input type="text" name="email" value="{{ $userdetails[0]->email }}"
                                    class="form-control" placeholder="Enter Email id
                              ">
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn d-flex w-50 text-center justify-content-center btn-outline-primary"
                        data-dismiss="modal">CANCEL
                    </button><button type="submit"
                        class="btn d-flex w-50 text-center justify-content-center btn-primary">UPDATE</button>
                </div>
                </form>
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
                                <label for="inputPassword4">Delivery Area</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Delivery Area">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="button-addon2"><i class="icofont-ui-pointer"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Complete Address
                                </label>
                                <input type="text" class="form-control"
                                    placeholder="Complete Address e.g. house number, street name, landmark">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Delivery Instructions
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
                                            checked> Home
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


    <div class="modal fade" id="action-to-vieworderlist" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Order View List</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Product Size</th>
                                    <th>Product Quantity</th>
                                    <th>Product Price</th>
                                </tr>
                            </thead>
                            <tbody id="modal-product-table"></tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <h5>Total: <span id="modal-total-amount" class="price text-success"></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-address-modal" tabindex="-1" role="dialog"
        aria-labelledby="delete-address" aria-hidden="true">
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

    <section class="py-5 account-page bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="osahan-account-page-left overflow-hidden shadow-sm rounded bg-white h-100">
                        <div class="p-4">
                            <div class="osahan-user text-center">
                                <div class="osahan-user-media">
                                    <img class="mb-3 rounded-pill shadow-sm mt-1"
                                        src="{{ asset('frontend/img/user/1.jpg') }}" alt="gurdeep singh osahan">
                                    <div class="osahan-user-media-body">
                                        <h6 class="mb-2 font-weight-bold"> {{ $userdetails[0]->name }}</h6>
                                        <p class="mb-1">{{ $userdetails[0]->number }}</p>
                                        <p>
                                            {{ $userdetails[0]->email }}
                                        </p>
                                        <p class="mb-0 font-weight-bold"><a class="btn btn-outline-info btn-sm"
                                                data-toggle="modal" data-target="#edit-profile-modal"
                                                href="#"><i class="icofont-ui-edit"></i> EDIT</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile"
                                    role="tab" aria-controls="my-profile" aria-selected="true"><i
                                        class="icofont-ui-user"></i> My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="my-address-tab" data-toggle="tab" href="#my-address"
                                    role="tab" aria-controls="my-address" aria-selected="false"><i
                                        class="icofont-location-pin"></i> My Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="wish-list-tab" data-toggle="tab" href="#wish-list"
                                    role="tab" aria-controls="wish-list" aria-selected="false"><i
                                        class="icofont-heart"></i> Wish List</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" id="order-list-tab" data-toggle="tab" href="#order-list"
                                    role="tab" aria-controls="order-list" aria-selected="false"><i
                                        class="icofont-list"></i> Order List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="order-status-tab" data-toggle="tab" href="#order-status"
                                    role="tab" aria-controls="order-status" aria-selected="false"><i
                                        class="icofont-file-document"></i> Order Status</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"><i class="icofont-logout"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="osahan-account-page-right rounded shadow-sm bg-white p-4 h-100">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="my-profile" role="tabpanel"
                                aria-labelledby="my-profile-tab">
                                <h4 class="text-dark mt-0 mb-4">My Profile</h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable. If you are going to use a passage of Lorem
                                    Ipsum... </p>
                                <form method="post" action={{ route('profile_update', $userdetails[0]->id) }}>
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">First Name <span
                                                        class="required">*</span></label>
                                                <input class="form-control border-form-control" name="name"
                                                    value={{ $userdetails[0]->name }} placeholder="Gurdeep"
                                                    type="text">
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Last Name <span
                                                        class="required">*</span></label>
                                                <input class="form-control border-form-control" value
                                                    placeholder="Osahan" type="text">
                                            </div>
                                        </div> --}}

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Phone <span
                                                        class="required">*</span></label>
                                                <input class="form-control border-form-control" name="number"
                                                    value={{ $userdetails[0]->number }}
                                                    placeholder="Enter Your Phone Number" type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="control-label">Email Address <span
                                                        class="required">*</span></label>
                                                <input class="form-control border-form-control "
                                                    value={{ $userdetails[0]->email }}
                                                    placeholder="Enter Your Email Address" name="email"
                                                    type="email">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Country <span
                                                        class="required">*</span></label>
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
                                                    <option value="CD">Congo, the Democratic Republic of the
                                                    </option>
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
                                                    <option value="KP">Korea, Democratic People's Republic of
                                                    </option>
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
                                                    <option value="MK">Macedonia, the former Yugoslav Republic of
                                                    </option>
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
                                                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha
                                                    </option>
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
                                                    <option value="GS">South Georgia and the South Sandwich Islands
                                                    </option>
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
                                                    <option value="UM">United States Minor Outlying Islands
                                                    </option>
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
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">City <span
                                                        class="required">*</span></label>
                                                <select class="select2 form-control border-form-control">
                                                    <option value>Select City</option>
                                                    <option value="AF">Alaska</option>
                                                    <option value="AX">New Hampshire</option>
                                                    <option value="AL">Oregon</option>
                                                    <option value="DZ">Toronto</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Zip Code <span
                                                        class="required">*</span></label>
                                                <input class="form-control border-form-control" value
                                                    placeholder="123456" type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">State <span
                                                        class="required">*</span></label>
                                                <select class="select2 form-control border-form-control">
                                                    <option value>Select State</option>
                                                    <option value="AF">California</option>
                                                    <option value="AX">Florida</option>
                                                    <option value="AL">Georgia</option>
                                                    <option value="DZ">Idaho</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label">Address <span
                                                        class="required">*</span></label>
                                                <textarea class="form-control border-form-control"></textarea>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-sm-12 text-right">
                                            <button type="button" class="btn btn-outline-danger"
                                                href="{{ route('profile') }}"> Cancel </button>
                                            <button type="submit" class="btn btn-primary" name="submit"> Save
                                                Changes </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="my-address" role="tabpanel"
                                aria-labelledby="my-address-tab">
                                <h4 class="text-dark mt-0 mb-4">My Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-3 shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-4"><i class="icofont-ui-home icofont-3x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="badge badge-danger">Default - Home</span>
                                                        <h6 class="mb-3 mt-1 text-dark">Gurdeep Singh</h6>
                                                        <p>Delhi Bypass Rd GK mall Near, Jawaddi Taksal, Ludhiana,
                                                            Punjab 141002, India
                                                        </p>
                                                        <p class="text-secondary">Phone: <span
                                                                class="text-dark">8872306061</span></p>
                                                        <hr>
                                                        <p class="mb-0 text-black"><a class="text-success mr-3"
                                                                data-toggle="modal" data-target="#add-address-modal"
                                                                href="#"><i class="icofont-ui-edit"></i>
                                                                EDIT</a> <a class="text-danger" data-toggle="modal"
                                                                data-target="#delete-address-modal" href="#"><i
                                                                    class="icofont-ui-delete"></i>
                                                                DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-3 shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-4"><i class="icofont-briefcase icofont-3x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="badge badge-secondary">Office</span>
                                                        <h6 class="mb-3 mt-1 text-dark">Askbootstrap</h6>
                                                        <p>MT, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab
                                                            141002, India
                                                        </p>
                                                        <p class="text-secondary">Phone: <span
                                                                class="text-dark">8872306061</span></p>
                                                        <hr>
                                                        <p class="mb-0 text-black"><a class="text-success mr-3"
                                                                data-toggle="modal" data-target="#add-address-modal"
                                                                href="#"><i class="icofont-ui-edit"></i>
                                                                EDIT</a> <a class="text-danger" data-toggle="modal"
                                                                data-target="#delete-address-modal" href="#"><i
                                                                    class="icofont-ui-delete"></i>
                                                                DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bg-white card addresses-item mb-3 shadow-sm">
                                            <div class="gold-members p-4">
                                                <div class="media">
                                                    <div class="mr-4"><i
                                                            class="icofont-location-pin icofont-3x"></i></div>
                                                    <div class="media-body">
                                                        <span class="badge badge-secondary">Other</span>
                                                        <h6 class="mb-3 mt-1 text-dark">Askbootstrap</h6>
                                                        <p>HHG, Model Town Rd, Pritm Nagar, Model Town, Ludhiana, Punjab
                                                            141002, India
                                                        </p>
                                                        <p class="text-secondary">Phone: <span
                                                                class="text-dark">8872306061</span></p>
                                                        <hr>
                                                        <p class="mb-0 text-black"><a class="text-success mr-3"
                                                                data-toggle="modal" data-target="#add-address-modal"
                                                                href="#"><i class="icofont-ui-edit"></i>
                                                                EDIT</a> <a class="text-danger" data-toggle="modal"
                                                                data-target="#delete-address-modal" href="#"><i
                                                                    class="icofont-ui-delete"></i>
                                                                DELETE</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <a data-toggle="modal" data-target="#add-address-modal" href="#">
                                            <div
                                                class="bg-light border rounded  mb-3  shadow-sm text-center h-100 d-flex align-items-center">
                                                <h6 class="text-center m-0 w-100"><i
                                                        class="icofont-plus-circle icofont-3x mb-5"></i><br><br>Add
                                                    New Address</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wish-list" role="tabpanel"
                                aria-labelledby="wish-list-tab">
                                <h4 class="text-dark mt-0 mb-4">Wish List</h4>
                                <div class="row">
                                    @foreach ($wishlist as $favourite)
                                        <div class="col-6 col-md-4">

                                            <div
                                                class="card list-item bg-white rounded overflow-hidden position-relative shadow-sm">
                                                <span class="like-icon"><a href="#"> <i
                                                            class="icofont icofont-close-line"
                                                            onclick="deleteFromWishlist('{{ $favourite->id }}')"></i></a></span>
                                                <a href="#">
                                                    <span class="badge badge-danger">NEW</span>
                                                    <img src="{{ $favourite->wishlist_image }}" class="card-img-top"
                                                        alt="..."></a>
                                                <div class="card-body">
                                                    <h6 class="card-title mb-1">{{ $favourite->wishlist_productname }}
                                                    </h6>
                                                    <div class="stars-rating"><i
                                                            class="icofont icofont-star active"></i><i
                                                            class="icofont icofont-star active"></i><i
                                                            class="icofont icofont-star active"></i><i
                                                            class="icofont icofont-star active"></i><i
                                                            class="icofont icofont-star"></i> <span>613</span></div>
                                                    <p class="mb-0 text-dark">${{ $favourite->wishlist_productprice }}
                                                        <span class="text-black-50"><del>$500.00 </del></span>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"
                                                aria-disabled="true">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="tab-pane fade show active" id="order-list" role="tabpanel"
                                aria-labelledby="order-list-tab">
                                <h4 class="text-dark mt-0 mb-4">Order List</h4>
                                <div class="order-list-tabel-main table-responsive">
                                    <table class="datatabel table table-striped table-bordered order-list-tabel"
                                        width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Date Purchased</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderdetails as $orders)
                                                <tr>
                                                    <td>{{ $orders->id }}</td>
                                                    @php
                                                        $timestamp = time(); // Get the current timestamp
                                                        $formattedDateTime = date('F j, Y h:i:s A', $timestamp);
                                                    @endphp
                                                    <td>{{ $formattedDateTime }}</td>
                                                    <td><span class="badge badge-danger">{{ $orders->status }}</span>
                                                    </td>
                                                    <td>{{ $orders->total_price }}</td>
                                                    <td>
                                                        <a class="btn btn-info btn-sm" data-toggle="modal"
                                                            onclick="viewOrder('{{ $orders->id }}', '{{ $orders->product_id }}')">
                                                            <i class="icofont-eye-alt"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="order-status" role="tabpanel"
                                aria-labelledby="order-status-tab">
                                <h4 class="text-dark mt-0 mb-4">Your Order Status</h4>
                                <div class="status-main">
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <div class="statustop">
                                                <p class="mb-2"><strong>Status:</strong> OnHold</p>
                                                <p class="mb-2"><strong>Order Date:</strong> Saturday, April 09,2019
                                                </p>
                                                <p class="mb-2"><strong>Order Number:</strong> #6469 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    Billing Address
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-2 text-dark"><strong>TITLE</strong></p>
                                                    <p class="card-text mb-2"><strong>Gurdeep Singh Osahan</strong>
                                                    </p>
                                                    <p class="card-text mb-0"> 4894 Burke Street<br>
                                                        North Billerica, MA 01862
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    Shipping Address
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-2 text-dark"><strong>TITLE</strong></p>
                                                    <p class="card-text mb-2"><strong>Gurdeep Singh Osahan</strong>
                                                    </p>
                                                    <p class="card-text mb-0"> 4894 Burke Street<br>
                                                        North Billerica, MA 01862
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    Payment Method
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text text-dark mb-2">Payment via Master Card
                                                        <strong><span class="badge badge-success">Paid</span></strong>
                                                    </p>
                                                    <p class="card-text mb-2"><strong>Name Of card </strong>: Gurdeep
                                                        Osahan</p>
                                                    <p class="card-text mb-0"><strong>Card Number </strong>: 00335 251
                                                        124</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    Shipping Method
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text text-dark mb-2"> via Post Air Mail #4502</p>
                                                    <p class="card-text mb-2"><strong>Gurdeep Singh Osahan</strong>
                                                    </p>
                                                    <p class="card-text mb-0"> 4894 Burke Street North Billerica</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Order Items
                                                </div>
                                                <div class="card-block padding-none">
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
                                                                        <td class="cart_product"><a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="{{ asset('frontend/img/item/1.jpg') }}"
                                                                                    alt></a></td>
                                                                        <td class="cart_description">
                                                                            <h6 class="product-name"><a
                                                                                    href="#">Floret Printed
                                                                                    Ivory Skater Dress </a></h6>
                                                                            <p
                                                                                class="f-12 text-secondary mb-1 pt-1 pb-1">
                                                                                5/4 Review</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-secondary mb-0"><i
                                                                                    class="icofont-check-circled"></i>
                                                                                17 Aug to 19 Aug <span
                                                                                    class="text-dark">+$. 49</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="qty">
                                                                            <select
                                                                                class="custom-select custom-select-sm"
                                                                                disabled>
                                                                                <option selected>1</option>
                                                                                <option value="1">2</option>
                                                                                <option value="2">3</option>
                                                                                <option value="3">4</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="price">
                                                                            <p class="f-14 mb-0 text-dark float-right">
                                                                                $250.00 <del
                                                                                    class="small text-secondary">$
                                                                                    500.00 </del></p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_product"><a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="{{ asset('frontend/img/item/2.jpg') }}"
                                                                                    alt></a></td>
                                                                        <td class="cart_description">
                                                                            <h6 class="product-name"><a
                                                                                    href="#">Floret Printed
                                                                                    Ivory Skater Dress </a></h6>
                                                                            <p
                                                                                class="f-12 text-secondary mb-1 pt-1 pb-1">
                                                                                5/4 Review</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-secondary mb-0"><i
                                                                                    class="icofont-check-circled"></i>
                                                                                17 Aug to 19 Aug <span
                                                                                    class="text-dark">+$. 49</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="qty">
                                                                            <select
                                                                                class="custom-select custom-select-sm"
                                                                                disabled>
                                                                                <option selected>1</option>
                                                                                <option value="1">2</option>
                                                                                <option value="2">3</option>
                                                                                <option value="3">4</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="price">
                                                                            <p class="f-14 mb-0 text-dark float-right">
                                                                                $250.00 <del
                                                                                    class="small text-secondary">$
                                                                                    500.00 </del></p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_product"><a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="{{ asset('frontend/img/item/3.jpg') }}"
                                                                                    alt></a></td>
                                                                        <td class="cart_description">
                                                                            <h6 class="product-name"><a
                                                                                    href="#">Floret Printed
                                                                                    Ivory Skater Dress </a></h6>
                                                                            <p
                                                                                class="f-12 text-secondary mb-1 pt-1 pb-1">
                                                                                5/4 Review</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-secondary mb-0"><i
                                                                                    class="icofont-check-circled"></i>
                                                                                17 Aug to 19 Aug <span
                                                                                    class="text-dark">+$. 49</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="qty">
                                                                            <select
                                                                                class="custom-select custom-select-sm"
                                                                                disabled>
                                                                                <option selected>1</option>
                                                                                <option value="1">2</option>
                                                                                <option value="2">3</option>
                                                                                <option value="3">4</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="price">
                                                                            <p class="f-14 mb-0 text-dark float-right">
                                                                                $250.00 <del
                                                                                    class="small text-secondary">$
                                                                                    500.00 </del></p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_product"><a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="{{ asset('frontend/img/item/4.jpg') }}"
                                                                                    alt></a></td>
                                                                        <td class="cart_description">
                                                                            <h6 class="product-name"><a
                                                                                    href="#">Floret Printed
                                                                                    Ivory Skater Dress </a></h6>
                                                                            <p
                                                                                class="f-12 text-secondary mb-1 pt-1 pb-1">
                                                                                5/4 Review</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-secondary mb-0"><i
                                                                                    class="icofont-check-circled"></i>
                                                                                17 Aug to 19 Aug <span
                                                                                    class="text-dark">+$. 49</span>
                                                                            </p>
                                                                        </td>
                                                                        <td class="qty">
                                                                            <select
                                                                                class="custom-select custom-select-sm"
                                                                                disabled>
                                                                                <option selected>1</option>
                                                                                <option value="1">2</option>
                                                                                <option value="2">3</option>
                                                                                <option value="3">4</option>
                                                                            </select>
                                                                        </td>
                                                                        <td class="price">
                                                                            <p class="f-14 mb-0 text-dark float-right">
                                                                                $250.00 <del
                                                                                    class="small text-secondary">$
                                                                                    500.00 </del></p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td class="text-right" colspan="3">Total
                                                                            products (tax incl.)</td>
                                                                        <td colspan="2">$437.88 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-right" colspan="3">
                                                                            <strong>Total</strong>
                                                                        </td>
                                                                        <td class="text-danger" colspan="2">
                                                                            <strong>$337.88 </strong>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function viewOrder(orderId, productId) {
            // AJAX request to fetch order details
            $.ajax({
                url: '/getOrderDetails/' + orderId,
                type: 'GET',
                success: function(response) {
                    // Populate the modal with the retrieved data
                    var orderData = response.data.orderitems;
                    var productData = response.products;
                    var totalData = response.totalPro;

                    // Iterate over productData and display product information
                    var productTableBody = $('#modal-product-table');
                    productTableBody.empty();
                    var totalPrice = 0; // Variable to calculate the total price

                    $.each(totalData, function(index, product) {
                        var tableRow = $('<tr>');
                        var productImage = $('<td>').html('<img src="' + product.product_images + '">');
                        var productName = $('<td>').text(product.subcategory_name);
                        var size = $('<td>').text(product.size);
                        var quantity = $('<td>').text(1);
                        var price = $('<td>').text(product.price);
                        var total = $('<td>').text(product.price * 1);

                        totalPrice += product.price * 1; // Calculate the total price

                        tableRow.append(productImage, productName, size, 1, price);
                        productTableBody.append(tableRow);
                    });

                    var totalAmount = $('<span>').addClass('price text-success').text(totalPrice + '');
                    $('#modal-total-amount').empty().append(totalAmount);

                    // Show the modal
                    $('#action-to-vieworderlist').modal('show');
                }
            });
        }

        function deleteFromWishlist(id) {
            var token = $('meta[name="csrf_token"]').attr('content');
            $.ajax({
                type: 'GET',
                url: '{{ route('deleteFromWishlist', ['id' => ':id']) }}'.replace(':id', id),
                data: {
                    _token: token,
                },
                success: function(response) {
                    if (response) {
                        alert('Product Removed From The Wishlist');
                    }
                    location.reload();
                }
            })
        }
    </script>

</x-guest-layout>
