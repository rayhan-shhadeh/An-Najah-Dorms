<?php
$str = 'email';
if(isset($_POST['' . $str . ''])&&isset($_POST['password'])){
    $user=$_POST[$str];
    $pass = $_POST['password'];
    try {

        $db =new mysqli('localhost', 'root', '', 'annudorms');
        if($db->connect_error){
            echo "error connection";
                                }

        $query="SELECT * FROM agent";
        $res=$db->query($query);
        $flag=0;
        for($i=0;$i<$res->num_rows;$i++)
        {
            $row=$res->fetch_object();
            if($row->Email  == $user && $row->password==$pass) {
                header("location: property-list.php");
                $flag=1;
            }

        }
        if($flag==0)
        {
            echo"<h3 style='color:#bc1939'>Username or password is incorrect</h3>";
        }
        $db->close();
    }
    catch (Exception $exception){

    }}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="testsema.php" method="post">
    <h2 class="header2">Login</h2>
    <div class="inputbox">
        <ion-icon name="person-outline"></ion-icon>
        <input type="text" id="em" name="email" required>
        <label for="em">Username</label>
    </div>
    <div class="inputbox">
        <ion-icon name="lock-closed-outline"></ion-icon>
        <input type="password" id="password"  name="password"required>
        <label for="password">Password</label>
    </div>
    <div class="forget">
        <label for="checkbox1"></label><input type="checkbox" id="checkbox1">Remember Me  <a href="#">Forget Password</a>

    </div>
    <button class="button1">Log in</button>



</form>
</body>
</html>
