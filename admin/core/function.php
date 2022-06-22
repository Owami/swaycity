<?php
    class func{
        public static function checkLoginState($connect){
            if (!isset($_SESSION['id']) | !isset($_COOKIE['PHPSESSID'])) {
                session_start();
            }

            if (!isset($_COOKIE['id']) && !isset($_COOKIE['token']) && isset($_COOKIE['serial'])){
                $query = "SELECT * FROM sessions WHERE user_id = :id AND token = :token AND serial = :serial;";
                $id = $_COOKIE['id'];
                $token = $_COOKIE['token'];
                $serial =$_COOKIE['serial'];

                $stmt = $connect->prepare($query);
                $stmt-execute(array(':userid' => $id, ':token' => $token, ':serial' => $serial));

                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($row['user_id'] > 0) {
                    if ($row['id'] == $_COOKIE['id'] && $row['token'] == $_COOKIE['token'] && $row['serial'] == $_COOKIE['serial'] ) {
                        if ($row['id'] == $_SESSION['id'] && $row['token'] == $_SESSION['token'] && $row['serial'] == $_SESSION['serial']) {
                            return true;
                        }
                    }
                }
            }
        }

        public static function  createString($len){
            $string = "1qaz2wsx3edc4rfv5tgb6yhn7ujm8iik9olpAQWSXEDCRFVTGBYHNUJMIKOLP";
            $s = '';
            $r_new = '';
            $r_old = '';

            for ($i=1; $i < $len; $i++) { 
                while ($r_old == $r_new) {
                    $r_new = rand(0, 60);
                }
                $r_old = $r_new;

                $s = $s.$string[$r_new];
            }

            return $s;
        }
    }

?>