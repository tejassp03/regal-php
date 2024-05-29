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
</script>

<body class="bg-blue-500">

  <!-- start Quiz button -->

  <!-- Info Box -->
  <div class="info_box activeInfo">
    <div class="info-title"><span>Some Rules</span></div>
    <div class="info-list">
      <div class="info">1. The test duration is 60 minutes (1 hour).</div>
      <div class="info">2. The test comprises of 5 sections, each containing 5 questions: Reasoning, English, General knowledge, Aptitude, and Logical.</div>
      <div class="info">3. There is no negative marking for incorrect answers.</div>
      <div class="info">4. Once the allotted time elapses, you will be unable to select or modify any responses.</div>
      <div class="info">5. You can flag or mark a question for later review if desired.</div>
      <div class="info">6. You may submit the test when you have completed all questions.</div>

    </div>
    <div class="buttons">
      <button class="quit">Exit</button>
      <button onclick="location.href='test'" class="restart">Continue</button>
    </div>
  </div>



</body>

</html>