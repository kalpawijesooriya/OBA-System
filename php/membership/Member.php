<?php
require_once '../conn.php';


class Member extends Dbh{
    private static $regestration_num;
    function saveMemberData($regestration_number,$nic,$title,$name,$birthday,$address,$country,$phone,$mobile,$email,$index_num,$ol_year,$al_year,$password){
        $createdAt= date("Y-m-d H:i:sa");
        $this->regestration_num=$regestration_number;

       $query ="INSERT INTO member (regestration_number,nic_num,title,name,birthday,address,country,phone_number,mobile_number,email_address,index_number,olevel_year,alevel_year,password,createdAt) VALUES ('$regestration_number','$nic','$title','$name','$birthday','$address','$country',$phone,$mobile,'$email','$index_num',$ol_year,$al_year,'$password','$createdAt')";
       //"INSERT INTO member (regestration_number,nic_num,title,name,birthday,address,country,phone_number,mobile_number,email_address,index_number,olevel_year,alevel_year,password) VALUES ('943343519',98658541v','Mr','lslsns',22/12/1996,'sssss','SL',785,78,'ddddd','115',2005,2001,'wwww')";
       $query2="INSERT INTO user(regestration_number,status)VALUES ('$regestration_number',0)";
        
       $result =$this->connect()->query($query);
       $result =$result.$this->connect()->query($query2);

       
    
       if($result)
       {
       return "Success";
       
       }
       else
       {
       return "Error!";
       }
    }

    function saveProfilePic($filename,$name)
    {      
           /* Getting file name */
        
           $temp = explode(".", $filename);
           $newfilename =  $name . '.' . end($temp);
       



            /* Location */
        $location = "../../img/profilepic/". $newfilename;
        $uploadOk = 1;
        $imageFileType = pathinfo($location,PATHINFO_EXTENSION);

            /* Valid extensions */
        $valid_extensions = array("jpg","jpeg","png");

            /* Check file extension */
        if(!in_array(strtolower($imageFileType), $valid_extensions)) {
        $uploadOk = 0;
        }

        if($uploadOk == 0){
        echo 0;
        }else{
        /* Upload file */
        if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            echo $location;
        }else{
            echo 0;
        }
        }

        
    }
}


    
?>