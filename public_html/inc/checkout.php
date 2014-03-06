<section class="clearfix">
    <div class="wrap clearfix">
        <?php include "steps.php"; ?>
        <hr/>

        <div id="checkoutproducts" class="simpleCart_items"></div>

        <!--
        <table>
            <thead>
                <td>Name</td>
                <td>Qty</td>
                <td>Action</td>
                <td>Price</td>
                <td>Subtotal</td>
            </thead>
            <tbody>
                <tr>
                    <td>Bathmate Goliath</td>
                    <td>2</td>
                    <td><a href="#"><img src="images/remove.png" alt="">REMOVE</a></td>
                    <td>$59.99</td>
                    <td>$119.98</td>
                </tr>
                <tr>
                    <td>Cleaning Kit</td>
                    <td>2</td>
                    <td><a href="#"><img src="images/remove.png" alt="">REMOVE</a></td>
                    <td>$19.99</td>
                    <td>$39.98</td>
                </tr>
                <tr>
                    <td>Shower Strap</td>
                    <td>1</td>
                    <td><a href="#"><img src="images/remove.png" alt="">REMOVE</a></td>
                    <td>$12.99</td>
                    <td>$12.99</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td></td>
                    <td></td>
                    <td>$5.95</td>
                    <td>$5.95</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>$178.90</td>
                </tr>
            </tbody>
        </table>
        -->
        <div class="more_comfort clearfix">
            <img src="images/down_arrow.png" alt="">
            <em>Need more comfort?</em>
            <h5>Check out the accessories below</h5>
        </div> <!-- more_comfort -->

        <form style="padding: 0;" method="POST" action="/shipping">
        <button class="checkout shipping">
            <img src="images/btn_icon_bg.png" alt="">
            <span id="btn_lock_icon"></span>
            <em>proceed to secure</em>
            <span id="btn_arrow"></span>
            <h4>Checkout</h4>
        </button>
        </form>

        <div class="items clearfix">
            <h4>Add an Accessory</h4>
            <ul class="clearfix">
                <li class="simpleCart_shelfItem">
                <span class="item_image">images/thumb_cleaning_kit.png</span>
                    <h2><a class="item_name" href="http://www.penomet-direct.com">Cleaning Kit</a></h2>
                    <p>The cleaning kit includes a carry case, cleaning brushes and cleaning gel.</p>
                    <img src="images/cleaning_kit.png" alt="">
                    <ul class="price clearfix">
                        <li>Was &#163;39.95</li>
                        <li>Now <strong class="item_price">&#163;24.95</strong></li>
                    </ul>
                    <em>You Save <span>&#163;15.00</span></em>
                    <button class="item_add">Add to Cart</button>
                </li>
                <li class="simpleCart_shelfItem">
                    <span class="item_image">images/thumb_showerstrap.png</span>
                    <h2><a class="item_name" href="#">Shower Strap</a></h2>
                    <p>The Shoer Strap gives extra support while showering</p>
                    <img src="images/shower_strap.png" alt="">
                    <ul class="price clearfix">
                        <li>Was &#163;39.95</li>
                        <li>Now <strong class="item_price">&#163;24.95</strong></li>
                    </ul>
                    <em>You Save <span>&#163;15.00</span></em>
                    <button class="item_add">Add to Cart</button>
                </li>
                <li class="simpleCart_shelfItem">
                    <span class="item_image">images/thumb_monkey_spanker_vibro.png</span>
                    <h2><a class="item_name" href="#">Monkey Spanker Vibro</a></h2>
                    <p>Massages your penis after workout for additional pleasure whilst minimizing swelling.</p>
                    <img src="images/spanker_vibro.png" alt="">
                    <ul class="price clearfix">
                        <li>Was &#163;39.95</li>
                        <li>Now <strong class="item_price">&#163;24.95</strong></li>
                    </ul>
                    <em>You Save <span>&#163;15.00</span></em>
                    <button class="item_add">Add to Cart</button>
                </li>
                <li class="simpleCart_shelfItem">
                    <span class="item_image">images/thumb_essential_package.png</span>
                    <h2><a class="item_name" href="#">Essential Package</a></h2>
                    <p>Contains Monkey Spanker, Gun Oil ultimate cleaning foam as well as Gun Oil lubricant.</p>
                    <img src="images/essential_pack.png" alt="">
                    <ul class="price clearfix">
                        <li>Was &#163;39.95</li>
                        <li>Now <strong class="item_price">&#163;24.95</strong></li>
                    </ul>
                    <em>You Save <span>&#163;15.00</span></em>
                    <button class="item_add">Add to Cart</button>
                </li>
                <li class="simpleCart_shelfItem">
                    <span class="item_image">images/thumb_gunoil_shine.png</span>
                    <h2><a class="item_name" href="#">Gun Oil Shine</a></h2>
                    <p>Alchohol-free cleaning foam to safely disinfect and sanitize your device</p>
                    <img src="images/gun_oil_shine.png" alt="">
                    <ul class="price clearfix">
                        <li>Was &#163;39.95</li>
                        <li>Now <strong class="item_price">&#163;24.95</strong></li>
                    </ul>
                    <em>You Save <span>&#163;15.00</span></em>
                    <button class="item_add">Add to Cart</button>
                </li>
                <li class="simpleCart_shelfItem">
                    <span class="item_image">images/thumb_gunoil_h2o.png</span>
                    <h2><a class="item_name" href="#">Gun Oil H2O Lubricant</a></h2>
                    <p>Delivers super smooth, long-lasting glide with a wetter lighter-weight feel than silicone.</p>
                    <img src="images/gun_oil.png" alt="">
                    <ul class="price clearfix">
                        <li>Was &#163;39.95</li>
                        <li>Now <strong class="item_price">&#163;24.95</strong></li>
                    </ul>
                    <em>You Save <span>&#163;15.00</span></em>
                    <button class="item_add">Add to Cart</button>
                </li>
            </ul>
        </div> <!-- items -->

    </div> <!-- wrap -->
</section>
