<!--
     - Tasarım Kodlama: The VODKA
     - Proje Sorumlusu: Ɲémesis
     - Klüp / Topluluk: Ar-Ge Kulübü
-->
<?php
    // JSON ile bağlantı işlemi
    $JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Borsa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="con">
        
        <div id="menu">
            <div class="tables">
                <ul>
                    <li>
                        <div class="inf">
                            <div class="adder">
                                <div class="header"><i class="fa-solid fa-dollar-sign"></i> Dolar</div>
                                <div class="value"><?php echo @$JSON['USD']['satis']; ?></div>
                            </div>
                            <div class="adder">
                                <div class="valuation"><i class="fa-sharp fa-solid fa-chart-simple"></i> <?php echo @$JSON['USD']['degisim']; ?></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inf">
                            <div class="adder">
                                <div class="header"><i class="fa-solid fa-euro-sign"></i> Euro</div>
                                <div class="value"><?php echo @$JSON['EUR']['satis']; ?></div>
                            </div>
                            <div class="adder">
                                <div class="valuation"><i class="fa-sharp fa-solid fa-chart-simple"></i> <?php echo @$JSON['EUR']['degisim']; ?></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inf">
                            <div class="adder">
                                <div class="header"><i class="fa-solid fa-sterling-sign"></i> GBP</div>
                                <div class="value"><?php echo @$JSON['GBP']['satis']; ?></div>
                            </div>
                            <div class="adder">
                                <div class="valuation"><i class="fa-sharp fa-solid fa-chart-simple"></i> <?php echo @$JSON['GBP']['degisim']; ?></div>
                            </div>
                        </div>
                    </li>
                    <li style="width: 200px;">
                        <div class="inf">
                            <div class="adder">
                                <div class="header"><i class="fa-brands fa-btc"></i> BTC</div>
                                <div class="value"><?php echo @$JSON['BTC']['satis']; ?></div>
                            </div>
                            <div class="adder">
                                <div class="valuation"><i class="fa-sharp fa-solid fa-chart-simple"></i> <?php echo @$JSON['BTC']['degisim']; ?></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="inf">
                            <div class="adder">
                                <div class="header"><i class="fa-solid fa-dollar-sign"></i> CAD</div>
                                <div class="value"><?php echo @$JSON['CAD']['satis']; ?></div>
                            </div>
                            <div class="adder">
                                <div class="valuation"><i class="fa-sharp fa-solid fa-chart-simple"></i> <?php echo @$JSON['CAD']['degisim']; ?></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="diger">
            <h1>Siberatay Döviz Kuru</h1>
            <p>The VODKA</p>
        </div>
        
    </div>
<script src="main.js"></script>
</body>
</html>

