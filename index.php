<!doctype html>
<html lang="nl">
<head>
  <meta charset=utf-8>
  <title></title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
</head>
<body>
<!-- include Facebook JS-SDK -->
<!-- <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.8&appId=1226960660659176";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script> -->

  <h1 class="indexTitle">Welkom bij De stem van Leeuwarden</h1>

  <div class="fb-login-wrapper">
    <a href="#">
      <input type="button" disabled="disabled" class="fb-login-button" id="login" value="Aanmelden met Facebook">
    </a>
  </div>

  <div class="termsAndConditionsWrapper">
    <input type="checkbox" id="conditionsCheckbox">
    <p>Ik ga akkoord met de
    <a href="#" id="termsAndConditions">Algemene Voorwaarden.</a></p>
  </div>

    <script type='text/javascript'>
          document.getElementById('conditionsCheckbox').onclick=function(){
              if(this.checked == false){
                   document.getElementById('login').disabled = true;
              } else {
                  document.getElementById('login').removeAttribute('disabled');
              }
          };
  </script>

</body>
</html>
