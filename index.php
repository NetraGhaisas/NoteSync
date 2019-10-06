<html>
<?php session_start();?>
<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=KrEQqVp2"></script>

   <style>
    body{
        font-family: 'Be Vietnam';
    }
    .nav-wrapper{
        background-image: linear-gradient(to bottom right,#23416b,#b04276);
        padding: 0px, 10px;
    }
    .card{
        margin: 20px;
    }
    .btn{
        background-image: linear-gradient(to bottom right,#23416b,#b04276);
    }
 </style>
</head>



<body>

<nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo">NoteSync</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./userdocs.php">Your Docs</a></li>
        <li><a style="float:right" href=<?php if(isset($_SESSION['userid'])) echo "./logout.php"; else echo "./signup.php";?>><?php if(isset($_SESSION['userid'])) echo "Logout"; else echo "Login";?></a></li>
      </ul>
    </div>
</nav>

<div class="row">
    <div class="col s12 m6 l4">
      <div class="card hoverable">
        <div class="card-content white-text">
          <span class="card-title black-text">OCR</span>
          <p class="black-text">Convert your notes,images to text here!</p>
        </div>
        <div class="card-action">
          <a class="btn" href="ocr.php">Convert</a>
        </div>
      </div>
    </div>
   
    <div class="col s12 m6 l4">
      <div class="card hoverable">
        <div class="card-content white-text">
          <span class="card-title black-text">Notes Aloud</span>
          <p class="black-text">Convert your text to sppech!</p>
        </div>
        <div class="card-action">
            <a class="btn" href="tts.php">Convert</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l4">
      <div class="card hoverable">
        <div class="card-content white-text">
          <span class="card-title black-text">Get Wiki Links</span>
          <p class="black-text">Get your previous docs here!</p>
        </div>
        <div class="card-action">
          <a class="btn" href="natlang.php">Go</a>
        </div>
      </div>
    </div>
  </div>
    <!-- <form><input type="text" value="Message" name="message" id="ttsmessage"><br><br>
    <input type="button" value="Audio" onclick="mySpeech()"></form> -->
</body>

</html>
