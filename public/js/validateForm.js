
  let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);

let displayname = id("displayname"),
  email = id("email"),
  comfemail = id("confirmemail"),
  password = id("password"),
  // day = id("day"),
  form = id("form"),
  errorMsg = classes("error"),
  successIcon = classes("success-icon"),
  failureIcon = classes("failure-icon");

form.addEventListener("submit", (e) => {
  e.preventDefault();


  engine(email, 0, "Email cannot be blank");
  engine(comfemail, 1, "Emaillll cannot be blank");
  engine(password, 2, "Password cannot be blank");
  engine(displayname, 3, "Username cannot be blank");
});

let engine = (id, serial, message) => {
  if (id.value.trim() === "") {
    errorMsg[serial].innerHTML = message;
    id.style.border = "2px solid red";

    // icons
    failureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";
  } else {
    errorMsg[serial].innerHTML = "";
    id.style.border = "2px solid green";

    // icons
    failureIcon[serial].style.opacity = "0";
    successIcon[serial].style.opacity = "1";
  }
};

// function validateForm()
// {
//   let displayname = document.getElementById(displayname);
//   let errorUser = document.getElementsById(errorUser);
//   if(displayname.value == ''){
//     alert("Name can't be blank");  
//     // errorUser.textContent='Bạn chưa nhập tên';
//     // errorUser.style.color='red';
//     displayname.focus();
//     return false;
//   }
// }
