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

    // $("#home").click(function(){
    //     $(".col-10 section:visible").fadeOut(function(){
    //         $(".col-10 #showcase").fadeIn();
    //     });
    //     return false;
    // });
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


// LOGIN CODES

//Validation Switch
// CheckReqs = (Boolean,classList) => {
//     if(Boolean === true){
//       classList.remove("invalid");
//       classList.add("valid");
//   }else {
//       classList.remove("valid");
//       classList.add("invalid");
//   }
//   }
  
//   //USERNAME CHECK
//   let myUsername = document.getElementById("username");
//   let noSpecial = document.getElementById("noSpecial");
//   let uLength = document.getElementById("uLength");
  
//   myUsername.onkeyup = function() {
//     noSpecial.classList = 'valid';
//     uLength.classList = 'invalid';
  
//     //Special Char Validation
//     const specialChars = /[`!@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?~]/g;
//     myUsername.value.match(specialChars) ? CheckReqs(false,noSpecial.classList) : CheckReqs(true,noSpecial.classList);
  
//     //Length Validation
//     myUsername.value.length >= 6 ? CheckReqs(true,uLength.classList) : CheckReqs(false,uLength.classList);
//   }
  
//   // When the user clicks on the username field, show the message box
//   myUsername.onfocus = () => document.getElementById("uMessage").style.display = "block";
  
//   // When the user clicks outside of the username field, hide the message box
//   myUsername.onblur = () => document.getElementById("uMessage").style.display = "none";
  
  
//   //PASSWORD CHECK
//   let myInput = document.getElementById("psw");
//   let letter = document.getElementById("letter");
//   let capital = document.getElementById("capital");
//   let number = document.getElementById("number");
//   let special = document.getElementById("special");
//   let length = document.getElementById("length");
  
//   // When the user clicks on the password field, show the message box
//   myInput.onfocus = () => document.getElementById("message").style.display = "block";
  
//   // When the user clicks outside of the password field, hide the message box
//   myInput.onblur = () => document.getElementById("message").style.display = "none";
  
//   myInput.onkeyup = function() {
//     letter.classList = 'invalid';
//     number.classList = 'invalid';
//     special.classList = 'invalid';
//     capital.classList = 'invalid';
//     length.classList = 'invalid';
//       for (let i = 0; i < myInput.value.length; i++) {
//           const char = myInput.value[i];
  
//           //Uppercase Validation
//           if (char >= 'A' && char <= 'Z') {
//             CheckReqs(true,capital.classList);
//           } 
  
//           //Lowercase Validation
//           else if (char >= 'a' && char <= 'z') {
//             CheckReqs(true,letter.classList);
//           } 
          
//           //Number Validation
//           else if (char >= '0' && char <= '9') {
//             CheckReqs(true,number.classList);
//           } 
          
//           //Special Char Validation
//           else {
//             CheckReqs(true,special.classList);
//         }
  
//         if (myInput.value.length >= 8) CheckReqs(true,length.classList);
//       }
//   }
  
  // CheckUsername = username => {
  //   for (let i = 0; i < username.length; i++) {
  //     const char = username[i];
  //     if (char >= 'A' && char <= 'Z') {
  //       hasUppercase = true;
  //     } else if (char >= 'a' && char <= 'z') {
  //       hasLowercase = true;
  //     } else if (char >= '0' && char <= '9') {
  //       hasNumber = true;
  //     } else {
  //       hasSpecialCharacter = true;
  //     }
  //   }
  // }
  
  
  /*
  // When the user starts to type something inside the password field
  myInput.onkeyup = () => {
    // Validate lowercase letters
    const lowerCaseLetters = /[a-z]/g;
      myInput.value.match(lowerCaseLetters) ? CheckReqs(true,letter.classList) : CheckReqs(false,letter.classList);
    
    // Validate capital letters
    const upperCaseLetters = /[A-Z]/g;
      myInput.value.match(upperCaseLetters) ? CheckReqs(true,capital.classList) : CheckReqs(false,capital.classList);
  
    // Validate numbers
    const numbers = /[0-9]/g;
    myInput.value.match(numbers) ? CheckReqs(true,number.classList) : CheckReqs(false,number.classList);
  
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/g;
    myInput.value.match(specialChars) ? CheckReqs(true,special.classList) : CheckReqs(false,special.classList);
  
    // Validate length
    myInput.value.length >= 8 ? CheckReqs(true,length.classList) : CheckReqs(false,length.classList);
  }
  */
  
//   let userList = new Set();
//   let Users = [[" "],[" "]];
//   let userInput = "";
  
//   //Arrow Function to ADD User
//   document.getElementById("addButton").addEventListener("click", () =>
//   {
//       userInput = myUsername.value;
//       if(letter.classList=="invalid" || number.classList=="invalid" || capital.classList=="invalid" || special.classList=="invalid" || length.classList=="invalid")
//       {
//           alert("Password Invalid. Please try again.");
//       }
//       else if (uLength.classList=="invalid" || noSpecial.classList=="invalid")
//       {
//         alert("Username Invalid. Please try again.");
//     }
//       else if((userList.size < userList.add(userInput).size) &&  (uLength.classList=="valid" && noSpecial.classList=="valid")  && (letter.classList=="valid" && number.classList=="valid" && special.classList=="valid" && capital.classList=="valid" && length.classList=="valid"))
//       {
//           userList.add(userInput);
//           for (let a = 0; a<Users[0].length; a++)
//           {
//               if (a===0)
//               Users[a].push(userInput);
//               else if (a===1)
//               Users[a].push(myInput.value);
//           }
//           alert ("User Added");
//       }
//       else
//       {
//           alert("Username Already Taken. Please Try Again.")
//       }
  
//           let allUsers = userList.values();
//           let names = "";
//           for (let uname of allUsers) 
//           {
//               names += uname + ", ";
//           }
  
//       document.getElementById("userlist").textContent = names;
//   });
  
//   //Arrow Function to VALIDATE User
//   document.getElementById("validateButton").addEventListener("click", () =>
//   {
//       userInput = document.getElementById("username2").value;
//         passwordInput = document.getElementById("psw2").value;
//       var index;
//       for (var e of Users[0])
//       {
//           if(e === userInput)
//           index = Users[0].indexOf(e);
//       }
  
//       if((userList.has(userInput))&&(userInput===Users[0][index])&&(passwordInput===Users[1][index]))
//       alert ("User is VALID. ^^d")
  
//       else if (!(userList.has(userInput)))
//       alert ("User DOES NOT EXIST! T^T")
//       else
//       alert ("Incorrect Password! >.<")
//   });
  
//   //Arrow Function to CLEAR textbox
//   document.getElementById("clearButton").addEventListener("click", () =>
//   {
//       myUsername.value = "";
//       myInput.value = "";
//       letter.classList = 'invalid';
//       number.classList = 'invalid';
//       special.classList = 'invalid';
//       capital.classList = 'invalid';
//       length.classList = 'invalid';
//       myUsername.value = "";
//       noSpecial.classList = 'invalid';
//       uLength.classList = 'invalid'
//   });

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