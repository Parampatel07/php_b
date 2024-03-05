<!-- IMP  -->
<?php

var_dump($_POST);
var_dump($_FILES);

$image_name =
    rand(10, 99) . rand(10, 99) . rand(10, 99) . $_FILES['image1']['name'];

echo $image_name;

move_uploaded_file($_FILES['image1']['tmp_name'], $image_name);

?>