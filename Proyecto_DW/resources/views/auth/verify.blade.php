@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su dirección de Correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado una confirmación a su cuenta de correo.') }}
                        </div>
                    @endif

                    {{ __('Antes de seguir, por favor verifique su correo electronico y dirigirse al linkk de verificación.') }}
                    {{ __('Si no ha recibido el correo') }}, <a href="{{ route('verification.resend') }}">{{ __('click aquí para enviar de nuevo') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
