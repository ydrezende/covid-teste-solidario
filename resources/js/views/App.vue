<template>
    <div>
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center">
                <h1 class="logo me-auto"><a href="index.html">{{ $APP_NAME }}</a></h1>   
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
        <section id="doar" class="d-flex align-items-center">
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
        </section><!-- Doar-->
        <section id="testar" class="d-flex align-items-center">
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
        </section><!-- Testar -->
        <div id="preloader"></div>
    </div>
</template>
<script>
const default_layout = "default";


export default {
    computed: {},
    data() {
        return {
            user:{
                name: 'Hello World'
            }
        }
    }
};
</script>