const nameHtml = document.getElementById('name');
const cpfHtml = document.getElementById('cpf');
const estadoHtml = document.getElementById('estado');
const cidadeHtml = document.getElementById('cidade')
const emailHtml = document.getElementById('email');
const whatsappHtml = document.getElementById('whatsapp');
const form = document.getElementById('form-preregister');
const preregister = document.getElementById('preregister');
const done = document.getElementById('done');

if (form.addEventListener) {
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        const preCadastroSlide = document.getElementById('form-preregister')
        preCadastroSlide.classList.add('finished');
        doSubmit();
    }, true);
}

async function doSubmit() {
  const name = nameHtml.value;
  const cpf = cpfHtml.value;
  const email = emailHtml.value;
  const phone = whatsappHtml.value;
  const state = estadoHtml.value;
  const city = cidadeHtml.value;

  await fetch(
    'https://api.wincapital.net.br/v1/mailers/pre-register',
    {
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      method: 'POST',
      body: JSON.stringify({ name, cpf, email, phone, state, city }),
    }).then(function(response) {
      if (!response.ok) {
        throw Error(response.err);
      }
    }).catch(function(err) {
      console.error('Fetch Error -', err);
    }
  )
}