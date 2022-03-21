<?php 


require('../Include/DatabaseConfiguration.php');
require('../Include/Essentials.php');
adminLogin();
if(isset($_POST['get_general'])){
    $q = "SELECT * FROM `Settings` WHERE `Serial_Number` = ?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_general']))
{
    $frm_data = filteration($_POST);
    $q = "UPDATE `Settings` SET `Site_Title`=?,`Site_About`=? WHERE `Serial_Number`=?";
    $values = [$frm_data['site_title'],$frm_data['site_about'],1];
    $res = update($q,$values,'ssi');
    echo $res;
}

if(isset($_POST['upd_shutdown']))
{
    $frm_data = ($_POST['upd_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `Settings` SET `Shutdown`=? WHERE `Serial_Number`=?";
    $values = [$frm_data,1];
    $res = update($q,$values,'ii');
    echo $res;
}

if(isset($_POST['get_contacts'])){
    $q = "SELECT * FROM `Contact_Details` WHERE `Serial_Number` = ?";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_contacts']))
{
    $frm_data = filteration($_POST);
    $q = "UPDATE `Contact_Details` SET `Address`=?,`Google_Map`=?,`Phone_Number1`=?,`Phone_Number2`=?,`E-mail`=?,`Twitter`=?,`Facebook`=?,`Instagram`=?,`iFrame`=? WHERE `Serial_Number`=? ";
    $values = [$frm_data['address'], $frm_data['gmap'], $frm_data['pn1'], $frm_data['pn2'], $frm_data['email'], $frm_data['tw'], $frm_data['fb'], $frm_data['insta'], $frm_data['iframe'], 1];
    $res = update($q,$values,'sssssssssi');
    echo $res;
}

?>