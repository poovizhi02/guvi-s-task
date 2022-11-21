const success=document.querySelector("h3")
$(document).ready(function () {
    $("form").submit(function (event) {
      event.preventDefault();

      var formData = {
        email: $("#email").val(),
        password: $("#password").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "./php/login.php",
        data: formData,
        encode: true,
      }).done(function (data) {
        if(data == "Logged in!") {
          success.innerText=data
          window.location.assign("./profile.html");
        } else if(data == "Login failed") {
          success.innerText=data
        }
        
        console.log(data);
      });
  
    });
  });