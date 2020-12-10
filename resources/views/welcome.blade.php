@include('components.html_head')
<body>
<header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">{{ env('APP_NAME') }}</a></h1>   
        </div>
    </header>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Ajudando quem precisa</h1>
                    <h1>Ajudaremos todos</h1>
                    <h2>Juntos vamos lutar contra a COVID-19, tornando os testes mais acessíveis a população.<br><br>#SolidariedadeCOVID</h2>
                    <div class="d-lg-flex hero-buttons">
                        <a href="#doar" class="btn scrollto">Doe agora</a>
                        <a href="#testar" class="btn scrollto">Teste grátis</a>
                    </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Princípios</h2>
                <p>Esses são alguns princípios da nossa visão para ajudar as pessoas a enfrentar esse momento desafiador que estamos vivendo.</p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Testes rápidos</a></h4>
                        <p>Possibilitar que as pessoas consigam fazer o teste para COVID-19 o mais rápido possível.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-trip"></i></div>
                        <h4><a href="">Locais próximos</a></h4>
                        <p>A pessoa tem que se deslocar menos para fazer o teste, dando mais segurança para ela e para os outros.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Informação</a></h4>
                        <p>Ajudar os acolhidos com orientações até que retornem à saúde plena. Gerando informações importantes sobre o quadro infecções na nossa população.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->    
    <section id="doar" class="contact">
        <div class="container" data-aos="zoom-in">

            <div class="section-title">
                <h2>Doe agora</h2>
                <p>Com a sua doação, podemos disponibilizar testes de COVID-19 de forma ainda mais segura e eficiente para pessoas com baixa renda.</p>
            </div>

            <div class="row">
                <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Seu nome</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:3" data-msg="Por favor, insira seu nome" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Seu email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Por favor, informe um email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control" id="cpf" data-rule="minlen:4" data-msg="Por favor, informe seu CPF" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="valor">Valor</label>
                                <input type="email" class="form-control" name="valor" id="valor" data-rule="email" data-msg="Por favor, não esqueça a quantida a ser doada" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="text-center"><button type="submit">Fazer doação</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section><!-- Doar-->
    <section id="testar" class="cta">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>Testes de COVID-19 de forma rápida e segura</h3>
                    <p>Se você tem dificuldades para realizar o teste para COVID-19, inscreva-se para ter a oportunidade de conseguir um teste rápido e seguro.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{ url('') }}">Inscreva-se agora</a>
                </div>
            </div>
        </div>
    </section><!-- Testar -->
@include('components.html_foot')