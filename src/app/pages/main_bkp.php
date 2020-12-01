<!DOCTYPE html>
<?php include("src/app/components/head.php") ?>

<body>
  <?php include("src/app/components/header.php") ?>
  <div class="redirect">
    <img class="logo-redirect" src="/dist/images/site/logo.svg" />
    <h4 class="redirect-text">Estamos transferindo você<br> para uma área segura.</h4>
  </div>

  <section id="insurance">
    <div class="content">
      <div class="left">
        <h1>O primeiro banco a ofertar<br>benefícios atrelados à<br>movimentação bancária</h1>
        <div class="pricing">
          <p class="title">Movimentando apenas</p>
          <div class="price">
            <h1>R$ 500</h1>
            <p>por mês em sua conta*</p>
          </div>
        </div>
        <div class="condicao">
        <style>
          .condicao p{font-family: "Century Gothic"; color:white; font-size: 2.5rem; text-transform: none;}
          section#insurance{z-index: -1; position: relative;}
        </style>
            <p>*Os benefícios atrelados a conta estão sendo ofertados<br>
                              em troca da movimentação bancária de no mínimo<br>
                              R$500,00 e no máximo R$2.500,00 mensal.<br></p>

        </div>

      </div>
      <div class="right">
        <div class="item">

          <div class="title">
            <h4>Seguro<br> Invalidez</h4>
            <img src="/dist/images/vectors/invalidez.svg" alt="invalidez">
          </div>
          <p>de até R$14.000,00 </p>

          <span class="line"></span>


          <div class="title">
            <h4>Seguro<br> de Vida</h4>
            <img src="/dist/images/vectors/seguro.svg" alt="seguro">
          </div>
          <p>de até R$14.000,00 </p>

          <span class="line"></span>

          <div class="title">
            <h4>Auxílio<br>funeral</h4>
            <img src="/dist/images/vectors/auxFuneral.svg" alt="Auxílio Funeral">
          </div>
          <p>de até R$3.000,00 </p>

          <span class="line"></span>


          <div class="title">
            <h4>Afastamento<br>do trabalho</h4>
            <img src="/dist/images/vectors/desemprego.svg" alt="desemprego">
          </div>
          <p>de R$50 por até 60 dias </p>
          <span class="line"></span>


          <div class="title">
            <h4>Auxílio<br> Medicamento</h4>
            <img src="/dist/images/vectors/medicamento.svg" alt="medicamento">
          </div>
          <p>de até 60 dias </p>
          <span class="line"></span>
        </div>
      </div>
    </div>
  </section>




  <?php include("src/app/components/footer.php") ?>
  <?php include("src/app/components/scripts.php") ?>
</body>

</html>
