<?php
class Image{


public function saveImage($path){

$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 1000000000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["$name"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("$path/" . $_FILES["file"]["name"])) {
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; 
$targetPath = "$path/".$_FILES['file']['name']; 
move_uploaded_file($sourcePath,$targetPath) ; 


}
}
}
else
{

}
}
}
?>