<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
    body{
        padding: 0;
        margin: 0; 

    }
   .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 </style>
</head>
<body style="background-color: blanchedalmond;">

   <h1 style="text-align: center; background-color: lightblue;">IITG Elections</h1>
   <div class="main" style="display: flex;">
        <div class="voter-profile" style="padding-left: 25px;">
            <img src="profile_icon.jpg" style="width: 250px; height: 200px;" alt="">
            <h2 style="text-align: center;">Voter Info</h2>
            <div>
             <?php
                require("../forms/_dbconnect.php");
                session_start();
                $email=$_SESSION['email_candidate_vote'];
                $sql="select * from voters where email='$email'";
                $result=mysqli_query($conn,$sql);
                if($row=mysqli_fetch_assoc($result)){
                    echo '<h4>Name   : '.$row['name'].'</h4>';
                    echo '<h4>Dept : '.$row['dept'].'</h4>';
                    echo '<h4>Roll No   : '.$row['rollno'].'</h4>';
                    echo '<h4>Age   : '.$row['age'].'</h4>';
                    echo '<h4>Email  : '.$row['email'].'</h4>';
                }
            ?> 
            </div>
        </div>
        <div class="cards" >
            <p style="padding-left: 8px;border-radius: 5px; margin-left:90px;background-color: rgb(233, 193, 134); border: 1px solid rgb(180, 143, 87); line-height: 30px;font-size: 20px; line-break: loose;">
                <span style="color: red; font-size: 25px;" >Important!</span> Welcome to IITG election.For voting you tap for your candidate which you want to vote.<br><span style="color: red; font-size: 25px;">Be carefull!</span> Once you tap
            on the vote button for your selected candidate then you can not this candidate list.So your please vote carefully.</p>
            <div class="card1" style="background-color:lightblue; margin-left:90px ;margin-top: 5px; display: flex; width: 700px;min-height: 290px; border-radius: 10px;">
                <img src="profile_icon.jpg" height="200px" width="200px">
                <div class="res" style="font-style:oblique;" >
                    <h1 style="text-align: center; ">PG Senator</h1>
                    <h3 style="padding-left: 30px;" >Name : Harish kumar</h3>
                    <h3 style="padding-left: 30px;">Dept : Maths</h3>
                    <h3 style="padding-left: 30px;">Age  :20</h3>
                    <button style="margin-left: 340px;" class="button">Vote</button>
                </div>
            </div>
            <div class="card1" style="background-color:lightblue; margin-left:90px ;margin-top: 5px; display: flex; width: 700px;min-height: 290px; border-radius: 10px;">
                <img src="profile_icon.jpg" height="200px" width="200px">
                <div class="res" style="font-style:oblique;" >
                    <h1 style="text-align: center; ">PG Senator</h1>
                    <h3 style="padding-left: 30px;" >Name : Harish kumar</h3>
                    <h3 style="padding-left: 30px;">Dept : Maths</h3>
                    <h3 style="padding-left: 30px;">Age  :20</h3>
                    <button style="margin-left: 340px;" class="button">Vote</button>
                </div>
            </div>
            <div class="card1" style="background-color:lightblue; margin-left:90px ;margin-top: 5px; display: flex; width: 700px;min-height: 290px; border-radius: 10px;">
                <img src="profile_icon.jpg" height="200px" width="200px">
                <div class="res" style="font-style:oblique;" >
                    <h1 style="text-align: center; ">PG Senator</h1>
                    <h3 style="padding-left: 30px;" >Name : Harish kumar</h3>
                    <h3 style="padding-left: 30px;">Dept : Maths</h3>
                    <h3 style="padding-left: 30px;">Age  :20</h3>
                    <button style="margin-left: 340px;" class="button">Vote</button>
                </div>
            </div>
        
        </div>
   </div>
</body>
</html>