<!DOCTYPE html>
<?php include ("src/app/components/head.php") ?>
  <body>


  <header id="main-header">
    <div class="content">
      <a href="https://wallbank.com.br"><img src="/dist/images/site/logo.svg"/></a>
      <h1 id="titleh1"><?php echo $info['docTitle'] ?></h1>
    </div>
  </header>
  <section id="breadcrumb">
    <div class="content">
      <ul>
        <li><a href="https://wallbank.com.br">Home</a></li>
        <li><?php echo $info['docTitle'] ?></li>
      </ul>
    </div>
  </section>
  <section id="document">
  <div class="content">
    <div class="pdf">

    </div>
    <div class="notice">
      <p>Caso você não esteja conseguindo visualizar o documento, Por favor:</p>
      <a href="/public/docs/<? echo $info['pdfFile'] ?>"><button>Baixe o PDF</button></a>
    </div>
  </div>
  </section>

</body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.js" integrity="sha256-vZy89JbbMLTO6cMnTZgZKvZ+h4EFdvPFupTQGyiVYZg=" crossorigin="anonymous"></script>
    <script>
  var options = {
   fallbackLink: '<div class="notice"><p>Caso você não esteja conseguindo visualizar o documento, Por favor:</p><a href="[url]"><button>Baixe o PDF</button></a></div>'};

    PDFObject.embed("/public/docs/<? echo $info['pdfFile'] ?>",".pdf", options);</script>



