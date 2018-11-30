<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Robocode</title>
    
    <!-- Normalize -->
    <link rel="stylesheet" href="./css/normalize.css">
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- custom style -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- custom JS -->
    <script src="./js/drag.js"></script>
    <script src="./js/validation.js"></script>
</head>
<body>
   
    <main>
        <div id="left" class="container">
          <div class="col-md-12">
            <h1>Robocode</h1>
                <p>Comme tout les robots, Sparky à besoin d'électricité pour fonctionner. Mais attention ! Maintenant qu'on la fait bouger, sa batterie et presque vide !</p>
                
                <p>On veut charger la batterie de Sparky jusqu'a-ce-que elle soit pleine. </p>
                

                <div id="answers" class="dropzone">
                    <p class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">Il pleut</p>
                    <p class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">Soleil brille</p>
                    <p id="correct" class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">Batterie pas pleine</p>
                </div>
               
                <div id="codeDiv">
                    <div id="numbers">
                       <p>1</p>
                       <p>2</p>
                       <p>3</p>
                       <p>4</p>
                       <p>5</p>
                    </div>
                    
                    <div id="codeText">
                        <div>
                            <p class="bigtext">
                                TANT QUE (
                            </p>
                            <div id="solution" class="dropzone"></div>
                            <p class="bigtext">){</p>
                        </div>
                        <div>
                            <p class="bigtext">Sparky.recharge();</p>
                        </div>
                        
                        <div>
                            <p class="bigtext">};</p>
                        </div>
                    </div>
                </div>
                
                <div id="valider">
                    <button class="btn btn-validate" id="validation" disabled>Valider</button>
                </div>
                
                <!--Progress bar-->
                <div class="progress progresJeu" style="position: relative">
                    <div id="progressBar" class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60% complete
                    </div>
                </div>
                
           </div>
        </div>
        
        <div id="right" class="container">
            <!-- Animation -->
            <img id="gameImg4" src="./assets/gif/robot_walking.png" alt="Sparky marche">
        </div>
    </main>
    
    <footer>
        <nav class="col-md-12">
            <a id="prec" href="./level3.php" class="btn btn-sample">Niveau précédent</a>
            <a id="next" class="not-active btn btn-sample" href="level5.php">Niveau suivant</a>
        </nav>
    </footer>
</body>
</html>