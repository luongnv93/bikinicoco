@extends('layouts.master')

@section('content')
<div id="tptnhomeslider" class="flexslider">
    <ul class="slides">
        <li>
            <div class="slide-caption">
                <div class="slide-heading fade-1">LOREM IPSUM</div>
                <p class="slide-text fade-2">DUMMY TEXT</p>

                <p class="slide-button fade-3"><a href="#">SHOP NOW</a></p></div>
            <img src="http://theme.places.vn/modules/tptnhomeslider/images/sample-1.jpg" alt="Sample 1"/>
        </li>
        <li>
            <div class="slide-caption">
                <div class="slide-heading fade-1">LOREM IPSUM</div>
                <p class="slide-text fade-2">DUMMY TEXT</p>

                <p class="slide-button fade-3"><a href="#">SHOP NOW</a></p></div>
            <img src="http://theme.places.vn/modules/tptnhomeslider/images/sample-2.jpg" alt="Sample 2"/>
        </li>
    </ul>
</div>
<div id="tptnsubbanner" class="tptnbanner container">
    <ul class="row">
        <li class="col-xs-12 col-sm-3">
            <a href="http://www.templatin.com" title="Sample 1">
                <img src="http://theme.places.vn/modules/tptnsubbanner/images/sample-1.jpg" alt="Sample 1"/>
            </a>
        </li>
        <li class="col-xs-12 col-sm-6">
            <a href="http://www.templatin.com" title="Sample 2">
                <img src="http://theme.places.vn/modules/tptnsubbanner/images/sample-2.jpg" alt="Sample 2"/>
            </a>
        </li>
        <li class="col-xs-12 col-sm-3">
            <a href="http://www.templatin.com" title="Sample 3">
                <img src="http://theme.places.vn/modules/tptnsubbanner/images/sample-3.jpg" alt="Sample 3"/>
            </a>
        </li>
    </ul>
</div>
<div id="tptnnewprods" class="tptncarousel container">
    <div class="block_title"><span>New arrivals</span></div>
    <div class="tptn-fullslides row">

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/evening-dresses/4-printed-dress.html" title="Printed Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/10-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/11-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396"/>
                    </a>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/evening-dresses/4-printed-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/evening-dresses/4-printed-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/evening-dresses/4-printed-dress.html" title="Printed Dress" itemprop="url">
                        Printed Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							56,09 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=4&amp;ipa=16&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/12-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/13-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396"/>
                    </a>
                    <span class="sale-box">Sale</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        Printed Summer Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							31,88 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
													<span class="old-price product-price">
								33,56 ?
							</span>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=5&amp;ipa=19&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/16-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/17-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396"/>
                    </a>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        Printed Summer Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							33,55 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=6&amp;ipa=31&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/20-home_default/printed-chiffon-dress.jpg" alt="Printed Chiffon Dress" title="Printed Chiffon Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/21-home_default/printed-chiffon-dress.jpg" alt="Printed Chiffon Dress" title="Printed Chiffon Dress" width="330" height="396"/>
                    </a>
                    <span class="sale-box">Sale</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                        Printed Chiffon Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							18,04 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
													<span class="old-price product-price">
								22,55 ?
							</span>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=7&amp;ipa=34&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" title="Faded Short Sleeves T-shirt" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/1-home_default/faded-short-sleeves-tshirt.jpg" alt="Faded Short Sleeves T-shirt" title="Faded Short Sleeves T-shirt" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/2-home_default/faded-short-sleeves-tshirt.jpg" alt="Faded Short Sleeves T-shirt" title="Faded Short Sleeves T-shirt" width="330" height="396"/>
                    </a>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" data-tooltip="Quick view" rel="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" title="Faded Short Sleeves T-shirt" itemprop="url">
                        Faded Short Sleeves T-shirt
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							18,16 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=1&amp;ipa=1&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/blouses/2-blouse.html" title="Blouse" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/7-home_default/blouse.jpg" alt="Blouse" title="Blouse" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/6-home_default/blouse.jpg" alt="Blouse" title="Blouse" width="330" height="396"/>
                    </a>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/blouses/2-blouse.html" data-tooltip="Quick view" rel="http://theme.places.vn/blouses/2-blouse.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/blouses/2-blouse.html" title="Blouse" itemprop="url">
                        Blouse
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							29,70 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=2&amp;ipa=7&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/casual-dresses/3-printed-dress.html" title="Printed Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/8-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/9-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396"/>
                    </a>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/casual-dresses/3-printed-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/casual-dresses/3-printed-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/casual-dresses/3-printed-dress.html" title="Printed Dress" itemprop="url">
                        Printed Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							28,60 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=3&amp;ipa=13&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tptnbotbanner" class="tptnbanner container">
    <ul class="row">
        <li class="col-xs-12 col-sm-6">
            <a href="http://www.templatin.com" title="Sample 1">
                <img src="http://theme.places.vn/modules/tptnbotbanner/images/sample-1.jpg" alt="Sample 1"/>
            </a>
        </li>
        <li class="col-xs-12 col-sm-6">
            <a href="http://www.templatin.com" title="Sample 2">
                <img src="http://theme.places.vn/modules/tptnbotbanner/images/sample-2.jpg" alt="Sample 2"/>
            </a>
        </li>
    </ul>
