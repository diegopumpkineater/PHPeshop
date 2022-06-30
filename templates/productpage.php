<?php
//INCLUDE HEADER
include_once("inc/header.php");
?>
<!-- Start #main-site -->
<main id="main-site">

    <!-- Start of Product -->
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo htmlspecialchars($item->item_image) ?>" alt="Product" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-baloo">
                        <div class="col">
                            <form action="index.php" method="POST">
                                <input type="hidden" name="userid" value="1">
                                <input type="hidden" name="itemid" value="<?php echo htmlspecialchars($item->item_id) ?>">
                                <input type="hidden" name="cartid" value="1">
                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-baloo font-size-20"><?php echo htmlspecialchars($item->item_name) ?></h5>
                    <small>By <?php echo htmlspecialchars($item->item_brand) ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14">2000 ratings | 1000+ answered questions</a>
                    </div>
                    <hr class="m-0">
                    <!--Start of product price-->
                    <table class="my-3">
                        <tr class="font-rale font-size-14">
                            <td>Deal Price</td>
                            <td class="font-size-20 text-danger">$ <span><?php echo htmlspecialchars($item->item_price) ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;inclusive of all taxes</small></td>
                        </tr>
                    </table>
                    <!--End of product price-->

                    <!--Start of #policy-->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">10 Days<br>Replacement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">Daily Tuition<br>Delivered</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-rale font-size-12">1 Year<br>Waranty</a>
                            </div>
                        </div>
                    </div>
                    <!--End of #policy-->
                    <hr>

                    <!--Start of Order Details-->
                    <div id="order-details" class="font-rale d-flex flex-column text-dark">
                        <small>Delivery by: Mar 29 - Apr 1</small>
                        <small>Sold by <a href="#">Daily Electronics</a>4.5 out of 5 | 18,198 ratings</small>
                        <small><i class="fas fa-map-marker-alt color-primary">&nbsp;&nbsp;Deliver to customer-420201</i></small>
                    </div>
                    <!--End of Order Details-->
                    <div class="row">
                        <div class="col-6">
                            <!--color-->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-baloo">Color:</h6>
                                    <div class="p-2 color-yellow-bg rounded-circle">
                                        <button class="btn font-size-20"></button>
                                    </div>
                                    <div class="p-2 color-primary-bg rounded-circle">
                                        <button class="btn font-size-20"></button>
                                    </div>
                                    <div class="p-2 color-second-bg rounded-circle">
                                        <button class="btn font-size-20"></button>
                                    </div </div>
                                </div>
                                <!--!color-->
                            </div>
                        </div>

                        <!--Start of Size-->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">16GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!--End of Size-->



                    </div>
                </div>
                <div class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">Nam at lacus sit amet diam aliquam interdum non quis odio. Nam tristique, arcu dignissim feugiat elementum, lorem ex
                        feugiat mauris, eget ultricies elit ligula nec arcu. Nunc sed semper augue, eget mattis arcu. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
            </div>
    </section>
    <!--End of Product-->

    <!--Start of Top Sale-->
    <section id="top-sale">
        <div class="container py-5">
            <h4 class="font-rubik font-size-20">
                Top Sale
            </h4>
            <hr>
            <!--Start of Owl Carousel-->
            <div class="owl-carousel owl-theme">
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="assets/products/1.png" src="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$350</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="assets/products/2.png" src="product2" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$250</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="assets/products/3.png" src="product3" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$250</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Owl Carousel-->
        </div>
    </section>
    <!--End of Top Sale-->

</main>
<!-- End #main-site -->

<?php
//INCLUDE FOOTER
include_once("inc/footer.php");
?>