<?php 
try{
    include'dbconnection.php';
    $rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
    $output_dir = "$rootDir/bonitas/Images";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	} 
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName);

    $name = $_POST['menuName'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];

  
    $sql = "INSERT INTO menu(name, category, description, price, thumbnailurl)
    VALUES('$name',$category, '$description',$price, '$NewImageName')";

    if(!mysqli_query($conn, $sql)){
        echo("Error description: " . mysqli_error($conn));
    }

    $conn -> close();
    $result = "Successfully Added";
    echo json_encode($result);
}
catch(Exception $ex){
    http_response_code(500);
    echo $ex;
}
?>