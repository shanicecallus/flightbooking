let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

var swiper = new Swiper(".home-slider", {
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const stripe = Stripe("pk_test_51MGjlgErwAmkvHMKhNOhSNXa6PaEnCx2elLGyOJdMMOy72Nw53xn0APBRxxpB7Gr9CNXmTzBov7s7On1iB2JCV7V001WUc7HU4")
const btn = document.querySelector('#btn')
btn.addEventListener('click', ()=>{
  fetch('/checkout.php', {
    method:"POST", 
    header:{
      'Content-Type' : 'application/json', 
    }, 
    body: JSON.stringify({})
  }).then(res=> res.json())
  .then(payload => {
    stripe.redirectToCheckout({sessionId: payload.id})
  })
})