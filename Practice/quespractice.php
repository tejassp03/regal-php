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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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

    $(window).on('load', function () {
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
  <body class="bg-blue-500 ">
  <div class=""></div>
    <div>
    <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-64 hidden lg:block">
        <div class="flex flex-col justify-between h-full">
            <div class="flex-grow overflow-y-scroll">
                <div class="px-4 py-6 text-center border-b">
                    <h1 class="text-2xl font-bold leading-none text-yellow-600"><span
                            class="text-gray-700">REGAL</span>&nbsp;Gold</h1>
                </div>
                
<ul class="relative px-1">
    
    <li class="relative " id="sidenavSecEx2">
      <a class="flex items-center text-md py-6 mt-3 px-6 h-12 bg-gray-300 bg-opacity-50 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-gray-300 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavSecEx2" aria-expanded="false" aria-controls="collapseSidenavSecEx2">
        <i class="fa fa-book w-3 h-3 mr-3" aria-hidden="true"></i>
        <span>Reasoning</span>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
        </svg>
      </a>
      <ul class="relative accordion-collapse collapse" id="collapseSidenavSecEx2" aria-labelledby="sidenavSecEx2" data-bs-parent="#sidenavSecExample">
        <li class="relative">
          <a href="#!" class="flex items-center text-md py-6 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Link 1</a>
        </li>
        <li class="relative">
          <a href="#!" class="flex items-center text-md py-6 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Link 2</a>
        </li>
      </ul>
    </li>

    <li class="relative " id="sidenavSecEx3">
      <a class="flex items-center text-md py-6 mt-3 px-6 h-12  overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-gray-300 transition duration-300 ease-in-out cursor-pointer" data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse" data-bs-target="#collapseSidenavSecEx3" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
        <i class="fa fa-book w-3 h-3 mr-3" aria-hidden="true"></i>
        <span>English</span>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
        </svg>
      </a>
      <ul class="relative accordion-collapse collapse" id="collapseSidenavSecEx3" aria-labelledby="sidenavSecEx3" data-bs-parent="#sidenavSecExample">
        <li class="relative">
          <a href="#!" class="flex items-center text-md py-6 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Link 1</a>
        </li>
        <li class="relative">
          <a href="#!" class="flex items-center text-md py-6 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="primary">Link 2</a>
        </li>
      </ul>
    </li>

    
    
    
  </ul>


                        <br>
                        <!-- <h3 class="text-md font-semibold ml-2">Advertisement</h3>
                        <img onclick="window.open('https://www.embibe.com/');" class="rounded-xl" src="https://d2cyt36b7wnvt9.cloudfront.net/exams/wp-content/uploads/2022/07/06233726/Mobile-Banner-Copies-JEE-Ad-test-1-UG-2.gif" alt="www.embibe.com"> -->

                        
        </div>
            <div class="p-4" style="margin:auto;overflow-y:hidden;">
                <button type="button"
                    class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class=""
                        viewBox="0 0 16 16">
                        <path
                            d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <span class="font-bold text-sm ml-2">Logout</span>
                </button>
            </div>

    </div>
           
        </div>
    </aside>
    </div>
      


    <!-- start Quiz button -->
    <!-- <div class="start_btn"><button>Start Quiz</button></div> -->
    <!-- Info Box -->
    <!-- <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div> -->
    <!-- Quiz Box -->
    <div id="loading" class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-blue-500 opacity-100 flex flex-col items-center justify-center">
    <svg fill='none' class="w-24 h-24 animate-spin" viewBox="0 0 32 32" xmlns='http://www.w3.org/2000/svg'>
					<path clip-rule='evenodd'
						d='M15.165 8.53a.5.5 0 01-.404.58A7 7 0 1023 16a.5.5 0 011 0 8 8 0 11-9.416-7.874.5.5 0 01.58.404z'
						fill='white' fill-rule='evenodd' />
				</svg>	<h2 class="text-center text-white text-xl font-semibold">Loading...</h2>
	<p class="w-1/3 text-center text-white">Sit tight, we are getting your questions ready!</p>
    </div>
    <div
  class="fixed hidden insert-0  overflow-y-auto h-full w-full bg-gray-700 bg-opacity-50 z-10"
  id="modal"
>
<div style=" transform: translate(12%, 0%) scale(1) !important;" class="relative top-44 mx-auto p-3 border w-3/5  shadow-lg rounded-md bg-white ">
            <div class="">
                
                <h2 class="text-lg leading-6 font-medium text-gray-900 mb-5 border-b p-2">Explanation</h2>
                
                <h3 class="text-md leading-6 text-gray-900 p-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fuga dolore adipisci ipsa error cumque tempora numquam, quasi obcaecati, minus odio temporibus minima iste ab fugit corrupti aliquid? Magnam, quidem.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fuga dolore adipisci ipsa error cumque tempora numquam, quasi obcaecati, minus odio temporibus minima iste ab fugit corrupti aliquid? Magnam, quidem.
                </h3>
                <div class="items-center px-4 py-3 flex justify-center">
                    <button id="ok-btn"
                        class="px-4 py-2 bg-blue-500 text-white
                            text-base font-medium rounded-md w-3/5
                            shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        OK
                    </button>
                </div>
            </div>
        </div>
</div>
</div>
    <div class="quiz_box activeQuiz">
        
        <header>
            <div class="title">Reasoning : <span class="text-blue-500 cursor-pointer">Problems on Trains</span></div>
            <!-- <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div> -->
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_t">
                <h4>1. What does HTML stand for?</h4>
            </div>
            <div class="option_l">
            <div class="option" onclick="optionSelected(this)"><span>A. Problems on Trains</span></div>
            <div class="option" onclick="optionSelected(this)"><span>B. Problems on Trains</span></div>
            <div class="option" onclick="optionSelected(this)"><span>C. Problems on Trains</span></div>
            <div class="option" onclick="optionSelected(this)"><span>D. Problems on Trains</span></div>
            </div>
            
        </section>
        <!-- footer of Quiz Box -->
        <footer>
            <div>
            <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" id="open-btn">Explanation</button>
            &nbsp;
            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Learn Theory</button>
            
            </div>
           
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Next Que</button>
        </footer>
    </div>







    

<script>
    let modal = document.getElementById('modal');
  let btn = document.getElementById('open-btn');
  let button = document.getElementById('ok-btn');

  btn.onclick = function() {
  modal.style.display = 'block';
};

button.onclick = function() {
  modal.style.display = 'none';
};

window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>
<script type="text/javascript">
  const option_list = document.querySelector(".option_l");
    const allOptions = option_list.children.length;

const answer = document.querySelector(".option");
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';


function optionSelected(answer){
    let userAns = answer.textContent; //getting user selected option
    let correcAns='A. Problems on Trains';
    if(userAns == correcAns){ //if user selected option is equal to array's correct answer
        // userScore += 1; //upgrading score value with 1
        answer.classList.add("correct"); //adding green color to correct selected option
        answer.insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to correct selected option
        console.log("Correct Answer");
        // console.log("Your correct answers = " + userScore);
    }else{
        answer.classList.add("incorrect"); //adding red color to correct selected option
        answer.insertAdjacentHTML("beforeend", crossIconTag); //adding cross icon to correct selected option
        console.log("Wrong Answer");

        for(i=0; i < allOptions; i++){
            if(option_list.children[i].textContent == correcAns){ //if there is an option which is matched to an array answer 
                option_list.children[i].setAttribute("class", "option correct"); //adding green color to matched option
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adding tick icon to matched option
                console.log("Auto selected correct answer.");
            }
        }
    }
    for(i=0; i < allOptions; i++){
        option_list.children[i].classList.add("disabled"); //once user select an option then disabled all options
    }
    next_btn.classList.add("show"); //show the next button if user selected any option
}
    </script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>
</html>