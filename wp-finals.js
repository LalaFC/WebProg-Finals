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

    $("#burgers-list").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #food-menu-burgers").fadeIn();
        });
        return false;
    });
    $("#hotdogs-list").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #food-menu-hotdogs").fadeIn();
        });
        return false;
    });
    $("#snacks-list").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #food-menu-snacks").fadeIn();
        });
        return false;
    });
    $("#contactus").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #contactusPage").fadeIn();
        });
        return false;
    });
    $("#products").click(function(){
        $(".col-10 section:visible").fadeOut(function(){
            $(".col-10 #menu").fadeIn();
        });
        return false;
    });

    // $("#searchButton").on("click", function() {
    //     var query = $("#searchInput").val();
    //     window.location.hash = "#" + query;
    // });

    // $("#searchButton").click(function() {
    //     $(".col-10 section:visible").fadeOut(function(){
    //         $(".col-10 #food-menu-search").fadeIn();
    //     });
    //     return false;
    // });

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



// function search() {
//     var query = document.forms["search"]["txt"].value;

//     // Send AJAX request to search.php
//     var xhr = new XMLHttpRequest();
//     xhr.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             // Display search results in a specific element
//             document.getElementById("searchResults").innerHTML = this.responseText;
//             $(".col-10 section:visible").fadeOut(function(){
//                 $(".col-10 #food-menu-search").fadeIn();
//             });
//         }
//     };
//     xhr.open("GET", "search.php?query=" + query, true);
//     xhr.send();
// }



//function to Show or hide

function showHideSections() {
    $(".col-10 section").each(function(e) {
        if (e != 0)
            $(this).hide();
    });

    // Show the desired section
    $(document).ready(function() {
        $(".col-10 section:visible").fadeOut(function() {
            $(".col-10 #food-menu-search").fadeIn();
        });
    });
}

function search() {
    var query = document.getElementById('searchInput').value;

    // Send AJAX request to search.php
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("searchResults").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "search.php?query=" + query, true);
    xhr.send();
}

// Event listener for search input
document.getElementById('searchInput').addEventListener('keyup', function() {
    search();
});

