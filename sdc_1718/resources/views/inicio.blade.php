@extends('layouts.app')
@section('title', 'Página Inicial')
@section('content')
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <div class="row">
                        <div class="col-sm-12">
							@component('components.noticias_slider')
				            @endcomponent
                        </div>
                    </div>
                    <div class="row">
						<div class="col-sm-12">
							@component('components.noticias_fixas')
				            @endcomponent
						</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
							@component('components.noticias_navegacao')
				            @endcomponent
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
					@component('components.jogos_semana')
					@endcomponent
                </div>
            </div>
@endsection
