<?php
include 'assets/src/getdata/getdata_register.php';


$_SESSION['IsUserLogedIn'] = false;
function dataExport(){
    return LoginCheck(getUsername(), getPassword());
}
