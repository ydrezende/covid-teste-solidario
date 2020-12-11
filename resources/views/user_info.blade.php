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
        <h3>Situação do cadastro</h3><span class="badge bg-secondary">Pendente</span>
        @else
        <h3>Situação do cadastro</h3><span class="badge bg-success">Válido</span>
        <section class="row">
            <div class="col-md-3">Clique aqui para gerar sua senha de atendimento</div>
            <div class="col-md-3">
                <div class="input-group">
                    <div id="btn-gera-codigo" style="cursor: pointer; background:#0d6efd; color: #fff;" class="input-group-text" onClick="getCode()"><i class="bx bx-refresh"></i></div>
                    <input readonly style="background: #fff;" type="text" class="form-control" id="codigo" placeholder="Senha aparerá aqui">
                </div>
            </div>
            <br>
            <button class="offset-1 col-md-10 col-10  btn btn-primary" onClick="openMap()">Consultar pontos de testagem</button>
        </section>
        <div id="mapa-parceiros" style="display:none; margin-bottom: 3em; height: 360px;"></div>

        @endif
        <div class="row">
            <div class="col-md-4">
                <h3>Seu nome</h3>
                <p>{{ $name }}</p>
            </div>
            <div class="col-md-4">
                <h3>CPF</h3>
                <p>{{ $cpf }}</p>
            </div>
            <div class="col-md-4">
                <h3>Data de nascimento</h3>
                <p>{{ $birthday }}</p>
            </div>
        </div>
        <div class="row">            
            <div class="col-md-4">
                <h3>E-mail</h3>
                <p>{{ $email }}</p>
            </div>
            <div class="col-md-4">
                <h3>Telefone</h3>
                <p>{{ $phone }}</p>
            </div>
        </div>
        <div class="row">
            <div>
                <h3>Endereço</h3>
                <p>{{ $address }}</p>
            </div>
        </div>
        </div>

    </div>
</section><!-- User Info-->
<script>
    var mapaAberto = false;

    function getCode() {
        document.getElementById('codigo').value = '371294';
    }

    function openMap() {
        if(!mapaAberto) {
            mapaAberto = true;
            $('#mapa-parceiros').slideDown('fast');
            setTimeout(function () { map.invalidateSize() }, 1000);
        } else {
            mapaAberto = false;
            $('#mapa-parceiros').slideUp('fast');
        }
    }
</script>
@include('components.html_foot')