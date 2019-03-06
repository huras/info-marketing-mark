@extends('layouts/criador')

@section('styles')
    <style>
        .tab-content > .active{
            display: flex!important;
        }
    </style>
@endsection

@section('content')
    <div class='container dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/'> <i class="fas fa-home"></i> </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <a href='{{route("mail.dashboard")}}'> Email System </a> <i class="fas fa-caret-right"></i>
                <span> Send email(s) </span>
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
                            <a class="nav-link  active show" id="targets-tab" data-toggle="tab" href="#targets" role="tab" aria-controls="targets" aria-selected="true">Step 1 - Targeted Emails</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="layout-tab" data-toggle="tab" href="#layout" role="tab" aria-controls="layout" aria-selected="false">Step 2 - Email Layout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">Step 3 - Message Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="options-and-confirmation-tab" data-toggle="tab" href="#options-and-confirmation" role="tab" aria-controls="options-and-confirmation" aria-selected="false">Step 4 - Header Options and Confirmation</a>
                        </li>
                    </ul>
                    <div class="tab-content w-100" id="myTabContent">
                        <div class="tab-pane fade row active show" id="targets" role="tabpanel" aria-labelledby="targets-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='form-group col-md-12'>
                                <label> {{ __('Target(s)') }} </label>
                                <select name='target_type' id='Target_type_select' onchange='onChangeTargetType()'>
                                    <option value='all'> All Subscribers (with or without first and/or last names)</option>
                                    <option value='has-name'> All Subscribers with first name and last name </option>
                                    <option value='has-first_name'> All Subscribers with first name </option>
                                    <option value='single-email'> Single Email (You write the email. The message will be sent to only 1 e-mail.) </option>
                                </select>
                            </div>
                            <div class='form-group col-lg-4 col-sm-12' id='single-mail-input' style='    display: none;'>
                                <label> {{ __('Target`s Email') }} </label>
                                <input type='text' name='target_mail' required>
                            </div>
                            <div class='form-group col-lg-4 col-sm-12' id='single-mail-input-fname' style='    display: none;'>
                                <label> {{ __('Target`s First Name') }} </label>
                                <input type='text' name='first_name'>
                            </div>
                            <div class='form-group col-lg-4 col-sm-12' id='single-mail-input-lname' style='    display: none;'>
                                <label> {{ __('Target`s Last Name') }} </label>
                                <input type='text' name='last_name'>
                            </div>
                        </div>
                        <div class="tab-pane fade row" id="layout" role="tabpanel" aria-labelledby="profile-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='col-md-12 layouts-slick'>
                                <div style='width: 100%;'>
                                    <h3> Template 1 : </h3>
                                    <img style='max-width: 100%;' src='/img/site/email_template_1.png'>
                                </div>
                            </div>
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='form-group col-md-6'>
                                <label> {{ __('Layouts') }} </label>
                                <select name='email_layout'>
                                    <option value='emails.template_1'> Template 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="tab-pane fade row" id="content" role="tabpanel" aria-labelledby="profile-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            
                            <div class='form-group col-md-12' style='white-space: pre-line;'>
                                <h3 style='font-weight: bold'> Tips about email content text personalization </h3>
                                Some words may change when the email is being sent to each person. The current pesonalization words are:                                

                                [name] becomes First Name + Last Name of the person
                                [firstname] becomes First Name of the person
                                [lastname] becomes Last Name of the person

                                Example : If "Hello Mr [firstname]" is sent to a user with 'Jonas' as first name, Jonas will receive "Hello Mr Jonas" as the message.
                            </div>
                            
                            <div class='form-group col-md-12'>
                                <label> {{ __('Email content') }} </label>
                                <textarea required class="{{ $errors->has('email_content') ? ' is-invalid' : '' }}" id='blog-ckeditor' name='email_content'>{{ old('email_content') }}</textarea>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'email_content'])
                            </div>
                        </div>
                        <div class="tab-pane fade row" id="options-and-confirmation" role="tabpanel" aria-labelledby="options-and-confirmation-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>

                            <div class='form-group col-md-6'>
                                <label> {{ __('Topic') }} </label>
                                <input class="{{ $errors->has('topic') ? ' is-invalid' : '' }}" type='text' name='email_topic' value="{{ old('topic') }}" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'topic'])
                            </div>

                            <div class='form-group col-md-6'>
                                <label> {{ __('Name in the from') }} </label>
                                <input class="{{ $errors->has('name_in_the_from') ? ' is-invalid' : '' }}" type='text' name='name_in_the_from' value="Sogniamo In Grande" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'name_in_the_from'])
                            </div>

                            <div class='form-group w-100'>
                                <input type='submit' class='my-btn save' value='Send'>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        function onChangeTargetType(){
            var single_mail_input = document.getElementById("single-mail-input");
            var single_mail_input_lname = document.getElementById("single-mail-input-lname");
            var single_mail_input_fname = document.getElementById("single-mail-input-fname");
            

            var TargetTypeSelect = document.getElementById("Target_type_select");
            if(TargetTypeSelect.value == 'single-email') {
                single_mail_input.style.display = "flex";
                single_mail_input_lname.style.display = "flex";
                single_mail_input_fname.style.display = "flex";
            }
            else{
                single_mail_input.style.display = "none";
                single_mail_input_lname.style.display = "none";
                single_mail_input_fname.style.display = "none";
            }
        }

        $( document ).ready(function() {
            onChangeTargetType();
        });
    </script>
@endsection