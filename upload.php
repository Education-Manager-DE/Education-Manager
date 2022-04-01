<?php
$upload_folder = 'admin/upload/'; 
$filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
$extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));
$max_size = 1000*1024; 
if($_FILES['datei']['size'] > $max_size) {
 die("Bitte keine Dateien größer 500kb hochladen");
}
$new_path = $upload_folder.$filename.'.'.$extension;
if(file_exists($new_path)) { 
 $id = 1;
 do {
 $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
 $id++;
 } while(file_exists($new_path));
}
move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);
echo 'Datei erfolgreich gesendet </a>';
?>

<?php 
header("Location: template/load-back.php");
?>