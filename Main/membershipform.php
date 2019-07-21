<?php
include 'includes/dbh.inc.php';
include 'includes/user.inc.php';
include 'includes/ViewUser.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Membership</title>

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
  <script type="text/javascript" src="js/membershipForm.js"></script> 
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
<div class="row">
<div class="col-lg-4 col-md-4 responsive-col-full-width">
    <div class="site-brand text-center">
      <a href="membership">
        <div class="pull-left site-pull-left">        
          <img src="template/images/site-assets/logo.png" alt="dsscoba-logo">
        </div>
        <div class="pull-right site-pull-right">
          <h4>PRINCE COLLEGE</h4>
          <p>Old Boys' Association</p>
        </div>
        <div class="clearfix"></div>
      </a>
    </div>   
    <div class="button nvbtn"></div>         
</div>
<div class="col-md-8 responsive-col-full-width">
<nav id='cssmenu'>
<div id="head-mobile"></div>
<!-- <div class="button"></div> -->
<ul>
<li id="nav-home"><a href="index.html">HOME</a></li>
<li id="nav-news"><a href="news">NEWS</a></li>
<li id="nav-events"><a href="events">EVENTS</a></li>
<li id="nav-projects"><a href="projects.html">PROJECTS</a></li>            
<li id="nav-media"><a href="membership">MEDIA</a>
   <ul>
      <li id="nav-media-sub"><a href="image-gallery">IMAGE GALLERY</a></li>
      <li id="nav-media-sub"><a href="membership">VIDEO GALLERY</a></li>
   </ul>
</li>
<li id="nav-about"><a>ABOUT</a>
   <ul>
      <li id="nav-about-sub"><a href="membership">OLD BOYS' ASSOCATION</a>
         <ul>
            <li id="nav-about-sub"><a href="membership">HISTORY</a></li>
            <li id="nav-about-sub"><a href="executive-committee">EXECUTIVE COMMITTEE</a></li>
            <li id="nav-about-sub"><a href="past-presidents">PAST PRESIDENTS</a></li>
            <li id="nav-about-sub"><a href="batch-representatives">BATCH REPRESENTATIVES</a></li>
            <li id="nav-about-sub"><a href="clubs-and-societies">CLUBS & SOCIETIES</a></li>
         </ul>
      </li>
      <li id="nav-about-sub"><a href="dssenanayake-college">D. S. SENANAYAKE COLLEGE</a></li>
      <li id="nav-about-sub"><a href="our-founder">OUR FOUNDER</a></li>
   </ul>
</li>
<li id="nav-membership"><a href="membership">MEMBERSHIP</a></li>
<li id="nav-contact"><a href="http://dsscoba.org/contact-us">CONTACT US</a></li>
</ul>
</nav>
</div>
</div>
</section>
</header><!-- site header+navigation end -->

<!-- site body -->

