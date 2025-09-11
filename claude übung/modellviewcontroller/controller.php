<?php
// Student Model'ini dahil et
include 'Student(model).php';  

// Student class'ından nesne oluştur
$student = new Student();

// Model'den veri al
$ogrenciler = $student->getAllStudents();

// View'i çağır ve veriyi gönder
include 'student_list(View).php';
?>