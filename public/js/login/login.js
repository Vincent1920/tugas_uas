document.addEventListener('DOMContentLoaded', function() {
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active");
    });
  });

  function imgSlider (anything){
    document.querySelector('.mySlider').src = anything; 
  }
  
  function gentiWarna(color){
    const bulet = document.querySelector('.bob')
    bulet.style.background = color;
  }
  
  let docTitle = document.title;
   window.addEventListener("blur", () => {
   document.title = "chocoscript ";
  })
  window.addEventListener("focus", () => {
  document.title = docTitle;
   })


   