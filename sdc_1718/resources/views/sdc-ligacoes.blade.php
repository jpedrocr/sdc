@extends('layouts.app')
@section('title', 'Ligações Úteis')
@section('content')
	@component('components.titulo')
		@slot('title')
			Ligações Úteis
		@endslot
	@endcomponent
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-push-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/Sangalhos-Desporto-Clube-121425014598291/">Página de Facebook do Sangalhos Desporto Clube</a>
                                </li>
                                <li>
                                    <br>
                                    <h2> Sites e jornais </h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a target="_blank" href="http://www.basketpt.com/">BasketPT.com</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.diarioaveiro.pt/">Diário de Aveiro</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.planetabasket.pt/">Planeta Basket</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/ressalto.net/">Ressalto.net</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://basketotal.com/">Basketotal</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.desportoaveiro.com/">Desporto Aveiro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <br>
                                    <h2> Institucionais </h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a target="_blank" href="http://www.fpb.pt/">Federação Portuguesa de Basquetebol</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.abaveiro.pt/">Associação de Basquetebol de Aveiro</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <br>
                                    <h2> Internacionais </h2>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a target="_blank" href="http://www.fiba.com/">FIBA</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.fibaeurope.com/">FIBA Europe</a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.nba.com/">NBA</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endsection
