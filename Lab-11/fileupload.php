<?php
    $targetDirectory = "uploadfile/";
    $targetFile = $targetDirectory . basename($_FILES["myfile"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if file was uploaded without errors
    if(isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0){
        // Optional: Check file size (limit to 5MB)
        if($_FILES["myfile"]["size"] > 5 * 1024 * 1024){
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Optional: Allow only certain file formats
        $allowed = array("jpg", "jpeg", "png", "gif", "pdf", "txt");
        if(!in_array($fileType, $allowed)){
            echo "Sorry, only JPG, JPEG, PNG, GIF, PDF & TXT files are allowed.";
            $uploadOk = 0;
        }

        if($uploadOk){
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)){
                echo "The file ". htmlspecialchars(basename($_FILES["myfile"]["name"]). " has been uploaded successfully.");
            } else{
                echo "Sorry, ";
            }
        }

    }

?>