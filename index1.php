
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Ta déco dz</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">  
  <link rel="icon" type="image/png" href="imag/logo.png">
</head>
<body>
  <div class="back">
    <?php  include('heder.php'); ?>
    <!--  Le corps-->
    <section style="margin-top: 8%; margin-right: 21%;">
     <?php include('connexion.php'); ?>
   </section>
   <?php  include('foter.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 </div>  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script> 
</html>
<style type="text/css">
  body{
    background-color: #edd2b9;
    background-repeat: no-repeat;
    width: 100%;
    /*animation-name: anime;*/
    animation-duration: 10s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    /*background-image: url('imag/f.jpg');*/
    background-color: rgba(199,136,115,0.3);
   
  }
  @keyframes anime{
    from{
      background-image: url('imag/01.jpg');
      background-repeat: no-repeat;
      text-align: center;
      border-right-width: 50%;
    }
    25%{
      background-image: url('imag/02.jpg');
      background-repeat: no-repeat;
    }
    50%{
      background-image: url('imag/03.jpg');
      background-repeat: no-repeat;
    }
    75%{
      background-image: url('imag/04.jpg');
      background-repeat: no-repeat;
    }
    to{
      background-image: url('imag/05.jpg');
      background-repeat: no-repeat;
    }
  }
</style>