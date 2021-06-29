<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserve.css">
    
    <title>Document</title>
    
</head>
<body>
    <div class="back">
     <img src="formule.png" class="backim">
    </div> 
    <nav>
        <ul>
            <div class="menu">
                <span class="bar_1" id="bar"></span>
                <span class="bar_2"id="bar"></span>
                <span class="bar_3"id="bar"></span>
            </div>
          
       <li>
      <a href="ciHome3.html">Accueill</a>
      </li>
      <li>
      <a href="About.html">A props</a>
      </li>
      <li>
          <a href="Contact.php">Contact+</a>
      </li>
      <li>
          <a href="services.html" >Services</a>
      </li>                 
                  
        </ul>
    </nav>
    <?php
       if(isset($_POST['np9'])){
        $Nomprenom=$_POST['np1'];
        $Adresse=$_POST['np2'];
        $Ville=$_POST['np4'];
        $em=$_POST['np5'];
        $tele=$_POST['np6'];
        $date=$_POST['np7'];
        $nbpr=$_POST['np8'];
      
        $to='ziadnkiri2@gmail.com';
        $Subjecte="-Pré reservation d'une Client :";
        $message="Nom est prenom : ".$Nomprenom."\r\n"."Adresse : ".$Adresse."\r\n"."Ville :".$Ville."\r\n"."telephone : ".$tele."\r\n"."Nombre de persone : ".$nbpr;
        $headers =  'frome'.$em; 
     
      
        if(mail($to,$Subjecte,$message,$headers)){
            ini_set("SMTP","smtp.gmail.com");
        ini_set("sendmail_from","<email-address>@gmail.com>");
            echo "Email sent successfully to $receiver";
        }else{
            echo "Sorry, failed while sending mail!";
        }
       }
    ?>
    <form action="reserve.php" method="POST" autocomplete="False">
        <label class="lb1">Nom et Penom :</label>
       <input type="text" class="txt1" name="np1" required>
       <label class="lb2">Adresse :</label>
       <input type="text" class="txt2" name="np2"  required>
       <label class="lb3">Code postal :</label>
       <input type="text" class="txt3" name="np3" required>
       <label class="lb4">Ville :</label>
       <input type="text" class="txt4" name="np4" required>
       <label class="lb5">Email *:</label>
       <input type="email" class="txt5" name="np5" >
       <label class="lb6">Téléphone *:</label>
       <input type="tel" class="txt6" name="np6" >
       <label class="lb7">Date du séjour *:</label>
       <input type="date" class="txt7" name="np7" >
       <label class="lb8">Nombre de personne *:</label>
       <input type="number" class="txt8" name="np8" >
        <input type="submit" class="btn" name="np9" value="envoyer" >
    </form>  

</body>
</html>