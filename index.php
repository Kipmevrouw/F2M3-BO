<html lang="en">
<head>
    <?php
    //session_start();
    //if(!isset($_SESSION['username']))
    //{echo "Je bent niet ingelogd"; exit();}

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/apparaten.js"></script>
    <script src="js/page.js"></script>
    <script src="js/weerlive.js"></script>
    <title>Duurzaamhuis</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
</head>
<body>
    <div id="dashboard">
        <div class="item item1">
            <img src="img/Huisje.png" style="height: 90px;" alt="Huisje" scr="http://30957.hosts1.ma-cloud.nl/F1M3/BO/index.html">
        </div>
        <div class="item item2"> <img src="img/bababoei_2.png" style="height: 200px;" alt=""> </div>
        <div class="item item3"></div>
        <div class="item item4">
            <div class="apparaat apparaat2" data-id="WSS">
            <h1 style="font-size: 20px;">Titel apparaat</h1>
            <div>
                <p style="font-size: 20px;">minuten per dag: <span>0</span></p>
                <input type="range" min="0" max="240" step="10" value="15" />
            </div>
            <h2 style="font-size: 20px;">Verbruik of kosten</h2>
            <button>Toon verbruik</button>
        </div></div>
        <br>
        <br>
        <div class="item item5">
            <div style="font-size: 40px; text-align: center;">
                <p>Graden</p>
            </div> 
            <svg width="50%" height="50%" viewBox="0 0 42 42">
                <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="rgba(200,200,200,0.5)" stroke-width="1">
        
                </circle>
                <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="royalblue" stroke-width="1" stroke-dasharray="75 25" stroke-dashoffset="75" id="cirkelBoog">
        
                </circle>
                <g class="temp">
                    <text id="temperatuur" x="30%" y="54%">19</text>
                    <text id="eenheid" x="52%" y="50%">&deg;C</text>
                </g>
            </svg>
            <input type="range" min="1" max="30" step="1" value="18" id="thermostaat">
    </div>
        <div class="item item6">
            <div class="item62">
            <div id="div1" style="padding:18px;float:left">
            <img src=img/lamp.png alt="lamp_logo" height="60" width="50"><img>
        </div>
        <div id="div2" style="padding:18px;float:left">
            <label class="switch">
                <input type="checkbox" class="checkbox" />
                <div class=""></div>
              </label>
            </div>
            <br>
            <br>
            <div id="div1" style="padding:18px;float:left">
            
                <img src=img/lamp.png alt="lamp_logo" height="60" width="50"><img>
            </div>
            <div id="div2" style="padding:18px;float:left">
                <label class="switch">
                    <input type="checkbox" class="checkbox" />
                    <div class=""></div>
                  </label>
                </div>
                <br>
                <br>
                <div id="div1" style="padding:18px;float:left">
                    <img src=img/lamp.png alt="lamp_logo" height="60" width="50"><img>
                </div>
                <div id="div2" style="padding:18px;float:left">
                    <label class="switch">
                        <input type="checkbox" class="checkbox" />
                        <div class=""></div>
                      </label>
                    </div>
        </div>
        </div>

        <div class="item item7">
<div class="buttons">
        <a href="http://30957.hosts1.ma-cloud.nl/F1M3/BO/index.php" class = "button">toon 7a</a>
        <a href="http://30957.hosts1.ma-cloud.nl/F1M3/BO/index.php?name=b" class = "button">toon 7b</a>
        </div>

        <?php

        if(isset($_GET['name'])){
            echo"<div id='item7b'>
            <iframe src='http://30957.hosts1.ma-cloud.nl/F1M3/grafiek2/index.html' width='820px' height='400px' style='border:none;'></div>";
                
        }
        else{
            echo"<div id='item7a'>
            <iframe src='http://30957.hosts1.ma-cloud.nl/F1M3/grafiek4/index.html' width='820px' height='400px' style='border:none;'></div>";
        }

        ?>
        </div>
        
            <!--<button id="item7aknop">Toon 7a</button>
            <button id="item7bknop">Toon 7b</button>
            <div id="item7a">
            <iframe src="http://30957.hosts1.ma-cloud.nl/F1M3/grafiek4/index.html" width="820px" height="400px" style="border:none;"></div>
            <div id="item7b">
                <iframe src="http://30957.hosts1.ma-cloud.nl/F1M3/grafiek2/index.html" width="820px" height="400px" style="border:none;">
            </div>
        </div>
    </div>-->

</body>
<script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
    <script>
        let temperatuur = 9;
        const temperatuurUitvoer = document.getElementById('temperatuur');
        const cirkelBoog         = document.getElementById('cirkelBoog');
        const thermostaat         = document.getElementById('thermostaat');

        // temperatuur = thermostaat.value;

        const uitvoeren = (temp) => {
            temperatuurUitvoer.innerHTML = temp;
            let boog = temp * 100/31;
            cirkelBoog.style.strokeDasharray = `${boog} ${100 - boog}`;
        }
         const animeerUitvoer = (temp) => {
             let t = 0;
             const timer = setInterval( () => {
                 if( t <= temp ) {
                     uitvoeren(t);
                     t++;
                 } else {
                     clearInterval(timer);
                 }
             }, 25)
         }

        animeerUitvoer(thermostaat.value);
        
        thermostaat.addEventListener('change', () => {
            animeerUitvoer(thermostaat.value)
        })
    </script>
</html>