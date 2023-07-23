<?php 
if(!isset($_SESSION)) {
    session_start();
}

include('../Formulário/Login/protecao.php');

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/index-style.css">
    <link rel="shortcut icon" href="../controle.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jornal</title>
</head>
<body>
    <header id="header">
        <img src="../Imagens/logo.png" alt="Logo">
    </header>

    <nav id="nav">
        <ul id="menu">
            <li> <a href="mibr.html" target="_blank" id="mibr">MIBR</a> </li>
            <li> <a href="furia.html" target="_blank" id="furia">FURIA</a> </li>
            <li> <a href="imperial.html" target="_blank" id="imperial">Imperial</a> </li>
            <li> <a href="sk.html" target="_blank" id="sk">SK</a> </li>
            <li> <a href="../Formulário/Login/logout.php" id="sair">SAIR</a> </li>
        </ul>

        <div class="mudarTema">
            <button id="btn-dark-mode-toggle" title="botaoTema">OK</button>
        </div>
    </nav>

    <div class="container">
        <button class="arrow-left control" aria-label="Previous image">◀</button>
        <button class="arrow-right control" aria-label="Next Image">▶</button>
        <div class="noticias-wrapper">
            <div class="noticias">
                <a href="furia.html" target="_blank"><img src="../Imagens/Furia/fallen-contratacao.jpeg" alt="Contratação do fallen" class="item current-item"/></a>
                <a href="furia.html"></a>
                <img src="../Imagens/Furia/especulacao-fallen.jpg" alt="Especulação da contratação do fallen" class="item">
                <img src="../Imagens/Furia/rio-major.webp" alt="Major Rio de Janeiro" class="item">
                <img src="../Imagens/Furia/saida-saffe.jpg" alt="Saída do saffe" class="item">
                <img src="../Imagens/Imperial/the-last-dance.jpg" alt="The Last Dance" class="item">
                <img src="../Imagens/Imperial/imperial-ultima-vaga-rmr.jpg" alt="Última vaga RMR" class="item">
                <img src="../Imagens/Imperial/saida-fer-imperial.webp" alt="Saída do Fer da Imperial" class="item">
                <img src="../Imagens/MIBR/" alt="">
                <img src="..//Imagens/MIBR/hen1-banco.webp" alt="HEN1 no banco de reservas" class="item">
                <img src="../Imagens/MIBR/Tuurtle-banco.jpg" alt="Tuurtle no banco de reservas" class="item">
                <img src="../Imagens/SK/sk-major-one-cologne-2016.jpg" alt="SK vence Major em Cologne em 2016" class="item">
                <img src="../Imagens/SK/epl-odense-2017-sk.jpg" alt="SK vence ESL Pro League Odense 2017" class="item">
                <img src="../Imagens/SK/blast-trofeu.jpg" alt="Troféu BLAST" class="item">
            </div>
        </div>
    </div>

    <main>
    <article id="grid-noticias-principais">
        <div id="imagem-principal"><a href="furia.html" target="_blank"><img src="../Imagens/Furia/furia-contratacao-fallen.jpg" alt="Fallen é contratado"/></a></div>

        <div id="imagem-secundaria-1"><a href="sk.html" target="_blank"><img src="../Imagens/SK/sk-disband.jpg" alt="Há 6 anos a line-up da SK dava disband"/></a>
        </div>

        <div id="imagem-secundaria-2"><a href="furia.html" target="_blank"><img src="../Imagens/Furia/saffe-drop-de-saida.jpg" alt="Saffe e drop saem da Fúria"></a>
        </div>

        <div class="legenda-noticia-principal">
            <h2>Fallen é contratado pela Furia Sua estreia será no dia 26 de julho pelo play-in da IEM Cologne 2023  </h2>
        </div>

        <div class="legenda-noticia-secundaria-1">
            <h2>Há 5 anos SK Gaming anunciava disband e MIBR comprava line-up</h2>
        </div>

        <div class="legenda-noticia-secundaria-2">
            <h2>Saffe e Drop vão para o banco da FURIA!</h2>
        </div>

        <div id="borda-linha"></div>
    </article>

    <article id="grid-mibr">
        <h2 id="secao">MIBR</h2>

        <div class="mibr-noticia-principal">
           <a href="MIBR/mibr-anuncio.html"><img src="../Imagens/MIBR/mibr-drop-saffe.jpg" alt="Mibr Anuncia Drop e Saffe"/></a>
        </div>

        <div class="mibr-noticia-secundaria-1">
            <a href="MIBR/mibr-tuurtle.html"><img src="../Imagens/MIBR/Tuurtle-banco.jpg" alt="Tuurtle vai para o banco do MIBR"></a>
        </div>

        <div class="mibr-noticia-secundaria-2">
            <a href="MIBR/mibr-hen1.html"><img src="../Imagens/MIBR/hen1-banco.webp" alt="HEN1 vai para o banco do MIBR"></a>
        </div>

        <div class="legenda-mibr-principal">
            <h3>MIBR oficializa contratação de Saffe e Drop! A dupla estreia no dia 16 de agosto</h3>
        </div>

        <div class="legenda-mibr-secundaria-1">
            <h3>Tuurtle é colocado no banco do MIBR</h3>
        </div>

        <div class="legenda-mibr-secundaria-2">
            <h3>HEN1 é pego de surpresa e vai ao banco do MIBR</h3>
        </div>
    </article>

    <article id="grid-furia">
        <h2 id="secao-furia">FURIA</h2>

        <div class="furia-noticia-principal">
            <a href="FURIA/furia-perde.html" target="_blank"><img src="../Imagens/Furia/furia-perde.webp" alt="Furia perde para Heroic e está fora do Major Rio"></a>
        </div>

        <div class="furia-noticia-secundaria-1">
            <a href="FURIA/furia-major.html" target="_blank"><img src="../Imagens/Furia/rio-major.webp" alt="Furia ganha da NAVI e avança as semifinais do Major Rio"></a>
        </div>

        <div class="furia-noticia-secundaria-2">
            <a href="FURIA/furia-parceria.html" target="_blank"><img src="../Imagens/Furia/furia-parceria-esl.webp" alt="Furia assina contrato e vira a nova parceira da ESL"></a>
        </div>

        <div class="legenda-furia-principal">
            <h3>Em um jogo acirrado a FURIA perde por 2x1 e está eliminada do IEM Rio Major 2022</h3>
        </div>

        <div class="legenda-furia-secundaria-1">
            <h3>FURIA ganha da NAVI de virada em um jogo histórico no Rio de Janeiro</h3>
        </div>

        <div class="legenda-furia-secundaria-2">
            <h3>FURIA assina o Louvre Agreement e se torna a nova parceira da ESL</h3>
        </div>
    </article>

    <article id="grid-imperial">
        <h2 id="secao-imperial">Imperial</h2>

        <div class="imp-noticia-principal">
        <a href="Imperial/contratacao-imp.html" target="_blank"><img src="../Imagens/Imperial/contratacao-hf.webp" alt="Imperial contrata HEN1 e Felps"></a>
        </div>

        <div class="imp-noticia-secundaria-1">
            <a href="Imperial/ultima-vaga.html" target="_blank"><img src="../Imagens/Imperial/imperial-ultima-vaga-rmr.jpg" alt="Imperial conquista a última vaga do RMR"></a>
        </div>

        <div class="imp-noticia-secundaria-2">
            <a href="Imperial/last-dance.html" target="_blank"><img src="../Imagens/Imperial/the-last-dance.jpg" alt="The Last Dance é anunciado"></a>
        </div>

        <div class="legenda-imp-principal">
            <h3>Imperial anuncia a contratação de HEN1 e Felps</h3>
        </div>

        <div class="legenda-imp-secundario-1">
            <h3>Imperial conquista a última vaga do RMR e irá ao Major</h3>
        </div>

        <div class="legenda-imp-secundario-2">
            <h3>Imperial anuncia o The Last Dance</h3>
        </div>
    </article>

    <article id="grid-sk">

    <h2 id="secao-sk">SK Gaming</h2>

    <div class="sk-noticia-principal">
        <a href="SK/cologne.html" target="_blank"><img src="../Imagens/SK/sk-major-one-cologne-2016.jpg" alt="Brasileiros conquistam segundo Major seguido"></a>
    </div>

    <div class="sk-noticia-secundaria-1">
        <a href="SK/epl.html" target="_blank"><img src="../Imagens/SK/epl-odense-2017-sk.jpg" alt="SK ganha ESL Pro League Odense 2017"></a>
    </div>

    <div class="sk-noticia-secundaria-2">
        <a href="SK/epicenter.html" target="_blank"><img src="../Imagens/SK/epicenter-2016.jpg" alt="SK conquista EPICENTER 2016"></a>
    </div>

    <div class="legenda-sk-principal">
        <h3>Brasileiros conquistam o mundo pela segunda vez seguida e se tornam o melhor time de CSGO</h3>
    </div>

    <div class="legenda-sk-secundaria-1">
        <h3>SK Gaming conquista a ESL Pro League Odense 2017</h3>
    </div>

    <div class="legenda-sk-secundaria-2">
        <h3>Em uma partida emocionante SK Gaming conquista EPICENTER 2017 por 3x2</h3>
    </div>
    </article>

    <article id="tabela-hltv">
        <h2>Ranking HLTV</h2>

        <div class="container-hltv">
            <img src="../Imagens/MIBR/logo-mibr.png" alt="Logo do MIBR">
            <img src="../Imagens/Furia/logo-furia.png" alt="Logo da FURIA">
            <img src="../Imagens/" alt="">
        </div>
    </article>

    <footer>
        <div class="footerContainer">
        <div class="redes-sociais">
            <a href="https://github.com/Joaovictor23t4" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://twitter.com/ParthTK1" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/joao_tk_victor13/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/jo%C3%A3o-victor-portela-rocha-a59886279/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>

        <div class="navFooter">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Melhores Momentos Brasil</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </div>
    </div>

    <div class="copyright">
            <p>Copyright &copy; 2023 <span class="designed"> Feito por João Victor Portela Rocha</span></p>
        </div>
    </footer>
    </main>
    <script src="../JavaScript/index.js"></script>
</body>
</html>