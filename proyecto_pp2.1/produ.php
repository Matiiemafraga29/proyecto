<!DOCTYPE html>
<html>
  <head>
<!-- Estilos en css -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Leer Barcode </title>



<link rel="stylesheet"  href="css/style.css"/>
<!-- Js Hambur -->
<script src="https://kit.fontawesome.com/9f74c55650.js" crossorigin="anonymous">

</script>

<script defer src="js/index.js"></script></head>
  <header class="header">  
    <nav class="nav"> 
        <a href="index.php" class="logo nav-link ">Speed Data</a>
    <button class="nav-toggle">
        <i class="fa-solid fa-bars"></i>
    </button>
        <ul class="nav-menu ">
    
        <li class="nav-menu-item">
                <a href="produ.html" class="nav-menu-link nav-link ">produccion</a>
            </li>
        <li class="nav-menu-item">
                <a href="stock.html" class="nav-menu-link nav-link ">Stock</a>
            </li>
        <li class="nav-menu-item">
                <a href="imp_etiq.html" class="nav-menu-link nav-link ">Imp. de etiquetas</a>
            </li>
        <li class="nav-menu-item">
                <a href="recetas.html" class="nav-menu-link nav-link ">Recetas</a>
            </li>
            <li class="nav-menu-item">
                <a href="login.php" class="nav-menu-link nav-link ">Cerrar sesion</a>
            </li>
            </li>
        
    
    
    
    
    
    </ul>
    </nav>
    </header>  





  <!-- Body-->
  <meta name="viewport" content="width=device-width">
    <title>Leer código de barras con JavaScript by parzibyte</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body> 
    
    <div id="resultado"></div>

    <div id="camera" ></div>

    <script src="quagga.min.js"> 
    </script>
    
  </style>


    <script>

        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera'),
                      constraints: {
                           
                        height: 380,
                        width: 180,
                        
  
                  
                      }
                          
            },
            decoder: {
                readers: ["code_128_reader"] 
                        
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            console.log(data.codeResult.code);
            document.querySelector('#resultado').innerText = data.codeResult.code;
        });
        
    </script>
    
    
    
  </body>


















    <!-- Footer acomodor logo falta -->
 <footer>
  &copy; 2022
  <img src="img/logo.png" width="100"
    height="60">
</footer>

  </body>
</html>