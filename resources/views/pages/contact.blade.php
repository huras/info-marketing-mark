@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
        <div class='container'>
            <div class='row contact-form'>
                <div class='col-md-6'>
                    <h1> {{__('Contact')}} </h1>
                    <form method='POST' action=''>
                        <div class='form-group'>
                            <label> Nome </label>
                            <input type='text' name='name'>
                        </div>

                        <div class='form-group'>
                            <label> E-mail </label>
                            <input type='text' name='email'>
                        </div>

                        <div class='form-group'>
                            <label> Telefone </label>
                            <input type='text' name='phone'>
                        </div>

                        <div class='form-group'>
                            <label> Assunto </label>
                            <input type='text' name='assunto'>
                        </div>

                        <div class='form-group'>
                            <label> Mensagem </label>
                            <textarea name='message'></textarea>
                        </div>

                        <div class='form-group'>
                            <input type='submit' value='enviar'>
                        </div>
                    </form>
                </div>
                <div class='col-md-6'>
                    <h1> {{__('Fale Conosco')}} </h1>

                </div>
            </div>
        </div>
    @include('partials/footer')
@endsection