</div>
<div id="tptnfeatprods" class="tptncarousel container">
    <div class="block_title"><span>Featured products</span></div>
    <div class="tptn-fullslides row">

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" title="Faded Short Sleeves T-shirt" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/1-home_default/faded-short-sleeves-tshirt.jpg" alt="Faded Short Sleeves T-shirt" title="Faded Short Sleeves T-shirt" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/2-home_default/faded-short-sleeves-tshirt.jpg" alt="Faded Short Sleeves T-shirt" title="Faded Short Sleeves T-shirt" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" data-tooltip="Quick view" rel="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" title="Faded Short Sleeves T-shirt" itemprop="url">
                        Faded Short Sleeves T-shirt
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							18,16 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=1&amp;ipa=1&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/blouses/2-blouse.html" title="Blouse" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/7-home_default/blouse.jpg" alt="Blouse" title="Blouse" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/6-home_default/blouse.jpg" alt="Blouse" title="Blouse" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/blouses/2-blouse.html" data-tooltip="Quick view" rel="http://theme.places.vn/blouses/2-blouse.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/blouses/2-blouse.html" title="Blouse" itemprop="url">
                        Blouse
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							29,70 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=2&amp;ipa=7&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/casual-dresses/3-printed-dress.html" title="Printed Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/8-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/9-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/casual-dresses/3-printed-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/casual-dresses/3-printed-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/casual-dresses/3-printed-dress.html" title="Printed Dress" itemprop="url">
                        Printed Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							28,60 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=3&amp;ipa=13&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/evening-dresses/4-printed-dress.html" title="Printed Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/10-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/11-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/evening-dresses/4-printed-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/evening-dresses/4-printed-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/evening-dresses/4-printed-dress.html" title="Printed Dress" itemprop="url">
                        Printed Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							56,09 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=4&amp;ipa=16&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/12-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/13-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span> <span class="sale-box">Sale</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        Printed Summer Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							31,88 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
													<span class="old-price product-price">
								33,56 ?
							</span>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=5&amp;ipa=19&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/16-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/17-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                        Printed Summer Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							33,55 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=6&amp;ipa=31&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>

        <div class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
            <div class="left-block">
                <div class="product-image-container">
                    <a class="product_img_link" href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                        <img class="first-image" src="http://theme.places.vn/20-home_default/printed-chiffon-dress.jpg" alt="Printed Chiffon Dress" title="Printed Chiffon Dress" width="330" height="396" itemprop="image"/>
                        <img class="second-image" src="http://theme.places.vn/21-home_default/printed-chiffon-dress.jpg" alt="Printed Chiffon Dress" title="Printed Chiffon Dress" width="330" height="396"/>
                    </a>
                    <span class="new-box">New</span> <span class="sale-box">Sale</span>

                    <div class="functional-buttons">
                        <div class="quickview">
                            <a class="quick-view simptip" href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" data-tooltip="Quick view" rel="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block">
                <h5 class="product-name" itemprop="name">
                    <a href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                        Printed Chiffon Dress
                    </a>
                </h5>

                <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
											<span itemprop="price" class="price product-price">
							18,04 ?						</span>
                    <meta itemprop="priceCurrency" content="VND"/>
													<span class="old-price product-price">
								22,55 ?
							</span>
                </div>
                <div class="cart-btn">
                    <a class="ajax_add_to_cart_button button" href="http://theme.places.vn/cart?add=1&amp;id_product=7&amp;ipa=34&amp;token=de8b3e5c3dc53540cbd085129a94ea8f" rel="nofollow" data-tooltip="Add to cart" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
                        <i class="fa fa-shopping-cart left"></i>Add to cart
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tptnbrands">
    <div class="container">
        <div class="brandcrsl row">
            <div class="brand-item col-xs-12">
                <a class="logo_image" href="http://theme.places.vn/1_fashion-manufacturer" title="Fashion Manufacturer">
                    <img src="http://theme.places.vn/img/m/1-medium_default.jpg" alt="Fashion Manufacturer"/>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="tptnbstsplprods" class="container">
    <div class="row">
        <div class="tptncarousel col-md-6">
            <div class="block_title"><span>Specials</span></div>
            <div class="tptn-halfslides row">
                <ul>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                                    <img src="http://theme.places.vn/12-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                                    Printed Summer Dress
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					31,88 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
									<span class="old-price product-price">
						33,56 ?
					</span>
                            </div>
                        </div>
                    </li>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                                    <img src="http://theme.places.vn/20-home_default/printed-chiffon-dress.jpg" alt="Printed Chiffon Dress" title="Printed Chiffon Dress" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                                    Printed Chiffon Dress
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					18,04 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
									<span class="old-price product-price">
						22,55 ?
					</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tptncarousel col-md-6">
            <div class="block_title"><span>Best sellers</span></div>
            <div class="tptn-halfslides row">
                <ul>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/blouses/2-blouse.html" title="Blouse" itemprop="url">
                                    <img src="http://theme.places.vn/7-home_default/blouse.jpg" alt="Blouse" title="Blouse" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/blouses/2-blouse.html" title="Blouse" itemprop="url">
                                    Blouse
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					29,70 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
                            </div>
                        </div>
                    </li>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/casual-dresses/3-printed-dress.html" title="Printed Dress" itemprop="url">
                                    <img src="http://theme.places.vn/8-home_default/printed-dress.jpg" alt="Printed Dress" title="Printed Dress" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/casual-dresses/3-printed-dress.html" title="Printed Dress" itemprop="url">
                                    Printed Dress
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					28,60 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" title="Faded Short Sleeves T-shirt" itemprop="url">
                                    <img src="http://theme.places.vn/1-home_default/faded-short-sleeves-tshirt.jpg" alt="Faded Short Sleeves T-shirt" title="Faded Short Sleeves T-shirt" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/tshirts/1-faded-short-sleeves-tshirt.html" title="Faded Short Sleeves T-shirt" itemprop="url">
                                    Faded Short Sleeves T-shirt
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					18,16 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
                            </div>
                        </div>
                    </li>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                                    <img src="http://theme.places.vn/20-home_default/printed-chiffon-dress.jpg" alt="Printed Chiffon Dress" title="Printed Chiffon Dress" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/summer-dresses/7-printed-chiffon-dress.html" title="Printed Chiffon Dress" itemprop="url">
                                    Printed Chiffon Dress
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					18,04 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
									<span class="old-price product-price">
						22,55 ?
					</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                                    <img src="http://theme.places.vn/16-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/summer-dresses/6-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                                    Printed Summer Dress
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					33,55 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
                            </div>
                        </div>
                    </li>
                    <li class="ajax_block_product item col-xs-12" itemscope itemtype="https://schema.org/Product">
                        <div class="left-block">
                            <div class="product-image-container">
                                <a class="product_img_link" href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                                    <img src="http://theme.places.vn/12-home_default/printed-summer-dress.jpg" alt="Printed Summer Dress" title="Printed Summer Dress" width="330" height="396" itemprop="image"/>
                                </a>
                            </div>
                        </div>
                        <div class="right-block">
                            <h5 class="product-name" itemprop="name">
                                <a href="http://theme.places.vn/summer-dresses/5-printed-summer-dress.html" title="Printed Summer Dress" itemprop="url">
                                    Printed Summer Dress
                                </a>
                            </h5>

                            <div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
							<span itemprop="price" class="price product-price">
					31,88 ?				</span>
                                <meta itemprop="priceCurrency" content="VND"/>
									<span class="old-price product-price">
						33,56 ?
					</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="latest-blog" class="tptncarousel container">
    <div class="block_title"><span>From the blog</span></div>
    <div class="blogcrsl row">

        <div class="blog-container col-xs-12">
            <div class="blog-img">
                <a href="http://theme.places.vn/blog/6_summer-collection-launched"><img alt="Summer Collection Launched" src="/modules/smartblog/images/6-home-default.jpg"/></a>
            </div>
            <div class="news-date">Feb 23, 2016</div>
            <h4>
                <a title="Summer Collection Launched" href="http://theme.places.vn/blog/6_summer-collection-launched">Summer
                    Collection Launched</a></h4>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type an</p>

            <div class="r_more">
                <a class="button" title="Read more" href="http://theme.places.vn/blog/6_summer-collection-launched">Read
                    more</a></div>
        </div>


        <div class="blog-container col-xs-12">
            <div class="blog-img">
                <a href="http://theme.places.vn/blog/5_huge-saving-limited-offer"><img alt="Huge Saving Limited Offer" src="/modules/smartblog/images/5-home-default.jpg"/></a>
            </div>
            <div class="news-date">Feb 23, 2016</div>
            <h4>
                <a title="Huge Saving Limited Offer" href="http://theme.places.vn/blog/5_huge-saving-limited-offer">Huge
                    Saving Limited Offer</a></h4>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type an</p>

            <div class="r_more">
                <a class="button" title="Read more" href="http://theme.places.vn/blog/5_huge-saving-limited-offer">Read
                    more</a></div>
        </div>


        <div class="blog-container col-xs-12">
            <div class="blog-img">
                <a href="http://theme.places.vn/blog/4_enjoy-discounts-this-season"><img alt="Enjoy Discounts This Season" src="/modules/smartblog/images/4-home-default.jpg"/></a>
            </div>
            <div class="news-date">Feb 23, 2016</div>
            <h4>
                <a title="Enjoy Discounts This Season" href="http://theme.places.vn/blog/4_enjoy-discounts-this-season">Enjoy
                    Discounts This Season</a></h4>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type an</p>

            <div class="r_more">
                <a class="button" title="Read more" href="http://theme.places.vn/blog/4_enjoy-discounts-this-season">Read
                    more</a></div>
        </div>


        <div class="blog-container col-xs-12">
            <div class="blog-img">
                <a href="http://theme.places.vn/blog/3_join-our-fashion-week"><img alt="Join Our Fashion Week" src="/modules/smartblog/images/3-home-default.jpg"/></a>
            </div>
            <div class="news-date">Feb 23, 2016</div>
            <h4>
                <a title="Join Our Fashion Week" href="http://theme.places.vn/blog/3_join-our-fashion-week">Join
                    Our Fashion Week</a></h4>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type an</p>

            <div class="r_more">
                <a class="button" title="Read more" href="http://theme.places.vn/blog/3_join-our-fashion-week">Read
                    more</a></div>
        </div>


        <div class="blog-container col-xs-12">
            <div class="blog-img">
                <a href="http://theme.places.vn/blog/2_this-is-blog-title"><img alt="This Is Blog Title" src="/modules/smartblog/images/2-home-default.jpg"/></a>
            </div>
            <div class="news-date">Feb 23, 2016</div>
            <h4><a title="This Is Blog Title" href="http://theme.places.vn/blog/2_this-is-blog-title">This
                    Is Blog Title</a></h4>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type an</p>

            <div class="r_more">
                <a class="button" title="Read more" href="http://theme.places.vn/blog/2_this-is-blog-title">Read
                    more</a></div>
        </div>


        <div class="blog-container col-xs-12">
            <div class="blog-img">
                <a href="http://theme.places.vn/blog/1_another-blog-title"><img alt="Another Blog Title" src="/modules/smartblog/images/1-home-default.jpg"/></a>
            </div>
            <div class="news-date">Feb 23, 2016</div>
            <h4><a title="Another Blog Title" href="http://theme.places.vn/blog/1_another-blog-title">Another
                    Blog Title</a></h4>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type an</p>

            <div class="r_more">
                <a class="button" title="Read more" href="http://theme.places.vn/blog/1_another-blog-title">Read
                    more</a></div>
        </div>

    </div>
</div>
<div id="tptnhtmlbox2">
    <div class="container">
        <div class="row">
            <div class="box_content col-xs-12 col-md-4">
                <em class="fa fa-exchange"></em><a href="http://templatin.com">30 days exchange
                    policy</a></div>
            <div class="box_content col-xs-12 col-md-4">
                <em class="fa fa-plane"></em><a href="http://templatin.com">Free shipping over $100</a>
            </div>
            <div class="box_content col-xs-12 col-md-4">
                <em class="fa fa-support"></em><a href="http://templatin.com">24/7 online support</a>
            </div>
        </div>
    </div>
</div>
@stop