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


    <!--Explanation modal-->
    <div class="fixed hidden insert-0  overflow-y-auto h-full w-full bg-gray-700 bg-opacity-50 z-10" id="modal">
        <div style=" transform: translate(12%, 0%) scale(1) !important;" class="relative top-44 mx-auto p-3 border w-3/5  shadow-lg rounded-md bg-white ">
            <div class="">

                <h2 class="text-lg leading-6 font-medium text-gray-900 mb-5 border-b p-2">Explanation</h2>

                <h3 class="text-md leading-6 text-gray-900 p-5" id="explain">
                    Loading...
                </h3>
                <div class="items-center px-4 py-3 flex justify-center">
                    <button id="ok-btn" class="px-4 py-2 bg-blue-500 text-white
                            text-base font-medium rounded-md w-3/5
                            shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Practice Box -->
    <div class="quiz_box activePractice">

        <header>
            <div class="title">
                <span id="categoryElement">Loading...</span> :
                <span class="text-blue-500 cursor-pointer" id="subcategoryElement">Loading...</span>
            </div>
        </header>
        <section>
            <div class="que_t">
                <h4>Loading...</h4>
            </div>
            <div class="option_l">
                <div class="option"><span id="optA">Loading...</span></div>
                <div class="option"><span id="optB">Loading...</span></div>
                <div class="option"><span id="optC">Loading...</span></div>
                <div class="option"><span id="optD">Loading...</span></div>
            </div>
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div>
                <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" id="open-btn">Explanation</button>
                &nbsp;
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" id="theory-btn" onclick="location.href='../Practice/theory.php'">Learn Theory</button>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" id="next-btn" onclick="loadQuestion()">Next Question</button>
        </footer>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

        <!-- Script for the explanation and theory tags -->
        <script>
            let modal = document.getElementById('modal');
            let openBtn = document.getElementById('open-btn');
            let button = document.getElementById('ok-btn');

            openBtn.onclick = function() {
                modal.style.display = 'block';
            };

            button.onclick = function() {
                modal.style.display = 'none';
            };

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <script>
            $(document).ready(function() {

                var currentQuestionId = null;

                function loadQuestion() {
                    alert("loadQuestion function called");
                    // Check if the user is logged in
                    $.ajax({
                        type: "GET",
                        url: "check_login.php", // Use the path to your check_login.php file
                        dataType: "json",
                        success: function(data) {
                            if (data.logged_in) {
                                // User is logged in, retrieve the question data
                                $.ajax({
                                    type: "GET",
                                    url: "api.php",
                                    dataType: "json",
                                    success: function(questionData) {
                                        console.log("AJAX request is being preocessed");
                                        // Assign question data to JavaScript variables
                                        currentQuestionId = questionData.question_id;
                                        var category = questionData.category;
                                        var subcategory = questionData.subcategory;
                                        var question = questionData.question;
                                        var optionA = questionData.opt_a;
                                        var optionB = questionData.opt_b;
                                        var optionC = questionData.opt_c;
                                        var optionD = questionData.opt_d;
                                        var correctAnswer = questionData.correct_ans;
                                        var explanation = questionData.explanation;

                                        // Now you can use these variables to update your HTML elements
                                        $("#categoryElement").text(category);
                                        $("#subcategoryElement").text(subcategory);
                                        $(".que_t h4").text(question);
                                        $("#optA").text(optionA);
                                        $("#optB").text(optionB);
                                        $("#optC").text(optionC);
                                        $("#optD").text(optionD);
                                        $("#explain").text(explanation);

                                        // Pass the correctAnswer variable to optionSelected function
                                        optionSelected($(".option"), correctAnswer);
                                    },
                                    error: function(xhr, status, error) {
                                        console.error("AJAX Error:");
                                        console.log("XHR Status: " + status);
                                        console.log("Error Message: " + error);
                                        console.log(xhr.responseText); // Log the full response for debugging
                                    }
                                });
                            } else {
                                // User is not logged in, handle the situation (e.g., redirect to login page)
                                window.location.href = "../login.php"; // Replace with your login page URL
                            }
                        },
                        error: function(error) {
                            console.error("An error occurred: " + error);
                        }
                    });
                }

                // Initial load of the question
                alert("Before calling loadQuestion");
                loadQuestion();
                alert("After calling loadQuestion");

                const option_list = document.querySelector(".option_l");
                const allOptions = option_list.children.length;

                function optionSelected(answer, correct) {
                    var userAns = answer.textContent; //getting user selected option
                    var correcAns = correct; //getting correct answer

                    if (userAns == correcAns) {
                        answer.classList.add("correct"); //adding green color to correct selected option
                        answer.insertAdjacentHTML("beforeend", '<div class="icon tick"><i class="fas fa-check"></i></div>'); //adding tick icon to correct selected option
                        // Add an AJAX request to update the rank table
                        $.ajax({
                            type: "POST", // Use POST method to update the rank
                            url: "update_rank.php", // Create this PHP file to update the rank
                            data: {
                                user_id: "<?php echo $_SESSION['cand_id']; ?>"
                            }, // Pass the user ID to the PHP script
                            success: function(response) {
                                // Handle the response if needed
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX Error when updating rank: " + error);
                                console.log(xhr.responseText); // Log the full response for debugging
                            }
                        });

                        // Add an AJAX request to update the questions_list table
                        $.ajax({
                            type: "POST",
                            url: "update_question_status.php", // Create this PHP file to update the question status
                            data: {
                                question_id: <?php echo $question_id; ?>
                            }, // Pass the question ID to the PHP script
                            success: function(response) {
                                // Handle the response if needed
                            },
                            error: function(xhr, status, error) {
                                console.error("AJAX Error when updating question status: " + error);
                                console.log(xhr.responseText); // Log the full response for debugging
                            }
                        });
                    } else {
                        answer.classList.add("incorrect"); //adding red color to correct selected option
                        answer.insertAdjacentHTML("beforeend", '<div class="icon cross"><i class="fas fa-times"></i></div>'); //adding cross icon to correct selected option

                        for (var i = 0; i < allOptions; i++) {
                            if (option_list.children[i].textContent == correcAns) { //if there is an option which is matched to the correct answer
                                option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                                option_list.children[i].insertAdjacentHTML("beforeend", '<div class="icon tick"><i class="fas fa-check"></i></div>'); //adding tick icon to matched option
                            }
                        }
                    }
                    for (var i = 0; i < allOptions; i++) {
                        option_list.children[i].classList.add("disabled"); //once user selects an option, then disable all options
                    }
                    document.querySelector("#next-btn").classList.add("show"); //show the next button if user selected any option
                }
            });
        </script>
</body>

</html>