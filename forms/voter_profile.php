<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image:url('iitg_b.jpg');background-repeat: no-repeat; background-size: 100% 140%;">
    <div class="container" style="background-color: lightblue;height: 300px;display: flex; flex-direction: row;width: 700px; border: 1px solid black; margin: 0 auto; margin-top: 10%; border-radius: 5px;">
        <img src="profile_icon.jpg" alt="" width="40%"  height="100%">
        <div class="info" style="margin-left: 5px; width: 60%;">
            <h2 style="text-align: center;">Personal Info</h2>
            <div class="in" style="margin-left:20px;">
            <?php
                require("_dbconnect.php");
                session_start();
                $email=$_SESSION['email_candidate'];
                $sql="select * from voters where email='$email'";

                $result=mysqli_query($conn,$sql);
                if($row=mysqli_fetch_assoc($result)){
                    echo '<h4>Name   : '.$row['name'].'</h4>';
                    echo '<h4>Roll No : '.$row['rollno'].'</h4>';
                    echo '<h4>Dept   : '.$row['dept'].'</h4>';
                    echo '<h4>Age   : '.$row['age'].'</h4>';
                    echo '<h4>Email   : '.$row['email'].'</h4>';
                }
            ?>
            </div>
        </div>

    </div>
</body>
</html>