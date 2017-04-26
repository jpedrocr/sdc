@extends('layouts.app')
@section('title', 'Contactos')
@section('content')
	@component('components.titulo')
		@slot('title')
			Contactos
		@endslot
	@endcomponent
            <div class="row">
                <div class="col-md-8">
                    <iframe width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.0260872638814!2d-8.46805255693636!3d40.48392684798148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2307e108e6ee71%3A0xef2e5b0afbb46f7b!2sPavilhao+Sangalhos!5e1!3m2!1spt-PT!2spt!4v1463173422890"></iframe>
                </div>
                <div class="col-md-4">
                    <address>
                        <strong>Detalhes de Contacto</strong><br>
                        <p>  Rua Feliciano Godinho Neves<br> 3780-145 Sangalhos<br>
                        </p>
                        <p>
                            <abbr title="Telefone"><i class="fa fa-phone" aria-hidden="true"></i> Telefone</abbr>:<br>  234 741 735<br>
                        </p>
                        <p>
                            <abbr title="Email"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</abbr>: <br>
                            <a href="mailto:sdc.geral@sapo.pt">sdc.geral@sapo.pt</a><br>
                        </p>
                        <ul class="list-unstyled list-inline list-social-icons">
                            <li title="Facebook">
                                <a target="_blank" href="https://www.facebook.com/Sangalhos-Desporto-Clube-121425014598291/?fref=ts">
                                    <i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </address>
                </div>
            </div>
@endsection
