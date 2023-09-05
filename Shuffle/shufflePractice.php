<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regal | Practice</title>
  <link rel="stylesheet" href="../style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <!-- FontAweome CDN Link for Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          clifford: '#da373d',
        }
      }
    }
  }

  $(window).on('load', function() {
    $('#loading').delay("slow").fadeOut();;
  })
</script>
<style>
  /* Only the scroll bar */
  ::-webkit-scrollbar {
    width: .5rem;
    height: .5rem;
  }

  ::-webkit-scrollbar-thumb {
    background: rgba(0, 0, 0, .15);
  }

  ::-webkit-scrollbar-thumb:hover {
    background: rgba(0, 0, 0, .3);
  }
</style>

<!-- Back button -->

<body class="bg-blue-500 ">
  <div class=""></div>
  <div class="p-4" style="margin:auto;overflow-y:hidden;">
    <button type="button" onclick="location.href='../index'" class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
      </svg>
      <span class="font-bold text-sm ml-2">Back</span>
    </button>
  </div>

  </div>

  <!-- Loading screen -->
  <div id="loading" class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-blue-500 opacity-100 flex flex-col items-center justify-center">
    <svg fill='none' class="w-24 h-24 animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
      <path clip-rule='evenodd' d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z' fill='white' fill-rule='evenodd' />
    </svg>
    <h2 class="text-center text-white text-xl font-semibold">Loading...</h2>
    <p class="w-1/3 text-center text-white">Sit tight, we are getting your questions ready!</p>
  </div>

