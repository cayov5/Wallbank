subFooter = document.querySelector('#sub-footer')
subFooter.remove()
let showMenu = true;
let showSticky = true;
const openAccountMobile = document.getElementById('btn-access-account')
const activeLink = document.querySelector('.active')
const toActiveLink = document.querySelectorAll("[href='/para-sua-empresa']")
const form = document.querySelector('.login-group');
const emailElement = document.getElementById('email')
const menuSection = document.querySelector(".menu-section")
const menuLinks = document.querySelectorAll(".menu-section .mobile-nav li a")
const menuToggle = menuSection.querySelector(".menu-toggle")
const searchInput = document.getElementById('search')
const stickyButton = document.getElementById('sticky-menu')

activeLink.classList.remove('active')
toActiveLink[1].parentElement.classList.add('active')


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





if (openAccountMobile.addEventListener) {
  openAccountMobile.addEventListener("click", function(e) {
      e.preventDefault();
      email = emailElement.value
      goAccount(email)
  }, true);
}

if (form.addEventListener) {
  form.addEventListener("submit", function(e) {
      e.preventDefault();
      email = emailElement.value
      goAccountMail(email)
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
    window.location.href = 'https://icabanking.com.br/?email='+data
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
    window.location.href = 'https://icabanking.com.br/'
  },3500)
 }





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
