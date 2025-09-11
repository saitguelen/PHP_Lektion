<?php
// Student Model'ini dahil et
include 'Student(model).php';  

// Student class'ından nesne oluştur
$student = new Student();

// URL'de bir 'id' parametresi var mı?
if (isset($_GET['id'])) {
    // --- ÖĞRENCİ DETAY SAYFASI MANTIĞI ---
    $id = $_GET['id'];
    // id'ye göre tek bir öğrenci bilgisini al
    $ogrenci = $student->getStudentById($id);
    // Öğrenci detayını gösterecek View'i çağır
    include 'student_detail(view).php';
} else {
    // --- ÖĞRENCİ LİSTESİ SAYFASI MANTIĞI ---
    // Model'den tüm öğrencilerin verisini al
    $ogrenciler = $student->getAllStudents();
    // Öğrenci listesini gösterecek View'i çağır
    include 'student_list(View).php';
}
?>