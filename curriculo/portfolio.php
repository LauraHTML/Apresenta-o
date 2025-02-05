<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stylePortfolio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <script src="https://kit.fontawesome.com/d9081947d8.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <ul>
            <li><a href="portfolio.html"><p>Portfólio</p></a></li>
            <h4>Seeker</h4>
            <li><a href="apresentacao.html"><p>Apresentação</p></a></li>
        </ul>
    </nav>

<?php
require_once "config.php";

echo '<div class="container">';
foreach ($projetos as $projeto) {
    echo'<div class="row">
            <div class="card">
            <div class="card-body">
            <h4 class="card-title">'.$projeto['nome'].'</h4>
            <p class="card-text">'.$projeto['descricao'].'</p>
            <div class="categoria">'.$projeto['categoria'].'</div>
            </div>
            <img src="'.$projeto['imagem'].'">
            <a href="https://drive.google.com/drive/folders/1jX1stZijgQvijKiXirtMXOACcvJpp3yJ?usp=sharing"><button>Ir para site<i class="fa-solid fa-arrow-right"></i></button></a>
        </div>
        </div>'; 
}
echo '</div>';

?>

    <footer>
        <ul>
        <i class="bi bi-3-circle"></i>
            <p><a class="link-f">Portfólio</a></p>
            <p><a class="link-f">Apresentação</a></p>
            <p>Gmail/</p>
            <p>Telefone</p>
        </ul>
    </footer>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>