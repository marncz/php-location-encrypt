<?php
include('../lib/Crypt.php');

// Create an empty array for errors, even when POST is not send - to avoid warnings.
$form_errors = array();

// Only trigger when a POST request is received.
if ($_POST) {

  $crypt = new Crypt;
  $crypt->setKey(hash("sha256", $_POST['pattern']));
  $crypt->setData($_POST['marker']);
  $encrypted_marker = $crypt->encrypt();

  // Create a hash for the filename.
  $hash = hash("sha256", $_POST['marker'] . $_POST['pattern']);

  // Create a new file.
  $file = "../encrypted/{$hash}.txt";
  $handle = fopen($file, 'w') or die('Cannot open file:  '. $file);

  // Write encrypted marker position to this newly created file.
  fwrite($handle, $encrypted_marker);
  fclose($handle);

  // Download file.
  $text = file_get_contents($file);
  header("Content-Disposition: attachment; filename=\"encrypted_location.txt\"");
  echo $text;

} else {
  // Placeholder...
}



?>
