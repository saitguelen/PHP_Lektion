<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <p>A backslash followed by an 'x' and a hex number represents a hex value:</p>


    <?php
        $hexNumber= "E196";
        echo base_convert($hexNumber, 16,8)."<br>";
        $octNumber="1031";
        echo "1031 als Decimal ist: ". base_convert($octNumber,8,10)."<br>";
        $octNumber2="457145";
        echo "$octNumber2 als hexadecimal ist: ".base_convert($octNumber2,8,16)."<br>";
        $number="0011";
        echo bindec($number)."<br>";
        echo bindec("1111011")."<br>";
        echo ceil(56.6)."<br>";
        echo "ceil(18.9) ist : ". ceil(18.9)."<br>";
        echo "ceil(18.2) ist : ". ceil(18.2)."<br>";
        echo "ceil(-17.1) ist : ". ceil(-17.1)."<br>";
        echo "ceil(-17.9) ist : ". ceil(-17.9)."<br>";
        
    
    
    ?>
</body>

</html>
