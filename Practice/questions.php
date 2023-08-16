<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="../css/regal.css" rel="stylesheet">
    <title>Regal Test</title>
</head>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" style="font-size: 27px;font-weight:600;letter-spacing:2px;user-select: none;">REGAL</a>
    <div class="header">
        <h2 class="title is-6 mt-2">Verbal Reasoning - Mental Ability</h2>
    </div>
  </div>

</nav>

   <div class="container mt-4" style="padding: 20px;">
        <div class="titlec">
            <div class="timer">
                <span class="material-icons ">
                    timer
                </span>
                <h3>
                    <span id="timer">90 seconds</span> 
                </h3>

            </div>
        </div>


        <div class="box">
         <h2 id = "questionBox" class="subtitle is-5 question">Sample Question<h2>

                    <button id="btn1" class="button is-fullwidth is-rounded option">
                       <div class="optname">A</div> <div id="opt1" onclick="button(this)"> Option A </div>
                    </button>
                    <br>
                    <button id="btn2" class="button is-fullwidth is-rounded option">
                        <div class="optname">B</div><div id="opt2" onclick="button(this)"> Option B </div>
                    </button>
                    <br>
                    <button id="btn3" class="button is-fullwidth is-rounded option">
                        <div class="optname">C</div><div id="opt3" onclick="button(this)"> Option C </div>
                    </button>
                    <br>
                    <button id="btn4" class="button is-fullwidth is-rounded option">
                        <div class="optname">D</div><div id="opt4" onclick="button(this)"> Option D </div>
                    </button>
                    <br>
        </div>
       
        <div class="helprow">

    
            <div>
                <button id="explain" class="button is-normal is-success">
                    <span class="material-icons">
                        lightbulb
                    </span> See Explanation
                </button>&emsp;
                <button id="theory" class="button is-normal is-info " onclick="theoryfunc()">
                    <span class="material-icons">
                        library_books
                    </span> Learn Theory &nbsp;
                </button>

                &emsp;
         
           
         <div class="button is-normal is-primary">
           <span class="material-icons">
                        <span class="material-icons">trending_up </span> </span>
           <div class="score-card"> Total Score: <span id="scoreCard">&nbsp;0&nbsp;</span> </div>
      </div>
       &emsp;
        <button class="button is-normal is-link " id="btnNext" type="button" onclick="next()">
             <span class="material-icons">
                        <span class="material-icons">trending_flat </span>
                    </span> Next Question
            </button>
           &emsp;

            </div>

<!--sample modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p id="expln">Some text in the Modal Body</p>
    </div>
  </div>

</div>

            
        </div>


    </div>
</body>


<script src="/regal/pages/script.js">

</script>
</html>