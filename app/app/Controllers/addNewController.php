<?php
class addNewController {
    function addNewController(){
        if (isset($_POST['submit'])) {
          for ($i = 0; $i < count($_POST["name"]); $i++) {
            $nom = isset($_POST["name"][$i]) ? $_POST["name"][$i] : null;
            $price = isset($_POST["price"][$i]) ? $_POST["price"][$i] : null;
            $category = isset($_POST["category"][$i]) ? $_POST["category"][$i] : null;
            $qanti = isset($_POST["qte"][$i]) ? $_POST["qte"][$i] : null;
        
            $target_dir = "app/Views/uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"][$i]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"][$i]);
                if ($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
        
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
        
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                echo "<a href='product'>return to dachBoard</a>";
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {                    
                    $image = "uploads/" . $_FILES["image"]["name"][$i];
                    $add = new addNew;
                    $add->addNew($nom,$qanti,$image,$price,$category);
                    
                } else {
                    echo "<span style:'color: black;'>Sorry, there was an error uploading your file.</span><br>";
                    echo "<a href='dachBoard'>return to dachBoard</a>";
                }
            }
        }
        header("Location:products");
    }
    }
}

?>