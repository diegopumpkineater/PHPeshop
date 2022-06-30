<?php
//INCLUDE HEADER
include_once("inc/header.php");
$sum = 0;
$num = 0;
?>
<!-- Start #main-site -->
<main id="main-site">

    <!--Start of Shopping Cart-->
    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>

            <!--Start of Shopping cart items-->
            <div class="row">
                <div class="col-sm-9">
                    <?php foreach ($cartitems as $cartitem) : ?>
                        <?php $num += 1; ?>
                        <!--Start of Cart item-->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo htmlspecialchars($cartitem->item_image) ?>" alt="cart1" class="img-fluid" style="height:120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo htmlspecialchars($cartitem->item_name) ?></h5>
                                <small>by <?php echo htmlspecialchars($cartitem->item_brand) ?></small>
                                <!--Start of Product Rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-14">20,543 ratings</a>
                                </div>
                                <!--End of Product Rating-->
                                <div class="qty pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" id="pro<?php echo $num ?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" id="input-pro<?php echo $num ?>" class="qty_input border px-1 bg-light" value="1" placeholder="1" disabled style="width:50px;">
                                        <button class=" qty-down border bg-light" id="pro<?php echo $num ?>"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="POST">
                                        <input type="hidden" value="<?php echo htmlspecialchars($cartitem->item_id) ?>" name="deleteid">
                                        <button type="submit" class="btn font-baloo text-danger px-1 border-right">Delete</button>
                                    </form>
                                </div>
                                <!--Start of Product qty-->

                                <!--End of Product qty-->
                            </div>

                            <div class="col-sm-2">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price pro<?php echo $num ?>"> <?php echo htmlspecialchars($cartitem->item_price) ?></span>
                                </div>
                            </div>
                        </div>
                        <!--End of Cart item-->
                    <?php endforeach ?>
                </div>
                <!--Start of Subtotal section-->
                <div class="col-sm-3">
                    <div class="sub-total border text-center mt-2">
                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Your order is eligible for FREE Delivery</h6>
                        <div class="border-top py-4">
                            <h5 class="font-baloo font-size-20">Subtotal (<?php echo htmlspecialchars(count($cartitems)) ?> item):&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price">0.00</span></span></h5>
                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                        </div>
                    </div>
                </div>
                <!--End of Subtotal section-->
            </div>
            <!--End of Shopping cart items-->

        </div>
    </section>
    <!--End of Shopping Cart-->


</main>
<!-- End #main-site -->

















<?php
//INCLUDE FOOTER
include_once("inc/footer.php");
?>