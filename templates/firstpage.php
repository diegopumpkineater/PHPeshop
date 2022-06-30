<?php
//INCLUDE HEADER
include_once("inc/header.php");
?>
<!--Start #main-site -->
<main id="main-site">

    <!--Start of Owl Carousel-->
    <section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="./assets/Banner1.png" alt="Banner1">
            </div>
            <div class="item">
                <img src="./assets/Banner2.png" alt="Banner2">
            </div>
            <div class="item">
                <img src="./assets/Banner1.png" alt="Banner1">
            </div>
        </div>
    </section>

    <!--End of Owl Carousel-->

    <!--Start of Top Sale-->
    <section id="top-sale">
        <div class="container py-5">
            <h4 class="font-rubik font-size-20">
                Top Sale
            </h4>
            <hr>
            <!--Start of Owl Carousel-->
            <div class="owl-carousel owl-theme">
                <?php foreach ($products as $product) : ?>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="product.php?id=<?php echo htmlspecialchars($product->item_id) ?>"><img src="<?php echo htmlspecialchars($product->item_image) ?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo htmlspecialchars($product->item_name) ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo htmlspecialchars($product->item_price) ?></span>
                                </div>
                                <form method="POST">
                                    <input type="hidden" value="1" name="cartid">
                                    <input type="hidden" value="1" name="userid">
                                    <input type="hidden" value="<?php echo htmlspecialchars($product->item_id) ?>" name="itemid">
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <!--End of Owl Carousel-->
        </div>
    </section>
    <!--End of Top Sale-->

    <!--Start of Special Price-->
    <section id="special-price">
        <div class="container">
            <h4 class="font-rubik font-size-20">
                Special Price
            </h4>
            <div id="filters" class="button-group text-right">
                <button class="btn-is-checked" data-filter="*">All Brand</button>
                <?php foreach ($brands as $brand) : ?>
                    <button class="btn" data-filter=".<?php echo htmlspecialchars($brand->item_brand) ?>"><?php echo htmlspecialchars($brand->item_brand) ?></button>
                <?php endforeach ?>
            </div>

            <div class="grid">
                <?php foreach ($products as $product) : ?>
                    <div class="grid-item <?php echo htmlspecialchars($product->item_brand) ?> Border">
                        <div class="item py-2" style="width:200px">
                            <div class="product font-rale">
                                <a href="product.php?id=<?php echo htmlspecialchars($product->item_id) ?>"><img src="<?php echo htmlspecialchars($product->item_image) ?>" alt="product<?php echo htmlspecialchars($product->item_id) ?>" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6><?php echo htmlspecialchars($product->item_name) ?></h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$<?php echo htmlspecialchars($product->item_price) ?></span>
                                    </div>
                                    <form method="POST">
                                        <input type="hidden" value="1" name="cartid">
                                        <input type="hidden" value="1" name="userid">
                                        <input type="hidden" value="<?php echo htmlspecialchars($product->item_id) ?>" name="itemid">
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--End of Special Price-->

    <!--Start Of AD Banner-->
    <section id="banner_adds">
        <div class="container py-5 text-center">
            <img src="assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
            <img src="assets/banner2-cr-500x150.jpg" alt="banner2" class="img-fluid">
        </div>
    </section>
    <!--End of AD Banner-->

    <!--Start of New Phones-->
    <section id="new-phones">
        <div class="container">
            <h4 class="font-rubik font-size-20">New Phones</h4>
            <hr>
            <!--Start of Owl Carousel-->
            <div class="owl-carousel owl-theme">
                <?php foreach ($products as $product) : ?>
                    <div class="item py-2 bg-light">
                        <div class="product font-rale">
                            <a href="product.php?id=<?php echo htmlspecialchars($product->item_id) ?>"><img src="<?php echo htmlspecialchars($product->item_image) ?>" alt="product<?php echo htmlspecialchars($product->item_id) ?>" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo htmlspecialchars($product->item_name) ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo htmlspecialchars($product->item_price) ?></span>
                                </div>
                                <form method="POST">
                                    <input type="hidden" value="1" name="cartid">
                                    <input type="hidden" value="1" name="userid">
                                    <input type="hidden" value="<?php echo htmlspecialchars($product->item_id) ?>" name="itemid">
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <!--End of Owl Carousel-->
        </div>
    </section>
    <!--End of New Phones-->



</main>
<!-- End #main-site -->











<?php
//INCLUDE FOOTER
include_once("inc/footer.php");
?>