<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- önce php satirimizi acalim -->
     <?php

        // Interface tanimlayalim
        interface CRUDInterface
        {
            //interface'de tüm metodlar public Olmali
            public function create($data); //metodumuz icine data adli parametre aldi
            public function read($id);
            public function update($id, $data);
            public function delete($id);
        }
        // interface yaptik simdi de bu unterface i uygulayan siniflari asagida olusturalim
        class UserManager implements CRUDInterface
        {
            private $users = [];

            // Bu sinifimizin icine yukarida interface olan bütün metodlari eklemek zorundayiz yoksa hata verir ve calismaz
            //ilk metodla basliyorum
            public function create($data)
            {
                $id = uniqid();
                $this->users[$id] = $data;
                return "$data adli Kullanici olusturuldu: ID= $id";
            }
            // ikinci yani read metoduna gecelim
            public function read($id)
            {
                return isset($this->users[$id]) ? $this->users[$id] : "Kullanici Bulunamadi";
                // okuma metodunda girilen id degerini al, users arrayindaki id ler ile karsilastir varsa göster yoksa bulunamadi yaz->ternary fonktionen

            }
            // Ücüncü yani update metoduna gecelim kullanicidan id ve yeni bilgiyi alsin ve güncellesin
            public function update($id, $data)
            {
                if (isset($this->users[$id])) {
                    $this->users[$id] = array_merge($this->users[$id], $data);
                    return "Kullanici Güncellendi";
                }
                return "Kullanici Bulunamadi";
            }
            // Dördüncu yani delete metoduna gecelim
            public function delete($id) {
                if(isset($this->users[$id])){
                    unset($this->users[$id]);
                    return "Kullanici Silindi";
                }
                return "Kullanici Bulunamadi";
            }
        }

        // Test edelim
        $userManager = new UserManager();
        echo $userManager->create("Ahmet") . "<br/>";
        echo $userManager->read("68b1b52de0bb1") .  "<br/>";
        echo $userManager->update("4","Ali"). "<br/>";
        echo $userManager->delete("5"). "<br/>";
        echo $userManager->delete("68b1b42b6e4ce"). "<br/>";


        ?>
</body>
</html>