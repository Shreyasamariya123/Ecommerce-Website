const bar =document.getElementById("bar");
const close =document.getElementById("close");
const nav = document.getElementById("navbar");
if(bar){
    bar.addEventListener('click',()=>{
        nav.classList.add("active");
    })
}
if(close){
    close.addEventListener('click',()=>{
        nav.classList.remove("active");
    })
}
// function setFormMessage(formElement,type,message){
//     const messageElement =  formElement.querySelector(".form-message-error");
//     messageElement.textContent = message;
//     messageElement.classList.remove("form__message--success","form__message-error");
//     messageElement.classList.add('form__message--${type}');
// }
// // setFormMessage(loginForm,"success","You're logged in!");
//  function setInputError(inputElement,message){
//     inputElement.classList.add("form-input--error");
//     inputElement.parentElement.querySelector(".input-form-error-message").textContent =message;
// }
// function clearInput(inputElement){
//     inputElement.classList.remove("form__input--error");
//     inputElement.parentElement.querySelector(".input-form-error-message").textContent ="";
// }

document.addEventListener("DOMContentLoaded",()=>{
    const loginForm =document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e =>{
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });
    document.querySelector("#linkLogin").addEventListener("click",e =>{
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

});
const form=document.getElementById("createAccount");
const username = document.getElementById("signupUsername");
const email = document.getElementById("email");
const password =document.getElementById("password");
const password2 =document.getElementById("password2");
form.addEventListener('submit',e =>{
    e.preventDefault();
    validateInputs();
});

const setError =(element,message) => {
     const inputControl = element.parentElement;
     const errorDisplay = inputControl.querySelector('.form-message-error');
     errorDisplay.innerText=message;
     inputControl.classList.add("error");
     inputControl.classList.remove("success");
}

const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector(".form-message-error");
    errorDisplay.innerText="";
    inputControl.classList.add("success");
    inputControl.classList.remove("error");

};
const isValidEmail = email =>{
   const re =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
   return re.test(String(email).toLowerCase());
}

const validateInputs =() =>{
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();



if(usernameValue===""){
    setError(username,"username is required");
} else{
    setSuccess(username);
}
if(emailValue===""){
    setError(email,"Email is required");
}
else if(!isValidEmail(emailValue)){
    setError(email,"Provide a valid email address");
}
else{
    setSuccess(email);
}
if(passwordValue===""){
    setError(password,"Password is required");
}else if(passwordValue.length<8){
    setError(password,"Password must be atleast 8 characters");
}else{
    setSuccess(password);
}
if(password2Value===""){
    setError(password2,"Please confirm your password");
}
else if(password2Value!==passwordValue){
    setError(password2,"Password doesn't match");
}
else{
    setSuccess(password2);
}


};




















    // loginForm.addEventListener("submit",e =>{
    //     e.preventDefault();
    //     setFormMessage(loginForm,"error","Invalid username/password");
    // });


    // document.querySelectorAll(".username").forEach(inputElement =>{
    //     inputElement.addEventListener("blur",e=>{
    //         if(e.target.id ==="signupUsername" && e.target.value.length >0 && e.target.value.length < 10){
    //             setInputError(inputElement,"Username must be at least 10 characters in length");
    //         }
    //     });
    //     inputElement.addEventListener("input",e =>{
    //         clearInputError(inputElement);
    //     });




















































// const forms= document.querySelector(".containerforms"),
//    pwShowHide=document.querySelectorAll(".eye-icon"),
//    links = document.querySelectorAll(".link");
// // console.log(forms,pwShowHide,links)
// pwShowHide.forEach(eyeIcon =>{
//     eyeIcon.addEventListener("click",()=>{
//         let pwFields =eyeIcon.parentElement.parentElement.querySelectorAll(".password");
//         pwFields.forEach(password=>{
//             if(password.type==="password"){
//                 password.type="text";
//                 eyeIcon.classList.replace("bx-hide","bx-show");
//                 return;
//             }
//             password.type="password";
//             eyeIcon.classList.replace("bx-show","bx-hide");
//         })
//     })
// })
// links.forEach(link=>{
// link.addEventListener("click",e=>{
//     e.preventDefault();
//     forms.classList.toggle("show-signup");
// })
// })