<section id="section-page" class="container-fluid site-section">
    <div class="container">
        <div class="row menu_main head">
            <h3>Membership Application Form<br><br></h3>
        </div>
        <div class="row">  

            <div class="col-md-12">
                
                
                <h4>Before you start filling this form </h4>
                    <br>
                    <ul>
                        <li>Ensure that you have a photograph of you available in jpg format. Make sure it has the characteristics of the sample – <a ng-click="sampleImg()">Click to view Sample</a>
                        </li>
                        <li>You will need your leaving certificate provided by Nalanda College, it has Admission No, Date of Joining & leaving. It has to be scanned in jpg format and uploaded.</li>
                        <li>You will need to know the membership no or mobile no of the members who are going to propose and second you. If you enter a mobile no please verify beforehand with them that the number you are entering is the number they have provided to our system. It’s usually the number they receive SMS notifications from us.</li>
                        <li>There will be a random generated code sent to Proposer. Contact him and Enter the Code in given text box. Then Click Verify. If it's success please do the same for Seconder as well.</li>
                        <li>To validate the proposer/seconder a 6 digit code will be sent to the mobile no of the proposer/seconder. You will not be able to complete filling this form unless you are able to get these codes from them. Hence make sure your proposer/seconder is free and able to answer your call or able to send you these codes while filling the form. </li>

                    </ul>
                    <br>
                    <h4>General Instructions</h4>
                    <br>

                    <ul>
                        <li>If you are residing/working outside of Sri Lanka and have membership of any Alumini of Nalanda College in your country, pls select it from the list of foreign associations shown. If it’s not listed drop a mail to secretary@nalandaoba.lk with the association name and names and contact numbers of officials who are in office. We will take steps to include it shortly.</li>
                        <li>All mandatory fields are marked with a red asterisk near the field.</li>
                        <li>Enter Initials separated with . (dots)</li>
                        <li>Ensure your full name displays correctly in the “Full name” field after filling Initials, Surname & Names denoted by initials </li>
                        <li>Number to Send SMS field should be a Sri Lankan mobile operator number. Enter it in 9 digits WITHOUT first “0” e.g. 772882004</li>
                    </ul>
                    <br>
                    <h4>Next Step after successful submission</h4>
                    <br>

                    <ul>
                        <li>Note that you have only completed “registration” ONLY, and NOT yet a member of the association</li>
                        <li>All entered data will be displayed in a printable web form, you need to print it (Hardcopy).</li>
                        <li>You will be sent login details to the email address entered. Username will be the NIC and a generated password will be included in the email.</li>
                        <li>If you were unable to print your form in the first instance can do so by loging in subsequently. </li>
                        <li>You may change any data if noticed incorrect by loging to your account.</li>
                        <li>An email & SMS will be sent to you when meetings will be held where you will need to bring the printout with your signature placed on it along with the Original of your leaving certificate </li>
                        <li>Life time membership fee is LKR500 & cost of Member id is LKR500, After physical inspection of the leaving certificate this payment can be made at the meeting to the Treasurer (or a authorized representative) and will be given a official receipt. </li>
                        <li>If the membership requester is unable to present himself (working/residing overseas) he may authorize a 3rd party by a signed letter of authorization along with the printed web form physically signed & the original of the leaving certificate. </li>
                        <li>A option will be available in your login after the leaving certificate is physically inspected to upload a copy of a bank deposit slip. It will be your responsibility to collect the official receipt from the Treasurer as receipts will not be issued online. Upon confirmation of payment membership process will continue. </li>
                        <li>You will receive a Welcome email from secretary@nalandaoba.lk containing your membership no when your membership is granted.</li>
                        <li>Note that Name, DOB, NIC, Information in Leaving Certificate cannot be altered after payment is done hence make sure all these details are correct before making the payment.</li>
                    </ul>
                    <br>
                    <p>Any Question or Suggestion write to secretary@nalandaoba.lk </p>
                    <br>  

            </div>
        </div>

        <?php
        $users=new ViewUser();
        $users->showAllUsers();
        ?>
        
        <form>
            <div class="well">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Personal details</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>National Id Card No (NIC) <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="Id card no" required="required" id="nic">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Title <span class="required">*</span></label>
                                <select id="title"class="form-control" name="title"  required="required" ><option label="Mr" value="string:Mr" selected="selected">Mr</option><option label="Dr" value="string:Dr">Dr</option><option label="Prof" value="string:Prof">Prof</option><option label="Rev" value="string:Rev">Rev</option><option label="Other" value="string:Other">Other</option></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Full Name <span class="required">*</span></label>
                            <input type="text" id="name" class="form-control" name="full_name"  value=" ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Birthday<span class="required">*</span></label>
                            <input type="text" id="birth_day" class="form-control" name="birth_day"  placeholder="Birth Day"  datepicker="" required="required">
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address<span class="required">*</span></label>
                            <input type="text" class="form-control" id="address" name="street"  required="required" >
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Country<span class="required">*</span></label>
                            <select name="country" id="country" class="form-control" required="required"><option label="Andorra" value="string:AD">Andorra</option><option label="United Arab Emirates" value="string:AE">United Arab Emirates</option><option label="Afghanistan" value="string:AF">Afghanistan</option><option label="Antigua and Barbuda" value="string:AG">Antigua and Barbuda</option><option label="Anguilla" value="string:AI">Anguilla</option><option label="Albania" value="string:AL">Albania</option><option label="Armenia" value="string:AM">Armenia</option><option label="Angola" value="string:AO">Angola</option><option label="Antarctica" value="string:AQ">Antarctica</option><option label="Argentina" value="string:AR">Argentina</option><option label="American Samoa" value="string:AS">American Samoa</option><option label="Austria" value="string:AT">Austria</option><option label="Australia" value="string:AU">Australia</option><option label="Aruba" value="string:AW">Aruba</option><option label="Åland" value="string:AX">Åland</option><option label="Azerbaijan" value="string:AZ">Azerbaijan</option><option label="Bosnia and Herzegovina" value="string:BA">Bosnia and Herzegovina</option><option label="Barbados" value="string:BB">Barbados</option><option label="Bangladesh" value="string:BD">Bangladesh</option><option label="Belgium" value="string:BE">Belgium</option><option label="Burkina Faso" value="string:BF">Burkina Faso</option><option label="Bulgaria" value="string:BG">Bulgaria</option><option label="Bahrain" value="string:BH">Bahrain</option><option label="Burundi" value="string:BI">Burundi</option><option label="Benin" value="string:BJ">Benin</option><option label="Saint Barthélemy" value="string:BL">Saint Barthélemy</option><option label="Bermuda" value="string:BM">Bermuda</option><option label="Brunei" value="string:BN">Brunei</option><option label="Bolivia" value="string:BO">Bolivia</option><option label="Bonaire" value="string:BQ">Bonaire</option><option label="Brazil" value="string:BR">Brazil</option><option label="Bahamas" value="string:BS">Bahamas</option><option label="Bhutan" value="string:BT">Bhutan</option><option label="Bouvet Island" value="string:BV">Bouvet Island</option><option label="Botswana" value="string:BW">Botswana</option><option label="Belarus" value="string:BY">Belarus</option><option label="Belize" value="string:BZ">Belize</option><option label="Canada" value="string:CA">Canada</option><option label="Cocos [Keeling] Islands" value="string:CC">Cocos [Keeling] Islands</option><option label="Democratic Republic of the Congo" value="string:CD">Democratic Republic of the Congo</option><option label="Central African Republic" value="string:CF">Central African Republic</option><option label="Republic of the Congo" value="string:CG">Republic of the Congo</option><option label="Switzerland" value="string:CH">Switzerland</option><option label="Ivory Coast" value="string:CI">Ivory Coast</option><option label="Cook Islands" value="string:CK">Cook Islands</option><option label="Chile" value="string:CL">Chile</option><option label="Cameroon" value="string:CM">Cameroon</option><option label="China" value="string:CN">China</option><option label="Colombia" value="string:CO">Colombia</option><option label="Costa Rica" value="string:CR">Costa Rica</option><option label="Cuba" value="string:CU">Cuba</option><option label="Cape Verde" value="string:CV">Cape Verde</option><option label="Curacao" value="string:CW">Curacao</option><option label="Christmas Island" value="string:CX">Christmas Island</option><option label="Cyprus" value="string:CY">Cyprus</option><option label="Czechia" value="string:CZ">Czechia</option><option label="Germany" value="string:DE">Germany</option><option label="Djibouti" value="string:DJ">Djibouti</option><option label="Denmark" value="string:DK">Denmark</option><option label="Dominica" value="string:DM">Dominica</option><option label="Dominican Republic" value="string:DO">Dominican Republic</option><option label="Algeria" value="string:DZ">Algeria</option><option label="Ecuador" value="string:EC">Ecuador</option><option label="Estonia" value="string:EE">Estonia</option><option label="Egypt" value="string:EG">Egypt</option><option label="Western Sahara" value="string:EH">Western Sahara</option><option label="Eritrea" value="string:ER">Eritrea</option><option label="Spain" value="string:ES">Spain</option><option label="Ethiopia" value="string:ET">Ethiopia</option><option label="Finland" value="string:FI">Finland</option><option label="Fiji" value="string:FJ">Fiji</option><option label="Falkland Islands" value="string:FK">Falkland Islands</option><option label="Micronesia" value="string:FM">Micronesia</option><option label="Faroe Islands" value="string:FO">Faroe Islands</option><option label="France" value="string:FR">France</option><option label="Gabon" value="string:GA">Gabon</option><option label="United Kingdom" value="string:GB">United Kingdom</option><option label="Grenada" value="string:GD">Grenada</option><option label="Georgia" value="string:GE">Georgia</option><option label="French Guiana" value="string:GF">French Guiana</option><option label="Guernsey" value="string:GG">Guernsey</option><option label="Ghana" value="string:GH">Ghana</option><option label="Gibraltar" value="string:GI">Gibraltar</option><option label="Greenland" value="string:GL">Greenland</option><option label="Gambia" value="string:GM">Gambia</option><option label="Guinea" value="string:GN">Guinea</option><option label="Guadeloupe" value="string:GP">Guadeloupe</option><option label="Equatorial Guinea" value="string:GQ">Equatorial Guinea</option><option label="Greece" value="string:GR">Greece</option><option label="South Georgia and the South Sandwich Islands" value="string:GS">South Georgia and the South Sandwich Islands</option><option label="Guatemala" value="string:GT">Guatemala</option><option label="Guam" value="string:GU">Guam</option><option label="Guinea-Bissau" value="string:GW">Guinea-Bissau</option><option label="Guyana" value="string:GY">Guyana</option><option label="Hong Kong" value="string:HK">Hong Kong</option><option label="Heard Island and McDonald Islands" value="string:HM">Heard Island and McDonald Islands</option><option label="Honduras" value="string:HN">Honduras</option><option label="Croatia" value="string:HR">Croatia</option><option label="Haiti" value="string:HT">Haiti</option><option label="Hungary" value="string:HU">Hungary</option><option label="Indonesia" value="string:ID">Indonesia</option><option label="Ireland" value="string:IE">Ireland</option><option label="Israel" value="string:IL">Israel</option><option label="Isle of Man" value="string:IM">Isle of Man</option><option label="India" value="string:IN">India</option><option label="British Indian Ocean Territory" value="string:IO">British Indian Ocean Territory</option><option label="Iraq" value="string:IQ">Iraq</option><option label="Iran" value="string:IR">Iran</option><option label="Iceland" value="string:IS">Iceland</option><option label="Italy" value="string:IT">Italy</option><option label="Jersey" value="string:JE">Jersey</option><option label="Jamaica" value="string:JM">Jamaica</option><option label="Jordan" value="string:JO">Jordan</option><option label="Japan" value="string:JP">Japan</option><option label="Kenya" value="string:KE">Kenya</option><option label="Kyrgyzstan" value="string:KG">Kyrgyzstan</option><option label="Cambodia" value="string:KH">Cambodia</option><option label="Kiribati" value="string:KI">Kiribati</option><option label="Comoros" value="string:KM">Comoros</option><option label="Saint Kitts and Nevis" value="string:KN">Saint Kitts and Nevis</option><option label="North Korea" value="string:KP">North Korea</option><option label="South Korea" value="string:KR">South Korea</option><option label="Kuwait" value="string:KW">Kuwait</option><option label="Cayman Islands" value="string:KY">Cayman Islands</option><option label="Kazakhstan" value="string:KZ">Kazakhstan</option><option label="Laos" value="string:LA">Laos</option><option label="Lebanon" value="string:LB">Lebanon</option><option label="Saint Lucia" value="string:LC">Saint Lucia</option><option label="Liechtenstein" value="string:LI">Liechtenstein</option><option label="Sri Lanka" value="string:LK" selected="selected">Sri Lanka</option><option label="Liberia" value="string:LR">Liberia</option><option label="Lesotho" value="string:LS">Lesotho</option><option label="Lithuania" value="string:LT">Lithuania</option><option label="Luxembourg" value="string:LU">Luxembourg</option><option label="Latvia" value="string:LV">Latvia</option><option label="Libya" value="string:LY">Libya</option><option label="Morocco" value="string:MA">Morocco</option><option label="Monaco" value="string:MC">Monaco</option><option label="Moldova" value="string:MD">Moldova</option><option label="Montenegro" value="string:ME">Montenegro</option><option label="Saint Martin" value="string:MF">Saint Martin</option><option label="Madagascar" value="string:MG">Madagascar</option><option label="Marshall Islands" value="string:MH">Marshall Islands</option><option label="Macedonia" value="string:MK">Macedonia</option><option label="Mali" value="string:ML">Mali</option><option label="Myanmar [Burma]" value="string:MM">Myanmar [Burma]</option><option label="Mongolia" value="string:MN">Mongolia</option><option label="Macao" value="string:MO">Macao</option><option label="Northern Mariana Islands" value="string:MP">Northern Mariana Islands</option><option label="Martinique" value="string:MQ">Martinique</option><option label="Mauritania" value="string:MR">Mauritania</option><option label="Montserrat" value="string:MS">Montserrat</option><option label="Malta" value="string:MT">Malta</option><option label="Mauritius" value="string:MU">Mauritius</option><option label="Maldives" value="string:MV">Maldives</option><option label="Malawi" value="string:MW">Malawi</option><option label="Mexico" value="string:MX">Mexico</option><option label="Malaysia" value="string:MY">Malaysia</option><option label="Mozambique" value="string:MZ">Mozambique</option><option label="Namibia" value="string:NA">Namibia</option><option label="New Caledonia" value="string:NC">New Caledonia</option><option label="Niger" value="string:NE">Niger</option><option label="Norfolk Island" value="string:NF">Norfolk Island</option><option label="Nigeria" value="string:NG">Nigeria</option><option label="Nicaragua" value="string:NI">Nicaragua</option><option label="Netherlands" value="string:NL">Netherlands</option><option label="Norway" value="string:NO">Norway</option><option label="Nepal" value="string:NP">Nepal</option><option label="Nauru" value="string:NR">Nauru</option><option label="Niue" value="string:NU">Niue</option><option label="New Zealand" value="string:NZ">New Zealand</option><option label="Oman" value="string:OM">Oman</option><option label="Panama" value="string:PA">Panama</option><option label="Peru" value="string:PE">Peru</option><option label="French Polynesia" value="string:PF">French Polynesia</option><option label="Papua New Guinea" value="string:PG">Papua New Guinea</option><option label="Philippines" value="string:PH">Philippines</option><option label="Pakistan" value="string:PK">Pakistan</option><option label="Poland" value="string:PL">Poland</option><option label="Saint Pierre and Miquelon" value="string:PM">Saint Pierre and Miquelon</option><option label="Pitcairn Islands" value="string:PN">Pitcairn Islands</option><option label="Puerto Rico" value="string:PR">Puerto Rico</option><option label="Palestine" value="string:PS">Palestine</option><option label="Portugal" value="string:PT">Portugal</option><option label="Palau" value="string:PW">Palau</option><option label="Paraguay" value="string:PY">Paraguay</option><option label="Qatar" value="string:QA">Qatar</option><option label="Réunion" value="string:RE">Réunion</option><option label="Romania" value="string:RO">Romania</option><option label="Serbia" value="string:RS">Serbia</option><option label="Russia" value="string:RU">Russia</option><option label="Rwanda" value="string:RW">Rwanda</option><option label="Saudi Arabia" value="string:SA">Saudi Arabia</option><option label="Solomon Islands" value="string:SB">Solomon Islands</option><option label="Seychelles" value="string:SC">Seychelles</option><option label="Sudan" value="string:SD">Sudan</option><option label="Sweden" value="string:SE">Sweden</option><option label="Singapore" value="string:SG">Singapore</option><option label="Saint Helena" value="string:SH">Saint Helena</option><option label="Slovenia" value="string:SI">Slovenia</option><option label="Svalbard and Jan Mayen" value="string:SJ">Svalbard and Jan Mayen</option><option label="Slovakia" value="string:SK">Slovakia</option><option label="Sierra Leone" value="string:SL">Sierra Leone</option><option label="San Marino" value="string:SM">San Marino</option><option label="Senegal" value="string:SN">Senegal</option><option label="Somalia" value="string:SO">Somalia</option><option label="Suriname" value="string:SR">Suriname</option><option label="South Sudan" value="string:SS">South Sudan</option><option label="São Tomé and Príncipe" value="string:ST">São Tomé and Príncipe</option><option label="El Salvador" value="string:SV">El Salvador</option><option label="Sint Maarten" value="string:SX">Sint Maarten</option><option label="Syria" value="string:SY">Syria</option><option label="Swaziland" value="string:SZ">Swaziland</option><option label="Turks and Caicos Islands" value="string:TC">Turks and Caicos Islands</option><option label="Chad" value="string:TD">Chad</option><option label="French Southern Territories" value="string:TF">French Southern Territories</option><option label="Togo" value="string:TG">Togo</option><option label="Thailand" value="string:TH">Thailand</option><option label="Tajikistan" value="string:TJ">Tajikistan</option><option label="Tokelau" value="string:TK">Tokelau</option><option label="East Timor" value="string:TL">East Timor</option><option label="Turkmenistan" value="string:TM">Turkmenistan</option><option label="Tunisia" value="string:TN">Tunisia</option><option label="Tonga" value="string:TO">Tonga</option><option label="Turkey" value="string:TR">Turkey</option><option label="Trinidad and Tobago" value="string:TT">Trinidad and Tobago</option><option label="Tuvalu" value="string:TV">Tuvalu</option><option label="Taiwan" value="string:TW">Taiwan</option><option label="Tanzania" value="string:TZ">Tanzania</option><option label="Ukraine" value="string:UA">Ukraine</option><option label="Uganda" value="string:UG">Uganda</option><option label="U.S. Minor Outlying Islands" value="string:UM">U.S. Minor Outlying Islands</option><option label="United States" value="string:US">United States</option><option label="Uruguay" value="string:UY">Uruguay</option><option label="Uzbekistan" value="string:UZ">Uzbekistan</option><option label="Vatican City" value="string:VA">Vatican City</option><option label="Saint Vincent and the Grenadines" value="string:VC">Saint Vincent and the Grenadines</option><option label="Venezuela" value="string:VE">Venezuela</option><option label="British Virgin Islands" value="string:VG">British Virgin Islands</option><option label="U.S. Virgin Islands" value="string:VI">U.S. Virgin Islands</option><option label="Vietnam" value="string:VN">Vietnam</option><option label="Vanuatu" value="string:VU">Vanuatu</option><option label="Wallis and Futuna" value="string:WF">Wallis and Futuna</option><option label="Samoa" value="string:WS">Samoa</option><option label="Kosovo" value="string:XK">Kosovo</option><option label="Yemen" value="string:YE">Yemen</option><option label="Mayotte" value="string:YT">Mayotte</option><option label="South Africa" value="string:ZA">South Africa</option><option label="Zambia" value="string:ZM">Zambia</option><option label="Zimbabwe" value="string:ZW">Zimbabwe</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Residence phone<span class="required">*</span></label>
                            <input type="text" class="form-control" required="required" id="phone">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mobile phone<span class="required">*</span></label>
                            <input type="text" class="form-control" required="required" id="mobile">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-group">
                            <label class="control-label">Email Address<span class="required">*</span></label>
                    
                            <div class="controls">
                                <input type="text" class="form-control" required="required"  id="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-control-group">
                            <label class="control-label">School Index Number<span class="required" id="index_num">*</span></label>
                    
                            <div class="controls">
                                <input type="text" class="form-control" required="required" >
                            </div>
                        </div>
                    </div>               
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Password <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="Password" required="required" id="password">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Title <span class="required">*</span></label>
                                <input type="text" class="form-control" placeholder="Re-type Password" required="required" id="con_password">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                <div class="well ng-hide" id="attachment" ng-show="nic_update">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Attachments</label>
                            </div>
                        </div>
                    </div>
                    <div class="loading" style="display: none;"><img src="./Nalanda Vidyalaya Old Boys&#39; Association_files/ajax-loader.gif" width="20" height="20">LOADING...</div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Your Photograph<span class="required">*</span></label>
                                <input type="hidden" id="your_img" name="your_img" ng-model="reg.your_img" ng-required="true" autocomplete="off" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" required="required">
                                <input id="photoInput" class="button" type="file" placeholder="Avatar" name="avatar" accept="image/png&#39;, &#39;image/jpeg&#39;, &#39;image/jpg&#39;, &#39;image/bmp" ng-required="reg.pro_img == &#39;&#39;">
                            </div>
                        </div>
                        <!-- ngIf: reg.pro_img != null -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="label-dn-align">Leaving Certificate<span class="required">*</span></label>
                                <input type="hidden" id="your_leaving" name="your_leaving" ng-model="reg.leaving_certificate" ng-required="true" autocomplete="off" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" required="required">
                                <input id="leaveInput" class="button" type="file" placeholder="Avatar" name="leaving" accept="image/png&#39;, &#39;image/jpeg&#39;, &#39;image/jpg&#39;, &#39;image/bmp" ng-required="reg.le_img == &#39;&#39;">
                            </div>
                        </div>
                        <!-- ngIf: reg.le_img != null -->
                    </div>
                </div>
                <div class="well">
                    <div class="row">
                        <input type="hidden" id="id" name="id" ng-model="user_id" autocomplete="off" class="ng-pristine ng-untouched ng-valid ng-empty">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                        <input id="submit" onclick="submitMemberData()" type="button" value="Submit" class="btn btn-primary  btn-dn-submit submit btn form-control">
                        </div>
                    </div>
                </div>
            </form>
    </div>
