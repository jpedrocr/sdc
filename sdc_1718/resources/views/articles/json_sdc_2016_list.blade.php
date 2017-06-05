@extends('layouts.app')
@section('title', 'Notícias')
@section('content')
		<div class="row">
			<div class="col-sm-8 col-md-9">
@foreach ($articles as $article)
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
					      	<div class="panel-body">
					        	<div class="media">
					          		<div class="media-left media-middle text-center">
					            		<a href="/noticias/{{ $article->slug }}">
											<img class="publicacao lista media-object" alt="" src="/{{ $article->custom_image }}">
					            		</a>
					          		</div>
					          		<div class="media-body">
				            			<h4>
											<a href="/noticias/{{ $article->slug }}">{{ $article->custom_title }}</a>
					            		</h4>
										{{ $article->custom_small_text }}
					            		<p>
											<em class="small">
												Publicado em: {{ $article->custom_date }}
											</em>
										</p>
					          		</div>
					        	</div>
					      	</div>
					    </div>
					</div>
				</div>
@endforeach
				<div class="row">
					<div class="col-md-12 text-center">
						{{ $articles->links() }}
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-3">
@component('components.jogos_semana')
@endcomponent
			</div>
		</div>
@endsection
