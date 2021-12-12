<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Hotel Alves Logotipo (1)_0.ico" type="image/x-icon">
    <title>Hotel Alves</title>
    <link rel="stylesheet" href="stylesindex.css">
    <script src="scripts.js"></script>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <!-- Barra de navegação -->
        <nav class="container">      
            <section class="row">
                <div class="col-1">
                    <a href="index.html"><img class="logo" src="imagens/Hotel Alves Logotipo (1).png" alt="logomarca"></a>
                </div>
                
                <div class="col-2">
                    <ul>
                        <li>
                            <a href="index.php">Hotel Alves</a>
                        </li>
                        <li>
                            <a href="rooms.php">Quartos</a>
                        </li>
                        <li>
                            <a href="about.php">Sobre nós
                            </a>
                        </li>
                    </ul>
                </div>
            </section> 
        </nav>
    </header>
    <!-- Conteúdo principal -->
    <main>
        <!-- Check-in, Check-out rapído -->
        <section class="check-in"> 
            <div class="reserva">
                <div class="data-initial">
                    <form action="#" >
                        <button class="button-check">
                           <span>Check-in </span> 
                            <input type="date">    
                        </button>
                    </form>   
                </div>

                <div class="data-initial">
                    <form action="#">
                        <button class="button-check">
                            <span>Check-out</span>
                            <input type="date">
                        </button>
                    </form>
                </div>
        
                <div class="data-initial">
                    <select class="select" name="qtdeHospedes">
                        <option value="hospedes">Hospedes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                
                <div class="data-initial">
                    <select class="select" name="qtdeDias">
                        <option value="dias">Quartos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="data-initial">
                    <button id="reserve-now">Reservar agora</button>
                </div>
            </div>
          
        </section>
        <!-- Image slider start -->  
        <section class="slider">
            <section class="slides">
                <!--  Radio buttons start -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- Radio buttons end -->
                <!-- Slide images start -->
                <div class="slide first">
                    <img class="image" src="imagens/quarto-1.jpg" alt="quartoSimples">
                </div>
                <div class="slide">
                    <img class="image" src="imagens/quarto-2.jpg" alt="quartoPequeno">
                </div>
                <div class="slide">
                    <img class="image" src="imagens/quarto-3.JPG" alt="quartoMédio">
                </div>
                <div class="slide">
                    <img class="image" src="imagens/quarto-4.jpg" alt="quartoGrande">
                </div>
                <!-- Slide images end -->
                <!-- Automatic navigation start -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                <!-- Automatic navigation end -->
                </div>
            </section>
        </section>
    </main>
    
    <footer>
        <section class="formulario">
            <form method="post" action="novo_email.php">
                <h1>Deseja receber promoções em seu email?</h1> 
                    <div id="formulario-nome">
                        <input type="text" name="name" placeholder="Seu nome...">    
                    </div>
                    <div id="formulario-email">
                        <input type="text" name="email" placeholder="Seu email...">       
                        <input id="botao-enviar" type="submit" name="acao" value="Enviar"> 
                    </div>
            </form>
        </section>
    </footer>
</body>
</html>