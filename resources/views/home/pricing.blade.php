@extends('home.base')
@section('home-content')
<!-- Home Section Starts -->
<section class="case-studies-home" style="background-image: url('{{ asset('home/img/banner.png')}}');">
    <div class="container">
       <div class="case-studies-head">
          <p>Pricing Plans</p>
       </div>
       <div class="case-studies-items">
          <div class="case-studies-item">
             <div class="case-studies-item-img">
                <img src="{{asset('home/img/user-profile.png')}}" alt="User Profile">
             </div>
             <div class="case-studies-item-name">
                <p>Individual</p>
             </div>
             <div class="case-studies-item-list">
                <ul>
                   <li><i class="fa fa-arrow-right"></i>1 user account</li>
                   <li><i class="fa fa-arrow-right"></i>6 social media accounts</li>
                   <li><i class="fa fa-arrow-right"></i>20 scheduled posts</li>
                </ul>
             </div>
             <br>
             <div class="case-studies-item-price">
                <p>$3.99/mo<br><span>billed monthly</span></p>
             </div>
             <div class="case-studies-item-btn">
                <button id="checkout-modal-btn">buy now</button>
             </div>
          </div>
          <div class="case-studies-item active">
             <div class="case-studies-item-img">
                <img src="{{asset('home/img/users-line.png')}}" alt="User Profile">
             </div>
             <div class="case-studies-item-name">
                <p>Business</p>
             </div>
             <div class="case-studies-item-list">
                <ul>
                   <li><i class="fa fa-arrow-right"></i>3 user account</li>
                   <li><i class="fa fa-arrow-right"></i>30 social media accounts</li>
                </ul>
             </div>
             <br><br>
             <div class="case-studies-item-price">
                <p>$9.99/mo<br><span>billed monthly</span></p>
             </div>
             <div class="case-studies-item-btn">
                <button id="checkout-modal-btn-1">buy now</button>
             </div>
          </div>
          <div class="case-studies-item">
             <div class="case-studies-item-img">
                <img src="{{asset('home/img/building-line.png')}}" alt="Building Line">
             </div>
             <div class="case-studies-item-name">
                <p>Agency</p>
             </div>
             <div class="case-studies-item-list">
                <ul>
                   <li><i class="fa fa-arrow-right"></i>10 user account</li>
                   <li><i class="fa fa-arrow-right"></i>10 teams</li>
                   <li><i class="fa fa-arrow-right"></i>20 organizations</li>
                   <li><i class="fa fa-arrow-right"></i>2500 scheduled posts</li>
                </ul>
             </div>
             <div class="case-studies-item-price">
                <p>$19.99/mo<br><span>billed monthly</span></p>
             </div>
             <div class="case-studies-item-btn">
                <button id="checkout-modal-btn-2">buy now</button>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Home Section Ends -->
<!-- Modal Section Starts -->
<div id="myModal" class="modal">
    <div class="modal-content">
     <span class="close">&times;</span>
      <div class="modal-content-heading">
         <p>checkout</p>
      </div>
      <div class="modal-content-form-order">
         <div class="modal-content-form">
            <form>
               <div class="form-group-cont">
                  <div class="form-group">
                    <label>Add payment method</label>
                    <select class="form-control">
                       <option>Credit/debit card</option>
                       <option>Method 2</option>
                       <option>Method 3</option>
                       <option>Method 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>First name</label>
                    <input type="text" name="fname" placeholder="First name" class="form-control">
                  </div>
               </div>
               <div class="form-group-cont">
                  <div class="form-group">
                    <label>Credit/debit card number</label>
                    <input type="text" name="card-number" placeholder="XXXX XXXX XXXX XXXX" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="fname" placeholder="Last name" class="form-control">
                  </div>
               </div>
               <div class="form-group-cont">
                  <div class="form-group">
                    <label>Expiration</label>
                    <input type="date" name="expiration" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Country/Region</label>
                    <select id="country" name="country" class="form-control">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="??land Islands">??land Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                  </div>
               </div>
               <div class="form-group-cont">
                  <div class="form-group" style="width: 100%;">
                    <label>Billing Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Billing address">
                  </div>
               </div>
               <div class="form-group-cont">
                  <p>By clicking "Agree and subscribe," you agree: You will be charged US$3.99 (plus tax) monthly and at the end of your one-year term, your subscription will automatically renew monthly until you cancel (price subject to change). No annual commitment required after the first year. Cancel anytime via SocialCalabash Account or Customer Support.</p>
               </div>
               <div class="agree-subs-btn">
                  <input type="submit" name="" value="Agree and Subscribe">
               </div>
            </form>
         </div>
         <div class="modal-content-order-details">
            <div class="heading">
               <p>Your Order</p>
            </div>
            <div class="case-studies-item">
               <div class="case-studies-item-img">
                  <img src="{{asset('home/img/user-profile.png')}}" alt="User Profile">
               </div>
               <div class="case-studies-item-name">
                  <p>Individual</p>
               </div>
               <div class="case-studies-item-list">
                  <ul>
                     <li><i class="fa fa-arrow-right"></i>1 user account</li>
                     <li><i class="fa fa-arrow-right"></i>6 social media accounts</li>
                     <li><i class="fa fa-arrow-right"></i>20 scheduled posts</li>
                  </ul>
               </div>
               <div class="case-studies-item-price">
                  <p>$3.99/mo<br><span>billed monthly</span></p>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
  <!-- Modal Section Ends -->

 <script src="js/script.js"></script>
	<!-- Include jQuery -->
   <script src="js/jquery-2.2.4.min.js"></script>
   <script>
   // Get the modal
   var modal = document.getElementById("myModal");

   // Get the button that opens the modal
   var btn = document.getElementById("checkout-modal-btn");
   var btn1 = document.getElementById("checkout-modal-btn-1");
   var btn2 = document.getElementById("checkout-modal-btn-2");

   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];

   // When the user clicks the button, open the modal
   btn.onclick = function() {
     modal.style.display = "block";
   }
   btn1.onclick = function() {
     modal.style.display = "block";
   }
   btn2.onclick = function() {
     modal.style.display = "block";
   }

   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
     modal.style.display = "none";
   }

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
   }
   </script>
@endsection
