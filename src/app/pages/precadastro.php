<!DOCTYPE html>
<?php include ("src/app/components/head.php") ?>
<body>
  <header id="main-header">
    <div class="content">
      <a href="https://wallbank.com.br"><img src="/dist/images/site/logo0.svg"/></a>
      <h1 id="titleh1">Pré Cadastro</h1>
    </div>
  </header>
    <section id="breadcrumb">
      <div class="content">
        <ul>
          <li><a href="https://wallbank.com.br">Home</a></li>
          <li>Pré Cadastro</li>
        </ul>
      </div>
    </section>
    <section id="preregister">
      <div class="content">
        <div class="left">
          <h4>Abra a sua conta WALLBANK</h4>
          <div id="alert" class="alert-already" style="display: none;">
            <p onclick="this.parentElement.style.display='none';">Você já fez o seu cadastro e seu nome está na lista de espera ;)</p>
          </div>
          <p>Coloque seus dados para começar o processo de pré-cadastro da conta</p>
          <form  action="#" id="form-preregister">
            <input type="text" name="name" id="name"autocomplete="off" placeholder="Nome Completo" required>
            <!-- <label for="name">Nome Completo</label> -->
            <input type="tel" name="cpf" id="cpf"autocomplete="off" placeholder="CPF" required>
            <!-- <label for="cpf">CPF</label> -->
            <select id="estado" name="estado" required>
              <option disabled selected value="">Selecione seu Estado</option>
            </select>
            <!-- <label for="estado">Estado</label> -->
            <select id="cidade" name="cidade" required>
              <option disabled selected>Selecione primeiro o Estado</option>
            </select>
            <!-- <label for="cidade">Cidade</label> -->
            <input type="tel" name="whatsapp" id="whatsapp"autocomplete="off" placeholder="Whatsapp" required>
            <!-- <label for="whatsapp">Whatsapp</label> -->
            <input type="email" name="email" id="email" autocomplete="off"placeholder="Email" required>
            <!-- <label for="email">Email</label> -->
            <button class="g-recaptcha"
            data-sitekey="reCAPTCHA_site_key"
            data-callback='onSubmit'
            data-action='submit'>Continuar</button>
          </form>
          <small>Ao continuar, você está permitindo que o WALLBANK entre em contato e te adicione na lista de espera.</small>
      </div>
    </div>
    </section>

    <section id="done" style="display: none">
      <div class="content">
        <img src="/dist/images/site/ica-congratz.svg"/>
        <h4 id="congratz">Parabéns, seu cadastro foi efetuado com sucesso.</h4>
        <p>Foi enviado para você um e-mail contendo todas as informações necessárias para os próximos passos do pré-cadastro.</p>
        <p>Um abraço, WALL Bank.</p>
        <a href="https://wallbank.com.br"><button>VOLTAR PARA O SITE PRINCIPAL</button></a>
      </div>
    </section>

  <footer id="main-footer">
    <div class="content">
        <div class="logo-social">
          <a href="https://wallbank.com.br"><img src="/dist/images/site/logo0.svg"/></a>
          <a href="https://www.facebook.com/Ica-Bank-110155297375816/" class="social-facebook"></a>
          <a href="https://www.instagram.com/seuicabank/" class="social-instagram"></a>
        </div>
        <div class="widget">
          <div class="info">
            <img src="/dist/images/site/icabank-long.svg"/>
            <div class="company">
            <p>WALL BANK PAGAMENTOS S/A.</p>
            <p>CNPJ 00.000.000/0001-00</p>
          </div>
          </div>
          <p class="address-desktop">Rua Luiz Viana Filho, 6462 - Condomínio Manhattan Square Soho,</p>
            <p class="address-desktop">Prédio Wall Street, SALA 1417 Salvador - Bahia, CEP: 41680-400</p>
            <p class="address-mobile">Rua Luiz Viana Filho, 6462</p>
            <p class="address-mobile">Condomínio Manhattan Square Soho</p>
            <p class="address-mobile">Prédio Wall Street, SALA 1417</p>
            <p class="address-mobile">Salvador - Bahia, CEP: 41680-400</p>
          <div class="storelinks">
            <span class="appstore" id="appstore"></span>
            <span class="playstore" id="playstore"></span>
            <small>A conta digital pré-paga segue a Lei Federal 12.865/2013 e é fiscalizada pelo BACEN, através da
              Elo® disponibilizamos um cartão recarregável internacional, seguindo todas as exigências
              de segurança e garantias da legislação brasileira. ISPB - Banco Central / Homologada pela Stone Pagamentos S.A.</small>
          </div>
        </div>
    </div>
  </footer>
  <section id="before-end-footer">
    <div class="content">
      <span class="line"></span>
    </div>
  </section>
  <footer id="end-footer">
    <div class="content">
      <small>WallBank 2020©. Todos os direitos reservados. Consulte
         nossa <a href="https://go.wallbank.com.br/politica-privacidade-uso-junho2020">Termos de Uso e Política de privacidade</a> e <a href="https://go.wallbank.com.br/contrato-servicos-junho2020">Contrato de Serviços.</a></small>
      <img src="/dist/images/site/bottom-ica.svg"/>
   </div>
  </footer>
</body>
<script  src="/dist/js/bundle.js?v=0.01"></script>
  <script async src="/dist/js/preregister.functions.js?v=0.02"></script>
<!-- Hotjar Tracking Code for wallbank.com.br -->
<!-- <script async>
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:1866013,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71272807-5"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-71272807-5');
</script>
</html>
