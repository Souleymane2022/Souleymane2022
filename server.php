<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span id="test"></span>
</body>
</html>

<?php


include "connectDB.php";

session_start();
// echo "Remplissez tous les champs";

if(isset($_POST['username']) and isset($_POST['password']))
{
    $UserName = trim(htmlspecialchars(stripslashes(addslashes($_POST['username']))));
    $PassWord = htmlspecialchars(stripslashes(addslashes($_POST['password'])));


    //$UserName =addslashes($UserName);

    // echo "ok";



$query = "select *from new_utilisateur where username = \"$UserName\" AND password = '$PassWord'";
//echo $query;
$res = mysqli_query($conn,$query);


if (mysqli_num_rows($res) >0) {
$row = mysqli_fetch_assoc($res);

if($row['username']===$UserName && $row['password']===$PassWord) {
    // $_SESSION['Username'] = $row['Username'];
    // $_SESSION['Password'] = $row['Password'];
//    header("Location: home.php");
   echo "Votre nom est: ", $UserName, "<br>","<br>", " et votre mot de passe est: ",$PassWord, "<br>";
   



}

if (empty($UserName)) {
    //header("Location: index.php?error=Entrer le nom d'utilisateur");
    echo "Entrer le nom d'utilisateur";
        
        
    }elseif(empty($PassWord)){
    // header("Location: index.php?error=Entrer le mot de passe");
    echo "Entrer le mot de passe";
    
    }

    elseif($row['username']!=$UserName && $row['password']===$PassWord){
    // header("Location: index.php");
        // $_SESSION['msg'] ="Nom d'utilisateur ou mot de passe incorrect";
        echo "Nom d'utilisateur  incorrect";
    }
    elseif($row['username']===$UserName && $row['password']!=$PassWord){
        // header("Location: index.php");
        // $_SESSION['msg'] ="Nom d'utilisateur ou mot de passe incorrect";
        echo "Mot de passe  incorrect";
    }
    }
    else{
    //header("Location: index.php"); 
// $_SESSION['msg'] ="Nom d'utilisateur ou mot de passe incorrect";
echo "Nom d'utilisateur ou mot de passe n'existe pas";

}
}

else{
//header("Location: index.php"); 
}



// if(isset($_POST['historiques'])){

//     $user = $_POST['username'];
//     $date_time = date('d-m-y h:m:s' );

// $query =" UPDATE historique  date= $date_time ";



// $quer= mysqli_query($conn,$query);
// if (mysqli_num_rows($quer) >0){
//     $row = mysqli_fetch_assoc($res);
//     $_SESSION['username'] = $row['username'];
//     $_SESSION['date'] = $row['date'];
//     //header("Location: information_user.php");
    

// }
// else{
// //    header("Location: index.php");
// echo "Remplissez tous les champs";


// }




// }




























?>

