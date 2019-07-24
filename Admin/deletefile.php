<?php 
    $path  = $_POST['file'];;
    echo $path;
    if(!unlink($path)){
        echo "you have an error";
    }else{
        header("Location:gallery.php");
    }

    
?>