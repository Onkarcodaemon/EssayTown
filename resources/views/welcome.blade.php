<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <div class="heading">Step 1:&nbsp; Choose Your Plan</div>
                            <h3 class="limited-time" style="font-size:19px !IMPORTANT">26th Anniversary Sale!</h3>
                            <div class="packages">
                                                                    <input type="hidden" name="trial_plan_duration" id="trial_plan_duration" value="5">
                                    <input type="radio" class="8.97" name="planId" value="30" id="membership-5" checked="checked" data-fillr-id="9807859530" data-fillr="bound" autocomplete="off" checked="checked">
                                    <label for="membership-5">
                                        5-Day Trial
                                            <div>
                                                <!--<div class="clear">-30%</div>--><span class="discount-percentage">-50%</span><strong class="regular-price">$17.97 <span><!--/mo--></span></strong><strong class="no-padding">$8.97 <span><!--/mo--></span></strong>
                                                <!--<div class="discount-percentage" style="text-align:right">-30%</div>--></div> <span data-balloon="Cancel any time with 1 click!  The 5-day trial enables you to download unlimited, exclusive papers.  If you don't cancel within 5 days (120 hours), it automatically re-bills for a new, monthly subscription at $19.77/mo." data-balloon-length="large" data-balloon-pos="up" class="balloon tooltip-close">?</span>
                                            <p class="subscription-period">Try us for
                                                5 days!  Full access!  <span data-balloon="Cancel any time with 1 click!  The 5-day trial enables you to download unlimited, exclusive papers.  If you don't cancel within 5 days (120 hours), it automatically re-bills for a new, monthly subscription at $19.77/mo." data-balloon-length="large" data-balloon-pos="up" class="balloon tooltip-close" style="">Details</span></p>
                                    </label>
                                                                                                                    <input type="radio" data-val="19.77" class="19.77" name="planId" value="9" id="membership-1" />
                                            <label for="membership-1">
                                                Monthly                                                    <div><span class="discount-percentage">-40%</span>
                                                        <strong class="regular-price">$32.95 <span>/mo</span></strong><strong class="no-padding">$19.77 <span>/mo</span></strong>
                                                                                                                </div> <span data-balloon="The monthly subscription enables you to download unlimited, exclusive papers.&nbsp; Automatically renews in 30 days.&nbsp; Easily cancel any time with a single click!" data-balloon-length="large" data-balloon-pos="up" class="balloon tooltip-close">?</span>
                                                    <p class="subscription-period">
                                                        30-day subscription to download unlimited papers</p>
                                            </label>
                                                                                        <input type="radio" data-val="18.78" class="56.34" name="planId" value="10" id="membership-2" />
                                            <label for="membership-2">
                                                Quarterly                                                    <div><span class="discount-percentage">-43%</span>
                                                        <strong class="no-padding">$18.78 <span>/mo</span></strong>
                                                            <em>($56.34 Today)</em>
                                                                                                                    </div> <span data-balloon="The quarterly subscription enables you to download unlimited, exclusive papers.&nbsp; Automatically renews in 90 days.&nbsp; Easily cancel any time with a single click!" data-balloon-length="large" data-balloon-pos="up" class="balloon tooltip-close">?</span>
                                                    <p class="subscription-period">
                                                        90-day subscription to download unlimited papers</p>
                                            </label>
                                                                                        <input type="radio" data-val="17.72" class="106.34" name="planId" value="11" id="membership-3" />
                                            <label for="membership-3">
                                                Bi-yearly                                                    <div><span class="discount-percentage">-46%</span>
                                                        <strong class="no-padding">$17.72 <span>/mo</span></strong>
                                                            <em>($106.34 Today)</em>
                                                                                                                    </div> <span data-balloon="The bi-yearly subscription enables you to download unlimited, exclusive papers.&nbsp; Automatically renews in 180 days.&nbsp; Easily cancel any time with a single click!" data-balloon-length="large" data-balloon-pos="up" class="balloon tooltip-close">?</span>
                                                    <p class="subscription-period">
                                                        180-day subscription to download unlimited papers</p>
                                            </label>
                                                                                        <input type="radio" data-val="16.48" class="197.76" name="planId" value="12" id="membership-4" />
                                            <label for="membership-4">
                                                Yearly                                                    <div><span class="discount-percentage">-50%</span>
                                                        <strong class="no-padding">$16.48 <span>/mo</span></strong>
                                                            <em>($197.76 Today)</em>
                                                                                                                    </div> <span data-balloon="The yearly subscription enables you to download unlimited, exclusive papers.&nbsp; Automatically renews in 360 days.&nbsp; Easily cancel any time with a single click!" data-balloon-length="large" data-balloon-pos="up" class="balloon tooltip-close">?</span>
                                                    <p class="subscription-period">
                                                        360-day subscription to download unlimited papers</p>
                                            </label>
                                                                                                                        </div>
                        </div>

                        <div class="step-2 ">
                            <div class="heading ">Step 2:&nbsp; Create Account</div>
                            <div class="create-account ">
                                <label>First Name: </label>
                                <input type="text " name="fname" value="" />
                                                        <label>Last Name: </label>
                                                        <input type="text" name="lname" value="" />
                                                        <label>* Email: </label>
                                                        <input type="text" name="email" id="email" value="" />
                                                        <div align="center">* We will email your username and temporary password!</div>
                            </div>
                            <div class="span6">
                                <p id='item1'><span id="emailRpl"></span></p>
                            </div>
                        </div>
                        <div class="heading">Step 3:&nbsp; Payment</div>
                        <div class="payment-methods">
                            <input id="cards" type="radio" name="pay" value="visa" checked="checked" />
                            <label for="cards" class="card"><img loading="lazy" src="images/cards.png" width="195" height="27" alt="Credit Card Options" /></label>
                             </div>
                        <div class="secuirty cc-card"> <span>256-Bit, Secure Encryption</span>
                            <p></p> <img loading="lazy" src="images/verified.png" width="253" height="31" alt="Verified &amp; 100% Secure" /> </div>
                        <div class="card-info cc-card">
                            <label>Card Number: </label>
                            <input type="text" name="cardNumber" value="" />
                            <label>Expiration: </label>
                            <select name="month">
