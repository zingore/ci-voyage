<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cih5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
  <div class="back">
    <img src="studio-republic-fotKKqWNMQ4-unsplash.jpg" class="backim">
    <div class="lanear">
      <span class="s1">Ci Voyage</span> 
    </div>
    <span class="s2">Bonjour à tous dans Contactez-nous 
    </span>
    <nav class="menu">       
      <ul class="d">   
      <li>
      <a href="ciHome3.html">Accueill</a>
      </li>
      <li>
      <a href="About.html">Aprops</a>
      </li>
      <li>
          <a href="Contact.php">Contact+</a>
      </li>
      <li>
          <a href="services.html" >Services</a>
      </li>          
        </ul>          
      </nav>   
</div>

<div class="cont">
  <i class="fab fa-whatsapp"></i>
  <span class="s3">Tele : +212 666-660814</span>
  <span class="s4">Tele :+212 624-364076</span>
  <a href="https://web.whatsapp.com"><button class="s10" >Presse</button></a>
  
</div> 
<div class="cont1">
  <i class="fab fa-facebook"></i>
  <span class="s5">https://www.facebook.com</span>
  <span class="s6"><a href="https://www.facebook.com/Ci-Voyage-100206414731434/"><button class="s7" >Presse</button></a></span>
</div>
<div class="cont3">
  <i class="fab fa-instagram"></i>
  <span class="s5">https://www.instagram.com</span>
  <span class="s6"><a href="https://www.instagram.com"><button class="s8" >Presse</button></a></span>
</div>
<div class="cont4">
  <i class="fab fa-twitter-square"></i>
  <span class="s3">https://www.twiter.com</span>
  <span class="s6"><a href="https://twitter.com/?lang=ar"><button class="s9" >Presse</button></a></span>
</div>
<div class="cont5" >
  <h1 class="com" >Le groupe d'agences Ci Voyage s'occupe de vos besoins </h1>
  <?php
       if(isset($_POST['btn'])){
        $coment=$_POST['tt'];
        $Nom=$_POST['tt1'];
        $Prenom=$_POST['tt2'];
        $email=$_POST['tt3'];
      
        $to='botmaile2@gmail.com';
        $Subjecte="Commentaire :";
        $message="Comentaire :".$coment."\r\n"."Nom :".$Nom."\r\n"."Prenom :".$Prenom;
        $headers ='frome client'; 
       
      
        if(mail($to,$Subjecte,$message,$headers)){
          ini_set("SMTP","smtp.gmail.com");
      ini_set("sendmail_from","<email-address>@gmail.com>");
      $_POST['kle']=  "Email sent successfully to ";
      echo $_POST['kle'];
      }else{
        $_POST['kle']=  "Sorry, failed while sending mail!";
        echo $_POST['kle'];
      }
       }
    ?>
  <form action="Contact.php" method="POST" autocomplete="False">
    <textarea class="txt" name="tt" cols="30" rows="10" placeholder="  Comentaire....."  required></textarea>
    <label class="lb1" >Nom : *</label>
    <input type="text" class="txt1" name="tt1">
    <label  class="lb2">Prénom : *</label>
    <input type="text" class="txt2" name="tt3">
    <label  class="lb3">Email : *</label>
    <input type="text" class="txt3" name="tt3" >
    <input type="submit" name='btn'  class="send" value="envoyer" >
    _<span class="s20" name="kle"></span>
  </form> 
  
  
</div>
<span class="sp2">Voici la localisation de notre agence Ci Voyage .</span>
<div class="local"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d256.0199762015998!2d-8.066314449766482!3d31.683223227941408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafeb985957599f%3A0x1fa801739c66e5ee!2sDroguerie%20Boudinar!5e0!3m2!1sar!2sma!4v1620686518565!5m2!1sar!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="lo" ></iframe></div>
<footer class="">
  Sz-Company
</footer>
</body>
</html>