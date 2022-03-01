<?php
include 'dbconnection.php';

if(isset($_POST["suggested"])){
try{
    $newVal = $_POST["newVal"];
    $id = $_POST["id"];


    $sql = "UPDATE menu set issuggested = $newVal where id = $id";
            $result = mysqli_query($conn, $sql);
    
            if (!$result) {
                http_response_code(500);
                echo 'Could not run query: ' . mysqli_error();
                exit;
            }
          $conn -> close(); 
    
        http_response_code(200);
        $result = array("message" => "successfully changed");
        $json_response = json_encode($result);
        echo $json_response;
    }
    catch(Exception $ex){
        echo $ex;
    }
}

if(isset($_POST["featured"])){
    try{
        $newVal = $_POST["newVal"];
        $id = $_POST["id"];
    
        $sql = "UPDATE menu set isfeatured = $newVal where id = $id";
                $result = mysqli_query($conn, $sql);
        
                if (!$result) {
                    http_response_code(500);
                    echo 'Could not run query: ' . mysqli_error();
                    exit;
                }
              $conn -> close(); 
        
            http_response_code(200);
            $result = array("message" => "successfully changed");
            $json_response = json_encode($result);
            echo $json_response;
        }
        catch(Exception $ex){
            echo $ex;
        }
}

if(isset($_POST["action"])){
    try{
        $id = $_POST["id"];
    
        $sql = "UPDATE menu set isdeleted = 1 where id = $id";
                $result = mysqli_query($conn, $sql);
        
                if (!$result) {
                    http_response_code(500);
                    echo 'Could not run query: ' . mysqli_error();
                    exit;
                }
              $conn -> close(); 
        
            http_response_code(200);
            $result = array("message" => "successfully deleted");
            $json_response = json_encode($result);
            echo $json_response;
        }
        catch(Exception $ex){
            echo $ex;
        }
}

if(isset($_POST["update"])){
    try{
        $id = $_POST["id"];
        $name = $_POST["menuName"];
        $category = $_POST["category"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $hasNewImage = $_POST["hasNewImage"];
        $thumbnailUrl;

        if(filter_var($hasNewImage, FILTER_VALIDATE_BOOLEAN) == FALSE){
             $sql = "UPDATE menu set name = '$name', category = $category, price = $price, description = '$description' where id = $id";
             $result = mysqli_query($conn, $sql);
             if (!$result) {
                 http_response_code(500);
                 echo 'Could not run query: ' . mysqli_error();
                 exit;
             }
           $conn -> close(); 
        }
        else{
            $thumbnailUrl = generateImagePathUrl();
            $sql = "UPDATE menu set name = '$name', category = $category, price = $price, description = '$description', 
            thumbnailurl = '$thumbnailUrl'
            where id = $id";
             $result = mysqli_query($conn, $sql);
             if (!$result) {
                 http_response_code(500);
                 echo 'Could not run query: ' . mysqli_error();
                 exit;
             }
           $conn -> close(); 
        }

            http_response_code(200);
            $result = array("message" => "successfully updated");
            $json_response = json_encode($result);
            echo $json_response;
        }
        catch(Exception $ex){
            echo $ex;
        }
}

function generateImagePathUrl(){
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

    return $NewImageName;
}

?>