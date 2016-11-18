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
  <div class="mainWrapper">
    <h1 class="subPageTitle">Stem van Leeuwarden</h1>
    <h3 id="scoreTitle">Selecteer de sterke punten en waardeer deze punten van
    <!-- Restaurant # --></h3>
    <section id="RestaurantScoreSection">

      <div>
        <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" onclick="disable()">
        <label class="checkbox-1-2" for="checkbox-1-1" style="top: 5px"></label>
        <label class="question" for="checkbox-1-1">Goede kwaliteit van het eten
        </label>

        <input id="slider" type="range" min="1" max="5" step="1" value="3" disabled="disabled">
      </div>

      <script>
        function disable(){
          if (document.getElementById('checkbox-1-1').checked == false) {
            document.getElementById('slider').setAttribute("disabled", "disabled");
            } else {
              document.getElementById('slider').removeAttribute('disabled');
            }
          }
      </script>

    </section>
    <div class="buttonCenter">
      <a href="#">
        <input type="button" class="button gradientcolor" title="button"
        value="Volgende vraag">
      </a>
    </div>
  </div>
</body>
</html>

