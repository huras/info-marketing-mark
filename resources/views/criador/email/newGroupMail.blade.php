@extends('layouts/criador')

@section('content')
    <div class='container dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/'> <i class="fas fa-home"></i> </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <a href='{{route("mail.dashboard")}}'> Email System </a> <i class="fas fa-caret-right"></i>
                <span> Send email to a group </span>
            </h1>
        </div>
        
        <div class='w-100 criador-form'>
            <form class='w-100' method="POST" action="{{route('sendMailToGroup')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="bd-example bd-example-tabs w-100">
                    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                        <div class='form-group col-md-12'>
                            <div class='separator'></div>
                        </div>
                        <li class="nav-item">
                        <a class="nav-link  active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Step 1 - Targeted Emails</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Step 2 - Message Content</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Step 3 - Options and Confirmation</a>
                        </li>
                    </ul>
                    <div class="tab-content w-100" id="myTabContent">
                        <div class="tab-pane fade row" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='form-group col-md-6'>
                                <label> {{ __('Published') }} </label>
                                <input class="{{ $errors->has('status') ? ' is-invalid' : '' }}" type='checkbox' name='status' value="{{ old('status') }}" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'status'])
                            </div>
                        </div>
                        <div class="tab-pane fade row" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            
                            
                        </div>
                        <div class="tab-pane fade row active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>

                            <div class='form-group w-100'>
                                <input type='submit' class='my-btn save' value='Send'>
                            </div>

                            <div class='form-group col-md-6'>
                                <label> {{ __('Title') }} </label>
                                <input class="{{ $errors->has('title') ? ' is-invalid' : '' }}" type='text' name='title' value="{{ old('title') }}" required autofocus>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'title'])
                            </div>

                            <input type="hidden" name="slug" value="123">

                            <div class='form-group col-md-6'>
                                <label> {{ __('Call') }} </label>
                                <input class="{{ $errors->has('call') ? ' is-invalid' : '' }}" type='text' name='call' value="{{ old('call') }}" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'call'])
                            </div>

                            <div class='form-group col-md-12'>
                                <label> {{ __('Content') }} </label>
                                <textarea required class="{{ $errors->has('content') ? ' is-invalid' : '' }}" id='blog-ckeditor' name='content'>{{ old('content') }}</textarea>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'content'])
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection