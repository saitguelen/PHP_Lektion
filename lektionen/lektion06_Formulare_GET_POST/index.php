<!DOCTYPE html>
<html lang="en,de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Sonuc.php" method="post" enctype="multipart/form-data">

        Adiniz Soyadiniz : <input type="text" name="AdSoyad" required><br/>
        E-Mail Adresiniz : <input type="email" name="E-MailAdresi"><br>
        Telefonunuz : <input type="text" name="Telefon"><br>
        Cinsiyetiniz: <input type="radio" name="Cinsiyet" value="Erkek"> Erkek <input type="radio" name="Cinsiyet" value="Kadin"> Kadin <br/>
        Yasiniz: <select name="Yas">
            <option value=""></option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
        </select><br/>
        Hobileriniz:<br/>
        <input type="checkbox" name="Hobiler[]" value="Alisveris"> Alisveris<br/>
        <input type="checkbox" name="Hobiler[]" value="Seyahat"> Seyahat<br/>
        <input type="checkbox" name="Hobiler[]" value="Sinema"> Sinema<br/>
        <input type="checkbox" name="Hobiler[]" value="Tiyatro"> Tiyatro<br/>
        <input type="checkbox" name="Hobiler[]" value="Yemek"> Yemek<br/>
        <input type="checkbox" name="Hobiler[]" value="Kitap"> Kitap<br/>
        Yüklenecek Dosya: <input type="file" name="Dosya" value="Dosya Yükle" ><br>
        Mesajiniz: <textarea name="Mesaj"></textarea><br>


        <input type="submit" value="Gönder">
        <input type="reset" value="Temizle">
    </form>
    
</body>
</html>