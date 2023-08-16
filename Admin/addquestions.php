<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="../css/regal.css" rel="stylesheet">
    <title>Regal Test</title>
</head>
<style>
      @media (max-width: 768px)
  {
      .container
      {
         width: 98% !important;
      }
  }
</style>
<body>
    <script>

function getsubtopic(topicname)
 {
     
    $('#sub-topic').html('');

     
    $.ajax({
    url:"updateques.php",
    method:"POST",
    data:{topic: topicname},
    success: function(data){
     $('#sub-topic').html(data);
    }
   })



 }
 
 
 tinymce.init({

selector:'textarea#ques',
plugins: "placeholder",
height:120,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});
 tinymce.init({

selector:'textarea#exp',
plugins: "placeholder",
height:120,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});
 tinymce.init({

selector:'input#optiona',
plugins: "placeholder",
height:45,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});
 tinymce.init({

selector:'input#optionb',
plugins: "placeholder",
height:45,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});
 tinymce.init({

selector:'input#optionc',
plugins: "placeholder",
height:45,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});
 tinymce.init({

selector:'input#optiond',
plugins: "placeholder",
height:45,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;overflow-y:hidden!important;line-height:0.9;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});

    </script>
    <?php include "adminheader.php"; ?>


        

    <div class="container mt-4" style="padding: 20px;width:60%;margin:auto;">
    <h2 class="title is-4 mt-2">Add Questions</h2>
       
        <div class="box">
            <form action="updateques" >
            <div class="select mb-3">
               
                <select name="topic" id="topic" onchange="getsubtopic(this.value)" >
                    <option value="" disabled selected hidden>Choose Topic</option>
                    
                    <?php include 'config.php';
                    $sql="SELECT DISTINCT topic from topics";
                    $res=mysqli_query($con,$sql);
                    while( $row=mysqli_fetch_assoc($res))
                    {
                        echo '<option value="'.$row['topic'].'">'.$row["topic"].'</option>';
                    }
                    ?>
                    
                </select>
              </div>
              <div class="select mb-3">
                <select id="sub-topic" name="sub-topic" >
                    <option value="" disabled selected hidden>Choose Sub-Topic</option>
                    
                </select>
            </div>
              
            <textarea class="textarea is-info" id="ques" name="ques" placeholder="Enter Question"></textarea>
            <br>
            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" id="answer"  value="A" class="m-2" name="answer" required><input class="input is-info " type="text" id="optiona" name="opta" style="width: 95%;" placeholder="Option A"></div>
            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" id="answer" value="B" class="m-2" name="answer" required><input class="input is-info " type="text" id="optionb" name="optb" style="width: 95%;" placeholder="Option B"></div>
            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" id="answer" value="C" class="m-2" name="answer" required><input class="input is-info " type="text" id="optionc" name="optc" style="width: 95%;" placeholder="Option C"></div>
            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" id="answer" value="D" class="m-2" name="answer" required><input class="input is-info " type="text" id="optiond" name="optd" style="width: 95%;" placeholder="Option D"></div>
            <textarea class="textarea is-info" id="exp" name="exp" placeholder="Enter Explanation"></textarea>


            
        </div>
        <div class="quesrow">
            <div>
                <button class="button is-normal is-danger" >
                    <span class="material-icons">
                        cancel
                    </span>Cancel
                </button>&emsp;
               
                
            </div>
            <div>
                <button type="button" name="addques" id="addques" onclick="steps_taskdesc()" class="button is-normal is-success" >
                    <span class="material-icons">
                        save
                    </span>Save
                </button>
            </form>
          
            </div>
           
        </div>


    </div>
</body>
<script src="../javascript/index.js"></script>
<script>
function steps_taskdesc(){
	$("#addques").attr("disabled", true);
var ques = tinymce.EditorManager.get('ques').getContent({format : 'raw'});
var opta = tinymce.EditorManager.get('optiona').getContent({format : 'raw'});
var optb = tinymce.EditorManager.get('optionb').getContent({format : 'raw'});
var optc = tinymce.EditorManager.get('optionc').getContent({format : 'raw'});
var optd = tinymce.EditorManager.get('optiond').getContent({format : 'raw'});
var subtopicid = $("#sub-topic").val();
var correct_ans;
var selected = $("input[name='answer']:checked");
if (selected.length > 0) {
    correct_ans = selected.val();
}
// alert(correct_ans);
var exp = tinymce.EditorManager.get('exp').getContent({format : 'raw'});

ques = ques.replace(/&nbsp;/gi,' ');
ques = ques.replace(/amp;/gi,''); 
ques = ques.replace(/&/gi,'%26'); 
ques = encodeURIComponent(ques);

exp = exp.replace(/&nbsp;/gi,' ');
exp = exp.replace(/amp;/gi,''); 
exp = exp.replace(/&/gi,'%26'); 
exp = encodeURIComponent(exp);
 if((opta == "" ) || (optb  == "") || (optc  == "") || (optd  == "") || (correct_ans  == "") || (exp  == "") || (ques  == "") ){
	alert("Please fill all the fields");
	$("#addques").attr("disabled", false);
	return false;
}
else{
	
}
var data = 'ques='+ques+"&opta="+opta+"&sub-topic="+subtopicid+"&optb="+optb+"&optc="+optc+"&optd="+optd+"&answer="+correct_ans+"&exp="+exp;
 $.ajax({
		url: "updateques.php",
		method:"POST",
		data: data,
		success: function(res) {
            alert(res);
			window.location.reload();
		}
	});
	
} 

</script>
</html>