<?php 
    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $city = trim($_POST['city']);

        $userinfo = file_get_contents('https://software-as-a-service-wawethewaras.c9users.io/DailyTaskDatabase.php?action=createUser&username='.$username.'&password='.$password.'&city='.$city);
        $userinfo = json_decode($userinfo, true);
        
        if(count($status) == 0){
            header("location: index.php");
                
        }
    }
?>
<form action="Logout.php">
    <input type="submit" value="Return" class="returnbutton"/>
</form> 
<link rel="stylesheet" type="text/css" href="style.css"> 
<body>
<div class=center>
    
    <div class ="logoheader">Create new user</div>
    <br>
    <form action="" method="post" > 
        <div class ="header1">Username:</div><br>
        <input type="field" name='username' id='username' placeholder="Username" class ="inputfield"/> <br><br>
        
        <div class ="header1">Password:</div><br>
        <input type="password" name='password' id='password' placeholder="Password" class ="inputfield"/><br><br>
        
        <div class ="header1">City:</div><br>
        <input type="field" name='city' id='city' placeholder="City" class ="inputfield"/><br><br>
        <input type="submit" value="Create user" class="createuserbutton"/>

    </form> 

</div>
</body>
<br><br>

<?php 
    // $userinfo = file_get_contents('https://software-as-a-service-wawethewaras.c9users.io/DailyTaskDatabase.php?action=getUserList');
    // $userinfo = json_decode($userinfo, true);
    // foreach($userinfo as $item) { //foreach element in $arr
    //     echo "ID: ". $item["id"] . " Username: ". $item["name"] . " Password: ". $item["password"] ."<br>";
    // }
    

?>