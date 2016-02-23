<?php
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "boute.alexis@free.fr, cindy0523@orange.fr";
 
    $email_subject = "Réponse mariage";
 
     
    
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Une erreur est survenu";
 
        echo $error."<br /><br />";
 
        die();
 
    }
     
 
    // validation expected data exists
 
    if(!isset($_POST['nom']) ||
 
        !isset($_POST['inlineRadioOptions'])
 
        ) {
 
        died('Veuillez remplir au moins votre nom et la participation');       
 
    }
 
     
 
    $nom= $_POST['nom']; // required
 
    $participation = $_POST['inlineRadioOptions']; // required
 
    $adulte_vin = $_POST['adultevin']; // required
 
    $enfant_vin = $_POST['enfantvin']; // not required
    
    $adulte_repas = $_POST['adulterepas']; // required
 
    $enfant_repas = $_POST['enfantrepas']; // not required
 
    $comments = $_POST['comments']; // required
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Nom de famille: ".clean_string($nom)."\n";
 
    
    if($participation == "option1")
      $email_message .= "Participation: Oui\n";
    else
      $email_message .= "Participation: Non\n";
    
    $email_message .= "Nb d'adultes au vin d'honneur : ".clean_string($adulte_vin)."\n";
 
    $email_message .= "Nb d'enfants au vin d'honneur : ".clean_string($enfant_vin)."\n";
    
    $email_message .= "Nb d'adultes au repas : ".clean_string($adulte_repas)."\n";
    
    $email_message .= "Nb d'enfants au repas : ".clean_string($enfant_repas)."\n";
    
    $email_message .= "Commentaires : ".clean_string($comments)."\n";
   
     
 
// create email headers
    
$email_from = "mariage@mariage.fr";
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();



if(!mail($email_to, $email_subject, $email_message, $headers))
{
  $error = "Nous n'avons pas pu prendre en compte vos informations. Réessayer plus tard ou contactez nous par téléphone ou mail.";
}

?>
 
 <html>
  <head>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/timer.css">


    <title>Cindy & Alexis</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <ul class="nav navbar-nav">
        <li role="presentation"><a href="/">Accueil</a></li>
        <li role="presentation"><a href="info.html">Infos utiles</a></li>
        <li role="presentation" class="active"><a href="reponse.html">Réponse invitation</a></li>
        <li role="presentation"><a href="voyage.html">Le voyage</a></li>
      </ul>
      <div class="row">
        <div class="col-md-12">
          <img src="media/header.jpg" class="img-responsive">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <br/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">
            Cindy & Alexis          
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center">
            27 Août 2016
          </h2>
          <br/><br/><br/>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center">
            <?php 
              if($error)
                echo $error;
              else
                echo "Merci d'avoir pris le temps de nous répondre."
            ?>
          </h3>
          <br/><br/>
        </div>
      </div>
      <div class='row'>
        <br/>
        <div class='col-md-12'>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="media/header.jpg" alt="...">
              </div>
              <div class="item">
                <img src="media/marliou2.jpg" alt="...">
              </div>
              <div class="item">
                <img src="media/nb.jpg" alt="...">
              </div>
              <div class="item">
                <img src="media/champs.JPG" alt="...">
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <h3 class="panel-title pull-left">Cindy et Alexis - 27 Août 2016</h3>
              <h3 class="panel-title pull-right">Made by <a href="www.abnov-it.fr">ABnov'IT</a></h3>
            </div>
          </div>

        </div>
      </div>
    </div>

    <script src="js/timer.js"></script>
  </body>
</html>

