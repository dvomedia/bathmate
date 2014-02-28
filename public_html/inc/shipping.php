<script>
    $(document).ready(function(){

        $('select').chosen({disable_search_threshold: 10});

        $('div.checkbox>label>a').click(function(){
            $('.terms_conditions').bPopup();
        });

    });

    $('.checkbox span.xyz').hide();

    $('button.checkout').click(function(){
        if(!$('div.checkbox>div').hasClass('checked')){
            $('.checkbox span.xyz').show();
        }
        else{
            $('.checkbox span.xyz').hide();
        }
    });

    $('.checkbox span.xyz-close').click(function(){
        $('.checkbox span.xyz').hide();
    });

</script>
<section class="shipping clearfix">
    <div class="wrap clearfix">
        <?php include "steps.php"; ?>
        <hr/>

        <div class="shipping_address clearfix">
            <h4>Enter your shipping address</h4>
            <form id="shipping_form" class="clearfix" action="#" method="post">

                <div class="clearfix">
                    <ul class="clearfix">
                        <li>
                            <label>First Name</label>
                            <input type="text" data-validetta="required">
                        </li>
                        <li>
                            <label>Last Name</label>
                            <input type="text">
                        </li>
                        <li>
                            <label>Email</label>
                            <input type="email" data-validetta="required,email">
                        </li>
                        <li>
                            <label>Phone Number</label>
                            <input type="tel" data-validetta="required,number">
                        </li>
                    </ul>
                    <ul class="clearfix">
                        <li>
                            <label>Street Address Line 1</label>
                            <input type="text" data-validetta="required">
                        </li>
                        <li>
                            <label>Street Address Line 2</label>
                            <input type="text">
                        </li>
                        <li>
                            <label>City</label>
                            <input type="text" data-validetta="required">
                        </li>
                        <li>
                            <label>Zip/Postal Code</label>
                            <input type="text" data-validetta="required">
                        </li>
                        <li>
                            <label>Region</label>
                            <!-- <span></span> -->
                            <select name="" id="">
                                <option value="">Select a region</option>
                                <option value="australia">Australia</option>
                                <option value="california">California</option>
                                <option value="canada">Canada</option>
                                <option value="district-of-columbia">District of Columbia</option>
                                <option value="delaware">Delaware</option>
                                <option value="spain">Spain</option>
                                <option value="florida">Florida</option>
                                <option value="georgia">Georgia</option>
                            </select>
                        </li>
                        <li>
                            <label>Country</label>
                            <!-- <span></span> -->
                            <select name="" id="">
                                <option value="">Select a country</option>
                                <option value="australia">Australia</option>
                                <option value="california">California</option>
                                <option value="canada">Canada</option>
                                <option value="district-of-columbia">District of Columbia</option>
                                <option value="delaware">Delaware</option>
                                <option value="spain">Spain</option>
                                <option value="florida">Florida</option>
                                <option value="georgia">Georgia</option>
                                <option value="gibraltar">Gibraltar</option>
                                <option value="croatia">Croatia</option>
                                <option value="ireland">Ireland</option>
                                <option value="illinois">Illinois</option>
                                <option value="isle-of-man">Isle of Man</option>
                                <option value="indiana">Indiana</option>
                                <option value="india">India</option>
                                <option value="jersey">Jersey</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="massachusetts">Massachusetts</option>
                                <option value="michigan">Michigan</option>
                                <option value="missouri">Missouri</option>
                                <option value="north-carolina">North Carolina</option>
                                <option value="netherlands">Netherlands</option>
                                <option value="norway">Norway</option>
                                <option value="new-york">New York</option>
                                <option value="new-zealand">New Zealand</option>
                                <option value="ohio">Ohio</option>
                                <option value="oregon">Oregon</option>
                                <option value="panama">Panama</option>
                                <option value="poland">Poland</option>
                                <option value="singapore">Singapore</option>
                                <option value="slovenia">Slovenia</option>
                                <option value="tennessee">Tennessee</option>
                                <option value="texas">Texas</option>
                                <option value="united-kingdom">United Kingdom</option>
                                <option value="washington">Washington</option>
                                <option value="wyoming">Wyoming</option>
                                <option value="mississippi">Mississippi</option>
                                <option value="jamaica">Jamaica</option>
                                <option value="pennsylvania">Pennsylvania</option>
                                <option value="arizona">Arizona</option>
                                <option value="connecticut">Connecticut</option>
                                <option value="maine">Maine</option>
                                <option value="idaho">Idaho</option>
                                <option value="south-dakota">South Dakota</option>
                                <option value="louisiana">Louisiana</option>
                                <option value="oklahoma">Oklahoma</option>
                                <option value="nevada">Nevada</option>
                                <option value="new-jersey">New Jersey</option>
                                <option value="iowa">Iowa</option>
                                <option value="maryland">Maryland</option>
                                <option value="mauritius">Mauritius</option>
                                <option value="mexico">Mexico</option>
                                <option value="south-africa">South Africa</option>
                                <option value="sweden">Sweden</option>
                                <option value="nova-scotia">Nova Scotia</option>
                                <option value="quebec">Quebec</option>
                                <option value="virginia">Virginia</option>
                                <option value="minnesota">Minnesota</option>
                                <option value="colorado">Colorado</option>
                                <option value="alabama">Alabama</option>
                                <option value="kentucky">Kentucky</option>
                                <option value="south-carolina">South Carolina</option>
                                <option value="france">France</option>
                                <option value="switzerland">Switzerland</option>
                                <option value="puerto-rico">Puerto Rico</option>
                                <option value="arkansas">Arkansas</option>
                                <option value="kansas">Kansas</option>
                                <option value="utah">Utah</option>
                                <option value="hawaii">Hawaii</option>
                                <option value="new-hampshire">New Hampshire</option>
                                <option value="north-dakota">North Dakota</option>
                                <option value="thailand">Thailand</option>
                                <option value="finland">Finland</option>
                                <option value="dominican-republic">Dominican Republic</option>
                                <option value="denmark">Denmark</option>
                                <option value="germany">Germany</option>
                                <option value="estonia">Estonia</option>
                                <option value="turkey">Turkey</option>
                                <option value="colombia">Colombia</option>
                                <option value="hong-kong">Hong Kong</option></select>
                            </select>
                        </li>
                    </ul>
                    <div class="checkbox clearfix">
                        <input type="checkbox" id="check" name="iCheck" value="" >
                        <label for="">I agree to the <a href="#">Terms &amp; Conditions</a></label>
                        <span class="xyz" style="left: 290px; top: 22px; display:block;">
                            Please accept the terms and conditions<br>to proceed to payment.<br>
                            <span class="xyz-close">x</span>
                        </span>
                    </div>
                </div>

                <button class="checkout payment" onclick="">
                    <img src="images/btn_icon_bg.png" alt="">
                    <span id="btn_card_icon"></span>
                    <em>proceed to billing &amp;</em>
                    <span id="btn_arrow"></span>
                    <h4>Payment</h4>
                </button>
            </form>

        <div class="terms_conditions clearfix">
            <span class="b-close">
                <span><img src="images/remove.png" alt=""></span>
            </span>
           <div class="clearfix">
                <h2>Terms and Conditions</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div> <!-- terms_conditions -->


        </div> <!-- shipping_address -->

        <?php include('orderaside.php'); ?>

    </div> <!-- wrap -->
</section>