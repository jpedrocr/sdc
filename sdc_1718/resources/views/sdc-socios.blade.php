@extends('layouts.app')
@section('title', 'Sócios')
@section('content')
	@component('components.titulo')
		@slot('title')
			Faz-te sócio do Sangalhos Desporto Clube
		@endslot
	@endcomponent
            <div class="row">
                <div class="col-md-12">
                    <img class="img-responsive img-thumbnail center-block img-historia" alt="Angariação de Sócios" src="/img/sdc/socios_20161107.jpg">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">Um dos objetivos da direção do clube é o crescimento do número de sócios efetivos.</p>
                    <p class="text-justify">Pretendemos sensibilizar e envolver cada vez mais os amigos e simpatizantes do Sangalhos, na vida do clube.</p>
                    <p class="text-justify">Para tal, convidamos todos os sangalhenses, os adeptos e os familiares dos atletas a tornarem-se sócios, apoiando o clube no seu desenvolvimento.</p>
                    <p class="text-justify">Contamos com o vosso apoio!</p>
                    <p class="text-justify">Para efetuar a sua inscrição preencha a ficha de sócio disponível no link abaixo. Solicitamos que a envie para o e-mail do clube: <a href="mailto:sdc.geral@sapo.pt">sdc.geral@sapo.pt</a>, pedindo os dados para o pagamento das quotas.</p>
                    <p class="text-justify">Em caso de dúvidas, contacte a Secretaria do clube.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a target="_blank" class="btn btn-primary" href="/../docs/sdc_ficha_socio_2016.xlsx">Ficha de Sócio 2016</a>
                </div>
            </div>
@endsection
