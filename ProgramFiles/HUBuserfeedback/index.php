<!-- program feedback using php -->
<?php
  // echo("Hello world");
?>

<!-- html -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peakk Feedback</title>
  <link rel="stylesheet" href="Feedback.css">
  <link rel="stylesheet" href="../../DefaultValue/Value.css">
  <link rel="stylesheet" href="../../ProgramFiles/PKstoreTemplate/Font.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>

  <nav>
    <div class="Navbar">
      <div class="NavbarText">
        <img src="./Image/PeakkLogo.png" alt="">
        <h1>Feedback</h1>
      </div>
      <div class="NavbarLinks">
        <div class="NavbarMainLinks">
          <li><a href="#"><ion-icon name="search-outline"></ion-icon></a></li>
          <li><a href="#" id="Lang"><ion-icon name="language-outline"></ion-icon></a></li>
        </div>
        <!-- Navbar desktop links  -->
        <div id="IncludeNav">
          <li><a href="https://www.facebook.com/profile.php?id=61558910602827" target="_blank">Contact creator</a></li>
        </div>
      </div>
    </div>
  </nav>

  <form action="" class="FeedbackForm">
    <div class="FeedbackContent">
      <h1>This is Peakk Feedback</h1>
      <div class="Form">
        <input type="text" name="Name" id="Name" placeholder="What is your name?" required>
        <input type="text" name="Feedback" id="Feedback" placeholder="Your feedback?" required>
        <input type="text" name="Problem" id="Problem"
          placeholder="How long is problem?">
        <input type="submit" value="Submit this feedback" id="SubmitForm">
      </div>
    </div>
  </form>

</body>

</html>