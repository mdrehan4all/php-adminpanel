<?php include("config.php");?>

<?php
    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $logged = 0;
        $sql = "SELECT * FROM admin WHERE email = '{$email}'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $opassword = $row['password'];
                if($opassword == $password){
                    $logged = 1;
                }else{
                    $logged = 0;
                }
            }
        }

        if($logged == 1){
            $expire = time() + 60*60*24*30;
            setcookie("token", "abc", $expire);
            echo '<meta http-equiv="refresh" content="0; url=index.php">';
        }else{
            echo '<meta http-equiv="refresh" content="0; url=login.php?msg=Something went Wrong">';
        }
    }
?>