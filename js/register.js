const sucess= document.querySelector("h3")
const profileNode = document.querySelector("#profile")
const registerNode = document.querySelector("#register")
$(document).ready(function () {
    $("#register").submit(function (event) {
      event.preventDefault();

      var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        password:$("#password").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "./php/register.php",
        data: formData,
        encode: true,
      }).done(function (data) {
        if(data == "Registration Successful") {
          sucess.innerText=data
          registerNode.remove()
          profileNode.classList.remove("d-none");
        } else if (data == "already exist") {
          sucess.innerText=data
        }
        
        console.log(data);
      });
  
    });
  });
$(document).ready(function () {
    $("#profile").submit(function (event) {
      event.preventDefault();
      window.location.assign("./login.html");

      // var formData = {
      //   name: $("#name").val(),
      //   email: $("#email").val(),
      //   mobilenum: $("#mobilenum").val(),
      //   address: $("#address").val(),
      // };
  
      // $.ajax({
      //   type: "POST",
      //   url: "./php/profile.php",
      //   data: formData,
      //   encode: true,
      // }).done(function (data) {
      //   console.log(data);
      // });
  
    });
  });

