<!-- <html>
    <head>
        <link href="styles.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="option">
            <div id="btn1" class="active">&#8230;</div>
            <div id="btn2">&#9974;</div>
        </div>

        <div id="main">
            <div id="box1">
                <div id="inputs">
                    <input type="text" placeholder="Enter text" id="data0"/>
                    <div id="msg">Hit enter to generate QR code</div>
                </div>

                <div id="outputbox">
                    <img src="QR_Code.png"/>
                </div>
            </div>

            <div id="box2">

            </div>
        </div>
    </body>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script type="text/javascript">
        var qrcode = new QRCode('outputbox');

        function makeCode(){
            var input = document.getElementById('data');

            qrcode.makeCode(input.value);
        }

        $('#data').on('blur',function(){
            makeCode();
        }).on('keydown', function(e){
            if(e.keyCode==13){
                makeCode();
            }
        })
    </script>
</html> -->
<!DOCTYPE html> 
<html> 
  
<head> 
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  
  <style> 
    .qr-code { 
      max-width: 200px; 
      margin: 10px; 
    } 
  </style> 
  
  <title>QR Code Generator</title> 
</head> 
  
<body> 


  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <span class="logo">
        <img class="logo-dim" src="./logo.png" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      </li>
      </ul>
      <span class="navbar-text nav-links">
        <a href="index.php">
          Tools
        </a>
      </span>
      <span class="navbar-text nav-links link-1">
      </span>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="container-fluid"> 
    <div class="text-center"> 
  
      <!-- Get a Placeholder image initially, 
       this will change according to the 
       data entered later -->
      <img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0" class="qr-code img-thumbnail img-responsive" /> 
    </div> 
  
    <div class="form-horizontal"> 
      <div class="form-group"> 
        <label class="control-label col-sm-2"for="content"> Content: </label> 
        <div class="col-sm-10"> 
  
          <!-- Input box to enter the  
              required data -->
          <input type="text" size="60" maxlength="60" class="form-control" id="content" placeholder="Enter content" /> 
        </div> 
      </div> 
      <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
  
          <!-- Button to generate QR Code for 
           the entered data -->
          <button type="button" class="btn btn-default" id="generate"> Generate </button> 
        </div> 
      </div> 
    </div> 
  </div> 
  <script src="https://code.jquery.com/jquery-3.5.1.js"> 
  </script> 
  
  <script> 
    // Function to HTML encode the text 
    // This creates a new hidden element, 
    // inserts the given text into it  
    // and outputs it out as HTML 
    function htmlEncode(value) { 
      return "localhost.com/QRdisplay.php/?curs=" + $('<div/>').text(value) 
        .html(); 
    } 
  
    $(function () { 
  
      // Specify an onclick function 
      // for the generate button 
      $('#generate').click(function () { 
  
        // Generate the link that would be 
        // used to generate the QR Code 
        // with the given data  
        let finalURL = 'https://chart.googleapis.com/chart?cht=qr&chl=' + htmlEncode($('#content').val()) + '&chs=160x160&chld=L|0' 
  
        // Replace the src of the image with 
        // the QR code image 
        $('.qr-code').attr('src', finalURL); 
      }); 
    }); 
  </script> 
</body> 
  
</html> 