subFooter = document.querySelector('#sub-footer')
const form = document.getElementById('form-contact');
subFooter.remove()

const openAccountMobile = document.getElementById('btn-access-account')
const activeLink = document.querySelector('.active')
const toActiveLink = document.querySelectorAll("[href='/fale-conosco']")

activeLink.classList.remove('active')
toActiveLink[1].parentElement.classList.add('active')

if (form.addEventListener) {
  form.addEventListener("submit", function(e) {
      e.preventDefault();
      const formattedFormData = new FormData(form);
      doSubmit(formattedFormData);
  }, true);
}



async function doSubmit(formattedFormData) {
 await fetch('/fale-conosco/submit',{
  method: 'POST',
  body: formattedFormData
}).then(function(response) {
if (!response.ok) {
  throw Error(response.statusText);
}
response.json().then(function(status) {
  switch (status['Status']){
    case 1:
      form.reset()
      window.scrollTo(0, 0);
      alert ('Parabéns, seu email foi enviado com sucesso.')
    break;
    case 2:
      form.reset()
      window.scrollTo(0, 0);
    break;
    default:
      alert ('Erro ao se comunicar, verifique sua conexão com a internet.')
  }
});
}).catch(function(err) {
console.error('Fetch Error -', err);
alert ('Erro ao se comunicar, verifique sua conexão com a internet.')
})
}
