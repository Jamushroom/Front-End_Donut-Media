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
    <h1 class="subPageTitle">De smaak van Leeuwarden</h1>
    <h3 id="scoreTitle">Selecteer de sterke punten en waardeer deze punten van
    <!-- Restaurant # --></h3>
    <section id="RestaurantScoreSection">

      <!-- slider 1 -->
      <div class="sliderContainer">
        <input type="checkbox" id="checkbox-1" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-1" style="top: 5px"></label>
        <label class="question" for="checkbox-1">Goede kwaliteit van het eten
        </label>

        <input id="slider-1" type="range" min="1" max="11" step="1" value="6" disabled="disabled">

        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>


      <!-- slider 2 -->
      <div class="sliderContainer">
        <input type="checkbox" id="checkbox-2" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-2" style="top: 5px"></label>
        <label class="question" for="checkbox-2">Goede prijs-kwaliteitverhouding
        </label>

        <input id="slider-2" type="range" min="1" max="11" step="1" value="6" disabled="disabled">
        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

      <!-- slider 3-->
      <div class="sliderContainer">
        <input type="checkbox" id="checkbox-3" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-3" style="top: 5px"></label>
        <label class="question" for="checkbox-3">Voldoende variatie in het menu
        </label>

        <input id="slider-3" type="range" min="1" max="11" step="1" value="6" disabled="disabled">
        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

      <!-- slider 4 -->
      <div class="sliderContainer">
        <input type="checkbox" id="checkbox-4" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-4" style="top: 5px"></label>
        <label class="question" for="checkbox-4">Aangename sfeer in het restaurant
        </label>

        <input id="slider-4" type="range" min="1" max="11" step="1" value="6" disabled="disabled">
        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

      <!-- slideer 5 -->
      <div class="sliderContainer">
        <input type="checkbox" id="checkbox-5" class="regular-checkbox" onclick="disable()">
        <label for="checkbox-5" style="top: 5px"></label>
        <label class="question" for="checkbox-5">Snelle/vriendelijke bediening
        </label>

        <input id="slider-5" type="range" min="1" max="11" step="1" value="6" disabled="disabled">
        <p class="sliderText neutraalT">Neutraal</p>
        <p class="sliderText goedT">Goed</p>
        <p class="sliderText uitstekendT">Uitstekend</p>
      </div>

    </section>
    <div class="buttonCenter">
      <a href="#">
        <input type="button" class="button gradientcolor" title="button"
        value="Volgende vraag">
      </a>
    </div>
  </div>

<!-- js -->
      <script>
        function disable(){
          if (document.getElementById('checkbox-1').checked == false) {
            document.getElementById('slider-1').setAttribute("disabled", "disabled");
            document.getElementById('slider-1').value = "6";
            } else {
              document.getElementById('slider-1').removeAttribute('disabled');
            }

          if (document.getElementById('checkbox-2').checked == false) {
            document.getElementById('slider-2').setAttribute("disabled", "disabled");
            document.getElementById('slider-2').value = "6";
            } else {
              document.getElementById('slider-2').removeAttribute('disabled');
            }

          if (document.getElementById('checkbox-3').checked == false) {
            document.getElementById('slider-3').setAttribute("disabled", "disabled");
            document.getElementById('slider-3').value = "6";
            } else {
              document.getElementById('slider-3').removeAttribute('disabled');
            }

          if (document.getElementById('checkbox-4').checked == false) {
            document.getElementById('slider-4').setAttribute("disabled", "disabled");
            document.getElementById('slider-4').value = "6";
            } else {
              document.getElementById('slider-4').removeAttribute('disabled');
            }

          if (document.getElementById('checkbox-5').checked == false) {
            document.getElementById('slider-5').setAttribute("disabled", "disabled");
            document.getElementById('slider-5').value = "6";
            } else {
              document.getElementById('slider-5').removeAttribute('disabled');
            }

          }
      </script>
</body>
</html>

