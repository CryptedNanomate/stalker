<?php
include_once("header.php");

?>
<section class="child">
    <div class="child">
        <?php
     
                if(func::checkLoginState($dbconn))
                {
                    header("Location: index.php");

                }
                if(isset($_POST['username']) && isset($_POST['password']))
                    {
                       $query = "SELECT * FROM admin WHERE username = :username AND password = :password";
                       $username = $_POST['username'];
                       $password = $_POST['password'];
                       $stmt = $dbconn->prepare($query);
                       $stmt->execute(array(':username' => $username, ':password'=> $password ));
                       $row = $stmt->fetch(PDO::FETCH_ASSOC);
                     
                       if($row['id'] > 0 )
                       {
                            func::createRecord($dbconn, $row['username'],$row['id']);
                         
                       }

                    } 
                    else {
                        
                        echo '
                        <form action = "login.php" method = "POST">
                            <label>Username</label><br />
                            <input type = "text" name = "username" /><br />
                            <label>Password</label><br />
                            <input type = "password" name = "password" /><br />
                            <input type = "submit" value = "login" />

                        </form>
                        ';
                    }

                
                
              
        ?>
    </div>

</section>
<?php include_once('footer.php') ?>