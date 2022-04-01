<?php
$upload_folder = 'admin/krankenmeldungen/'; //Das Upload-Verzeichnis
$filename = pathinfo($_FILES['datei']['name'], PATHINFO_FILENAME);
$extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));
//Überprüfung der Dateigröße
$max_size = 1000*1024; //500 KB
if($_FILES['datei']['size'] > $max_size) {
 die("Bitte keine Dateien größer 500kb hochladen");
}

$new_path = $upload_folder.$filename.'.'.$extension;
 


//Überprüfung der Dateiendung
$allowed_extensions = array('pdf');
if(!in_array($extension, $allowed_extensions)) {
 die("Ungültige Dateiendung. Nur pdf Dateien sind erlaubt.");
}

//Neuer Dateiname falls die Datei bereits existiert
if(file_exists($new_path)) { //Falls Datei existiert, hänge eine Zahl an den Dateinamen
 $id = 1;
 do {
 $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
 $id++;
 } while(file_exists($new_path));
}
//Alles okay, verschiebe Datei an neuen Pfad
move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);
echo 'Datei erfolgreich gesendet </a>';
?>

<?php 
header("Location: template/load-back.php");
?>