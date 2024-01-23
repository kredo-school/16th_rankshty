$('#categoriesCarousel .carousel-item').each(function () {
var minPerSlide = 4;
var next = $(this).next();
if (!next.length) {
next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) { next = next.next(); if (!next.length) { next = $(this).siblings(':first'); } next.children(':first-child').clone().appendTo($(this)); }
});

$("#slider-range").slider({
    range: true, 
    min: 0,
    max: 3500,
    step: 50,
    slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    
    console.log(ui.values[0])
    
    suffix = '';
    if (ui.values[ 1 ] == $( "#max-price").data('max') ){
        suffix = ' +';
    }
    $( "#max-price").html(ui.values[ 1 ] + suffix);         
}
})

