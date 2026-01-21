const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.signUpBtn-link');
const signInForm = document.querySelector('.form-wrapper.sign-in');
const signUpForm = document.querySelector('.form-wrapper.sign-up');

signUpBtnLink.addEventListener('click', (event) => {
    event.preventDefault();
    signInForm.style.display = 'none';   // Hide sign-in form
    signUpForm.style.display = 'block';  // Show sign-up form
});

signInBtnLink.addEventListener('click', (event) => {
    event.preventDefault();
    signInForm.style.display = 'block';  // Show sign-in form
    signUpForm.style.display = 'none';   // Hide sign-up form
});
