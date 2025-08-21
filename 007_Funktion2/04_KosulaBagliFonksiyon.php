<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Kosula Bagli Fonksiyon Cagirma</h1>
    <p>Normalde bir fonksiyon ismi sadece birkez kullanilabilir.<br>
        Ama biz  if yapisi ile ayni ismi bircok kez kullanabiliriz.
    </p>
    <h3>Mesela bununla alakali bir örnek yapalim:<br></h3>
    <p>
        <pre>
            <code>
       <     PHP
    $Deger = "Sait";

    if($Deger=="Volkan"){
        function Yaz(){
            echo "Merhaba Volkan Hosgeldin";

        }
        

    }else{
        function Yaz(){
            echo "Merhaba Hakan Hosgeldin!!";
        }
    }
    Yaz();
    ?> 
            </code>
        </pre>
    </p>
    <p>degerimiz Volkan ise ekrana:"Merhaba Volkan Hosgeldin" yazacak yoksa "Merhaba Hakan Hosgeldin" yazacak. </p>
    <?php
    $Deger = "Sait";

    if($Deger=="Volkan"){
        function Yaz(){
            echo "Merhaba Volkan Hosgeldin";

        }
        

    }else{
        function Yaz(){
            echo "Merhaba Hakan Hosgeldin!!";
        }
    }
    Yaz();
    ?>
</body>
</html>