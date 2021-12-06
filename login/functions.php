<?php
require_once ('../db.php');
class func 
{
    public static function checkLoginState($dbconn)
    {
        if (!isset($_SESSION))
        {
            session_start();

        }
        if(isset($_COOKIE['id']) && isset($_COOKIE['token']) && isset($_COOKIE['serial']))
        {
           

            $id = $_COOKIE['id'];
            $token = $_COOKIE['token'];
            $serial  = $_COOKIE['serial'];

            $query = "SELECT * FROM sessions WHERE session_userid = :id AND session_token = :token AND session_serial = :serial;";
            $stmt = $dbconn->prepare($query);
            $stmt->execute(array(':id' => $id, ':token'=> $token, ':serial'=>$serial));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row['session_userid'] > 0)
            {
                if($row['session_userid'] == $_COOKIE['id'] && $row['session_token'] == $_COOKIE['token'] && $row['session_serial'] == $_COOKIE['serial']  )
                  {
                        if($row['session_userid'] == $_SESSION['id'] && $row['session_token'] == $_SESSION['token'] && $row['session_serial'] == $_SESSION['serial'] )
                        {
                            return true;

                        }
                        else 
                        {
                           
                            func::createSession($_COOKIE['username'],$_COOKIE['id'], $_COOKIE['token'],$_COOKIE['serial']);
                            
                        }
                  }
                  
            }
        }
       

    }
    public static function createString($len)
    {
        $string = "1asdhfksofjshwhshfic02959g9102939591020sJSJG02950Jjskqkrktbka";
    
        return substr(str_shuffle($string),0, 30);

    }
    public static function createRecord($dbconn,$username,$id)
    {
        $query = "INSERT INTO `sessions`(`session_userid`, `session_token`, `session_serial`, `session_date`) VALUES (:id,:token,:serial,NOW());";
        $dbconn->prepare("DELETE FROM sessions WHERE session_userid = :session_userid;")->execute(array(':session_userid'=>$id));

        $token  = func::createString(30);
        $serial = func::createString(30);
     
        func::createCookie($username, $id,$token,$serial);
        func::createSession($username,$id,$token,$serial);

        $stmt = $dbconn->prepare($query);
        $stmt->execute(array(':id'=>$id, ':token'=>$token, ':serial'=> $serial));

    }   
    public static function createCookie($username,$id,$token,$serial)
    {
      
        setcookie('id',$id, time() + (86400) * 30, "/");
        setcookie('username',$username, time() + (86400) * 30, "/");
        setcookie('token',$token, time() + (86400) * 30, "/");
        setcookie('serial',$serial, time() + (86400) * 30, "/");
    }
    public static function createSession($username,$id,$token,$serial)
    {
        if(!isset($_SESSION['id']))
        {
            session_start();
        }
        $_SESSION['id'] = $id;
        $_SESSION['token'] = $token;
        $_SESSION['serial'] = $serial;
        $_SESSION['username'] = $username;
        
        
    }
    public static function deleteCookies()
    {
        setcookie('id','', time() - 1, "/");
        setcookie('username','', time() -1, "/");
        setcookie('token','', time() -1, "/");
        setcookie('serial','', time() -1, "/");
    }
}


?>