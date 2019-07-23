<?php

class ViewUser extends User {

    public function showAllUsers() {
        $datas=$this->getAllUsers();
        foreach( $datas as $data){
            echo$data['address'];
            echo$data['name'];

        }
    }
}
?>