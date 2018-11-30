<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Autobot</title>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styleNiv5.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!--     Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="./js/dragNiv5.js"></script>
</head>
<body>

  <main>
    <div id="left" class="container">
      <div class="col-md-12">
        <h1>Robocode</h1>
        <p>Comme tu as pu le voir, Sparky peut faire tout un tas de chose. Si Sparky veut obtenir son trophée, il devra cette fois accomplir plusieurs actions à la suite. Peut-tu l'aider à accomplir ses actions dans l'ordre? </p>

<!--
               <div id="btnInput">
                    <button id="prenom1" class="btn btn-info prenom btn-sample">Floriane</button>
                    <button id="erase" class="btn btn-info prenom btn-sample">Effacer</button>
                </div>
                
              -->
              <div id="propositions" class="dropzone">
                <p id="0" class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">marche(droite)</p>
                <p id="2" class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">marche(droite)</p>
                <p id="3" class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">ramasse() </p>
                <p id="1" class="dragEle btn btn-sample" draggable="true" ondragstart="event.dataTransfer.setData('text/plain',null)">saute()</p>
              </div>

              <div id="codeDiv">
                <div id="numbers">
                 <p>1</p>
                 <p>2</p>
                 <p>3</p>
                 <p>4</p>
                 <!--                       <p>5</p>-->
<!--
                       <p>6</p>
                       <p>7</p>
                       <p>8</p>
                       <p>9</p>
                       <p>10</p>
                     -->
                   </div>


                   <div id="codeText">
                    <div class="codeProposition">
                      <p>
                        Sparky.  

                      </p>
                      <div id="solution" class="drop_solution dropzone"></div>
<!--
                            <p> 
                                ");
                            </p>
                          -->
                        </div> 
                        <div class="codeProposition">
                          <p>
                            Sparky.

                          </p>
                          <div id="solution" class="drop_solution dropzone"></div>
<!--
                            <p> 
                                ");
                            </p>
                          -->
                        </div>
                        <div class="codeProposition">
                          <p>
                            Sparky.  

                          </p>
                          <div id="solution" class="drop_solution dropzone"></div>
<!--
                            <p> 
                                ");
                            </p>
                          -->
                        </div>
                        <div class="codeProposition">
                          <p>
                            Sparky.  

                          </p>
                          <div id="solution" class="drop_solution dropzone"></div>
<!--
                            <p> 
                                ");
                            </p>
                          -->
                        </div>                        
                      </div>
                    </div>

                    <div id="valider">
                      <button class="btn btn-validate" id="validation" disabled>Valider</button>
                    </div>

                    <h2>Récapitulatif</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aut id quos officiis, harum totam sed optio molestias magnam neque praesentium ab a dolores deserunt incidunt alias explicabo iure culpa nisi beatae. Sit alias, iure nam maiores eveniet possimus mollitia, accusamus cum quam sint deserunt odit nihil neque officiis soluta.</p>

                    <!--              progress bar   -->
                    <div class="progress progresJeu" style="position: relative">
                      <div id="progressbar" class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80% Complete
                      </div>
                    </div>

                  </div>
                </div>

                <div id="right" class="container">
                 <!--Animation-->
                 <div id="bulle" class=" bulle none">
                   <p></p>
                 </div>
                 <div id="robot"></div>
                 <!--Progress bar-->
<!--
            <div class="progress progresJeu">
              <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20% Complete
              </div>
            </div>
          -->
        </div>
        
      </main>

      <nav>
        <a id="prec" class="btn btn-sample" href="./level4.php" >Niveau précédent</a>
        <a id="next" class="invisible" href="./level2.php">Niveau suivant</a>
      </nav>
<!--
    <footer>
    
        <p>
            
        </p>

    </footer>
  -->

<!--

-->
</body>
</html>