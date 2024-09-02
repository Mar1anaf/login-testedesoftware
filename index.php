<?php
session_start();
include './conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>TesteDeSoftware</title>
</head>
<body>
    <div class="header">
        <div class="links">
        <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<div class="btn-a">';
                    echo '<a class="btn-sair" href="./back-end/logout.php"><ion-icon name="exit-outline"></ion-icon><span>Sair</span></a>';
                    echo '</div>';
                } else {
                    echo '<a href="cadastro.php">Cadastre-se</a>';
                    echo '<a href="login.php">Login</a>';
                }
            ?>
        </div>
    </div>

    <div class="page">
        <div class="perfis">
            <div class="perfil">
                <div class="foto">
                    <img src="./img/mariana.jpeg">
                </div>
                <div class="descricao">
                    <h3>Mariana</h3>
                    <p>Me chamo Mariana, tenho 17 anos e sou formanda no Técnico de Desenvolvimento de Sistemas SENAI. Pretendo cursar bacharelado em Nutrição e especialização em Nutrição Clínica, além disso pretendo também realizar pós-graduação em MDA de Gastronomia (posteriormente um curso técnico em gastronomia apenas, para desenvolvimento próprio), visando adquirir meu próprio consultório atrelado a um restaurante fitness.</p>
                </div>
                <div class="links-perfil">
                    <div class="linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                        <a href="https://www.linkedin.com/in/mariana-ferreira-morgado/">Linkedin</a>
                    </div>
                    <div class="github">
                    <ion-icon name="logo-github"></ion-icon>
                        <a href="https://github.com/Mar1anaf">Github</a>
                    </div>
                </div>
            </div>
            <div class="perfil">
            <div class="foto">
            <img src="./img/kaue.png">
            </div>
                <div class="descricao">
                    <h3>Kauê de Souza</h3>
                    <p>Me chamo Kauê, tenho 17 anos e sou concluinte no Técnico em Desenvolvimento de Sistemas SENAI. Com o intuito de me especializar como desenvolvedor, planejo cursar Desenvolvimento de Sistemas, além disso planejo realizar um curso de tatuagem para desenvolvimento pessoal, e também tatuar em Studio como hobby.</p>
                </div>
                <div class="links-perfil">
                    <div class="linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                        <a href="https://www.linkedin.com/in/kau%C3%AA-de-souza-83380826b/">Linkedin</a>
                    </div>
                    <div class="github">
                    <ion-icon name="logo-github"></ion-icon>
                        <a href="https://github.com/K1auez">Github</a>
                    </div>
                </div>
            </div>
            <div class="perfil">
            <div class="foto">
            <img src="./img/kathlleen.jpeg">
            </div>
                <div class="descricao">
                    <h3>Kathlleen</h3>
                    <p>Me chamo Kathleen, tenho 18 anos e me encontro aos finais do curso técnico em Desenvolvimento de Sistemas SENAI. Focando em me tornar juíza, planejo cursar direito e posteriormente realizar o concurso público, ainda assim compreendo a incumbência como advogada.</p>
                </div>
                <div class="links-perfil">
                    <div class="linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                        <a href="">Linkedin</a>
                    </div>
                    <div class="github">
                    <ion-icon name="logo-github"></ion-icon>
                        <a href="https://github.com/Kath1een-C0rrea">Github</a>
                    </div>
                </div>
            </div>
            <div class="perfil">
            <div class="foto">
            <img src="./img/joaopaulo.jpeg">
            </div>
                <div class="descricao">
                    <h3>João Paulo</h3>
                    <p>Me chamo João Paulo, tenho 17 anos e estou finalizando o curso técnico em Desenvolvimento de Sistemas SENAI. Com o objetivo de me tornar um tatuador profissional, desejo realizar um curso de tatuagem, para me especializar em todas as áreas da tatuagem e obter meu próprio Studio.</p>
                </div>
                <div class="links-perfil">
                    <div class="linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                        <a href="">Linkedin</a>
                    </div>
                    <div class="github">
                    <ion-icon name="logo-github"></ion-icon>
                        <a href="https://github.com/Joao-Paulo-Dev2?tab=overview&from=2024-09-01&to=2024-09-02">Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>