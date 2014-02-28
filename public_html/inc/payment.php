<script>
    $(document).ready(function(){

        $("#card_li").click(function(){
            $('#card').iCheck('check');
            $('#paypal').iCheck('uncheck');
            $(this).css('background-color', '#171717');
            $(this).css('transition', 'background-color 0.25s ease-out');
            $("#paypal_li").css('background-color', '#252525');
        });

        $("#paypal_li").click(function(){
            $('#paypal').iCheck('check');
            $('#card').iCheck('uncheck');
            $(this).css('background-color', '#171717');
            $(this).css('transition', 'background-color 0.25s ease-out');
            $("#card_li").css('background-color', '#252525');
        });

        $("#card_li label, #card_li div.iradio_flat-grey ins").click(function(){
            $('#card_li').css('background-color', '#171717');
            $('#card_li').css('transition', 'background-color 0.25s ease-out');
            $("#paypal_li").css('background-color', '#252525');
        });

        $("#paypal_li label, #paypal_li div.iradio_flat-grey ins").click(function(){
            $('#paypal_li').css('background-color', '#171717');
            $('#paypal_li').css('transition', 'background-color 0.25s ease-out');
            $("#card_li").css('background-color', '#252525');
        });

        $('div.payment p').hide();
        $('div.payment p:last-child').show();

        $('input#card').on('ifChecked', function(event){
            $('div.payment p').hide();
            $('ul.card_info').show();
            $('div.payment p:last-child').show();
        });

        $('input#paypal').on('ifChecked', function(event){
            $('ul.card_info').hide();
            $('div.payment p').show();
            $('div.payment p:last-child').hide();
        });

        $('select').chosen({disable_search_threshold: 10});

        $('button.checkout').click(function(){
            if (($('#card_li div.iradio_flat-grey').hasClass('checked'))&&(!$('#paypal_li div.iradio_flat-grey').hasClass('checked'))) {

                $('form').addClass('payment_form');
                $(".payment_form").validetta({
                    realTime : false
                });
            }
            if($('#paypal_li div.iradio_flat-grey').hasClass('checked')){
                $('ul.card_info').remove();
            }
        });

    });
</script>


<section class="shipping clearfix">
    <div class="wrap clearfix">
        <?php include "steps.php"; ?>
        <hr/>

        <div class="shipping_address payment clearfix">
            <h4>Payment Information</h4>
            <form class="clearfix" action="#" method="post">
                <div class="clearfix">
                    <label>Choose Your Payment Method</label>
                    <ul class="payment_type clearfix">
                        <li id="card_li">
                            <input type="radio" name="iCheck" id="card" checked>
                            <label for="card"><img src="images/card_icon.png" alt="">Credit/Debit Card</label>
                            <img src="images/cards.png" alt="">
                        </li>
                        <li id="paypal_li">
                            <input type="radio" id="paypal" name="iCheck">
                            <label for="paypal"><img src="images/paypal_icon.png" alt="">PayPal</label>
                            <img src="images/paypal.png" alt="">
                        </li>
                    </ul>

                    <p>You have selected to pay for your order using Paypal. Please click the <strong>Place Order</strong> button below and you will be redirected to Paypal to process your payment securely.</p>

                    <ul class="card_info clearfix">
                        <li>
                            <label>Credit Card Number</label>
                            <input type="text" name="userid" data-validetta="required,creditCard" />
                        </li>
                        <li id="card_type">
                            <label>Card Type</label>
                            <select name="" id="">
                                <option value="VISA">VISA</option>
                                <option value="Master Card">Master Card</option>
                            </select>
                        </li>
                        <li id="expiry_date">
                            <label>Expires</label>
                            <div class="clearfix">
                                <select name="" id="">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="clearfix">
                                <select name="" id="">
                                    <option value="19">19</option>
                                    <option value="18">18</option>
                                    <option value="17">17</option>
                                    <option value="16">16</option>
                                    <option value="15">15</option>
                                    <option value="14">14</option>
                                    <option value="13">13</option>
                                    <option value="12">12</option>
                                    <option value="11">11</option>
                                    <option value="10">10</option>
                                    <option value="09">09</option>
                                    <option value="08">08</option>
                                </select>
                            </div>
                        </li>
                        <li id="cvv">
                            <label>CVV</label>
                            <input type="text" data-validetta="required,minLength[3],maxLength[3],number" />
                            <em>Last 3 digits on the back of the card</em>
                        </li>
                    </ul>
                    <p>Please note, your card statement will show only <strong>UM Products</strong></p>
                </div>
                <button  type="submit" class="checkout">
                    <img src="images/btn_icon_bg.png" alt="">
                    <span id="btn_box_icon"></span>
                    <span id="btn_arrow"></span>
                    <h4>Place Order</h4>
                </button>
            </form>

        </div> <!-- shipping_address payment -->

        <?php include('orderaside.php'); ?>

    </div> <!-- wrap -->
</section>