</section>


<!-- site body end -->


<!-- site footer -->
<footer id="section-footer" class="container-fluid site-section">
<div class="row">
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A1" class="text-center animated">
            <img class="" src="template/images/site-assets/logo.png" alt="dsscoba-logo">
            <h5 class="">COUNTRY BEFORE SELF</h5>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A2" class="text-left site-footer-text-center animated">
            <h5>SOCIETIES & CLUBS</h5> 
            <ul class="list-inline site-footer-list site-list-inline-img">
                <li>
                    <a href="https://www.facebook.com/groups/dsobawildlifeclub" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-wildlife.png" alt="dsscoba-wildlife" title="Wildlife Club">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/dsbuddhists" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-buddhist.png" alt="dsscoba-buddhist" title="Buddhist Society">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/donspsychoparade" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-psycho.png" alt="dsscoba-psycho-parade" title="Psycho Parade">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/Theewraa" target="_blank">
                    <img src="template/images/site-assets/clubs-societies/dsscoba-theewra.png" alt="dsscoba-theewra" title="D.S Theewraa">
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A3" class="text-center animated">
            <h5>CONTACT</h5>
            <p>
                <span>DSSC OBA HEADQUARTERS</span>
                <br>
                <span>No 62, Gregory Road,</span>
                <br>
                <span>Colombo 07</span>
                <br>
                <span>Sri Lanka</span>
                <br><br>
                <span>dsoba@sltnet.lk</span>
                <br>
                <span>+94 115 840 310 | +94 112 688 010</span>
            </p>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 site-footer-bx">
        <div id="site-footer-A4" class="text-center animated">
            <h5>FOLLOW US</h5> 
            <ul class="list-inline site-social-icons">
                <li><a href="https://www.facebook.com/OBADSSC/" target="_blank"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/obadssc" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/obadssc/" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC6oSyNbktAqKIh5bt0wGz_A" target="_blank"><i class="fa fa-youtube-square fa-lg" aria-hidden="true"></i></a></li>
            </ul>
            <p class="site-privacy-tag">Privacy Policy | <a href="membership">Terms & Conditions</a></p>
        </div>
    </div>
</div>

<div class="row">    
    <div class="site-copyright-tag">
    <div class="container text-center">
        <p>Website Designed & Developed by 2011 Batch</p>
        <div class="site-scroll-up pull-right text-center">
        <a id="scrolltotop" href="membership"><i id="fo-icon" class="fa fa-caret-up fa-lg animated" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>
</div>
</footer><!-- site footer end -->

</div>
<!-- site content end -->


<script type="text/javascript" src="template/js/jquery.custom.js"></script>   
<script type="text/javascript" src="template/js/jquery.site.slider.js"></script>   


</body>
</html>