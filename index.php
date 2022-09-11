<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>validation</title>
</head>

<body>
<?php

// session_start();
//     if(isset($_SESSION['status'])){
//         echo "<h4>".$_SESSION['status']."</h4>";
//         unset($_SESSION['status']);
//     } ?>
    
        
            
                Username<input type="text" name="username" placeholder="username*" class="username" > <br>
                Password<input type="password" name="password" placeholder="password*" class="password" > <br>
                Sexe*: Masculin<input type="radio" name="gendre"value="Masculin" class="masculin"> Feminin<input type="radio" name="gendre" value="feminin" class="feminin"> <br>
                email*: <input type="email" name="email" placeholder="Email*" class="email" > <br>
                Statut*: <select name="statut" class="statut" > <br>
                    <option value="Celibataire" >Celibataire</option>
                    <option value="Marie(e)">Marie(e)</option>
                    <option value="Divorce(e)">Divorce(e)</option>
                    <option value="Veuf(ve)">Veuf(ve)</option>
                </select> <br>
                Telephone*: <input type="text" name="telephone" placeholder="Numero de Telephone*" class="telephone" > <br>
                Date de naissance*: <input type="date" name="date" placeholder="Date de naissance*" class="Datedenaissance"> <br>
            
             <input type="submit" name="data" value="submit" class="data">

             <div class="info"></div>
            
        

        <script src="jquery-3.6.0.js"></script>
        <script >
            $(document).ready(function(){
                
                $('.data').click(function(e){
                    e.preventDefault();
                    
                    var username = $('.username').val();
                    var password = $('.password').val();
                    var gendre = $('input[name=gendre]:checked').val();
                    // var feminin = $('input[name=feminin]:checked').val();
                    var email = $('.email').val();
                    var statut = $('.statut option:selected').val();
                    var telephone = $('.telephone').val();
                    var Datedenaissance = $('.Datedenaissance').val();
                    // alert((input[type="submit"]));
                    alert(gendre);
                    // var result;
                    // if(username==""){
                    //     $('.username').css('border-color,#ff0000');
                    //     result =false;

                    //     return result;
                    // }
                    


                    $('.info').load('traitement.php',{
                        username: username,
                        password: password,
                        gendre:gendre,
                        email:email,
                        statut:statut,
                        telephone:telephone,
                        Datedenaissance:Datedenaissance
                   


                    });
                   
                });
            });
            
        </script>

    </body>

</html>

</html>