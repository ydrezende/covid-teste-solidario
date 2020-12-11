@include('components.html_head')
<header id="header" class="blue-bg">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="{{ url('/') }}">{{ env('APP_NAME') }}</a></h1>   
    </div>
</header>
<section id="user_info">
    <div class="container" data-aos="zoom-in">
        <div class="section-title">
            <h2>Farmácia XPTO</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Número de testes realizados</h3>
                <p id="testes_realizados">3</p>
            </div>
            <div class="col-md-4">
                <h3>Data do próximo repasse</h3>
                <p>18/12/2020</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Realizar atendimento:</h3>
                <div class="col-md-4">
                    <div>Clique aqui para gerar sua senha de atendimento</div>
                    <div class="input-group">
                        <div class="input-group-text"><i class="bx bx-lock"></i></div>
                        <input type="text" class="form-control" id="codigo" placeholder="Código do atendimento">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <button onClick="realizaAtendimento()" class="btn btn-primary">Confirmar atendimento</button>
        <p id="confirmacao"></p>
    </div>
</section><!-- User Info-->
<script>
    function realizaAtendimento() {
        if($('#codigo').val() != '371294') return;

        $('#confirmacao').text("Atendimento confirmado!");

        setTimeout(function () { $('#confirmacao').text(""); }, 2000 );

        $('#testes_realizados').text('4');

        $('#testes_realizados').text('4');
    }
</script>
@include('components.html_foot')