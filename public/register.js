
let body = document.querySelectorAll('#body');

let login = document.querySelector('#login2');

login.addEventListener('click', function(){
  body.classList.add('bg-login')
});

$(document).ready(function(){
    $(".veen .rgstr-btn button").click(function(){
      $('.veen .wrapper').addClass('move');
      $(".veen .login-btn button").removeClass('active');
      $(this).addClass('active');

    });
    $(".veen .login-btn button").click(function(){
      $('.veen .wrapper').removeClass('move');
      $(".veen .rgstr-btn button").removeClass('active');
      $(this).addClass('active');
    });
  });
