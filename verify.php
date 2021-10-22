<?php
    /**
     * Created by I.Borisov.
     * User: Borisov
     * Date: 22/10/2021
     */
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(stripslashes($_POST['list'])); //the data here can now be used to create a multiple value insert to ur mysql db.
        print_r(json_encode($data)); // this is used to send response back to ur page if using array buh echo if string
    }
?>
