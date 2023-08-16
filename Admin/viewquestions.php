<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="../css/config.css" rel="stylesheet">
    <title>Regal Test</title>
</head>
<style>

#questiondet > tr> th
{
    
}


</style>
<body>
    <script>
        function getsubtopic(topicname) {

            $('#sub-topic').html('');


            $.ajax({
                url: "updateques.php",
                method: "POST",
                data: { topic: topicname },
                success: function (data) {
                    $('#sub-topic').html(data);
                }
            })



        }

        function getsubtopicid() {
            var subtopicid = document.getElementById('sub-topic').value;

            $.ajax({
                url: "updateques.php",
                method: "POST",
                data: { getques: subtopicid },
                success: function (data) {
                    $('#questiondet').html(data);
                }
            })


        }


    </script>
    <?php include "adminheader.php"; 
    include 'config.php';


    
    ?>

    <div class="containermenu" style="max-width:fit-content;">
        <h2 class="title is-20 m-5 ">Questions List</h2>

        <div class="select mb-3">
            <select name="topic" id="topic" onchange="getsubtopic(this.value)">
                <option value="" disabled selected hidden>Choose Topic</option>
                <?php
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
            <select id="sub-topic" name="sub-topic" onchange="">
                <option value="">Choose Sub-Topic</option>

            </select>
        </div>
        <button class="button is-success" onclick="getsubtopicid()">Get Questions</button>
        <div class="box p-2">
            <div class="tablecontainer" style="overflow-x: auto;">
                <table class="table">
                    <thead>
                        <tr>

                            <th>Sl.No</th>
                            <th style="width: 20%;">Question</th>
                            <th>Option A</th>
                            <th>Option B</th>
                            <th>Option C</th>
                            <th>Option D</th>
                            <th>Correct Answer</th>
                            <th style="width: 20%;">Explanation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="questiondet">
                       
                        
                
                    </tbody>
                </table>

                <?php  
                    if(isset($_GET['subtopicid']))
                    {
                        $subid=$_GET['subtopicid'];

                    $upquery="";
                    }
                
                ?>
                <div class="modal" id="editques">
                    <div class="modal-background"></div>
                    <div class="modal-content">
                        <div class="box">
                            

                            <textarea class="textarea is-info" placeholder="Enter Question"></textarea>
                            <br>
                            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " type="text" style="width: 95%;"
                                    placeholder="Option A"></div>
                            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " type="text" style="width: 95%;"
                                    placeholder="Option B"></div>
                            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " type="text" style="width: 95%;"
                                    placeholder="Option C"></div>
                            <div style="display:flex; align-items: center;" class="mb-4"><input type="radio" class="m-2"
                                    name="answer"><input class="input is-info " type="text" style="width: 95%;"
                                    placeholder="Option D"></div>
                            <textarea class="textarea is-info" placeholder="Enter Explanation"></textarea>



                        </div>
                        <div class="quesrow">


                            <div>
                                <button class="button is-normal is-success">
                                    <span class="material-icons">
                                        save
                                    </span>Save
                                </button>


                            </div>
                            
                        </div>
                    </div>
                    <button class="modal-close is-large" aria-label="close" onclick="closemodal()"></button>
                </div>
            </div>
        </div>




    </div>


</body>
<script src="../javascript/index.js"></script>
<script>
    function editmodal(subid) {
        var edit = document.getElementById("editques");
        edit.classList.add("is-active");
       
        // location.href = "viewquestions.php?subtopicid=" + subid;


    
    }

    function closemodal() {
        var edit = document.getElementById('editques');
        edit.classList.remove('is-active');
    }
</script>

</html>