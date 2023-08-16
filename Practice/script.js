
var ul = document.getElementById('ul')
var nextButton = document.getElementById('btnNext');
var explnButton = document.getElementById('expln');
var theoryButton = document.getElementById('theory');
var quizbox = document.getElementById('questionBox')
var modalexplnButton = document.getElementById('explain')
var opt1 = document.getElementById('opt1')
var opt2 = document.getElementById('opt2')
var opt3 = document.getElementById('opt3')
var opt4 = document.getElementById('opt4')
var btn1 = document.getElementById('btn1')
var btn2 = document.getElementById('btn2')
var btn3 = document.getElementById('btn3')
var btn4 = document.getElementById('btn4')

var time = 90;
var Timer = setInterval(function(){
//   if time <= 0){
//     clearInterval(downloadTimer);
//   }
  document.getElementById("timer").innerHTML = time + " seconds";
 time -= 1;

  if (time == 0)
  {
      clearInterval(Timer);
      document.getElementById("timer").innerHTML = "Time Up!";
  }
}, 1000);


var app={
        questions:[
            {
                q:"A, B, C, D and E are sitting on a bench. A is sitting next to B, C is sitting next to D, D is not sitting with E who is on the left end of the bench. C is on the second position from the right. A is to the right of B and E. A and C are sitting together. In which position A is sitting ?",
                options: ['Between B and D', 'Between B and C', 'Between E and D', 'Between C and E'],
                answer:2,
                explanation: "A is sitting next to B. It means B will sit to the left of A. C is sitting next to D. It means D will sit to the right of C. D is not sitting with E who is on the left end of the bench. C is on the second position from the right.It means that C is to the second last from right end. A is on the right of B and E .i.e. A will be in middle . A and C are sitting together. \n Sitting arrangement \n E B A C D \n Hence , A is sitting between B and C ."
            },
            {
              q:"Look at this series: 7, 10, 8, 11, 9, 12, � What number should come next?",
                options: ['7','12','10','13'],
                answer:3,
                explanation: "Answer: 10. Its an alternating addition and subtraction series. 3 is added in the first pattern, and then 2 is subtracted."
            },   

             {
              q:"King : Throne : : Judge : ?",
                options: ['Lawyer','Bench','Court','Trial'],
                answer:2,
                explanation: "As 'king' is related to 'Judge' in the same way 'Throne' is related to 'Bench'."
            }          
        ],
        index:0,
        load:function(){
            if(this.index<=this.questions.length-1){
                quizbox.innerHTML=this.index+1 + ". " +this.questions[this.index].q;
                opt1.innerHTML=this.questions[this.index].options[0];
                opt2.innerHTML=this.questions[this.index].options[1];
                opt3.innerHTML=this.questions[this.index].options[2];
                opt4.innerHTML=this.questions[this.index].options[3];
                explnButton.innerhtml=this.questions[this.index].explanation;
            }
            else {
                quizbox.innerHTML="Quiz Completed!";
               btn1.style.display="none";
                btn2.style.display="none";
                btn3.style.display="none";
                btn4.style.display="none";
                nextButton.style.display="none";
                modalexplnButton.style.display="none";
            }
        },
        next: function(){
            this.index++;
            opt1.className="";
            opt2.className="";
            opt3.className="";
            opt4.className="";
            opt1.style.pointerEvents="auto";
            opt2.style.pointerEvents="auto";
            opt3.style.pointerEvents="auto";
            opt4.style.pointerEvents="auto";
            this.load();
        },
        check: function(ele){
            var id=ele.id.split('');
            if(id[id.length-1]==this.questions[this.index].answer){
                this.score++;
                ele.className="correct";
                ele.style.pointerEvents="none";
                this.scoreCard();
            }
            else{
                ele.className="wrong";
            }
        },
        preventClick:function(){
           
                button.style.pointerEvents="none";
          
        },
        allowClick:function(){
            for(let i=0; i<4; i++){
                button.style.pointerEvents="auto";
                button.className=""
            }
        },
        score:0,
        scoreCard:function(){
            scoreCard.innerHTML=this.score + "/" + this.questions.length;
        }
}

window.load=app.load();

function button(ele){
    app.check(ele);
    app.preventClick();
}

function next(){
    app.next();
    app.allowClick();
}


var modal = document.getElementById("myModal");


var btn = document.getElementById("explain");


var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function theoryfunc() {
            window.open(
              "/regal/pages/theory.php", "_self");
        }