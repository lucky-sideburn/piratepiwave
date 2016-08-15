<style>
.button-blue {
    background-color: #0099ff;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 24px;
}

.button-red {
    background-color: #f44336;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 126px;
}

.button-green {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 126px;
}

input[type=range] {
  -webkit-appearance: none;
  width: 100%;
  margin: 2.05px 0;
}

input[type=range]:focus {
  outline: none;
}

input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 31.9px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}

input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -2.25px;
}

input[type=range]:focus::-webkit-slider-runnable-track {
  background: #367ebd;
}

input[type=range]::-moz-range-track {
  width: 100%;
  height: 31.9px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: #3071a9;
  border-radius: 1.3px;
  border: 0.2px solid #010101;
}

input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
}

input[type=range]::-ms-track {
  width: 100%;
  height: 31.9px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}

input[type=range]::-ms-fill-lower {
  background: #2a6495;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}

input[type=range]::-ms-fill-upper {
  background: #3071a9;
  border: 0.2px solid #010101;
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}

input[type=range]::-ms-thumb {
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  border: 1px solid #000000;
  height: 36px;
  width: 16px;
  border-radius: 3px;
  background: #ffffff;
  cursor: pointer;
  height: 31.9px;
}

input[type=range]:focus::-ms-fill-lower {
  background: #3071a9;
}

input[type=range]:focus::-ms-fill-upper {
  background: #367ebd;
}

</style>

<!DOCTYPE html>
<html>
  <body>
    <form action="action_page.php" method="get">
      <input id="myrange" type="range" name="points" min="0" max="200" step=".1" onchange="change_freq(parseFloat(this.value))" value=<?php echo $_GET["frequency"] ?> >
      <br>
      <h2>Frequency: <?php echo $_GET["frequency"] ?></h2>
      <input class="button-green" type="button" value="+" onclick="change_freq(parseFloat(document.getElementById('myrange').value) + parseFloat(0.1))" />
      <input class="button-red" type="button" value="-" onclick="change_freq(parseFloat(document.getElementById('myrange').value) - parseFloat(0.1))" />
      <br><br>
      <input class="button-blue" type="button" value="Rai-Radio-1" onclick="change_freq(parseFloat(87.6))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Onda-Rossa" onclick="change_freq(parseFloat(87.9))" /><br><br>
      <input class="button-blue" type="button" value="Ecoradio" onclick="change_freq(parseFloat(88.3))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Radicale" onclick="change_freq(parseFloat(88.6))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Citta-Aperta" onclick="change_freq(parseFloat(88.9))" /><br><br>
      <input class="button-blue" type="button" value="Radio-LatteMiele" onclick="change_freq(parseFloat(90.1))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Deejay" onclick="change_freq(parseFloat(90.3))" /><br><br>
      <input class="button-blue" type="button" value="Radio-m2o" onclick="change_freq(parseFloat(90.5))" /><br><br>
      <input class="button-blue" type="button" value="Lifegate-Radio" onclick="change_freq(parseFloat(90.9))" /><br><br>
      <input class="button-blue" type="button" value="Rai-Radio-2" onclick="change_freq(parseFloat(91.2))" /><br><br>
      <input class="button-blue" type="button" value="RTL" onclick="change_freq(parseFloat(91.5))" /><br><br>
      <input class="button-blue" type="button" value="Rai-Radio-2" onclick="change_freq(parseFloat(91.7))" /><br><br>
      <input class="button-blue" type="button" value="R-101" onclick="change_freq(parseFloat(92.00))" /><br><br>
      <input class="button-blue" type="button" value="RTL" onclick="change_freq(parseFloat(92.4))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Italia-anni-60" onclick="change_freq(parseFloat(93.00))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Vaticana" onclick="change_freq(parseFloat(93.3))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Subasio" onclick="change_freq(parseFloat(94.00))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Subasio-+" onclick="change_freq(parseFloat(94.2))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Subasio" onclick="change_freq(parseFloat(94.5))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Maria" onclick="change_freq(parseFloat(94.8))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Maria" onclick="change_freq(parseFloat(95.1))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Dimensione-Musica" onclick="change_freq(parseFloat(95.3))" /><br><br>
      <input class="button-blue" type="button" value="Radio-capital" onclick="change_freq(parseFloat(95.5))" /><br><br>
      <input class="button-blue" type="button" value="Radio-capital" onclick="change_freq(parseFloat(95.8))" /><br><br>
      <input class="button-blue" type="button" value="Radio-105" onclick="change_freq(parseFloat(96.1))" /><br><br>
      <input class="button-blue" type="button" value="Radio-105" onclick="change_freq(parseFloat(96.5))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Incontro-Italia" onclick="change_freq(parseFloat(96.8))" /><br><br>
      <input class="button-blue" type="button" value="m2o" onclick="change_freq(parseFloat(97.00))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Kiss-Kiss" onclick="change_freq(parseFloat(97.2))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Kiss-Kiss" onclick="change_freq(parseFloat(97.9))" /><br><br>
      <input class="button-blue" type="button" value="Virgin-Radio" onclick="change_freq(parseFloat(98.7))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Globo" onclick="change_freq(parseFloat(99.6))" /><br><br>
      <input class="button-blue" type="button" value="R-101" onclick="change_freq(parseFloat(100.00))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Deejay" onclick="change_freq(parseFloat(101.00))" /><br><br>
      <input class="button-blue" type="button" value="RTL" onclick="change_freq(parseFloat(102.1))" /><br><br>
      <input class="button-blue" type="button" value="RAM-Power" onclick="change_freq(parseFloat(102.7))" /><br><br>
      <input class="button-blue" type="button" value="RDS-Radio-Dimensione-Suono" onclick="change_freq(parseFloat(103.00))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Vaticana" onclick="change_freq(parseFloat(103.8))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Italia-Solo-Musica-Italiana" onclick="change_freq(parseFloat(104.2))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Radio" onclick="change_freq(parseFloat(104.5))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Vaticana-One" onclick="change_freq(parseFloat(105.00))" /><br><br>
      <input class="button-blue" type="button" value="Dimensione-Suono-2" onclick="change_freq(parseFloat(105.3))" /><br><br>
      <input class="button-blue" type="button" value="Radio-Rock" onclick="change_freq(parseFloat(106.6))" /><br><br>
    </form>
  </body>
</html>

<script>
  function change_freq(freq){
    document.location = "./index.php?frequency=" + freq.toFixed(1);
  }
</script>

<?php
  if ( ! $_GET["frequency"]) {
    $output = shell_exec("pr=`ps -ef | grep pifm | grep sudo | grep -v grep | awk '{ print $2 }'`; kill $pr || echo \'pifm is not running\'");
    header("Location: index.php?frequency=103.3");
  }
  else {
  $output = shell_exec("pr=`ps -ef | grep sudo | grep pifm | grep -v grep | awk '{ print $2 }'`; sudo kill \$pr || echo \'pifm is not running\'");
  $output = shell_exec("sudo /usr/local/pifm/pifm /usr/local/pifm/sounds/star-wars.wav " . $_GET['frequency'] . "  > /dev/null &");
  }

?>
