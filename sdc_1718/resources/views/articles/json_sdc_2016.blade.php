@extends('layouts.app')
@section('title', $article->title)
@section('content')
		<div class="row">
			<div class="col-sm-8 col-md-9">
				<div class="row">
					<div class="col-md-12">
						<h3>
							{{ $article->custom_title }}
						</h3>
						<p>
							<a data-toggle="modal" data-target="#modal" id="0">
								<img class="img-responsive img-thumbnail img-noticia-detalhe" alt="" src="/{{ $article->custom_image }}">
							</a>
						</p>
						@foreach (json_decode($article->json_conteudo)->conteudo as $linha)
							@if ($linha->tipo == "br")

						<br/>
							@elseif ($linha->tipo == "h2")

						<h4>
							{{ $linha->conteudo }}
						</h4>
							@elseif ($linha->tipo == "normal")

						<p>
							{{ $linha->conteudo }}
						</p>
							@elseif ($linha->tipo == "imagem")

						<p>
			              <a data-toggle="modal" data-target="#modal" v-on:click="handleModal" id="{{ $linha->id }}">
			                <img class="img-responsive img-thumbnail img-noticia-detalhe" src="/{{ $linha->src }}" alt="">
			              </a>
			            </p>
							@elseif ($linha->tipo == "imagem_original")

						<p>
							<a data-toggle="modal" data-target="#modal" v-on:click="handleModal" id="{{ $linha->id }}">
				                <img class="img-responsive img-thumbnail img-noticia-detalhe" src="/{{ $linha->src }}" alt="">
			              	</a>
			            </p>
							@elseif ($linha->tipo == "small")

						<p class="small">
							{{ $linha->conteudo }}
			            </p>
							@elseif ($linha->tipo == "qa")
							@elseif ($linha->tipo == "html")

						{!! $linha->conteudo !!}
							@elseif ($linha->tipo == "link")

						<p>
							<a href="{{ $linha->endereco }}" :target="{{ $linha->target }}" :class="{{ $linha->class }}">
								{{ $linha->conteudo }}
							</a>
						</p>
							@endif
						@endforeach

						<em class="small">Publicado em: {{ $article->custom_date }}</em>
					</div>
				</div>
				<div class="row">
      					<div class="col-sm-2 col-sm-push-5 text-center">
				        	<a href="javascript:history.back();" class="btn btn-default btn-block">Voltar</a>
				        	<br><br>
				      	</div>
			    </div>
			</div>
			<div class="col-sm-4 col-md-3">
				@component('components.jogos_semana')
				@endcomponent
			</div>
		</div>

@endsection
