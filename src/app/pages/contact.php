<!DOCTYPE html>
<?php include ("src/app/components/head.php") ?>
  <?php include ("src/app/components/header.php") ?>
  <section id="breadcrumb">
      <div class="content">
        <ul>
          <li><a href="https://wallbank.com.br">Home</a></li>
          <li>Fale Conosco</li>
        </ul>
      </div>
  </section>

  <section id="contact">
  <div class="bg">
        <img src="/dist/images/ica-people@2x.png" alt="">
      </div>
    <div class="content">
      <div class="top">
      <h1>Fale Conosco</h1>
      <p>Tem uma sugestão, uma dúvida ou algo para nos falar?<br>Entre em contato:</p>
    </div>
      <div class="contact">

        <div class="title">
          <h4>Envie-nos uma mensagem</h4>
          <img src="/dist/images/vectors/ica-mail.svg" alt="">
        </div>
        <form  action="#" id="form-contact">
            <div class="form-group">
              <input type="text" name="name" id="name"autocomplete="off" placeholder="Nome Completo" required>
              <input type="text" name="empresa" id="empresa"autocomplete="off" placeholder="Empresa (se aplicável)">
            </div>
            <div class="form-group">
              <input type="tel" name="whatsapp" id="whatsapp"autocomplete="off" placeholder="Whatsapp" required>
              <input type="email" name="email" id="email" autocomplete="off"placeholder="Email" required>
            </div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Insira sua Mensagem"></textarea>
            <div class="right">
            <button data-callback='onSubmit' data-action='submit'></button>
            </div>
          </form>
        </div>


      </div>    </div>
  </section>
  <?php include ("src/app/components/footer.php") ?>
  <?php include ("src/app/components/scripts.php") ?>
  </body>
</html>
