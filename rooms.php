
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="shortcut icon" href="Hotel Alves Logotipo (1)_0.ico" type="image/x-icon">
    <link rel="stylesheet" href="stylesrooms.css">
</head>
<header>
    <!-- Barra de navegação -->
    <nav class="navigation">      
        <section class="row">
            <div class="col-1">
                <a href="index.php"><img class="logo" src="imagens/Hotel Alves Logotipo (1).png" alt="logomarca"></a>
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
<body>
    <section class="content-about">
        <div class="information-about">
            <h1>Hotel Alves</h1>
            <h3>O melhor hotel de Aracaju, para você e sua familia!</h3>
        </div>
    <section>
    <section class="container">
        <div class="card">
            <div class="imgBx">
                <img src="imagens/quarto-1.jpg" alt="">
            </div>
            <div class="content">
                <h2>Especificações</h2>
                <p>Preço Diária = R$180,00</p>
                <p>Café da manhã já R$60,00</p>
                <p>Almoço incluso = R$60,00</p>
                <p>Massagem relaxante = R$ 100,00</p>
            </div>
            <div class="content2">
                <h2>Quarto Básico</h2>
                <?php include "conexao.php";

                    $sql = "SELECT descricao_quarto FROM quarto;";

                    $resultado = $conector->query($sql);
                    
                    $num_rows = $resultado->num_rows;
                    if($num_rows > 0){
                        $resultado->data_seek(0);
                        $row = $resultado->fetch_assoc(); 
                        echo $row['descricao_quarto'];
                    }
                    
?>
                <p>Role para ver mais</p>
                <p><img class="img-seta" src="imagens/seta.png" alt=""></p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="imagens/quarto-2.jpg" alt="">
            </div>
            <div class="content">
                <h2>Especificações</h2>
                <p>Preço Diária = R$220,00</p>
                <p>Café da manhã já incluso!</p>
                <p>Almoço incluso = R$60,00</p>
                <p>Massagem relaxante = R$ 100,00</p>
            </div>
            <div class="content2">
                <h2>Quarto Intermediário</h2>
                <p>Quarto com uma cama de casal, uma cama de solteiro, telefone, armário de porta dupla espaçoso, mesa de centro com dois sófas e uma televisão</p>
                <p>Role para ver mais</p>
                <p><img class="img-seta" src="imagens/seta.png" alt=""></p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="imagens/quarto-3.JPG" alt="">
            </div>
            <div class="content">
                <h2>Especificações</h2>
                <p>Preço Diária = R$ 300,00</p>
                <p>Café da manhã já incluso!</p>
                <p>Almoço já incluso!</p>
                <p>Massagem relaxante = R$ 100,00</p>
            </div>
            <div class="content2">
                <h2>Quarto Avançado</h2>
                <p>Quarto com uma cama de casal, uma cama de solteiro, telefone, armário de porta dupla espaçoso, suíte, tv e varanda</p>
                <p>Role para ver mais</p>
                <p><img class="img-seta" src="imagens/seta.png" alt=""></p>
            </div>
        </div>
        <div class="card">
            <div class="imgBx">
                <img src="imagens/quarto-4.JPG" alt="">
            </div>
            <div class="content">
                <h2>Especificações</h2>
                <p>Preço por diária = R$370,00</p>
                <p>Café da manhã já incluso!</p>
                <p>Almoço já incluso!</p>
                <p>Massagem relaxante incluso!</p>
            </div>
            <div class="content2">
                <h2>Quarto Luxuoso</h2>
                <p>Quarto com duas camas de casal, telefone, armário de porta dupla espaçoso, mesa de centro com dois sofás, 1 suíte, 1 frigobar e varanda com vista ao mar</p>
                <p>Role para ver mais</p>
                <p><img class="img-seta" src="imagens/seta.png" alt=""></p>
            </div>
        </div>
    </section>
</body>
</html>