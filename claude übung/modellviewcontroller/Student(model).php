<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Student
    {
        public function getAllStudents()
        {
            return [
                ['id' => 1, 'name' => 'Ahmet Yılmaz', 'age' => 17, 'class' => '11-A'],
                ['id' => 2, 'name' => 'Zeynep Kaya', 'age' => 16, 'class' => '10-B'],
                ['id' => 3, 'name' => 'Sait Gülen', 'age' => 18, 'class' => '9-C'],
                ['id' => 4, 'name' => 'Nesibe Gülen', 'age' => 16, 'class' => '11-C'],
                ['id' => 5, 'name' => 'Murat Gülen', 'age' => 12, 'class' => '6-C'],
                ['id' => 6, 'name' => 'Jakob Gülen', 'age' => 3, 'class' => '1-C']
            ];
        }

        public function getStudentById($id)
        {
            $students = $this->getAllStudents();
            foreach ($students as $student) {
                if ($student['id'] == $id) {
                    return $student;
                }
            }
            echo $id . " li ögrenci maalesef yok<br>";
            return null; // Bulunamazsa
        }
    }
    // $student = new Student();
    // $ogrenci = $student->getAllStudents();
    // echo "<pre>";
    // print_r($ogrenci);
    // echo "</pre>";

    ?>

</body>

</html>