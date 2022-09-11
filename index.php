<?php 
// session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table th{
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    
    <?php if (isset($_SESSION['msg'])) { ?>
     		<p class="error"><?php echo $_SESSION['msg']; ?></p>
     	<?php } ?>
    
      <label >user:</label>  <input type="text"  class="p"> <br>
      <hr style="width: 20%; margin-left: 0px;">
      <label>pwd:</label>  <input type="password" class="p1"/> <br>
      <hr style="width: 20%; margin-left: 0px;">
       <input type="submit" value="Connexion" class="login1" > <br>
       <hr style="width: 20%; margin-left: 0px;">
   
    <div class="authenti">

    </div> <br> <br>
    <form action="information_user.php" method="POST" class="para">

    Historique des utilisateurs <button type="submit" name="historiques" class="z">Voir</button>
    <a href="inscription\index.php">S'inscrire de nouveau</a>
    </form>
   
    
        <!-- <table border="1" cellpadding="5" cellspacing="10" width="20%">
            <br> <br>
        <tr>   
        <th> Username </th> 
        <th> login  </th>
        <th> password </th>
        <th>Date de connection</th>  
        </tr>
            <tr>
                
                <td>Soulemane Mahamat Saleh</td>
                <td>sms</td>
                <td>123</td>
                <td>Aujourd'hui 17h:20</td>

            </tr>
            <tr>
                
                <td>Admin Admin</td>
                <td>Admin</td>
                <td>abc</td>
                <td>hier 11h:43</td>

            </tr>
        </table>  -->
    <script src="jquery-3.6.0.js"></script>
    <script>
        

        $(document).ready(function(){
            $('.login1').click(function(e){
               e.preventDefault();

             
             var username = $('.p').val();
             var password = $('.p1').val();
            // alert(password);
             $('.authenti').load('server.php',{
                username: username,
                password: password
                
            
        
             }

             );
              
            //   $('.authenti').load('server.php',
                
            //     Username: $('.p').val(),
            //     Password: $('.p1').val()
              
            //   ); 
              
            
            });
        });
        

    //     $(".login1").click(function() {
    //     //in here we can do the ajax after validating the field isn't empty.
    //     if($(".p").val()!="") {
    //         $.ajax({
    //             url: "server.php",
    //             type: "POST",
    //             async: true, 
    //             data: { Username:$(".p").val(),Password:$(".p").val() }, //your form data to post goes here as a json object
    //             dataType: "html",

    //             success: function(data) {
    //                 $('.authenti').html(data);    
    //             },  
    //         });
    //     } else {
    //         //notify the user they need to enter data
    //     }
    // });



        $(document).ready(function(){
            $('.z').click(function(e){
              e.preventDefault();
            
        });
    });
        // $(document).ready(function(){
        //     $('input[name="login"]').click(function(e){
        //         $('input[name="login"]').hide();
                
        //         e.preventDefault();
        //     });
                
            
            
        //     });

            
            // $(document).ready(function(){
            // $('.para').click(function(e){
            //     e.preventDefault();
            //     $('input[name="login"]').show();
                
            // });
                
            
            
            // });

            // $(document).ready(function()
            // {    $("#submit").click(function{
            //      $.post('connexion.php', // Un script PHP que l'on va créer juste après            
            //      { login : $("#username").val();  
            //       // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php           
            //        password : $("#password").val();            
            //         }, function(data){ // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard           
            //          }, 'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !         
            //          );   
            //          }); 
            //         }); 
            
            // <script>
            $(document).ready(function(){
                $('.p1').click(function(e){
                    e.preventDefault();
                    $.post('server.php'),{
                        login: $(".p1").val(),
                        password: $(".p1").val()
                    }

                });
            });

            //     });



            // // });
            // $(document).ready(function(){
            //     $('#p1').load("server.php"),{
            //         login : $("login").val(),    
            //         password : $("password").val()
            //     }
            // });
            </script>
    
</body>
</html>