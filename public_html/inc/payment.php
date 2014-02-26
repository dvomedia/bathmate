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
                <button type="submit" class="checkout">
                    <img src="images/btn_icon_bg.png" alt="">
                    <span id="btn_box_icon"></span>
                    <span id="btn_arrow"></span>
                    <h4>Place Order</h4>
                </button>
            </form>

        </div> <!-- shipping_address payment -->

        <aside class="clearfix">
            <div class="order_summary clearfix">
                <h4>Order Summary</h4>
                <div class="clearfix">
                    <ul class="ordered_items clearfix">
                        <li>
                            <a href="#"><img src="images/goliath_thumb.jpg" alt="">
                            Bathmate Goliath
                            <em>2 x &#163;59.90</em></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/cleaning_kit_thumb.jpg" alt="">
                            Bathmate Goliath
                            <em>1 x &#163;29.90</em></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/gun_oil_thumb.jpg" alt="">
                            Gun Oil H2O Lubricant
                            <em>2 x &#163;29.90</em></a>
                        </li>
                    </ul>
                    <ul class="total clearfix">
                        <li>Cart Total</li>
                        <li>Shipping</li>
                        <li>Total</li>
                    </ul>
                    <ul class="total clearfix">
                        <li>&#163;124.90</li>
                        <li>&#163;5.90</li>
                        <li>&#163;130.80</li>
                    </ul>
                </div>
                <ul class="support clearfix">
                    <li><a id="support" href="#">Customer Support <span></span></a></li>
                    <li><a id="guarantee" href="#">Money Back Guarantee <span></span></a></li>
                </ul>
            </div> <!-- order_summary -->
        </aside>

    </div> <!-- wrap -->
</section>