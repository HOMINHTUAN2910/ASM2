<main>
  <div class="main-right">
    <?php
    include_once "controller/product.php";

    $products = get_product();

    foreach ($products as $product) {
      echo '
            <div class="spcat-items-container products-list grid show-pre show-row">
                <!--Begin Items-->
                <div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
                    <div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
                        <div class="ltabs-items-inner ltabs-slider">
                            <div class="ltabs-item">
                                <div class="item-inner product-thumb product-item-container transition">
                                    <div class="left-block">
                                        <div class="product-image-container">
                                            <div class="image">
                                                <a class="lt-image" href="?page=detail&id=' . $product['product_id'] . '" target="_self" title="' . $product['nameProduct'] . '">
                                                    <img class="lazyload img-1 img-responsive" data-sizes="auto" src="' . $product['image_path'] . '.png" alt="' . $product['nameProduct'] . '" />
                                                </a>
                                            </div>
                                        </div>
                                        <span class="label label-new">New</span>
                                        <span class="label label-sale">Sale</span>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <h4>
                                                <a href="?page=detail&id=' . $product['product_id'] . '" title="' . $product['nameProduct'] . '" target="_self">
                                                    ' . $product['nameProduct'] . '
                                                </a>
                                            </h4>
                                            <p class="price">
                                                <span class="price-new">$' . $product['price'] . '</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add(\'' . $product['product_id'] . '\');"><i class="fa fa-heart"></i></button>
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add(\'' . $product['product_id'] . '\', \'1\');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add(\'' . $product['product_id'] . '\');"><i class="fa fa-exchange"></i></button>
                                        <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Items-->
            </div>
        ';
    }
    ?>
  </div>

</main>