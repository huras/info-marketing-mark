@extends('layouts/themed')

@section('content')
    @include('partials/home-header',compact('links'))

    <div class='container'>
        <div class='row video-contact'>
            <div class='col-md-12'>
                <h1> Create your curriculum </h1>
            </div>
            <div class='col-md-12 col-sm-12'>            
                <iframe width="100%" height="580"
                src="https://www.youtube.com/embed/q5tPsoSwrq4">
                </iframe>
            </div>
            <div class='col-md-12 col-sm-12 mini-contact-form' style='margin-top: 24px;'>
                <form action='/newsletter/add' method='POST' class='row' style='justify-content: center;'>
                    {{ csrf_field() }}

                    <div class='form-group col-md-6'>
                        <label> {{ __('first name') }} </label>
                        <input type='text' name='first_name' placeholder="{{ __('Type your first name here') }}">
                    </div>

                    <div class='form-group col-md-6'>
                        <label> {{ __('last name') }} </label>
                        <input type='text' name='last_name' placeholder="{{ __('Type your last name here') }}">
                    </div>

                    <div class='form-group col-md-6'>
                        <label> E-mail </label>
                        <input type='text' name='email' placeholder="{{ __('Type your email here') }}">
                    </div>

                    <div class='form-group col-md-6'>
                        <label> {{ __('phone') }} </label>
                        <input type='text' name='phone' placeholder="{{ __('Type your phone number here') }}">
                    </div>

                    <div class='form-group col-md-6' style='margin-top: 24px;'>
                        <input type='submit' value='Subscribe' class='cadastrar'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials/footer')
@endsection