function validateForm() {

var email = document.getElementById("email");
var username = document.getElementById("user");
var password = document.getElementById("pass");
var confirmPass = document.getElementById("confirm-pass");
var message = document.getElementById("messages2");
var letters = /^[A-Za-z0-9]+$/;
var decimals=  /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
var mail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


 if (!email.value.match(mail))
  {
    message.innerHTML = "**Invalid email address format!";
    email.style.border = "1px solid red";
    email.focus();
    return false;
  }

if (username.value == "") {
    message.innerHTML = "**Username is required";
    username.style.border = "1px solid red";
    username.focus();
    return false;
  }
  else if (username.value.length < 6) {
    message.innerHTML = "**Username must be at least 6 characters";
    username.style.border = "1px solid red";
    username.focus();
    return false;
  }
  else if (!username.value.match(letters)) {
    message.innerHTML = "**Username must contain only alphanumberic characters";
    username.style.border = "1px solid red";
    username.focus();
    return false;
  }

if (password.value == "" || confirmPass.value == "") {
    message.innerHTML = "**Password is required";
    password.style.border = "1px solid red";
    confirmPass.style.border = "1px solid red";
    password.focus();
    return false;
  }
  //While not ideal and not using RegEX it provides the user with a bit more freedom and still making sure he isn't using the username in it
  else if (password.value.includes(username.value)) {
    password.style.border = "1px solid red";
    confirmPass.style.border = "1px solid red";
    message.innerHTML = "**Password cannot contain username";
    return false;
  }
  else if (!password.value.match(decimals)) {
    password.style.border = "1px solid red";
    confirmPass.style.border = "1px solid red";
    message.innerHTML = "**Password must be of minimum 6 characters, at least one letter and one number";
    return false;
  }
  else if (password.value != confirmPass.value) {
    password.style.border = "1px solid red";
    confirmPass.style.border = "1px solid red";
    message.innerHTML = "**The two  passwords do not match";
    return false;
  }
}

function validateLogin() {

var username = document.getElementById("userLogin");
var password = document.getElementById("passLogin");
var message = document.getElementById("messages");

if (username.value == "") {
    message.innerHTML = "**Please enter username";
    username.style.border = "1px solid red";
    username.focus();
    return false;
  }

if (password.value == "") {
    message.innerHTML = "**Password is required";
    password.style.border = "1px solid red";
    password.focus();
    return false;
  }
}

function validateEmail() {
  if (!email.value.match(mail))
   {
     message.innerHTML = "**Invalid email address format!";
     email.style.border = "1px solid red";
     email.focus();
     return false;
   }
}

function validateRecipe(name, intro, picture, ingredient, step1) {
  if (name == ""){
    alert("Please pick a recipe name!");
    return false;
  }
  if (intro == ""){
    alert("Please write an introduction!");
    return false;
  }
  if (!picture.includes("i.imgur.com")){
    alert("Please give a link to your uploaded picture on imgur (i.imgur.com/...)");
    return false;
  }
  if (ingredient == " "){
    alert("Please write an ingredient list!");
    return false;
  }
  if (step1 == " "){
    alert("You need to have at least 1 step in the recipe!");
    return false;
  }
  return true;
}
