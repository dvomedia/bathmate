<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bathmatewarehouse</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/custom.css">
        <!--[if lt IE 10]>
            <style>
                section hr{
                    margin-left: -15px;
                }
            </style>
        <![endif]-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/simpleCart.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $('button.shipping').click(function(){
                    document.location.href = 'shipping';
                });

                $('button.payment').click(function(){
                    document.location.href = 'payment';
                });

            });

            simpleCart({
                shippingFlatRate: 5.90,
                cartColumns: [
                    { attr: "name" , label: "Name" },
                    { attr: "quantity" , label: "Qty" },
                    { view: "remove" , text: "Remove" , label: false },
                    { attr: "price" , label: "Price", view: 'currency' },
                    { attr: "total" , label: "SubTotal", view: 'currency' },

                ],
                // "div" or "table" - builds the cart as a table or collection of divs
                cartStyle: "<?php echo $cartStyle; ?>",

                // set the currency, see the currency reference for more info
                currency: "GBP",

                checkout: {
                    type: "PayPal" ,
                    email: "you@yours.com" ,

                    // use paypal sandbox, default is false
                    sandbox: true ,

                    // http method for form, "POST" or "GET", default is "POST"
                    method: "GET" ,

                    // url to return to on successful checkout, default is null
                    success: "success.html" ,

                    // url to return to on cancelled checkout, default is null
                    cancel: "cancel.html"
                }
            });

            simpleCart.bind( "afterAdd" , function( item ){
                $('html, body').animate({ scrollTop: 0 }, 'fast');
                recalc();
            });

            simpleCart.bind( 'ready' , function(){
                recalc();
            });

            simpleCart.bind( 'update' , function(){
                recalc();
            });

            function recalc() {
                var items = [];
                simpleCart.each(function( item , x ){
                    items.push('<li>');
                    items.push('<a href="#"><img src="');
                    items.push(item.get('image'));
                    items.push('" alt="">');
                    items.push(item.get('name'));
                    items.push('<em>');
                    items.push(item.get('quantity'));
                    items.push(' x ');
                    items.push('&#163;');
                    items.push((item.get('quantity')*item.get('price')).toFixed(2));
                    items.push('</em></a>');
                    items.push('</li>');
                });
                items.push('</ul>')

                // reset
                $('#shippingproducts').html('');
                $('<ul />', {
                    'class': 'ordered_items clearfix',
                    'id' : 'cart_ul',
                    html: items.join('')
                }).prependTo('#shippingproducts');

                $('#subtotal').html('&#163;' + simpleCart.total().toFixed(2));
                $('#shippingtotal').html('&#163;' + simpleCart.shipping().toFixed(2));
                $('#grandtotal').html('&#163;' + simpleCart.grandTotal().toFixed(2));
                console.log( items );
            }

        </script>
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/0355ef5c-16d3-41ff-8723-a6509d50b88b.css"/>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
<header class="clearfix">
    <div class="wrap clearfix">
        <div class="logo clearfix">
            <a href="#">
                <img src="images/logo.png" alt="">
            </a>
        </div> <!-- logo -->

        <div class="call clearfix">
            <img src="images/call.png" alt="">
            <em>+1 (800) 983-3820</em>
        </div> <!-- call -->

    </div> <!-- wrap -->
</header>