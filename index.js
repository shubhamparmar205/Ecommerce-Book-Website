$(document).ready(function(){
    
    //banner owl carousel
    // $("#banner-area .carousel-inner").owlCarousel({
    //     dots:true,
    //     items:1
    // });
    
    // Top Sale Owl Carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
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

    // isotope filter
    var $grid=$(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    //filter items on button
    $('.button-group').on("click","button",function(){
        var filterValue=$(this).attr("data-filter");
        $grid.isotope({filter:filterValue});
    });

    //New T-shirt Owl Carousel
    $("#new-tshirt .owl-carousel").owlCarousel({
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

    //Blogs Owl-carousel
    $('#blogs .owl-carousel').owlCarousel({
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
        }
    }); 

});


//product   qty section
let $qty_up=$(".qty .qty-up");
let $qty_down=$('.qty .qty-down');
// let $input=$('.qty .qty-input');

//click on qty-up on button
$qty_up.click(function(e){
    let $input=$(`.qty-input[data-id='${$(this).data("id")}']`);
    if($input.val()>=1 && $input.val()<=9){
        $input.val(function(i,oldval){
            return ++oldval;
        });
    }
});

//click on qty-down on button
$qty_down.click(function(e){
    let $input=$(`.qty-input[data-id='${$(this).data("id")}']`);
    if($input.val()>1 && $input.val()<=10){
        $input.val(function(i,oldval){
            return --oldval;
        });
    }
});