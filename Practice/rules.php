!<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regal | Practice</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
  </script>
  
<body class="bg-blue-500">

    <!-- start Quiz button -->

    <!-- Info Box -->
    <div class="info_box activeInfo">
        <div class="info-title"><span>Some Rules</span></div>
        <div class="info-list">
            <div class="info">1. Once you start, duration will be reduced from your account.</div>
            <div class="info">2. Check <span onclick="alert('Validity is 0 Minutes')" class="cursor-pointer text-blue-500">validity</span> if you are not able to practice.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit</button>
            <button onclick="location.href='quespractice'" class="restart">Continue</button>
        </div>
    </div>
   


</body>
</html>