<option value="01" selected="selected">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
 &nbsp;&nbsp;
                                <select name="year">
<option value="2022" selected="selected">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>
</select>
&nbsp;&nbsp;
                                    <label>CVV#: </label>
                                    <input class="small" type="text" name="cardCode" value="" />
                                    <div class="cvv"></div>
                                    <div class="clearfix"></div>
                                    <label>Zip Code: </label>
                                    <input class="small" type="text" name="zip" value="" /> </div>
                        <div class="amazon-pay-div" style="display: none;">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="tandc">
                                        <div class="text-center" style="padding: 12px;">
                                            <div id="AmazonPayButton"></div>
                                        </div>
                                    </div>
                                    <div class="row" id="amazonWidgets" style="display: none;">
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div id="addressBookWidgetDiv" style="height:250px;padding: 10px;"></div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div id="walletWidgetDiv" style="height:250px;padding: 10px;"></div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div id="consentWidgetDiv" style="height:200px;padding: 10px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit">
                            <input id="agree" type="checkbox" name="agree" />
                            <label for="agree">&lArr;&nbsp; Click the box/circle to confirm that you agree with
                                <!--EssayTown.com’s-->the <a title="terms of service" rel="nofollow" onclick="window.open('https://www.essaytown.com/subjects/subscription-terms.html', '_blank', 'toolbar=0,location=0,menubar=0,width=700,height=500')" tabindex="0" onkeypress="window.open('https://www.essaytown.com/subjects/subscription-terms.html', '_blank', 'toolbar=0,location=0,menubar=0,width=700,height=500')" style="cursor:pointer">terms of service</a>
                                <!-- and <a title="privacy policy" rel="nofollow" onclick="window.open('https://www.essaytown.com/subjects/terms.html', '_blank', 'toolbar=0,location=0,menubar=0,width=700,height=500')" tabindex="0" onkeypress="window.open('https://www.essaytown.com/subjects/terms.html', '_blank', 'toolbar=0,location=0,menubar=0,width=700,height=500')" style="cursor:pointer">privacy policy</a>-->.</label>
                            <div class="total-price" style="text-align:center"><strong>Total:</strong>&nbsp; $<span class="package_price">19.88</span>
                                <br/><span style="font-size:15px">(Cancel any time with 1 click!)</span></div>
                            <button class="btn btn-danger" id="confirm-subscription">
                                <!--Submit Payment-->Pay Now &amp; Start Downloading!</button>
                        </div>
                    </div>
                </form>
            </div>
    </body>
</html>
