<?php
require_once('core/connect.php');
   $date = date('F');
   $error  = array();
   $res    = array();

        
        if(empty($_POST['username']))
        {
            $error[] = "Username field is required";    
        }
    
        if(empty($_POST['password']))
        {
            $error[] = "Password field is required";    
        }

         
        if(count($error)>0)
        {
            $resp['msg']    = $error;
            $resp['status'] = false;    
            echo json_encode($resp);
            exit;
        }

        $statement = $connect->prepare("SELECT * FROM staff WHERE username = :username" );
        $statement->execute(array(':username' => $_POST['username']));
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)>0) {
           if(!password_verify($_POST['password'],$row[0]['password'])) {
                $error[] = "Password is not valid";
                $resp['msg']  = $error;
                $resp['status']   = false;    
                echo json_encode($resp);
                exit; 
           }
          session_start(); 
          $_SESSION[ 'twhOperandiNegozio'] = sha1($row[0]['username']);
          $_SESSION['uname_main_twh'] = $row[0]['username'];
            $_SESSION['name_main_twh'] = $row[0]['name'];
            $_SESSION['id_main_twh'] = $row[0]['id'];
            $_SESSION['surname_main_twh'] = $row[0]['surname'];
            $_SESSION['u_level_main_twh'] = $row[0]['u_level'];
            $_SESSION['u_level_spec_twh'] = $row[0]['u_level_s'];
            $_SESSION[ 'u_level_func_twh'] = $row[0]['u_level_f'];
            $_SESSION['contact_twh'] = $row[0]['contact'];
          $resp['redirect']    = "index";
          $resp['status']      = true;    
          echo json_encode($resp);
          
          exit;    
       } else {
          $error[] = "Username does not match";
          $resp['msg']  = $error;
          $resp['status']   = false;    
          echo json_encode($resp);
          exit;    
     } 
?>