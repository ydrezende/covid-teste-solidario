@include('components.html_head')
<header id="header" class="blue-bg">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h1>   
    </div>
</header>
<section id="user_info">
    <div class="container" data-aos="zoom-in">

        <div class="section-title">
            <h2>Seu cadastro</h2>
        </div>
        
        @if(!$valid)
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            Cadastro realizado! Você ainda <strong>precisa validar o seu e-mail</strong> para seguirmos com a aprovação do seu cadastro!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
                <div class="row">
                    <div>
                        <h3>Seu nome</h3>
                        <p>{{ $name }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- User Info-->
@include('components.html_foot')