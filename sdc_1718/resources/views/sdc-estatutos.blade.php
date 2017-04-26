@extends('layouts.app')
@section('title', 'Estatutos, Regulamento e Legislação')
@section('content')
	@component('components.titulo')
		@slot('title')
			Estatutos, Regulamento e Legislação
		@endslot
	@endcomponent
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">Os Estatutos do Sangalhos são o conjunto de regras e princípios que orientam e regulam o funcionamento desta nobre Instituição.</p>
                    <p class="text-justify">Concretizada a última revisão em 28 de Março de 2015</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a target="_blank" class="btn btn-primary" href="https://dre.pt/application/file/2777327">Publicação em Diário da República</a>
                </div>
            </div>
@endsection