<!-- Retrieve data from database-->
  <?php
  // Start a PHP session
  session_start();

  // Include the database connection file
   include_once('../auth/connection.php');

  // Check if a user is logged in (you can implement your own authentication mechanism)
  if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or perform your authentication logic
   header('Location: login.php'); // Replace 'login.php' with your actual login page
   exit();
  }

  $user_id = $_SESSION['user_id'];

  // Initialize regular variables to store the data
  $category = '';
  $subcategory = '';
  $question = '';
  $optionA = '';
  $optionB = '';
  $optionC = '';
  $optionD = '';
  $correctAnswer = '';
  $explanation = '';
  $theory = '';

  // SQL query to retrieve unsolved questions with related data (assuming only one question is fetched)
  $sql = "SELECT t.topic AS category, t.sub_topic AS subcategory, q.subtopicid, q.question, q.opt_a, q.opt_b, q.opt_c, q.opt_d, q.correct_ans, q.explanation, th.theory
        FROM questions_list q
        INNER JOIN topics t ON q.subtopicid = t.id 
        LEFT JOIN theory_list th ON q.subtopicid=th.subtopicid
        WHERE q.status = 'unsolved' LIMIT 1";

  $result = $database_handler->query($sql);

  if ($result->num_rows > 0) {
    // Fetch the data (assuming only one question is fetched)
    $row = $result->fetch_assoc();
    $category = $row["category"];
    $subcategory = $row["subcategory"];
    $question = $row["question"];
    $optionA = $row["opt_a"];
    $optionB = $row["opt_b"];
    $optionC = $row["opt_c"];
    $optionD = $row["opt_d"];
    $correctAnswer = strip_tags(htmlspecialchars_decode($row["correct_ans"]));
    $explanation = $row["explanation"];
    $theory = $row["theory"];
  } else {
    echo "No unsolved questions found.";
  }
  $database_handler->close();
  ?>  
  
  
  <!-- Explanation and view theory -->
  <div class="fixed hidden insert-0  overflow-y-auto h-full w-full bg-gray-700 bg-opacity-50 z-10" id="modal1">
    <div style=" transform: translate(12%, 0%) scale(1) !important;" class="relative top-44 mx-auto p-3 border w-3/5  shadow-lg rounded-md bg-white ">
      <div class="">

        <h2 class="text-lg leading-6 font-medium text-gray-900 mb-5 border-b p-2">Explanation</h2>

        <h3 class="text-md leading-6 text-gray-900 p-5">
        <?php echo $explanation; ?>
        </h3>
        <div class="items-center px-4 py-3 flex justify-center">
          <button id="ok-btn1" class="px-4 py-2 bg-blue-500 text-white
                            text-base font-medium rounded-md w-3/5
                            shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
            OK
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="fixed hidden insert-0  overflow-y-auto h-full w-full bg-gray-700 bg-opacity-50 z-10" id="modal2">
    <div style=" transform: translate(12%, 0%) scale(1) !important;" class="relative top-44 mx-auto p-3 border w-3/5  shadow-lg rounded-md bg-white ">
      <div class="">

        <h2 class="text-lg leading-6 font-medium text-gray-900 mb-5 border-b p-2">Theory</h2>

        <h4 class="text-md leading-6 text-gray-900 p-5">
        <?php echo $theory; ?>
        </h4>
        <div class="items-center px-4 py-3 flex justify-center">
          <button id="ok-btn2" class="px-4 py-2 bg-blue-500 text-white
                            text-base font-medium rounded-md w-3/5
                            shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
            OK
          </button>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- Practice Box -->
  <div class="quiz_box activePractice">

    <header>
      <div class="title"><?php echo $category; ?> : <span class="text-blue-500 cursor-pointer"><?php echo $subcategory; ?></span></div>
    </header>
    <section>
      <div class="que_t">
        <h4><?php echo $question; ?></h4>
      </div>
      <div class="option_l">
        <div class="option" onclick="optionSelected(this)"><span><?php echo $optionA; ?></span></div>
        <div class="option" onclick="optionSelected(this)"><span><?php echo $optionB; ?></span></div>
        <div class="option" onclick="optionSelected(this)"><span><?php echo $optionC; ?></span></div>
        <div class="option" onclick="optionSelected(this)"><span><?php echo $optionD; ?></span></div>
      </div>

    </section>
    <!-- footer of Quiz Box -->
    <footer>
      <div>
        <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" id="open-btn" onclick="adjustModalHeight('modal1');">Explanation</button>
        &nbsp;
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" id="theory-btn">Learn Theory</button>

      </div>

      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" onclick="loadQuestion()" id="next-btn">Next Question</button>
    </footer>
  </div>



  <!-- Script for the explanation and theory tags -->
  <script>
    let modal1 = document.getElementById('modal1');
    let modal2 = document.getElementById('modal2');
    let openBtn = document.getElementById('open-btn');
    let theoryBtn = document.getElementById('theory-btn');
    let button1 = document.getElementById('ok-btn1');
    let button2 = document.getElementById('ok-btn2');

    openBtn.onclick = function() {
      modal1.style.display = 'block';
    };

    button1.onclick = function() {
      modal1.style.display = 'none';
    };

    window.onclick = function(event) {
      if (event.target == modal) {
        modal1.style.display = "none";
      }
    }

    theoryBtn.onclick = function() {
      modal2.style.display = 'block';
    };

    button2.onclick = function() {
      modal2.style.display = 'none';
    };

    window.onclick = function(event) {
      if (event.target == modal) {
        modal2.style.display = "none";
      }
    }
  </script>
  

  <script type="text/javascript">
    const option_list = document.querySelector(".option_l");
    const allOptions = option_list.children.length;

    const answer = document.querySelector(".option");
    let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
    let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';


    function optionSelected(answer) {
      let userAns = answer.textContent; //getting user selected option
      let correcAns = "<?php echo $correctAnswer; ?>";
      if (userAns == correcAns) { 
        answer.classList.add("correct"); //adding green color to correct selected option
        answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
      } else {
        answer.classList.add("incorrect"); //adding red color to correct selected option
        answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option

        for (let i = 0; i < allOptions; i++) {
          if (option_list.children[i].textContent == correcAns) { //if there is an option which is matched to an array answer 
            option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
            option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
            console.log("Auto selected correct answer.");
          }
        }
      }
      for (let i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
      }
      next_btn.classList.add("show"); //show the next button if user selected any option
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>

</html>