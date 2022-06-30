$(document).ready(function(){

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1
    });
    
    //top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //isotope filter
    var $grid = $(".grid").isotope({
        itemSelector:".grid-item",
        layoutMode:"fitRows"
    });

    //filter items on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({
            filter:filterValue
        });

    });

    //new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });


    //blogs owl carousel
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });


    //Qty Value Number
    var upBtn = document.getElementsByClassName("qty-up")
    var downBtn = document.getElementsByClassName("qty-down")
    //Plus One to value
    
    for(let i =0 ; i<upBtn.length; i++){
    upBtn[i].addEventListener("click", function(e){
        var input = document.getElementById('input-'+this.id)

        let productPrice = document.getElementsByClassName("product_price "+this.id)
        let  price= productPrice[0].innerHTML
        price = price * input.value
        let insertprice = document.getElementById("deal-price")
        let total = parseFloat(insertprice.innerHTML) - parseFloat(price)
        insertprice.innerHTML = total

        input.placeholder = parseInt(input.placeholder) + 1
        input.value = input.placeholder

        price = productPrice[0].innerHTML
        price = price * input.value
        total = parseFloat(insertprice.innerHTML) + parseFloat(price)
        insertprice.innerHTML = total
    })
        let price = document.getElementsByClassName("product_price pro"+(i+1))
        price = price[0].innerHTML
        price = price
        let insertprice = document.getElementById("deal-price")
        let total = parseFloat(insertprice.innerHTML) + parseFloat(price)
        insertprice.innerHTML = total
    }

    for(let i =0 ; i<downBtn.length; i++){
    downBtn[i].addEventListener("click", function(e){
        var input = document.getElementById('input-'+this.id)
        if(input.value > 1){

        let productPrice = document.getElementsByClassName("product_price "+this.id)
        let  price= productPrice[0].innerHTML
        price = price * input.value
        let insertprice = document.getElementById("deal-price")
        let total = parseFloat(insertprice.innerHTML) - parseFloat(price)
        insertprice.innerHTML = total

        input.placeholder = parseInt(input.placeholder) - 1
        input.value = input.placeholder

        price = productPrice[0].innerHTML
        price = price * input.value
        total = parseFloat(insertprice.innerHTML) + parseFloat(price)
        insertprice.innerHTML = total
        }
    })
    }


})