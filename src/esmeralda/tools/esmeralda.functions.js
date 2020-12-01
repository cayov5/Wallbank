const emailElement = document.getElementById('email')
const cpfLabel = document.getElementById('label-cpf')
const searchInput = document.getElementById('search')
const stickyButton = document.getElementById('sticky-menu')
const heroImage = document.getElementById('hero-image')
const openAccountMobile = document.getElementById('btn-access-account')
let showMenu = true;
let showSticky = true;
const menuSection = document.querySelector(".menu-section")
const menuLinks = document.querySelectorAll(".menu-section .mobile-nav li a")
const menuToggle = menuSection.querySelector(".menu-toggle")
const footerNav = document.querySelectorAll("footer#main-footer .content ul li")
const form = document.querySelector('.login-group');
const active = document.querySelector("footer#main-footer .content ul li.active")

let emailOptions = {
  mask: /^\S*@?\S*$/
};
let cpfMask = IMask(emailElement, emailOptions);

cpfMask.on("complete", function () {
  cpfLabel.style.opacity = "0";
} )


window.onscroll = function() {stickHeader()};
const header = document.getElementById("main-header");
const subheader = document.getElementById("sub-header");
let sticky = header.offsetTop;
function stickHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    subheader.classList.add("sticky-sub")
    stickyButton.removeAttribute("style")
  } else {
    header.classList.remove("sticky");
    subheader.classList.remove("sticky-sub")
    subheader.classList.remove("show")
    showSticky = true;
    stickyButton.style.display="none";
  }
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});



footerNav.forEach(item => {
  item.addEventListener("mouseover", event => {
  active.classList.remove("active")
},item.addEventListener("mouseout", event => {
  active.classList.add("active")
}))})



menuToggle.addEventListener("click", () => {

    document.body.style.overflow = showMenu ? "hidden" : "initial"

    menuSection.classList.toggle("on", showMenu)
    showMenu = !showMenu;
})

menuLinks.forEach(link => {
  link.addEventListener("click", () => {
    document.body.style.overflow = showMenu ? "hidden" : "initial"

    menuSection.classList.toggle("on", showMenu)
    showMenu = !showMenu;
  })
})



searchInput.addEventListener("keyup", (e) => {
  if (e.keyCode === 13) {
    e.preventDefault()
    location.replace("/busca/?q="+searchInput.value)
  }
})

searchInput.addEventListener("click", () => {
  if (searchInput.value) {
    location.replace("/busca/?q="+searchInput.value)
  }
})


stickyButton.addEventListener("click", () => {
  subheader.classList.toggle("show", showSticky)
  showSticky = !showSticky;
})


if (window.matchMedia("(max-width: 960px)").matches) {
   const animMobile = lottie.loadAnimation({
      container: heroImage, // the dom element that will contain the animation
      renderer: 'canvas',
      loop: false,
      autoplay: true,
      path: '/dist/animations/ica-card-mobile.json' // the path to the animation json
    });
    heroImage.addEventListener("click", () => {
      animMobile.goToAndPlay(0);
    })
  } else {
    const anim = lottie.loadAnimation({
    container: heroImage, // the dom element that will contain the animation
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: '/dist/animations/ica-card.json' // the path to the animation json
    });
    heroImage.addEventListener("click", () => {
      anim.goToAndPlay(0);
    })
}


if (form.addEventListener) {
  form.addEventListener("submit", function(e) {
      e.preventDefault();
      email = emailElement.value
      goAccountMail(email)
  }, true);
}

if (openAccountMobile.addEventListener) {
  openAccountMobile.addEventListener("click", function(e) {
      e.preventDefault();
      email = emailElement.value
      goAccount(email)
  }, true);
}



async function goAccountMail(data) {
  data.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;')
  document.body.style.overflow = "hidden"
  const screenRedirect = document.querySelector('.redirect')
  screenRedirect.style.visibility = "visible"
  screenRedirect.style.opacity = 1;
  goToLogin = setInterval(() => {
    document.body.style.opacity = 0
    clearInterval(goToLogin)
    window.location.href = 'https://go.wallbank.com.br/pre-cadastro/?redir='+data
  },3500)
 }

 async function goAccount() {
  document.body.style.overflow = "hidden"
  const screenRedirect = document.querySelector('.redirect')
  screenRedirect.style.visibility = "visible"
  screenRedirect.style.opacity = 1;
  goToLogin = setInterval(() => {
    document.body.style.opacity = 0
    clearInterval(goToLogin)
    window.location.href = 'https://go.wallbank.com.br/pre-cadastro'
  },3500)
 }
