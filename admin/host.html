<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "PayelDB";
    
    $conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn){
        die("cannot connect ".mysqli_connect_error());
    }
    // $snoEdit = false;


    if($_SERVER['REQUEST_METHOD']=='POST'){

        // update or edit
        // echo $_POST['snoEdit'];
        if(isset($_POST['snoEdit'])){
            $sno = $_POST['snoEdit'];
            echo $sno;
            $post = $_POST['postEdit'];
            $name = $_POST['nameEdit'];
            $phone = $_POST['phoneEdit'];
            $dob = $_POST['dobEdit'];
            $address = $_POST['addressEdit'];
            $email = $_POST['emailEdit'];
            $q = "UPDATE `candidates` SET `Post` = '$post', `Name` = '$name', `Phone` = '$phone', `DOB` = '$dob', `Address` = '$address', `Email` = '$email' WHERE `candidates`.`sno` = $sno";
            $result = mysqli_query($conn,$q);
        }
        else{

            $post = $_POST['post'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $sq = "INSERT INTO `candidates` (`sno`, `Name`, `Post`, `Phone`, `Email`, `DOB`, `Address`) VALUES (NULL, '$name', '$post', '$phone', '$email', '$dob', '$address')";
            $result = mysqli_query($conn,$sq);
        }       
    }

    // delete
    $delete = false;
    if(isset($_GET['delete'])){
        $sno = $_GET['delete'];
        $q = "DELETE FROM `candidates` WHERE `sno` = $sno";
        $result = mysqli_query($conn, $q);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .container{
            height: 100%;
            /* background-color: rgb(0, 14, 103); */
        }
        .main{
            display: flex;
            flex-direction: column;
            row-gap: 20px;
        }
        .form-section{
            width: 50%;
            background-color: rgb(0,14,120);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 20px;
        }
        .form-section input,textarea{
            width: 400px;
            font-size: 20px;
            margin: 10px;
            display: block;
            padding: 8px 12px;
            border-radius: 10px;
            border:2px solid maroon;
            outline: none;
        }
        .submit-btn{
            background-color: rgb(8, 60, 81);
            border: 2px solid rgb(159, 149, 242);
            color: rgb(230, 152, 152);
            font-size: 20px;
            padding: 10px;
            border-radius: 20px;
            cursor: pointer;
        }
        .add-candidate{
            display: flex;
            flex-direction: column;
        }
        .candidate-list{
            width: 90vw;
            /* display: flex; */
            justify-content: center;
            align-items:start;
            column-gap: 30px;
            padding: 20px;
            margin: 0 auto;
            background-color: green;
            overflow-x: scroll;
        }
        .candidate-list .post-heading{
            font-size: 26px;
            color: aliceblue;
        }
        .post{
            display: flex;
            flex-direction: column;
            row-gap: 30px;
            justify-content: center;
            align-items:center;
            background-color: rgb(0, 14, 120);
            padding: 15px;
        }
        .candidate{
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            border: 1px solid blue;
            border-radius: 5px;
            background-color: rgb(38, 76, 108);
            color: 20px;
            font-weight: 500;
            padding: 8px;
            position: relative;
        }
        .candidate img{
            width: 10%;
            position: absolute;
        }
        .modify{
            top: 2px;
            right: 31px;
            width: fit-content;
            position: absolute;
        }
        .candidate .edit{
            color:green ;
            top: 2px;
            left: 2px;
            cursor: pointer;
        }
        .candidate .delete{
            color: red;
            top: 2px;
            right: 2px;
            cursor: pointer;
        }
        .navbar{
            display: flex;
            background-color: rgb(96, 140, 179);
            height: 100px;
            position: relative;
            justify-content: center;
            align-items: center;
            color: azure;
            font-size: 30px;
        }
        .navbar .logout img{
            height: 55px;
            border: 1px solid black;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        .start-btn{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .start-voting{
            padding: 12px 22px;
            background-color: rgb(11, 189, 238);
            border: 1px solid grey;
            border-radius: 30px;
            font-size: 20px;
            font-weight: 700;
            outline: none;
            cursor: pointer;
        }
        .child-btn{
            /* height: 10%; */
            position: absolute;
            background-color: rgb(182, 182, 182);
            border: 1px solid rgb(117, 117, 117);
            padding:2%;
        }
        .candidate-post{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 400px;
        }
        .candinate-name{
            /* border: 1px solid blue; */
            /* background-color: rgb(0, 60, 110); */
            background: none;
            border: none;
            font-size: 2rem;
            color: whitesmoke;
            font-weight: 500;
            /* padding: 10px; */
            cursor: pointer;
        }
    </style>
</head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="heading">
                    <h1>Admin DashBoard</h1>
                </div>
                <div class="logout">
                    <img src="./images/logout.png" alt="logout-icon">
                </div>
            </div>

            <div class="update-form" id="update-form" style="display: none;">
                <div class="form-section">
                    <form action="./host.php" method="post" class="add-candidate">
                        <input type="hidden"  name="snoEdit" id="snoEdit">
                        <input type="text" name="postEdit" id="postEdit" >
                        <input type="text" name="nameEdit" id="nameEdit" >
                        <input type="date" name="dobEdit" id="dobEdit">
                        <input type="number" name="phoneEdit" id="phoneEdit">
                        <input type="email" name="emailEdit" id="emailEdit" >
                        <textarea name="addressEdit" id="addressEdit" cols="30" rows="7" style="resize:none"></textarea>
                        <button class="submit-btn" type="submit">Submit Changes</button>
                    </form>
                </div>
            </div>

            <div class="main" id="main">
                <div class="start-btn">
                    <button class="start-voting">Start Election</button>
                </div>
                <div class="form-section">
                    <form action="./host.php" method="post" class="add-candidate">
                        <input type="text" name="post" id="post" placeholder="Post Name">
                        <input type="text" name="name" id="name" placeholder="Candidate Name">
                        <input type="date" name="dob" id="dob" placeholder="date of birth">
                        <input type="number" name="phone" id="phone" placeholder="Phone Number">
                        <input type="email" name="email" id="email" placeholder="Email">
                        <textarea name="address" id="address" cols="30" rows="7" placeholder="Address" style="resize:none"></textarea>
                        <button class="submit-btn" type="submit">add</button>
                    </form>
                </div>
                <div class="candidate-list" id="candidate-list">
                    <div class="candidate-post">
                    <?php
                        $diffPost = "select distinct Post from candidates";
                        $result = mysqli_query($conn,$diffPost);
                        while($posts = mysqli_fetch_assoc($result)){
                            echo '
                                <button class="candinate-name" id='. $posts["Post"].'>'.$posts["Post"].'</button>
                               
                            ';
                        }
                        
                    ?>
                    </div>
                    <div class="names" id="po" style="display: none;" >
                    <?php
                    echo '<div class="post">
                    <div class="post-heading"></div>';
                    ?>
                    <?php
                        // $postNames = "<script>return Post;</script>";
                        // $postNames = $_COOKIE['myJavascriptVar'];
                            $postNames = $_GET['postName'];
                            $sql = "select * from `candidates`";
                            $result = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['Post']==$postNames){
                                echo '<div class="candidate">'.
                                '<div class="modify">'.
                                '<button class="edit child-btn" id='.$row['sno'].'>Edit</button>'.
                                '<button class="delete child-btn" id='.$row['sno'].'>Delete</button>'.
                                '</div>'.
                                '<p>name: '.$row["Name"].'</p>'.
                                '<p>phone:+91 '.$row["Phone"].'</p>'.
                                '<p>email: '.$row["Email"].'</p>'.
                                '<p>dob: '.$row["DOB"].'</p>'.
                                '<p>address: '.$row["Address"].'</p>'.
                                '</div>';
                                }
                            }
                    ?>
                        <?php
                    echo '</div>';
                    ?>
                    </div>
                </div>
            </div>

        </div>
    </body>
    <script>

        // Modify candidate
        let edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                let node = e.target.parentNode.parentNode;
                sno = e.target.id;//it has no use here
                // console.log(sno);
            
                postname = node.parentNode.getElementsByClassName("post-heading")[0].innerText;
                // console.log(postname);
                naam = node.getElementsByTagName("p")[0].innerText.split(': ');
                phone = node.getElementsByTagName("p")[1].innerText.split(':+91 ');
                email = node.getElementsByTagName("p")[2].innerText.split(': ');
                dob = node.getElementsByTagName("p")[3].innerText.split(': ');
                address = node.getElementsByTagName("p")[4].innerText.split(': ');

                let x = document.getElementById("main");
                let y = document.getElementById("update-form");
                x.style.display = "none";
                y.style.display = "block";
                
                snoEdit.value = sno;
                postEdit.value = postname;
                nameEdit.value = naam[1];
                phoneEdit.value = phone[1];
                dobEdit.value = dob[1];
                addressEdit.value = address[1];
                emailEdit.value = email[1];
            })
        });


        // Delete candidate
        let deletes = document.getElementsByClassName("delete");
        Array.from(deletes).forEach((element)=>{
            element.addEventListener("click",(e)=>{
                let sno = e.target.id;
                console.log(sno);
                if (confirm("Are you sure you want to delete this note!")) {
                    console.log("yes");
                    window.location = `./host.php?delete=${sno}`;
                    // TODO: Create a form and use post request to submit a form
                }
                else {
                    console.log("no");
                }
            })  
        });
    </script>
    <script>
        // showing candidates
        x = document.getElementsByClassName("candinate-name");
        // console.log(x[1]);
        Array.from(x).forEach((elem)=>{
            // console.log(elem);
            elem.addEventListener("click",(e)=>{
                y = document.getElementById("po");
                node = e.target;
                Post = node.innerText;
                console.log(Post);

                window.location = `./host.php?postName=${Post}`;
                // document.cookie = `myJavascriptVar = ${Post}`;
                y.style.display = "block";
                
            })
        })
    </script>
    <script>
        st = window.location.href;
        if(st.includes("postName")){
            y = document.getElementById("po");
            y.style.display = "block";
        }
        console.log(st.includes("postName"));
    </script>
</html>
