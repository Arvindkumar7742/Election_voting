<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:../forms/admin-form.php');
      }
?>


<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "election";
    
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
    <link rel="stylesheet" href="host.css">
</head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="heading">
                    <h1>Admin DashBoard</h1>
                </div>
                <a class="logout" href="logout.php">
                    <img src="./images/logout.png" alt="logout-icon">
                </a>
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
            <div class="start-btn">
                    <button class="start-voting" onclick="">Start Election</button>
            </div>
            <div class="manage" id="manage" style="display: flex;">
                <div class="addCandidate" onclick="addCandidate()">Add candidate</div>
                <div class="manageCandidate" id="manageCandidate" onclick="manageCandidate()">Manage candidate</div>
            </div>
            <div class="manage-main"></div>
            <div class="main" id="main">
                <div class="manage-add"></div>
                <div class="form-section" id="formsection" style="display: none;">
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
                <div class="manage-list"></div>
                <div class="candidate-list" id="candidate-list" style="display: none;">
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
    <script>
        //addCandidate
        var i = 1;
        function addCandidate(){
            
            document.getElementById("formsection").style.display="flex";
            document.getElementById("manage").style.display="none";
            // console.log(`clicked ${i++}`);
        }

        // manageCandidate

        function manageCandidate(){
            // document.getElementById('manageCandidate').style.borderStyle = 'inset';
            x = document.getElementById("candidate-list");
            x.style.display="block";
            document.getElementById("manage").style.display="none";
            // console.log(`clicked ${i++}`);
            // if(x.style.display==="block"){
            //     manageCandidate();
            //     console.log("call again by the function itself")
            // }

            window.location = `./host.php?postName`;
        }
    </script>
    <script>
        st = window.location.href;
        if(st.includes("postName")){
            y = document.getElementById("candidate-list");
            y.style.display = "block";
            document.getElementById("manage").style.display="none";
        }
        console.log(st.includes("postName"));
    </script>
    <script>
        function logOut(){
            
        }
    </script>
</html>