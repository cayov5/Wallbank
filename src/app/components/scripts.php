<script  src="/dist/js/bundle.js?<?php echo $config['file-version'] ?>"></script>

<?php
$url = explode("?", $_SERVER['REQUEST_URI'], 2);

switch ($url[0]) {
  case '/fale-conosco':
    echo "<script async src=\"/dist/js/contact.js?".$config['file-version']."\"></script>";
  break;
  case '/para-sua-empresa':
    echo "<script async src=\"/dist/js/empresas.js?".$config['file-version']."\"></script>";
  break;
  case '/empresas':
    echo "<script async src=\"/dist/js/empresas.js?".$config['file-version']."\"></script>";
  break;
  case '/precadastro':
    echo "<script async src=\"/dist/js/preregister.functions.js?".$config['file-version']."\"></script>";
  break;
  default:
    echo "<script async src=\"/dist/js/esmeralda.functions.js?".$config['file-version']."\"></script>";
} ?>

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
</script>
<script async>
    (function () {
        window.onload = function () {
            new BlipChat()
            .withAppKey('aWNhYmFuazowN2Y2NWM2YS02MWE2LTQ4YWMtYTkwZi04OTIzODQ0ZjhmNWY=')
            .withButton({"color":"#00FF7D","icon":""})
            .withCustomCommonUrl('https://chat.blip.ai/')
            .build();
        }
    })();
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71272807-5"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-71272807-5');
</script>
