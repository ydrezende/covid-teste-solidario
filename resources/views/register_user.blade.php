@include('components.html_head')
<header id="header" class="blue-bg">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h1>   
    </div>
</header>
<section id="doar" class="contact">
    <div class="container" data-aos="zoom-in">

        <div class="section-title">
            <h2>Cadastre-se</h2>
            <p>Se você estiver com dificuldades para realizar o teste para COVID-19, essa é uma oportunidade de realizar o teste de forma segura e em um local próximo.</p>
        </div>

        <div class="row">
            <div class="col-lg mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="candidatar" method="post" role="form" class="form">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Seu nome</label>
                            <input required type="text" name="name" class="form-control" id="name" data-rule="minlen:3" data-msg="Por favor, insira seu nome" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Seu email</label>
                            <input required type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Por favor, informe um email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="cpf">CPF</label>
                            <input required type="text" name="cpf" class="form-control" id="cpf" data-rule="minlen:11" data-msg="Por favor, informe seu CPF" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone">Telefone</label>
                            <input required type="text" class="form-control" name="phone" id="phone" data-rule="minlen:8" data-msg="Por favor, precisamos do seu telefone" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="birthday">Data de nascimento</label>
                            <input required type="date" class="form-control" name="birthday" id="birthday" data-msg="Por favor, precisamos do seu telefone" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="address">Endereço</label>
                            <input required type="text" name="address" class="form-control" id="address" data-rule="minlen:11" data-msg="Por favor, informe seu endereço" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rgcnh">RG ou CNH</label><br>
                        <input disabled type="file" class="form-control-file" id="rgcnh">
                    </div>
                    <div class="form-group">
                        <label for="rgcnh">Comprovante de renda</label><br>
                        <input disabled type="file" class="form-control-file" id="comprovante">
                    </div>
                    <div class="form-check">
                        <input required class="form-check-input" type="checkbox" value="" id="permissao">
                        <label class="form-check-label" for="permissao">
                            Permito o uso dos meus dados anônimos para geração de estatísticas.
                        </label>
                    </div>
                    <div class="text-center"><button type="submit">Realizar cadastro</button></div>
                </form>
            </div>
        </div>

    </div>
</section><!-- Doar-->
@include('components.html_foot')