<?php

include "connectDB.php";
session_start();



if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['gendre'])and isset($_POST['email'])and isset($_POST['statut'])and isset($_POST['telephone'])and isset($_POST['date'])){

        $username = trim(htmlspecialchars(stripslashes(addslashes($_POST['username']))));
        $password = htmlspecialchars(stripslashes(addslashes($_POST['password'])));
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $gendre = $_POST['gendre'];
        $email =$_POST['email'];
        $statut =$_POST['statut'];
        $telephone =$_POST['telephone'];
        $Datedenaissance = date('d-m-Y', strtotime($_POST['date']));

        echo $username,$password,$email,$telephone,$Datedenaissance;
    //   print_r($telephone);


        $query = "INSERT INTO new_utilisateur(username,password,gendre,email,Datedenaissance,statut,telephone) VALUES('$username','$password','$gendre','$email','$statut','$Datedenaissance','$telephone' ) ";
        $query_run = mysqli_query($conn,$query);
        // print_r($query);
            // echo $query;
    //    } else{
    //      echo "Non";
    //     // . mysqli_error($conn);
    //    }


           
if($query_run){
            // $_SESSION['status']="Enregistrement reussi";
            // header("Location:index.php");
           echo "enregistree";
        }
        else{
            // $_SESSION['status']="Échec de l'enregistrement";
            // header("Location:index.php");
            echo "echec";
            
        }
    }
    else{
        echo "Non".mysqli_errno($conn);
            // 
           
    }


    



?>