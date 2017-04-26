@extends('layouts.app')
@section('title', 'Produtos SDC')
@section('content')
	@component('components.titulo')
		@slot('title')
			Produtos do SDC
		@endslot
	@endcomponent
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="lead">
                        Para informações ou encomendas dos produtos do SDC contacte a secretaria do clube através do e-mail <a href="mailto:sdc.geral@sapo.pt">sdc.geral@sapo.pt</a> ou procure na loja azul, no Complexo Desportivo de Sangalhos.
                    </p>
                    <img class="img-responsive img-thumbnail" alt="" src="/img/produtos/vestuario_2017.jpg">
                    <br>
                    <br>
                    <img class="img-responsive img-thumbnail" alt="" src="/img/produtos/avental_sdc.jpg">
                    <br>
                    <br>
                    <img class="img-responsive img-thumbnail" alt="" src="/img/produtos/sacos_sdc.jpg">
                    <br>
                    <br>
                    <img class="img-responsive img-thumbnail" alt="" src="/img/produtos/2.jpg">
                    <br>
                    <br>
                </div>
            </div>
@endsection
