<?php
// Loop through all request variables and print their keys
foreach($_REQUEST as $key){
    echo $key."<br>";
}
// Dump the contents of the $_FILES["fichier"] array
var_dump($_FILES["fichier"]);
// Check if there are any errors in the $_FILES["fichier"]["error"] array
if (sizeof($_FILES["fichier"]["error"]) > 0) { 
    echo "yop";
    echo $_FILES["fichier"]["error"];
} 
echo "<br>";
// Define an array of allowed MIME types (here for an image)
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// Extract the MIME type of the file using FILE_INFO
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

// Check if the MIME type is in the array of allowed MIME types
if (in_array($mimetype, $aMimeTypes))
{
    /* The MIME type is among the allowed ones, so it's OK, we can move and rename the file */
    move_uploaded_file($_FILES["fichier"]["tmp_name"], "images/photo.jpg"); 
    echo "<br>";
} 
else 
{
   // The MIME type is not allowed, so ERROR

   echo "Type de fichier non autorisé";    
   exit;
}    
?>