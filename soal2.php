<?php 
    function validasiForm($username, $password){
        $karakterspecial = '"%\'*;<>?^`{|}~/\\#=&0123456789';
        $doit = preg_quote($karakterspecial, '/');
        if (preg_match('/^['.$doit.']/', $username)) {
            return false;
        }
        elseif(preg_match('/^[a-z0-9A-Z]{5,9}$/', $username) && preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,}$/', $password)){
            return true;
        }
        else {
            return false;
        }
    }

$username = "X56545765";
$password = "5aaaaasasasasasA@fa";
echo validasiForm($username, $password);