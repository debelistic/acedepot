/* global document */
const signinForm = document.querySelector('.signin_form');
const signupForm = document.querySelector('.register_form');

document.addEventListener('click', (event) => {
  if (event.target.classList.contains('signup')) {
    signinForm.classList.toggle('close_form');
    signupForm.classList.toggle('open_form');
  } else if (event.target.classList.contains('login_form')) {
    signinForm.classList.toggle('open_form');
  }
});
