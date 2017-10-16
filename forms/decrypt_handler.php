<?php
include('../lib/Crypt.php');

if ($_POST) {

  // Read content of the uploaded file. 
  $encrypted_string = file_get_contents($_FILES['encrypted_file']['tmp_name']);

  // Start decrypting the marker lat & long.
  $crypt = new Crypt;
  $crypt->setKey(hash("sha256", $_POST['pattern']));
  $crypt->setData($encrypted_string);

  try {
    $decrypted_string = $crypt->decrypt();
  } catch (Exception $e) {
    // An error has occured.
  }

  $latLng = explode("&", $decrypted_string);

  // Check whether decryption process went smoothly.
  if(count($latLng) == 2) {
    header("Location: ../decrypted.php?lat={$latLng[0]}&lng={$latLng[1]}");
  } else {
    header("Location: ../decrypt.php?error=true");
  }
}

?>
