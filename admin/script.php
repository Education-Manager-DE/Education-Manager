	<?php
 foreach (array_slice(scanDir("krankenmeldungen/"), 2) as $element) {
  unlink("krankenmeldungen/" . $element);
 } 
?>

<?php
header ( 'Location: krankenmeldungen.php' );
?>