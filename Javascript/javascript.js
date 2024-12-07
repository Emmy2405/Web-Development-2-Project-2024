const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signUpForm = document.getElementById('signUp');
const signInForm = document.getElementById('signIn');

signUpButton.addEventListener('click',function()
{
    signInForm.style.display="none";
    signUpForm.style.display="block";
})

signInButton.addEventListener('click',function()
{
    signInForm.style.display="block";
    signUpForm.style.display="none";
})


