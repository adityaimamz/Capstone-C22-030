const eye = document.querySelector(".input_password .eye-off");
const inputPass = document.getElementById("password");

eye.addEventListener("click", function(){
   if ( inputPass.type === "password"){
      inputPass.type = "text";
      eye.classList.replace("eye-off", "eye-on")
   }else{
      inputPass.type = "password";
      eye.classList.replace("eye-on", "eye-off")
   }
})

