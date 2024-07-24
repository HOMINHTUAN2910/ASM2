<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
	============================================ -->
    <title>Maxshop - Premium Multipurpose HTML5/CSS3 Theme</title>
    <meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
	============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
	============================================ -->

    <link rel="shortcut icon" href="ico/favicon.png">

    <!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/themecss/lib.css" rel="stylesheet">
    <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="js/lightslider/lightslider.css" rel="stylesheet">

    <!-- Theme CSS
	============================================ -->
    <link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
    <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link id="color_scheme" href="css/theme.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/themejs/libs.js"></script>
    <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lightslider/lightslider.js"></script>

    <!-- Theme files
	============================================ -->


    <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="js/themejs/application.js"></script>

</head>

<body class="res layout-subpage">
    <div id="wrapper" class="wrapper-full ">
        <!-- Main Container  -->
        <div class="main-container container">
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Smartphone & Tablets</a></li>
                <li><a href="#">Comas samer rumas</a></li>
            </ul>
            <?php
            require_once("../controller/catagories.php");
            require_once("../model/connect.php");
            include('header.php');
            ?>
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-md-12 col-sm-12">
                    <div class="product-view row">
                        <div class="left-content-product col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="content-product-left  col-sm-6 col-xs-12 ">
                                    <div id="thumb-slider-vertical" class="thumb-vertical-outer">
                                        <span class="btn-more prev-thumb nt"><i class="fa fa-chevron-up"></i></span>
                                        <span class="btn-more next-thumb nt"><i class="fa fa-chevron-down"></i></span>
                                        <ul class="thumb-vertical">
                                            <li class="owl2-item">
                                                <a data-index="0" class="img thumbnail" data-image="image/demo/shop/product/1.png" title="Canon EOS 5D">
                                                    <img src="image/demo/shop/product/1.png" title="Canon EOS 5D" alt="Canon EOS 5D">
                                                </a>
                                            </li>
                                            <li class="owl2-item">
                                                <a data-index="1" class="img thumbnail " data-image="image/demo/shop/product/f9.jpg" title="Bint Beef">
                                                    <img src="image/demo/shop/product/f9.jpg" title="Bint Beef" alt="Bint Beef">
                                                </a>
                                            </li>
                                            <li class="owl2-item">
                                                <a data-index="2" class="img thumbnail" data-image="image/demo/shop/product/2.png" title="Bint Beef">
                                                    <img src="image/demo/shop/product/2.png" title="Bint Beef" alt="Bint Beef">
                                                </a>
                                            </li>
                                            <li class="owl2-item">
                                                <a data-index="3" class="img thumbnail" data-image="image/demo/shop/product/3.png" title="Bint Beef">
                                                    <img src="image/demo/shop/product/3.png" title="Bint Beef" alt="Bint Beef">
                                                </a>
                                            </li>
                                            <li class="owl2-item">
                                                <a data-index="4" class="img thumbnail" data-image="image/demo/shop/product/j9.jpg" title="Bint Beef">
                                                    <img src="image/demo/shop/product/j9.jpg" title="Bint Beef" alt="Bint Beef">
                                                </a>
                                            </li>
                                        </ul>


                                    </div>
                                    <div class="large-image  vertical">
                                        <img itemprop="image" class="product-image-zoom" src="image/demo/shop/product/1.png" data-zoom-image="image/demo/shop/product/1.png" title="Bint Beef" alt="Bint Beef">
                                    </div>
                                    <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a>

                                </div>

                                <div class="content-product-right col-sm-6 col-xs-12">
                                    <div class="title-product">
                                        <h1>Comas samer rumas</h1>
                                    </div>
                                    <!-- Review ---->
                                    <div class="box-review form-group">
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> |
                                        <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                                    </div>

                                    <div class="product-label form-group">
                                        <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
                                        <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                            <span class="price-new" itemprop="price">$114.00</span>
                                            <span class="price-old">$122.00</span>
                                        </div>

                                    </div>

                                    <div class="product-box-desc">
                                        <div class="inner-box-desc">
                                            <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
                                            <div class="brand"><span>Brand:</span><a href="#">Apple</a> </div>
                                            <div class="model"><span>Product Code:</span> Product 15</div>
                                            <div class="reward"><span>Reward Points:</span> 100</div>
                                        </div>
                                    </div>


                                    <div id="product">
                                        <h4>Available Options</h4>
                                        <div class="image_option_type form-group required">
                                            <label class="control-label">Colors</label>
                                            <ul class="product-options clearfix" id="input-option231">
                                                <li class="radio active">
                                                    <label>
                                                        <input class="image_radio" type="radio" name="option[231]" value="33"> <img src="image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                        <label> </label>
                                                    </label>
                                                </li>
                                                <li class="radio">
                                                    <label>
                                                        <input class="image_radio" type="radio" name="option[231]" value="34"> <img src="image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                        <label> </label>
                                                    </label>
                                                </li>
                                                <li class="radio">
                                                    <label>
                                                        <input class="image_radio" type="radio" name="option[231]" value="35"> <img src="image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                                        <label> </label>
                                                    </label>
                                                </li>
                                                <li class="selected-option">
                                                </li>
                                            </ul>
                                        </div>



                                        <div class="form-group box-info-product">
                                            <div class="option quantity">
                                                <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                                    <label>Qty</label>
                                                    <input class="form-control" type="text" name="quantity" value="1">
                                                    <input type="hidden" name="product_id" value="50">
                                                    <span class="input-group-addon product_quantity_down">−</span>
                                                    <span class="input-group-addon product_quantity_up">+</span>
                                                </div>
                                            </div>
                                            <div class="cart">
                                                <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                            </div>
                                            <div class="add-to-links wish_comp">
                                                <ul class="blank list-inline">
                                                    <li class="wishlist">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end box info product -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bototm-detail">
                        <div class="row">
                            <div class="col-lg-3 col-md-4  col-xs-12">
                                <div class="module releate-horizontal">
                                    <h3 class="modtitle"><span>Related Products</span></h3>
                                    <div class="releate-product ">
                                        <div class="product-item-container">
                                            <div class="item-element clearfix">
                                                <div class="image">
                                                    <img src="image/demo/shop/product/1.png" title="Teserunt hlitia" class="img-1 img-responsive" />
                                                </div>
                                                <div class="caption">

                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="product.html">Teserunt hlitia</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$94.00</span>
                                                        <span class="price-old">$142.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-element clearfix">
                                                <div class="image">
                                                    <img src="image/demo/shop/product/19.jpg" title="Duidem rerum" class="img-1 img-responsive" />
                                                </div>
                                                <div class="caption">

                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="product.html">Duidem rerum</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$84.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-element clearfix">
                                                <div class="image">
                                                    <img src="image/demo/shop/product/18.jpg" title="Serunt mollitia" class="img-1 img-responsive" />
                                                </div>
                                                <div class="caption">

                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="product.html">Serunt mollitia</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$64.00</span>
                                                        <span class="price-old">$92.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="item-element clearfix">
                                                <div class="image">
                                                    <img src="image/demo/shop/product/14.jpg" title="Deserunt mollitia" class="img-1 img-responsive" />
                                                </div>
                                                <div class="caption">

                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                    <h4><a href="product.html">Deserunt mollitia</a></h4>
                                                    <div class="price">
                                                        <span class="price-new">$74.00</span>
                                                        <span class="price-old">$122.00</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-9 col-md-8  col-xs-12">
                                <!-- Product Tabs -->
                                <div class="producttab ">
                                    <div class="tabsslider  col-xs-12">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
                                        </ul>
                                        <div class="tab-content col-xs-12">
                                            <div id="tab-1" class="tab-pane fade active in">
                                                <p>Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua.</p>
                                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,no sea takimata sanctus est Lorem ipsumdolor sit amet. Lorem ipsum dolor sitamet, consetetur sadipscing elitr, seddiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. </p>
                                                <p><strong>Nemo enim ipsam voluptatem</strong></p>
                                                <ul class="des-custom">
                                                    <li>100% Brand New.</li>
                                                    <li>Fashion Cute Mini Finger Ring</li>
                                                    <li>Contains 1 PCS</li>
                                                    <li>Simple and easy</li>
                                                </ul>
                                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum uptatem accusantium doloremque laudantium, totam rem aperiam, eaque.</p>

                                            </div>
                                            <div id="tab-review" class="tab-pane fade">
                                                <form>
                                                    <div id="review">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                                    <td class="text-right">29/07/2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <p>Best this product opencart</p>
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="text-right"></div>
                                                    </div>
                                                    <h2 id="review-title">Write a review</h2>
                                                    <div class="contacts-form">
                                                        <div class="form-group"> <span class="icon icon-user"></span>
                                                            <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                        </div>
                                                        <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                            <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                        </div>
                                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span> HTML is not translated!</span>

                                                        <div class="form-group">
                                                            <b>Rating</b> <span>Bad</span>&nbsp;
                                                            <input type="radio" name="rating" value="1"> &nbsp;
                                                            <input type="radio" name="rating" value="2"> &nbsp;
                                                            <input type="radio" name="rating" value="3"> &nbsp;
                                                            <input type="radio" name="rating" value="4"> &nbsp;
                                                            <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                                        </div>
                                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab-4" class="tab-pane fade">
                                                <a href="#">Monitor</a>,
                                                <a href="#">Apple</a>
                                            </div>
                                            <div id="tab-5" class="tab-pane fade">
                                                <table class="data-table" style="width: 100%;" border="1">
                                                    <tbody>
                                                        <tr>
                                                            <td>Brand</td>
                                                            <td><img src="image/demo/shop/category/logo-client.png" title="Apple Cinema 30&quot;" class="img-1 img-responsive" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>History</td>
                                                            <td>Color sit amet, consectetur adipiscing elit. In gravida pellentesque ligula, vel eleifend turpis blandit vel. Nam quis lorem ut mi mattis ullamcorper ac quis dui. Vestibulum et scelerisque ante, eu sodales mi. Nunc tincidunt tempus varius. Integer ante dolor, suscipit non faucibus a, scelerisque vitae sapien.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- //Product Tabs -->
                                <!-- Upsell Products -->
                                <div class="related upsell titleLine products-list grid module ">
                                    <h3 class="modtitle"><span>Upsell Products</span></h3>
                                    <div class="upsell-products ">
                                        <div class="product-layout">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="image/demo/shop/product/e11.jpg" title="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                                        <img src="image/demo/shop/product/e12.jpg" title="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->
                                                    <span class="label label-sale">Sale</span>

                                                </div>
                                                <div class="button-group">
                                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                    <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                </div>

                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                            <span class="label label-percent">-40%</span>
                                                        </div>
                                                        <div class="description item-desc hidden">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
                                                        </div>
                                                    </div>
                                                </div><!-- right block -->

                                            </div>
                                        </div>
                                        <div class="product-layout ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="image/demo/shop/product/11.jpg" title="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                                        <img src="image/demo/shop/product/10.jpg" title="Apple Cinema 30&quot;" class="img-2 img-responsive" />

                                                    </div>
                                                    <!--Sale Label-->
                                                    <span class="label label-sale">Sale</span>

                                                </div>
                                                <div class="button-group">
                                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                    <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                </div>

                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                            <span class="label label-percent">-40%</span>
                                                        </div>
                                                        <div class="description item-desc hidden">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
                                                        </div>
                                                    </div>
                                                </div><!-- right block -->

                                            </div>
                                        </div>
                                        <div class="product-layout ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="image/demo/shop/product/35.jpg" title="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                                        <img src="image/demo/shop/product/34.jpg" title="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->
                                                    <span class="label label-sale">Sale</span>
                                                </div>
                                                <div class="button-group">
                                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                    <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                </div>

                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                            <span class="label label-percent">-40%</span>
                                                        </div>
                                                        <div class="description item-desc hidden">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
                                                        </div>
                                                    </div>
                                                </div><!-- right block -->

                                            </div>
                                        </div>
                                        <div class="product-layout ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img ">
                                                        <img src="image/demo/shop/product/14.jpg" title="Apple Cinema 30&quot;" class="img-1 img-responsive" />
                                                        <img src="image/demo/shop/product/15.jpg" title="Apple Cinema 30&quot;" class="img-2 img-responsive" />
                                                    </div>
                                                    <!--Sale Label-->
                                                    <span class="label label-sale">Sale</span>

                                                </div>

                                                <div class="button-group">
                                                    <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                                    <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                                    <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                                    <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="price">
                                                            <span class="price-new">$74.00</span>
                                                            <span class="price-old">$122.00</span>
                                                            <span class="label label-percent">-40%</span>
                                                        </div>
                                                        <div class="description item-desc hidden">
                                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l..</p>
                                                        </div>
                                                    </div>

                                                </div><!-- right block -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        $(document).ready(function() {
                            var zoomCollection = '.large-image img';
                            $(zoomCollection).elevateZoom({
                                zoomType: "inner",
                                lensSize: "200",
                                easing: true,
                                gallery: 'thumb-slider-vertical',
                                cursor: 'pointer',
                                galleryActiveClass: "active"
                            });
                            $('.large-image').magnificPopup({
                                items: [{
                                        src: 'image/demo/shop/product/1.png'
                                    },
                                    {
                                        src: 'image/demo/shop/product/f9.jpg'
                                    },
                                    {
                                        src: 'image/demo/shop/product/2.png'
                                    },
                                    {
                                        src: 'image/demo/shop/product/3.png'
                                    },
                                    {
                                        src: 'image/demo/shop/product/j9.jpg'
                                    },
                                ],
                                gallery: {
                                    enabled: true,
                                    preload: [0, 2]
                                },
                                type: 'image',
                                mainClass: 'mfp-fade',
                                callbacks: {
                                    open: function() {

                                        var activeIndex = parseInt($('#thumb-slider-vertical .img.active').attr('data-index'));
                                        var magnificPopup = $.magnificPopup.instance;
                                        magnificPopup.goTo(activeIndex);
                                    }
                                }
                            });
                            $("#thumb-slider-vertical .owl2-item").each(function() {
                                $(this).find("[data-index='0']").addClass('active');
                            });

                            $('.thumb-video').magnificPopup({
                                type: 'iframe',
                                iframe: {
                                    patterns: {
                                        youtube: {
                                            index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                                            id: 'v=', // String that splits URL in a two parts, second part should be %id%
                                            src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
                                        },
                                    }
                                }
                            });

                            $('.product-options li.radio').click(function() {
                                $(this).addClass(function() {
                                    if ($(this).hasClass("active")) return "";
                                    return "active";
                                });

                                $(this).siblings("li").removeClass("active");
                                $(this).parent().find('.selected-option').html('<span class="label label-success">' + $(this).find('img').data('original-title') + '</span>');
                            });

                            var _isMobile = {
                                iOS: function() {
                                    return navigator.userAgent.match(/iPhone/i);
                                },
                                any: function() {
                                    return (_isMobile.iOS());
                                }
                            };

                            $(".thumb-vertical-outer .next-thumb").click(function() {
                                $(".thumb-vertical-outer .lSNext").trigger("click");
                            });

                            $(".thumb-vertical-outer .prev-thumb").click(function() {
                                $(".thumb-vertical-outer .lSPrev").trigger("click");
                            });

                            $(".thumb-vertical-outer .thumb-vertical").lightSlider({
                                item: 4,
                                autoWidth: false,
                                vertical: true,
                                slideMargin: 7,
                                verticalHeight: 425,
                                pager: false,
                                controls: true,
                                prevHtml: '<i class="fa fa-chevron-up"></i>',
                                nextHtml: '<i class="fa fa-chevron-down"></i>',
                                responsive: [{
                                        breakpoint: 1199,
                                        settings: {
                                            verticalHeight: 330,
                                            item: 4,
                                        }
                                    },
                                    {
                                        breakpoint: 1024,
                                        settings: {
                                            verticalHeight: 235,
                                            item: 2,
                                            slideMargin: 5,
                                        }
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            verticalHeight: 340,
                                            item: 3,
                                        }
                                    },
                                    {
                                        breakpoint: 480,
                                        settings: {
                                            verticalHeight: 100,
                                            item: 1,
                                        }
                                    }

                                ]

                            });



                            // Product detial reviews button
                            $(".reviews_button,.write_review_button").click(function() {
                                var tabTop = $(".producttab").offset().top;
                                $("html, body").animate({
                                    scrollTop: tabTop
                                }, 1000);
                            });
                        });
                    </script>


                </div>


            </div>
            <!--Middle Part End-->
        </div>
        <!-- //Main Container -->

        <!-- Footer Container -->
        <footer class="footer-container typefooter-1">
            <!-- FOOTER TOP -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="module social_block col-md-3 col-sm-12 col-xs-12">
                                <ul class="social-block ">
                                    <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="module news-letter col-md-9 col-sm-12 col-xs-12">
                                <div class="newsletter">
                                    <div class="title-block">
                                        <div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
                                        <div class="pre-text">
                                            Duis at ante non massa consectetur iaculis id non tellus
                                        </div>
                                    </div>
                                    <div class="block_content">
                                        <form method="post" name="signup" id="signup" class="btn-group form-inline signup">
                                            <div class="form-group required send-mail">
                                                <div class="input-box">
                                                    <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                                </div>
                                                <div class="subcribe">
                                                    <button class="btn btn-default btn-lg" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                                        Subscribe </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER CENTER -->
            <div class="footer-center">
                <div class="container content">
                    <div class="row">
                        <!-- BOX INFO -->
                        <div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
                            <div class="module ">
                                <div class="content-block-footer">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <!-- BOX ACCOUT -->
                        <div class="col-md-3 col-sm-6 box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">My Account</h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="return.html">Return</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BOX INFOMATION -->
                        <div class="col-md-3 col-sm-6 box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle">Information</h3>
                                <div class="modcontent">
                                    <ul class="menu">

                                        <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                        <li><a href="sitemap.html">Site Map</a></li>
                                        <li><a href="order-history.html">Order History</a></li>
                                        <li><a href="order-information.html">Order Information</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BOX ABOUT -->
                        <div class="col-md-3  col-sm-6 collapsed-block box-footer">
                            <div class="module ">
                                <h3 class="modtitle">About Us</h3>
                                <div class="modcontent">
                                    <ul class="contact-address">
                                        <li><span class="fa fa-home"></span> My Company, 42 avenue des Champs</li>
                                        <li><span class="fa fa-envelope"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
                                        <li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>
                                    </ul>
                                    <ul class="payment-method">
                                        <li><a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-1.png" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-2.png" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-3.png" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-4.png" alt="Payment"></a></li>
                                        <li><a title="Payment Method" href="#"><img src="image/demo/cms/payment/payment-5.png" alt="Payment"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER BOTTOM -->
            <div class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            Maxshop © 2016 - 2016. MAGENTECH Store. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //end Footer Container -->
    </div>


    <!-- Cpanel Block -->
    <div id="sp-cpanel_btn" class="isDown visible-lg">
        <i class="fa fa-cog fa-spin"></i>
    </div>

    <div id="sp-cpanel" class="sp-delay">
        <h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
        <div id="sp-cpanel_settings">
            <div class="panel-group">
                <label>Color Scheme</label>
                <div class="group-schemes">
                    <span data-scheme="default" class="item_scheme selected"><span style="background: #e8622d;"></span></span>
                    <span data-scheme="blue" class="item_scheme"><span style="background: #478bca;"></span></span>
                    <span data-scheme="boocdo" class="item_scheme"><span style="background: #e54e4e;"></span></span>
                    <span data-scheme="cyan" class="item_scheme"><span style="background: #1ea181;"></span></span>
                    <span data-scheme="green" class="item_scheme "><span style="background: #52a633;"></span></span>

                </div>
            </div>

            <div class="panel-group ">
                <label>Header style</label>
                <div class="group-boxed">
                    <select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
                        <option value="header-home1">Header 1</option>
                        <option value="header-home2">Header 2</option>
                        <option value="header-home3">Header 3</option>
                        <option value="header-home4">Header 4</option>
                        <option value="header-home5">Header 5</option>
                        <option value="header-home6">Header 6</option>
                        <option value="header-home7">Header 7</option>
                        <option value="header-home8">Header 8</option>
                        <option value="header-home9">Header 9</option>
                        <option value="header-home10">Header 10</option>
                    </select>
                </div>
            </div>


            <div class="panel-group ">
                <label>Layout Box</label>
                <div class="group-boxed">
                    <select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
                        <option value="full">Wide</option>
                        <option value="boxed">Boxed</option>
                        <option value="iframed">Iframed</option>
                        <option value="rounded">Rounded</option>
                    </select>
                </div>
            </div>

            <div class="panel-group">
                <label>Body Image</label>

                <div class="group-pattern">
                    <div data-pattern="28" class="img-pattern"><img src="image/theme/patterns/28.png" alt="pattern 28"></div>
                    <div data-pattern="29" class="img-pattern"><img src="image/theme/patterns/29.png" alt="pattern 29"></div>
                    <div data-pattern="30" class="img-pattern"><img src="image/theme/patterns/30.png" alt="pattern 30"></div>
                    <div data-pattern="31" class="img-pattern"><img src="image/theme/patterns/31.png" alt="pattern 31"></div>
                    <div data-pattern="32" class="img-pattern"><img src="image/theme/patterns/32.png" alt="pattern 32"></div>
                    <div data-pattern="33" class="img-pattern"><img src="image/theme/patterns/33.png" alt="pattern 33"></div>
                    <div data-pattern="34" class="img-pattern"><img src="image/theme/patterns/34.png" alt="pattern 34"></div>
                    <div data-pattern="35" class="img-pattern"><img src="image/theme/patterns/35.png" alt="pattern 35"></div>
                    <div data-pattern="36" class="img-pattern"><img src="image/theme/patterns/36.png" alt="pattern 36"></div>
                    <div data-pattern="37" class="img-pattern"><img src="image/theme/patterns/37.png" alt="pattern 37"></div>
                    <div data-pattern="38" class="img-pattern"><img src="image/theme/patterns/38.png" alt="pattern 38"></div>
                    <div data-pattern="39" class="img-pattern"><img src="image/theme/patterns/39.png" alt="pattern 39"></div>
                    <div data-pattern="40" class="img-pattern"><img src="image/theme/patterns/40.png" alt="pattern 40"></div>
                    <div data-pattern="41" class="img-pattern"><img src="image/theme/patterns/41.png" alt="pattern 41"></div>
                    <div data-pattern="42" class="img-pattern"><img src="image/theme/patterns/42.png" alt="pattern 42"></div>
                    <div data-pattern="43" class="img-pattern"><img src="image/theme/patterns/43.png" alt="pattern 43"></div>
                    <div data-pattern="44" class="img-pattern"><img src="image/theme/patterns/44.png" alt="pattern 44"></div>
                    <div data-pattern="45" class="img-pattern"><img src="image/theme/patterns/45.png" alt="pattern 45"></div>
                </div>
                <p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
            </div>

            <div class="reset-group">
                <a href="index.html" class="btn btn-success " onclick="ResetAll()">Reset</a>
            </div>

        </div>

    </div>



    <link rel='stylesheet' property='stylesheet' href='css/themecss/cpanel.css' type='text/css' media='all' />
    <script type="text/javascript" src="js/themejs/cpanel.js"></script> <!-- //Cpanel Block -->

    <!-- Preloading Screen -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloading Screen -->


</body>

</html>