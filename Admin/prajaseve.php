

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/ksu5xkz6l0uey7t72cqhqumj5bvxty1gipxsit63vmmcan8b/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link href="../css/regal.css" rel="stylesheet">
    <title>Prajaseve</title>
</head>
<style>
    @media (max-width: 768px) {
        .container {
            width: 98% !important;
        }
    }
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.mbd
{
    margin-bottom:3px !important;
}
.br {
            display: block;
            margin-bottom: 0.8em;
        }
        .input
        {
            margin-top: 10px;
        }
</style>

<body>
    <?php include "prajaseveheader.php"; 
    

    
    
    ?>
    <script>
        // function getsubtopic(topicname) {

        //     $('#sub-topic').html('');


        //     $.ajax({
        //         url: "updatetheory.php",
        //         method: "POST",
        //         data: { topic: topicname },
        //         success: function (data) {
        //             $('#sub-topic').html(data);
        //         }
        //     })



        // }



        tinymce.init({

            selector: 'textarea#theory',
            plugins: "placeholder",
            height: 220,
            content_style: ".mce-content-body {font-size:16px;font-family:Arial,sans-serif;}",
            menubar: false,
            statusbar: false,
            toolbar: false
        });

    </script>
    <div class="container mt-1" style="padding: 10px 5px 10px 5px;width:60%;margin:auto;">
        <h2 class="title is-4 mt-1">Add Dealers </h2>
        <form action="updatedealers.php" method="post">
        <div class="box">
            <div class="control">
                <label for="company" class="title is-6 mbd" >Company</label>
                <input class="input is-hovered" name="company" type="text" placeholder="Company" required>
            </div>
            <span class="br"></span>
            <div class="control">
                <label for="name" class="title is-6 mbd">Name</label>
                <input class="input is-hovered" name="name" type="text" placeholder="Name" required>
            </div>
            <span class="br"></span>
            <div class="control">
                <label for="address" class="title is-6 mbd">Address</label>
                <textarea class="textarea is-hovered" name="address" placeholder="Address" required></textarea>
              </div>
            <span class="br"></span>
            <div class="control">
                <label for="hobli" class="title is-6 mbd">Hobli</label>
                <input class="input is-hovered" name="hobli" type="text" placeholder="Hobli" required>
            </div>
            <span class="br"></span>
            <div class="control">
                <label for="taluk" class="title is-6 mbd">Taluk</label>
                <input class="input is-hovered" name="taluk" type="text" placeholder="Taluk" required>
            </div>
            <span class="br"></span>
            <div class="control">
                <label for="pincode" class="title is-6 mbd">Pincode</label>
                <input class="input is-hovered" name="pincode" type="text" placeholder="Pincode" required>
            </div>
            <span class="br"></span>
            <div class="control">
                <label for="phone" class="title is-6 mbd">Phone</label>
                <input class="input is-hovered" name="phone" type="number" maxlength="10"  placeholder="Phone" required>
            </div>

        </div>
        <div class="quesrow">
            <div>
                <button onclick="window.location.reload();" class="button is-normal is-danger">
                    <span class="material-icons">
                        cancel
                    </span>Cancel
                </button>&emsp;


            </div>
            <div>
                <button type="submit" name="adddealer" class="button is-normal is-success">
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