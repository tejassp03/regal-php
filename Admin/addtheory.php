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
    <?php include "adminheader.php"; 
    

    
    
    ?>
<script>
 function getsubtopic(topicname)
 {
     
    $('#sub-topic').html('');

     
    $.ajax({
    url:"updatetheory.php",
    method:"POST",
    data:{topic: topicname},
    success: function(data){
     $('#sub-topic').html(data);
    }
   })



 }
  

 
 tinymce.init({

selector:'textarea#theory',
plugins: "placeholder",
height:220,
content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
  menubar: false,
    statusbar: false,
    toolbar: false
});

</script>    
    <div class="container mt-4" style="padding: 20px;width:60%;margin:auto;">
    <h2 class="title is-4 mt-2">Add Theory</h2>
       
        <div class="box">
            <div class="select mb-3">
                <form action="updatetheory.php" method="post" >
                <select name="topic" id="topic" onchange="getsubtopic(this.value)">
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
                <select id="sub-topic" name="sub-topic">
                <option value="" disabled selected hidden>Choose Sub-Topic</option>
                    
                </select>
            </div>
              
            <textarea name="theory" id="theory" class="textarea is-info" placeholder="Enter Theory" rows="10"></textarea>
            <br>



            
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
                <button type="submit" name="addtheory" class="button is-normal is-success" >
                    <span class="material-icons">
                        save
                    </span>Save
                </button>
               
                
            </div>
            </form>
            
        </div>


    </div>
</body>
<script src="../javascript/index.js"></script>
</html>