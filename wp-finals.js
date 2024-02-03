$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on("click", function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top,
                },
                800,
                function () {
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                }
            );
        } // End if
    });
});

$(document).ready(function(){
    $(".col-10 section").each(function(e) {
        if (e != 0)
            $(this).hide();
    });

    $("#home").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #showcase").fadeIn();
        });
        return false;
    });
    $("#aboutme").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #about").fadeIn();
        });
        return false;
    });
    $("#product-menu").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #menu").fadeIn();
        });
        return false;
    });
    $("#menu-btn").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #menu").fadeIn();
        });
        return false;
    });


    // $("#aboutme").click(function(){
    //     if ($(".col-10 section:visible").next().length != 0)
    //         $(".col-10 section:visible").fadeOut(function(){
    //             $(this).next().fadeIn();
    //         });
    //     else {
    //         $(".col-10 section:visible").fadeOut(function(){
    //             $(".col-10 section:first").fadeIn();
    //         });
    //     }
    //     return false;
    // });
    // $("#product-menu").click(function(){
    //     if ($(".col-10 section:visible").prev().length != 0)
    //         $(".col-10 section:visible").fadeOut(function(){
    //             $(this).prev().fadeIn();
    //         });
    //     else {
    //         $(".col-10 section:visible").fadeOut(function(){
    //             $(".col-10 section:last").fadeIn();
    //         });
    //     }
    //     return false;
    // });
});
