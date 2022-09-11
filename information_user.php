">< html xmlns=" http : / /www.w3. org /1999/ xhtml" xml :lang=" fr " > <head> <title>Formulaire complet</ title> <link rel=’ stylesheet ’ href="films.css" type="text/css"/> </head> <body>
<form action="ExMyPHP3.php" method=’post ’>
Titre : <input type=’text ’ size=’20’ name="titre"/><br/> Année : <input type=’text ’ size=’4’ maxlength=’4’ name="annee" value="2000"/> <p> Comédie : <input type=’checkbox ’ name=’genre [] ’ value=’C’/> Drame : <input type=’checkbox ’ name=’genre [] ’ value=’D’/>
48 Chapitre 1. Introduction à MySQL et PHP
Histoire : <input type=’checkbox ’ name=’genre [] ’ value=’H’/> Suspense : <input type=’checkbox ’ name=’genre [] ’ value=’S ’/> </p><p> France : <input type=’radio ’ name=’pays ’ value=’FR’ checked=’1’/> Etats−Unis : <input type=’radio ’ name=’pays ’ value=’US’/> Allemagne : <input type=’radio ’ name=’pays ’ value=’DE’/> Japon : <input type=’radio ’ name=’pays ’ value=’JP’/> </p> <p> Metteur en scène (prénom − nom) : <input type=’text ’ size=’20’ name="prenom"/> <input type=’text ’ size=’20’ name="nom"> <br/>
Année de naissance : <input type=’text ’ size=’4’ maxlength=’4’ name="annee_naissance" value=’2000’/> </p> Résumé : <textarea name=’resume ’ cols=’30’ rows= ’3 ’>Résumé du film </textarea>
<h1>Votre choix</h1> <input type=’submit ’ value=’ Insérer ’ name=’ inserer ’/> <input type=’submit ’ value=’Modifier ’ name=’modifier ’/> <input type=’submit ’ value=’ Détruire ’ name=’ detruire ’/> <input type=’ reset ’ value=’Annuler ’/> </form>
</body> </html>



































<?php 
// session_start();

// if (isset($_SESSION['username']) && isset($_SESSION['date'])) {

//  ?>
// <!DOCTYPE html>
// <html>
// <head>
// 	<title>HOME</title>
// 	<link rel="stylesheet" type="text/css" href="style.css">
// </head>
// <body>
//      <h1><?php echo $_SESSION['username']; ?> Connecte <?php echo $_SESSION['date']; ?></h1>
//      <a href="logout.php">Deconnexion</a>
// </body>
// </html>

// <?php 
// }else{
//      header("Location: index.php");
//      exit();
// }
 ?>