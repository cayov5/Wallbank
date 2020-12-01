const cpf = document.getElementById('cpf');
const whatsapp = document.getElementById('whatsapp');
const email = document.getElementById('email');
let showMenu = true;
const estado = document.getElementById('estado');
const cidade = document.getElementById('cidade');
const form = document.getElementById('form-preregister');
const alertbox = document.getElementById('alert');
const congratz = document.getElementById('congratz');
const preregister = document.getElementById('preregister');
const done = document.getElementById('done');
const titleh1 = document.getElementById('titleh1');

const api = 'https://br-cidade-estado-nodejs.glitch.me';

let emailOptions = {
  mask: /^\S*@?\S*$/
};

let whatsappOptions = {
  mask: '(00) 0 0000 0000'
};

let cpfOptions = {
  mask: '000.000.000-00'
}

let cpfMask = IMask(cpf, cpfOptions);
let emailMask = IMask(email, emailOptions);
let whatsappMask = IMask(whatsapp, whatsappOptions);




window.onscroll = function() {stickHeader()};
const header = document.getElementById("main-header");
let sticky = header.offsetTop;
function stickHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    preregister.classList.add("sticky-header");
  } else {
    header.classList.remove("sticky");
    preregister.classList.remove("sticky-header");
  }}

  const doListCidade = () => {
    if (!estado.value) {
      return null;
    }
    cidade.length = 0;
    fetch(api+'/estados/'+estado.value+'/cidades')
    .then(
      function(response) {
        if (response.status !== 200) {
          console.warn('Looks like there was a problem. Status Code: ' +
            response.status);
          return;
        }

        response.json().then(function(data) {
          let option;
        for (let i = 0; i < data.length; i++) {
            option = document.createElement('option');
            option.text = data[i].cidade;
            option.value = data[i].cidade;
            cidade.add(option);
        }
        });
      }
    )
    .catch(function(err) {
      console.error('Fetch Error -', err);
      alert ('Erro ao se comunicar, verifique sua conexão com a internet.')
    });
  }

estado.addEventListener('change',  (event) => {
  doListCidade()
});




fetch(api+'/estados')
  .then(
    function(response) {
      if (response.status !== 200) {
        console.warn('Looks like there was a problem. Status Code: ' +
          response.status);
        return;
      }

      response.json().then(function(data) {
        let option;
      for (let i = 0; i < data.length; i++) {
          option = document.createElement('option');
          option.text = data[i].estado;
          option.value = data[i].id;
          estado.add(option);
      }
      });
    }
  )


 if (form.addEventListener) {
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        const formattedFormData = new FormData(form);
        doSubmit(formattedFormData);
    }, true);
}



async function doSubmit(formattedFormData) {
   await fetch('/src/app/Controllers/DoRegister.php',{
    method: 'POST',
    body: formattedFormData
}).then(function(response) {
  if (!response.ok) {
    throw Error(response.statusText);
  }
  response.json().then(function(status) {
    switch (status['Status']){
      case 1:
        preregister.style.display="none"
        done.removeAttribute("style")
        nome = formattedFormData.get('name')
        window.scrollTo(0, 0);
        congratz.innerHTML = "Parabéns, "+nome+". Seu cadastro foi efetuado com sucesso."
      break;
      case 2:
        form.reset()
        alertbox.removeAttribute("style")
        window.scrollTo(0, 0);
      break;
      default:
        alert ('Erro ao se comunicar, verifique sua conexão com a internet.')
    }
  });
}).catch(function(err) {
  console.error('Fetch Error -', err);
})
}






