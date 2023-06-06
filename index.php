<?php 
	require "_helpers/index.php"; 
	echo siteHeader("InfoUser"); //chama a função para retornar o Header
?>
    <html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONG MATCH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <section id="home" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Bem-vindo a Ong Match</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">CONECTANDO CORAÇÕES, UNINDO CAUSAS</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="form.html" class="btn btn-light me-2">Junte-se Agora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Sobre nós</h1>
                        <div class="line"></div>
                        <p>Conectamos ONGs e pessoas, facilitando o apoio a causas sociais por meio de doações, trabalho voluntário e compartilhamento de habilidades.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="./assets/images/happy-people-volunteering-special-causes.jpg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>Ong Match</h1>
                    <p class="mt-3 mb-4">Juntos, promovemos transformação e impacto positivo na sociedade.</p>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-service-fill"></i>
                        </div>
                        <div>
                            <h5>Conexão entre ONGs e pessoas</h5>
                            <p>Estabelecemos uma plataforma que facilita a conexão direta entre ONGs e pessoas interessadas em contribuir para causas sociais, permitindo colaboração eficaz.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-emotion-happy-fill"></i>
                        </div>
                        <div>
                            <h5>Facilitação de doações e voluntariado</h5>
                            <p>Possibilitamos doações financeiras e engajamento em atividades de voluntariado, oferecendo suporte prático às ONGs e permitindo que as pessoas contribuam com as causas que acreditam.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-mental-health-fill"></i>
                        </div>
                        <div>
                            <h5>Conscientização e educação social</h5>
                            <p>Promovemos a conscientização sobre questões sociais relevantes, oferecendo recursos educacionais e informações atualizadas para que os usuários compreendam os desafios enfrentados pela sociedade e possam fazer escolhas informadas ao apoiar uma causa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Nossos Serviços</h1>
                        <div class="line"></div>
                        <p>Conheça sobre nossos serviços</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="servicos theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-team-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Plataforma de conexão</h5>
                        <p>Facilita a interação direta entre ONGs e pessoas interessadas em apoiar causas sociais.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="servicos theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-checkbox-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Matching personalizado</h5>
                        <p>Algoritmos inteligentes garantem conexões personalizadas entre pessoas e ONGs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="servicos theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-shield-keyhole-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Gerenciamento de doações</h5>
                        <p>Sistema seguro para gerenciar doações financeiras diretas às ONGs cadastradas em nossa plataforma.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="servicos theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-hand-heart-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Mobilização de voluntários</h5>
                        <p>Facilita o engajamento voluntário, gerenciando oportunidades e progresso das atividades.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="servicos theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-voice-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Educação e conscientização</h5>
                        <p>Conteúdo educacional promove a compreensão das causas sociais apoiadas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="servicos theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-bar-chart-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Analytics e relatórios</h5>
                        <p> Análise de dados fornece insights sobre impacto e otimização de campanhas, doações e voluntariado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="section-padding">
        <div class="container text-center">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-white display-4">1.000+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Ongs Parceiras</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <h1 class="text-white display-4">50 MIL</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">usuários</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <h1 class="text-white display-4">120</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">conteúdos educacionais</h6>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <h1 class="text-white display-4">500+</h1>
                    <h6 class="text-uppercase mb-0 text-white mt-3">Voluntários</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="galeria" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Galeria</h1>
                        <div class="line"></div>
                        <p>Confira algumas fotos de nossas ações</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="galeria-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/1.jpg" alt="">
                        </div>
                        <a href="./assets/images/1.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="galeria-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/2.jpg" alt="">
                        </div>
                        <a href="./assets/images/2.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="galeria-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/3.jpg" alt="">
                        </div>
                        <a href="./assets/images/3.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="galeria-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/4.jpg" alt="">
                        </div>
                        <a href="./assets/images/4.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="galeria-item image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images/5.jpg" alt="">
                        </div>
                        <a href="./assets/images/5.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                    <div class="galeria-item image-zoom mt-4">
                        <div class="image-zoom-wrapper">
                            <img src="./assets/images//6.jpg" alt="">
                        </div>
                        <a href="./assets/images/6.jpg" data-fancybox="gallery" class="iconbox"><i class="ri-search-2-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light" id="contato">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 text-white fw-semibold">Encontre a ong perfeita para você</h1>
                        <div class="line bg-white"></div>
                        <p class="text-white">Mais de mil ongs para você se conectar</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
                <div class="col-lg-2">
                    <form action="form.html" class="row">
                            <button class="btn btn-light me-2">Quero me cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="./assets/images/ONF2.png" alt=""></a>
                        <div class="line"></div>
                        <p>Conectando corações, unindo causas: a tecnologia a serviço do bem!</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-youtube-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVIÇOS</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Plataforma de conexão</a></li>
                            <li><a href="#">Matching personalizado</a></li>
                            <li><a href="#">Gerenciamento de doações</a></li>
                            <li><a href="#">Mobilização de voluntários</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SOBRE</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Sobre</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTATO</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Av. Lins de Vasconcelos, 1222</li>
                            <li>(11)4002-8922</li>
                            <li>www.ongmatch.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© Copyright Ong Match 2023. Todos os direitos reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>