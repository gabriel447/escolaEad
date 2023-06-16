<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site</title>
</head>

<!-- header -->
<?php include('menu.php'); ?>

<body>
    <!-- colocar aqui os conteudos de estudo e logo das marcas -->
    <div class="slideshow-container">
        <div class="slides fade">
            <img src="img/foto1.jpg" style="width:100%">
        </div>
        <div class="slides fade">
            <img src="img/foto2.jpg" style="width:100%">
        </div>
        <div class="slides fade">
            <img src="img/foto3.jpg" style="width:100%">
        </div>
    </div>

    <section class="oportunidade">
        <h3> CADASTRE-SE AGORA E GANHE AS PRIMEIRAS AULAS GRATUITAS</h3>
        <div class="cadastrar">
        <form action="cadastro.php">
            <input type="submit" value="Cadastrar">
        </form>
        </div>
    </section>

    <div class="box-icon">
        <div class="box-content">
            <div class="content">
                <img class="icon" src="img/icon1.png">
            </div>
            <a>suporte personalizado</a>
        </div>
        <div class="box-content">
            <div class="content">
                <img class="icon" src="img/icon2.png">
            </div>
            <a>certificação</a>
        </div>
        <div class="box-content">
            <div class="content">
                <img class="icon" src="img/icon3.png">
            </div>
            <a>preço acessível</a>
        </div>
    </div>

    <div class="box-icon">
        <div class="box-content">
            <div class="content">
                <img class="icon" src="img/icon4.png">
            </div>
            <a>exercícios de fixação</a>
        </div>
        <div class="box-content">
            <div class="content">
                <img class="icon" src="img/icon5.png">
            </div>
            <a>garantia</a>
        </div>
        <div class="box-content">
            <div class="content">
                <img class="icon" src="img/icon6.png">
            </div>
            <a>acesso vitalício </a>
        </div>
    </div>

    <section class="bio">
    <div class="foto">
        <img src="./img/professor.jfif">
    </div>
    <div class="desc">
        <h4>Nome do Professor</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo cupiditate asperiores quam vitae iure, cumque voluptates voluptate odit harum ipsa vel nihil reiciendis quas facere eos dignissimos voluptas architecto itaque.</p>
    </div>
    </section>

    <div class="rodape">

        <div class="box-rodape">
            <div class="sobre">
                <h4>Sobre a Empresa:</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis asperiores laudantium et, culpa sapiente voluptatum ex, voluptate architecto laboriosam sequi temporibus ullam veritatis eaque ut optio atque, expedita repudiandae nam.</p>
            </div>
            <div class="dev">
                <p>Desenvolvido por <a href="https://www.instagram.com/coffee4code/" target="blank">@coffee4code</a></p>
            </div>
        </div>

        <div class="box-rodape">
            <div class="contato">
                <h4>Entre em Contato:</h4>
                <p><img class="icon" src="img/gmail.png"> Email: fullstackgabe@gmail.com</p>
                <br>
                <p><img class="icon" src="img/whatsapp.png"> Whatsapp: +5541997587405</p>
                <br>
                <p><img class="icon" src="img/horario.png"> Segunda a Sexta: das 09:00 as 18:00</p>
                <br>
            </div>
        </div>
    </div>

</body>

<footer>
    <div class="end"><a>Todos os Direitos Reservados.</a></div>
</footer>
    
<link rel="stylesheet" href="./css/estilo.css">

<script src="./js/script.js"></script>

</html>