
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment Gateway</title>

  <meta charset="UTF-8">
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">        
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="template/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="template/css/style.css">
  <link rel="stylesheet" type="text/css" href="template/css/lightbox.css">
  <link rel="stylesheet" type="text/css" href="template/css/animate.css">  
  <link rel="stylesheet" type="text/css" href="template/css/pcoba.css"> 

  <script type="text/javascript" src="template/js/jquery-1.11.2.js"></script>
  <script type="text/javascript" src="template/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="template/js/lightbox.js"></script> 
  <script type="text/javascript" src="https://use.fontawesome.com/20bf8ce7c9.js"></script> 

</head>
<body>

<!-- site fb addon plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><!-- site fb addon plugin end -->

<!-- site preloader -->

<div id="preloader" class="preloader">
  <div class="lines">
  <div class="line line-1"></div>
  <div class="line line-2"></div>
  <div class="line line-3"></div></div>  
  <div class="loading-text">LOADING</div>
</div>
<!-- site preloader end -->


<!-- site content -->
<div id="site-content">

<!-- site header+navigation -->
<header>     
<section class="container">
<?php include './components/header.php' ?>
</section>
</header><!-- site header+navigation end -->

<!-- site body -->

<section id="section-page" class="container-fluid site-section">
    <div class="container">
        <div class="row menu_main head">
            <h3>Payment Details<br><br></h3>
        </div>
        
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
            <div class="well">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Personal details</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Full Name <span class="required">*</span></label>
                            <input type="text" id="name" class="form-control" name="first_name"  placeholder="Full Name" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address<span class="required">*</span></label>
                            <input type="text" class="form-control" id="address" name="address"   placeholder="Address" required>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Country<span class="required">*</span></label>
                            <select name="country" id="country" class="form-control" required><option label="Andorra" value="string:AD">Andorra</option><option label="United Arab Emirates" value="string:AE">United Arab Emirates</option><option label="Afghanistan" value="string:AF">Afghanistan</option><option label="Antigua and Barbuda" value="string:AG">Antigua and Barbuda</option><option label="Anguilla" value="string:AI">Anguilla</option><option label="Albania" value="string:AL">Albania</option><option label="Armenia" value="string:AM">Armenia</option><option label="Angola" value="string:AO">Angola</option><option label="Antarctica" value="string:AQ">Antarctica</option><option label="Argentina" value="string:AR">Argentina</option><option label="American Samoa" value="string:AS">American Samoa</option><option label="Austria" value="string:AT">Austria</option><option label="Australia" value="string:AU">Australia</option><option label="Aruba" value="string:AW">Aruba</option><option label="Åland" value="string:AX">Åland</option><option label="Azerbaijan" value="string:AZ">Azerbaijan</option><option label="Bosnia and Herzegovina" value="string:BA">Bosnia and Herzegovina</option><option label="Barbados" value="string:BB">Barbados</option><option label="Bangladesh" value="string:BD">Bangladesh</option><option label="Belgium" value="string:BE">Belgium</option><option label="Burkina Faso" value="string:BF">Burkina Faso</option><option label="Bulgaria" value="string:BG">Bulgaria</option><option label="Bahrain" value="string:BH">Bahrain</option><option label="Burundi" value="string:BI">Burundi</option><option label="Benin" value="string:BJ">Benin</option><option label="Saint Barthélemy" value="string:BL">Saint Barthélemy</option><option label="Bermuda" value="string:BM">Bermuda</option><option label="Brunei" value="string:BN">Brunei</option><option label="Bolivia" value="string:BO">Bolivia</option><option label="Bonaire" value="string:BQ">Bonaire</option><option label="Brazil" value="string:BR">Brazil</option><option label="Bahamas" value="string:BS">Bahamas</option><option label="Bhutan" value="string:BT">Bhutan</option><option label="Bouvet Island" value="string:BV">Bouvet Island</option><option label="Botswana" value="string:BW">Botswana</option><option label="Belarus" value="string:BY">Belarus</option><option label="Belize" value="string:BZ">Belize</option><option label="Canada" value="string:CA">Canada</option><option label="Cocos [Keeling] Islands" value="string:CC">Cocos [Keeling] Islands</option><option label="Democratic Republic of the Congo" value="string:CD">Democratic Republic of the Congo</option><option label="Central African Republic" value="string:CF">Central African Republic</option><option label="Republic of the Congo" value="string:CG">Republic of the Congo</option><option label="Switzerland" value="string:CH">Switzerland</option><option label="Ivory Coast" value="string:CI">Ivory Coast</option><option label="Cook Islands" value="string:CK">Cook Islands</option><option label="Chile" value="string:CL">Chile</option><option label="Cameroon" value="string:CM">Cameroon</option><option label="China" value="string:CN">China</option><option label="Colombia" value="string:CO">Colombia</option><option label="Costa Rica" value="string:CR">Costa Rica</option><option label="Cuba" value="string:CU">Cuba</option><option label="Cape Verde" value="string:CV">Cape Verde</option><option label="Curacao" value="string:CW">Curacao</option><option label="Christmas Island" value="string:CX">Christmas Island</option><option label="Cyprus" value="string:CY">Cyprus</option><option label="Czechia" value="string:CZ">Czechia</option><option label="Germany" value="string:DE">Germany</option><option label="Djibouti" value="string:DJ">Djibouti</option><option label="Denmark" value="string:DK">Denmark</option><option label="Dominica" value="string:DM">Dominica</option><option label="Dominican Republic" value="string:DO">Dominican Republic</option><option label="Algeria" value="string:DZ">Algeria</option><option label="Ecuador" value="string:EC">Ecuador</option><option label="Estonia" value="string:EE">Estonia</option><option label="Egypt" value="string:EG">Egypt</option><option label="Western Sahara" value="string:EH">Western Sahara</option><option label="Eritrea" value="string:ER">Eritrea</option><option label="Spain" value="string:ES">Spain</option><option label="Ethiopia" value="string:ET">Ethiopia</option><option label="Finland" value="string:FI">Finland</option><option label="Fiji" value="string:FJ">Fiji</option><option label="Falkland Islands" value="string:FK">Falkland Islands</option><option label="Micronesia" value="string:FM">Micronesia</option><option label="Faroe Islands" value="string:FO">Faroe Islands</option><option label="France" value="string:FR">France</option><option label="Gabon" value="string:GA">Gabon</option><option label="United Kingdom" value="string:GB">United Kingdom</option><option label="Grenada" value="string:GD">Grenada</option><option label="Georgia" value="string:GE">Georgia</option><option label="French Guiana" value="string:GF">French Guiana</option><option label="Guernsey" value="string:GG">Guernsey</option><option label="Ghana" value="string:GH">Ghana</option><option label="Gibraltar" value="string:GI">Gibraltar</option><option label="Greenland" value="string:GL">Greenland</option><option label="Gambia" value="string:GM">Gambia</option><option label="Guinea" value="string:GN">Guinea</option><option label="Guadeloupe" value="string:GP">Guadeloupe</option><option label="Equatorial Guinea" value="string:GQ">Equatorial Guinea</option><option label="Greece" value="string:GR">Greece</option><option label="South Georgia and the South Sandwich Islands" value="string:GS">South Georgia and the South Sandwich Islands</option><option label="Guatemala" value="string:GT">Guatemala</option><option label="Guam" value="string:GU">Guam</option><option label="Guinea-Bissau" value="string:GW">Guinea-Bissau</option><option label="Guyana" value="string:GY">Guyana</option><option label="Hong Kong" value="string:HK">Hong Kong</option><option label="Heard Island and McDonald Islands" value="string:HM">Heard Island and McDonald Islands</option><option label="Honduras" value="string:HN">Honduras</option><option label="Croatia" value="string:HR">Croatia</option><option label="Haiti" value="string:HT">Haiti</option><option label="Hungary" value="string:HU">Hungary</option><option label="Indonesia" value="string:ID">Indonesia</option><option label="Ireland" value="string:IE">Ireland</option><option label="Israel" value="string:IL">Israel</option><option label="Isle of Man" value="string:IM">Isle of Man</option><option label="India" value="string:IN">India</option><option label="British Indian Ocean Territory" value="string:IO">British Indian Ocean Territory</option><option label="Iraq" value="string:IQ">Iraq</option><option label="Iran" value="string:IR">Iran</option><option label="Iceland" value="string:IS">Iceland</option><option label="Italy" value="string:IT">Italy</option><option label="Jersey" value="string:JE">Jersey</option><option label="Jamaica" value="string:JM">Jamaica</option><option label="Jordan" value="string:JO">Jordan</option><option label="Japan" value="string:JP">Japan</option><option label="Kenya" value="string:KE">Kenya</option><option label="Kyrgyzstan" value="string:KG">Kyrgyzstan</option><option label="Cambodia" value="string:KH">Cambodia</option><option label="Kiribati" value="string:KI">Kiribati</option><option label="Comoros" value="string:KM">Comoros</option><option label="Saint Kitts and Nevis" value="string:KN">Saint Kitts and Nevis</option><option label="North Korea" value="string:KP">North Korea</option><option label="South Korea" value="string:KR">South Korea</option><option label="Kuwait" value="string:KW">Kuwait</option><option label="Cayman Islands" value="string:KY">Cayman Islands</option><option label="Kazakhstan" value="string:KZ">Kazakhstan</option><option label="Laos" value="string:LA">Laos</option><option label="Lebanon" value="string:LB">Lebanon</option><option label="Saint Lucia" value="string:LC">Saint Lucia</option><option label="Liechtenstein" value="string:LI">Liechtenstein</option><option label="Sri Lanka" value="string:LK" selected="selected">Sri Lanka</option><option label="Liberia" value="string:LR">Liberia</option><option label="Lesotho" value="string:LS">Lesotho</option><option label="Lithuania" value="string:LT">Lithuania</option><option label="Luxembourg" value="string:LU">Luxembourg</option><option label="Latvia" value="string:LV">Latvia</option><option label="Libya" value="string:LY">Libya</option><option label="Morocco" value="string:MA">Morocco</option><option label="Monaco" value="string:MC">Monaco</option><option label="Moldova" value="string:MD">Moldova</option><option label="Montenegro" value="string:ME">Montenegro</option><option label="Saint Martin" value="string:MF">Saint Martin</option><option label="Madagascar" value="string:MG">Madagascar</option><option label="Marshall Islands" value="string:MH">Marshall Islands</option><option label="Macedonia" value="string:MK">Macedonia</option><option label="Mali" value="string:ML">Mali</option><option label="Myanmar [Burma]" value="string:MM">Myanmar [Burma]</option><option label="Mongolia" value="string:MN">Mongolia</option><option label="Macao" value="string:MO">Macao</option><option label="Northern Mariana Islands" value="string:MP">Northern Mariana Islands</option><option label="Martinique" value="string:MQ">Martinique</option><option label="Mauritania" value="string:MR">Mauritania</option><option label="Montserrat" value="string:MS">Montserrat</option><option label="Malta" value="string:MT">Malta</option><option label="Mauritius" value="string:MU">Mauritius</option><option label="Maldives" value="string:MV">Maldives</option><option label="Malawi" value="string:MW">Malawi</option><option label="Mexico" value="string:MX">Mexico</option><option label="Malaysia" value="string:MY">Malaysia</option><option label="Mozambique" value="string:MZ">Mozambique</option><option label="Namibia" value="string:NA">Namibia</option><option label="New Caledonia" value="string:NC">New Caledonia</option><option label="Niger" value="string:NE">Niger</option><option label="Norfolk Island" value="string:NF">Norfolk Island</option><option label="Nigeria" value="string:NG">Nigeria</option><option label="Nicaragua" value="string:NI">Nicaragua</option><option label="Netherlands" value="string:NL">Netherlands</option><option label="Norway" value="string:NO">Norway</option><option label="Nepal" value="string:NP">Nepal</option><option label="Nauru" value="string:NR">Nauru</option><option label="Niue" value="string:NU">Niue</option><option label="New Zealand" value="string:NZ">New Zealand</option><option label="Oman" value="string:OM">Oman</option><option label="Panama" value="string:PA">Panama</option><option label="Peru" value="string:PE">Peru</option><option label="French Polynesia" value="string:PF">French Polynesia</option><option label="Papua New Guinea" value="string:PG">Papua New Guinea</option><option label="Philippines" value="string:PH">Philippines</option><option label="Pakistan" value="string:PK">Pakistan</option><option label="Poland" value="string:PL">Poland</option><option label="Saint Pierre and Miquelon" value="string:PM">Saint Pierre and Miquelon</option><option label="Pitcairn Islands" value="string:PN">Pitcairn Islands</option><option label="Puerto Rico" value="string:PR">Puerto Rico</option><option label="Palestine" value="string:PS">Palestine</option><option label="Portugal" value="string:PT">Portugal</option><option label="Palau" value="string:PW">Palau</option><option label="Paraguay" value="string:PY">Paraguay</option><option label="Qatar" value="string:QA">Qatar</option><option label="Réunion" value="string:RE">Réunion</option><option label="Romania" value="string:RO">Romania</option><option label="Serbia" value="string:RS">Serbia</option><option label="Russia" value="string:RU">Russia</option><option label="Rwanda" value="string:RW">Rwanda</option><option label="Saudi Arabia" value="string:SA">Saudi Arabia</option><option label="Solomon Islands" value="string:SB">Solomon Islands</option><option label="Seychelles" value="string:SC">Seychelles</option><option label="Sudan" value="string:SD">Sudan</option><option label="Sweden" value="string:SE">Sweden</option><option label="Singapore" value="string:SG">Singapore</option><option label="Saint Helena" value="string:SH">Saint Helena</option><option label="Slovenia" value="string:SI">Slovenia</option><option label="Svalbard and Jan Mayen" value="string:SJ">Svalbard and Jan Mayen</option><option label="Slovakia" value="string:SK">Slovakia</option><option label="Sierra Leone" value="string:SL">Sierra Leone</option><option label="San Marino" value="string:SM">San Marino</option><option label="Senegal" value="string:SN">Senegal</option><option label="Somalia" value="string:SO">Somalia</option><option label="Suriname" value="string:SR">Suriname</option><option label="South Sudan" value="string:SS">South Sudan</option><option label="São Tomé and Príncipe" value="string:ST">São Tomé and Príncipe</option><option label="El Salvador" value="string:SV">El Salvador</option><option label="Sint Maarten" value="string:SX">Sint Maarten</option><option label="Syria" value="string:SY">Syria</option><option label="Swaziland" value="string:SZ">Swaziland</option><option label="Turks and Caicos Islands" value="string:TC">Turks and Caicos Islands</option><option label="Chad" value="string:TD">Chad</option><option label="French Southern Territories" value="string:TF">French Southern Territories</option><option label="Togo" value="string:TG">Togo</option><option label="Thailand" value="string:TH">Thailand</option><option label="Tajikistan" value="string:TJ">Tajikistan</option><option label="Tokelau" value="string:TK">Tokelau</option><option label="East Timor" value="string:TL">East Timor</option><option label="Turkmenistan" value="string:TM">Turkmenistan</option><option label="Tunisia" value="string:TN">Tunisia</option><option label="Tonga" value="string:TO">Tonga</option><option label="Turkey" value="string:TR">Turkey</option><option label="Trinidad and Tobago" value="string:TT">Trinidad and Tobago</option><option label="Tuvalu" value="string:TV">Tuvalu</option><option label="Taiwan" value="string:TW">Taiwan</option><option label="Tanzania" value="string:TZ">Tanzania</option><option label="Ukraine" value="string:UA">Ukraine</option><option label="Uganda" value="string:UG">Uganda</option><option label="U.S. Minor Outlying Islands" value="string:UM">U.S. Minor Outlying Islands</option><option label="United States" value="string:US">United States</option><option label="Uruguay" value="string:UY">Uruguay</option><option label="Uzbekistan" value="string:UZ">Uzbekistan</option><option label="Vatican City" value="string:VA">Vatican City</option><option label="Saint Vincent and the Grenadines" value="string:VC">Saint Vincent and the Grenadines</option><option label="Venezuela" value="string:VE">Venezuela</option><option label="British Virgin Islands" value="string:VG">British Virgin Islands</option><option label="U.S. Virgin Islands" value="string:VI">U.S. Virgin Islands</option><option label="Vietnam" value="string:VN">Vietnam</option><option label="Vanuatu" value="string:VU">Vanuatu</option><option label="Wallis and Futuna" value="string:WF">Wallis and Futuna</option><option label="Samoa" value="string:WS">Samoa</option><option label="Kosovo" value="string:XK">Kosovo</option><option label="Yemen" value="string:YE">Yemen</option><option label="Mayotte" value="string:YT">Mayotte</option><option label="South Africa" value="string:ZA">South Africa</option><option label="Zambia" value="string:ZM">Zambia</option><option label="Zimbabwe" value="string:ZW">Zimbabwe</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Mobile phone<span class="required">*</span></label>
                            <input type="number" class="form-control" id="mobile" name="mobile"  placeholder="Mobile Phone Number" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-control-group">
                            <label class="control-label">Email Address<span class="required">*</span></label>
                    
                            <div class="controls">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
                            </div>
                        </div>
                    </div>
                            
                </div>
                 
            </div>
               
            <div class="well ng-hide" id="attachment">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Payment Details</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="loading" style="display: none;"><img src="./Nalanda Vidyalaya Old Boys&#39; Association_files/ajax-loader.gif" width="20" height="20">LOADING...</div> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Payment Type</label>                       
                            <div class="controls">
                                <input type="text" required="required" name="items" id="items" value="Annual Membership" readonly>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="control-label">Payment Amount (LKR.) </label>                       
                            <div class="controls">
                                <input type="text" id="amount" name="amount" value="2500" readonly>
                                <!-- this amount should not hard coded. it should come through php variable  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <div class="well">
                    <div class="row">

                    <div class="col-md-9"></div>
                        <div class="col-md-3">
                                <input type="hidden" name="merchant_id" value="1212807">    <!-- Replace your Merchant ID -->
                                <input type="hidden" name="return_url" value="http://sample.com/return">
                                <input type="hidden" name="cancel_url" value="http://sample.com/cancel">
                                <input type="hidden" name="notify_url" value="http://sample.com/notify">   
                                    
                                <input type="hidden" name="last_name" value="">
                                <input type="hidden" name="city" value="">
                                <input type="hidden" name="order_id" value="">
                                <input type="hidden" name="currency" value="LKR">
                        <!-- <input id="submit" name="submit" type="button" value="Submit" class="btn btn-primary  btn-dn-submit submit btn form-control"> -->
                        <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-primary  btn-dn-submit submit btn form-control">
                        </div>
                    </div>
                </div>
            </form>
    </div>
</section>


<!-- site body end -->


<!-- site footer -->
<footer id="section-footer" class="container-fluid site-section">
<?php include('./components/footer.php') ?>
</footer><!-- site footer end -->

</div>
<!-- site content end -->


<script type="text/javascript" src="template/js/jquery.custom.js"></script>   
<script type="text/javascript" src="template/js/jquery.site.slider.js"></script>   
<script type="text/javascript" src="js/paymentGate.js"></script> 

</body>
</html>