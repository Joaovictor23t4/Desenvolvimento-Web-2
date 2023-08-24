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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilo/index-style-2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Index 2</title>
</head>
<body>
    <header id="header">
        <img src="../Imagens/logo-header.png" alt="Logo">

        <span id="topico"><a href="mibr.html">HOME</a></span>

        <nav id="nav">
            <ul id="menu">
                <li class="nav-item"><a href="MIBR/mibr-anuncio.html" class="nav-link">MIBR</a></li>
                <li class="nav-item"><a href="FURIA/furia-parceria.html" id="hen1" class="nav-link">FURIA</a></li>
                <li class="nav-item"><a href="Imperial/ultima-vaga.html" class="nav-link">Imperial</a></li>
                <li class="nav-item"><a href="SK/cologne.html" class="nav-link">SK</a></li>
                <li class="nav-item"><a href="../Formulário/Login/logout.php" class="nav-link">SAIR</a></li>
            </ul>
            <div class="hamburguer">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <div class="mudarTema">
        <button id="btn-dark-mode-toggle" title="botaoTema">OK</button>
    </div>

    <div class="container">
        <button class="arrow-left control" aria-label="Previous image">◀</button>
        <button class="arrow-right control" aria-label="Next Image">▶</button>
        <div class="noticias-wrapper carrousel">
            <div class="noticias">
                <p><a href="#"><img src="../Imagens/Furia/fallen-contratacao.jpeg" alt="Contratação do fallen" class="item current-item"/></a>FURIA contrata FalleN</p> 
                <p><a href="#"><img src="../Imagens/Furia/especulacao-fallen.jpg" alt="Especulação da contratação do fallen" class="item"/></a>Há especulações sobre a contratação de FalleN</p>
                <p><a href="#"><img src="../Imagens/Furia/rio-major.webp" alt="Major Rio de Janeiro" class="item"/></a>FURIA ganha da NAVI no Rio de Janeiro</p>
                <p><a href="#"><img src="../Imagens/Furia/saida-saffe.jpg" alt="Saída do saffe" class="item"/></a>Saida de saffe é confirmada pela FURIA</p>
                <p><a href="#"><img src="../Imagens/Imperial/the-last-dance.jpg" alt="The Last Dance" class="item"/></a>Imperial anuncia The Last Dance</p>
                <p><a href="#"><img src="../Imagens/Imperial/imperial-ultima-vaga-rmr.jpg" alt="Última vaga RMR" class="item"/></a>Imperial conquista última vaga para o Major</p>
                <p><a href="#"><img src="../Imagens/Imperial/saida-fer-imperial.webp" alt="Saída do Fer da Imperial" class="item"/></a>Fer anuncia saida da Imperial</p>
                <p><a href="#"><img src="..//Imagens/MIBR/hen1-banco.webp" alt="HEN1 no banco de reservas" class="item"/></a>MIBR anuncia saida de HEN1</p>
                <p><a href="#"><img src="../Imagens/MIBR/Tuurtle-banco.jpg" alt="Tuurtle no banco de reservas" class="item"/></a>Tuurtle se despede do MIBR</p>
                <p><a href="#"><img src="../Imagens/SK/sk-major-one-cologne-2016.jpg" alt="SK vence Major em Cologne em 2016" class="item"/></a>Brasil conquista o mundo mais uma vez</p>
                <p><a href="#"><img src="../Imagens/SK/epl-odense-2017-sk.jpg" alt="SK vence ESL Pro League Odense 2017" class="item"/></a>SK é campeã da EPL Odense 2017</p>
                <p><a href="#"><img src="../Imagens/SK/blast-trofeu.jpg" alt="Troféu BLAST" class="item"></a>Brasileiros conquistam a Blast e calam a Dinamarca</p>
            </div>
        </div>
    </div>

    <main>
        <section class="noticia-grid">
            <article id="noticia-article">
                    <div class="container-1920">
                        <div class="imagem-grid-1920">
                            <a href="MIBR/mibr-anuncio.html" target="_blank"><img src="../Imagens/MIBR/mibr-drop-saffe.jpg" alt="Contratação do FalleN"></a>
                        </div>
                        <div class="conteudo-grid-1920">
                            <div class="topico-1920">
                                <p><a href="MIBR/mibr-anuncio.html">MIBR</a></p>
                            </div>
                            <div class="titulo-1920">
                                <h1><a href="MIBR/mibr-anuncio.html" target="_blank" class="links-noticias">MIBR anuncia contratação de Drop e Saffe. Dupla veio para substituir HEN1 e Tuurtle</a></h1>
                                <ul class="lista-materia">
                                    <li><a href="MIBR/mibr-anuncio.html" target="_blank" class="links-subtitulos-noticias">– Dupla estreia em agosto pela Gamers8</a></li>
                                    <li><a href="MIBR/mibr-anuncio.html" target="_blank" class="links-subtitulos-noticias">– Os novos jogadores se juntam a exit, insani e brnz4n</a></li>
                                </ul>
                            </div>
                            <div class="publicacao-1920">
                                <p>
                                    <span class="time">
                                        <time itemprop="modificacao" datetime="2023-08-19T10:11-03:00">Postado
                                            <span class="update-time" itemprop="modificacao" datetime="2023-08-19T10:11-03:00">
                                            </span>
                                        </time>
                                    </span>

                                    <span>Em MIBR</span>
                                </p>
                            </div>
                        </div>
                    </div>

                <div class="topico-section" id="border-top-section">
                    <p><a href="MIBR/mibr-anuncio.html" target="_blank">MIBR</a></p>
                </div>
                <div class="titulo-section">
                    <h2 class="h2-section">
                        <a href="MIBR/mibr-anuncio.html" target="_blank">MIBR anuncia contratação de Drop e Saffe. Dupla veio para substituir HEN1 e Tuurtle</a>
                    </h2>
                    <h3 class="h3-class-section">
                       <a href="MIBR/mibr-anuncio.html" target="_blank">Dupla estreia em agosto pela Gamers8</a>
                    </h3>
                    <h3 class="h3-class-section">
                        <a href="MIBR/mibr-anuncio.html" target="_blank">Os novos jogadores se juntam a exit, insani e brnz4n</a>
                    </h3>
                </div>
                <div class="imagem-section">
                    <img src="../Imagens/MIBR/mibr-drop-saffe.jpg" alt="Contratação do FalleN">
                </div>
                <div class="publicacao-section">
                    <p>
                        <span class="time">
                            <time itemprop="modificacao" datetime="2023-08-19T10:11-03:00">Postado 
                                <span class="update-time" itemprop="modificacao" datetime="2023-08-19T10:11-03:00">
                                </span>
                            </time>
                        </span>

                        <span>Em MIBR</span>
                    </p>
                </div>
            </article>
        </section>

        <div class="aside-anuncio">
            <aside class="anuncio">
            </aside>
        </div>

        <section class="noticia-grid">
            <article id="noticia-article">
                    <div class="container-1920">
                        <div class="imagem-grid-1920">
                            <a href="FURIA/furia-parceria.html" target="_blank"><img src="../Imagens/Furia/furia-parceria-esl.webp" alt="Furia faz parceria com ESL"/></a>
                        </div>
                        <div class="conteudo-grid-1920">
                            <div class="topico-1920" id="topico-furia">
                                <p><a href="FURIA/furia-parceria.html" target="_blank">FURIA</a></p>
                            </div>
                            <div class="titulo-1920">
                                <h1><a href="FURIA/furia-parceria.html" target="_blank" class="links-noticias">FURIA assina Louvre Agreement e se torna a nova parceira da ESL</a></h1>
                                <ul class="lista-materia">
                                    <li><a href="FURIA/furia-parceria.html" target="_blank" class="links-subtitulos-noticias">– Equipe terá vaga garantida na ESL Pro League</a></li>
                                    <li><a href="FURIA/furia-parceria.html" target="_blank" class="links-subtitulos-noticias">– Além dela BIG e Heroic assinaram o acordo também</a></li>
                                </ul>
                            </div>
                            <div class="publicacao-1920">
                                <p>
                                    <span class="time">
                                        <time itemprop="modificacao" datetime="2023-08-21T13:33-03:00">Postado
                                            <span class="update-time" itemprop="modificacao" datetime="2023-08-21T13:33-03:00">
                                            </span>
                                        </time>
                                    </span>

                                    <span>Em FURIA</span>
                                </p>
                            </div>
                        </div>
                    </div>

                <div class="topico-section">
                    <p>FURIA</p>
                </div>
                <div class="titulo-section">
                    <h2 class="h2-section">
                        <a href="FURIA/furia-parceria.html" target="_blank">FURIA assina Louvre Agreement e se torna a nova parceira da ESL</a>
                    </h2>
                    <h3 class="h3-class-section">
                        <a href="FURIA/furia-parceria.html" target="_blank">Equipe terá vaga garantida na ESL Pro League</a>
                    </h3>
                    <h3 class="h3-class-section">
                        <a href="FURIA/furia-parceria.html" target="_blank">Além dela BIG e Heroic assinaram o acordo também</a>
                    </h3>
                </div>
                <div class="imagem-section">
                    <img src="../Imagens/Furia/furia-parceria-esl.webp" alt="Contratação do FalleN">
                </div>
                <div class="publicacao-section">
                    <p>
                        <span class="time">
                            <time itemprop="modificacao" datetime="2023-08-21T13:33-03:00">Postado 
                                <span class="update-time" itemprop="modificacao" datetime="2023-08-21T13:33-03:00">
                                </span>
                            </time>
                        </span>

                        <span>Em FURIA</span>
                    </p>
                </div>
            </article>
        </section>

        <div class="quebra-de-pagina"></div>

        <section class="noticia-grid">
            <article id="noticia-article">
                    <div class="container-1920">
                        <div class="imagem-grid-1920">
                            <a href="Imperial/ultima-vaga.html" target="_blank"><img src="../Imagens/Imperial/imperial-ultima-vaga-rmr.jpg" alt="Imperial conquista última vaga no Major"></a>
                        </div>
                        <div class="conteudo-grid-1920">
                            <div class="topico-1920" id="topico-imperial">
                                <p><a href="Imperial/ultima-vaga.html" target="_blank">Imperial</a></p>
                            </div>
                            <div class="titulo-1920">
                                <h1><a href="Imperial/ultima-vaga.html" target="_blank" class="links-noticias">Imperial conquista última vaga no Major do Rio de Janeiro</a></h1>
                                <ul class="lista-materia">
                                    <li><a href="Imperial/ultima-vaga.html" target="_blank" class="links-subtitulos-noticias">– Vaga foi conquistada em cima da Complexity (EUA)</a></li>
                                    <li><a href="Imperial/ultima-vaga.html" target="_blank" class="links-subtitulos-noticias">– Ela se junta a FURIA e 00Nation para representar o Brasil na nossa casa</a></li>
                                </ul>
                            </div>
                            <div class="publicacao-1920">
                                <p>
                                    <span class="time">
                                        <time itemprop="modificacao" datetime="2023-08-22T21:00-03:00">Postado
                                            <span class="update-time" itemprop="modificacao" datetime="2023-08-22T21:00-03:00">
                                            </span>
                                        </time>
                                    </span>

                                    <span>Em Imperial</span>
                                </p>
                            </div>
                        </div>
                    </div>

                <div class="topico-section">
                    <p><a href="Imperial/ultima-vaga.html" target="_blank">Imperial</a></p>
                </div>
                <div class="titulo-section">
                    <h2 class="h2-section"><a href="Imperial/ultima-vaga.html" target="_blank">Imperial conquista última vaga no Major do Rio de Janeiro</a></h2>
                    <h3 class="h3-class-section"><a href="Imperial/ultima-vaga.html" target="_blank">Vaga foi conquistada em cima da Complexity (EUA)</a></h3>
                    <h3 class="h3-class-section"><a href="Imperial/ultima-vaga.html" target="_blank">Ela se junta a FURIA e 00Nation para representar o Brasil na nossa casa</a></h3>
                </div>
                <div class="imagem-section">
                    <img src="../Imagens/Imperial/imperial-ultima-vaga-rmr.jpg" alt="Imperial conquista última vaga no Major">
                </div>
                <div class="publicacao-section">
                    <p>
                        <span class="time">
                            <time itemprop="modificacao" datetime="2023-08-22T21:00-03:00">Postado 
                                <span class="update-time" itemprop="modificacao" datetime="2023-08-22T21:00-03:00">
                                </span>
                            </time>
                        </span>

                        <span>Em Imperial</span>
                    </p>
                </div>
            </article>
        </section>

        <div class="aside-anuncio">
            <aside class="anuncio">
            </aside>
        </div>

        <section class="noticia-grid">
            <article id="noticia-article">
                    <div class="container-1920">
                        <div class="imagem-grid-1920">
                            <a href="SK/cologne.html" target="_blank"><img src="../Imagens/SK/sk-major-one-cologne-2016.jpg" alt="Brasileiros segurando troféu"></a>
                        </div>
                        <div class="conteudo-grid-1920">
                            <div class="topico-1920" id="topico-imperial">
                                <p><a href="SK/cologne.html" target="_blank">SK Gaming</a></p>
                            </div>
                            <div class="titulo-1920">
                                <h1><a href="SK/cologne.html" target="_blank" class="links-noticias">SK Gaming conquista ESL One Cologne 2016</a></h1>
                                <ul class="lista-materia">
                                    <li><a href="SK/cologne.html" target="_blank" class="links-subtitulos-noticias">– Vitória foi em cima de Liquid (EUA)</a></li>
                                    <li><a href="SK/cologne.html" target="_blank" class="links-subtitulos-noticias">– Com a vitória brasileiros ganham $500 mil em premiação</a></li>
                                </ul>
                            </div>
                            <div class="publicacao-1920">
                                <p>
                                    <span class="time">
                                        <time itemprop="modificacao" datetime="2023-08-22T21:30-03:00">Postado
                                            <span class="update-time" itemprop="modificacao" datetime="2023-08-22T21:30-03:00">
                                            </span>
                                        </time>
                                    </span>

                                    <span>Em SK</span>
                                </p>
                            </div>
                        </div>
                    </div>

                <div class="topico-section">
                    <p>SK Gaming</p>
                </div>
                <div class="titulo-section">
                    <h2 class="h2-section">SK Gaming conquista ESL One Cologne 2016</h2>
                    <h3 class="h3-class-section">Vitória foi em cima de Liquid (EUA)</h3>
                    <h3 class="h3-class-section">Com a vitória brasileiros ganham $500 mil em premiação</h3>
                </div>
                <div class="imagem-section">
                    <img src="../Imagens/SK/sk-major-one-cologne-2016.jpg" alt="Brasileiros segurando troféu">
                </div>
                <div class="publicacao-section">
                    <p>
                        <span class="time">
                            <time itemprop="modificacao" datetime="2023-08-22T21:30-03:00">Postado 
                                <span class="update-time" itemprop="modificacao" datetime="2023-08-22T21:30-03:00">
                                </span>
                            </time>
                        </span>

                        <span>Em SK</span>
                    </p>
                </div>
            </article>
        </section>
    </main>

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
    
    <script src="../JavaScript/index.js"></script>
    <script src="../JavaScript/button.js"></script>
    <script src="../JavaScript/dataTimeIndex.js"></script>
</body>
</html>