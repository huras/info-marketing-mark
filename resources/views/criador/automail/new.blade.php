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
                <a href='{{route("automail.list")}}'> Automails </a> <i class="fas fa-caret-right"></i>
                <span> New Automail </span>
            </h1>
        </div>
        
        <div class='w-100 criador-form'>
            <form class='w-100' method="POST" action="{{route('automail.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="bd-example bd-example-tabs w-100">
                    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                        <div class='form-group col-md-12'>
                            <div class='separator'></div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link  active show" id="step-1-tab" data-toggle="tab" href="#step-1" role="tab" aria-controls="step-1" aria-selected="true">Step 1 - Time Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="targets-tab" data-toggle="tab" href="#targets" role="tab" aria-controls="targets" aria-selected="true">Step 2 - Target Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="layout-tab" data-toggle="tab" href="#layout" role="tab" aria-controls="layout" aria-selected="false">Step 3 - Email Template</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">Step 4 - Message Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="options-and-confirmation-tab" data-toggle="tab" href="#options-and-confirmation" role="tab" aria-controls="options-and-confirmation" aria-selected="false">Step 5 - Options & Confirmation</a>
                        </li>
                    </ul>
                    <div class="tab-content w-100" id="myTabContent">
                        <!-- Step 1 -->
                        <div class="tab-pane fade row active show" id="step-1" role="tabpanel" aria-labelledby="step-1-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='form-group col-md-6 col-sm-12'>
                                <label> {{ __('Interval') }} </label>
                                <select name='time_condition_type' id='TimeConditionTypeSelect' onchange='onChangeIntervalType()'>
                                    @foreach($timeCondition as $option)
                                        <option value='{{$option["value"]}}'> {{$option["label"]}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-group col-lg-6 col-sm-12' id='shot_time'>
                                <label> {{ __('Time of the shot') }} </label>
                                <input type='time' name='shot_time' >
                            </div>
                            
                            <div class='form-group col-lg-4 col-sm-12' id='day_of_week' style='display: none;'>
                                <label> {{ __('Day of Week') }} </label>
                                <select name='day_of_week' id='TimeConditionTypeSelect' >
                                    @foreach($daysOfWeek as $option)
                                        <option value='{{$option["value"]}}'> {{$option["label"]}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-group col-lg-4 col-sm-12' id='day_of_month' style='display: none;'>
                                <label> {{ __('Day of the Month') }} </label>
                                <input type='text' name='day_of_month' value='15' >
                            </div>
                            <div class='form-group col-lg-4 col-sm-12' id='special_day' style='display: none;'>
                                <label> {{ __('Day of the Year') }} </label>
                                <small> The year value will be ignored but it still need to be inserted. Simply choose any year. </small>
                                <input type='date' name='special_day' >
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="tab-pane fade row" id="targets" role="tabpanel" aria-labelledby="targets-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='form-group col-md-12'>
                                <label> {{ __('Target(s)') }} </label>
                                <select name='target_type' id='Target_type_select' onchange='onChangeTargetType()'>
                                    @foreach($targets as $option)
                                        <option value='{{$option["value"]}}'> {{$option["label"]}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-group col-lg-4 col-sm-12' id='single-mail-input' style='    display: none;'>
                                <label> {{ __('Target`s Email') }} </label>
                                <input type='text' name='target_mail' >
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

                        <!-- Step 3 -->
                        <div class="tab-pane fade row" id="layout" role="tabpanel" aria-labelledby="profile-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='col-md-12 layouts-slick'>
                                <div style='width: 100%;'>
                                    @foreach($templates as $option)
                                        <h3> {{$option['label']}} : </h3>
                                        <img style='max-width: 100%;' src="{{$option['thumb']}}">
                                    @endforeach
                                </div>
                            </div>
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>
                            <div class='form-group col-md-6'>
                                <label> {{ __('Layouts') }} </label>
                                <select name='template_name'>
                                    @foreach($templates as $option)
                                        <option value='{{$option["value"]}}'> {{$option["label"]}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Step 4 -->
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
                                <textarea required class="{{ $errors->has('email_content') ? ' is-invalid' : '' }}" id='blog-ckeditor' name='content'>{{ old('email_content') }}</textarea>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'email_content'])
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="tab-pane fade row" id="options-and-confirmation" role="tabpanel" aria-labelledby="options-and-confirmation-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
                            </div>

                            <div class='form-group col-md-12'>
                                <label> {{ __('Active') }} </label>
                                <input class="{{ $errors->has('active') ? ' is-invalid' : '' }}" type='checkbox' name='active' value="{{ old('active') }}" >
                                <small> When not active, the automatic email system will not even test if the time conditions for this email are being met </small>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'active'])
                            </div>

                            <div class='form-group col-md-6'>
                                <label> {{ __('Subject') }} </label>
                                <input class="{{ $errors->has('topic') ? ' is-invalid' : '' }}" type='text' name='email_topic' value="{{ old('topic') }}" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'topic'])
                            </div>

                            <div class='form-group col-md-6'>
                                <label> {{ __('Name in the from') }} </label>
                                <input class="{{ $errors->has('from') ? ' is-invalid' : '' }}" type='text' name='from' value="Sogniamo In Grande" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'from'])
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
        function onChangeIntervalType(){
            var day_of_week_input = document.getElementById("day_of_week");
            var day_of_month_input = document.getElementById("day_of_month");
            var special_day_input = document.getElementById("special_day");
            
            day_of_week_input.style.display = "none";
            day_of_month_input.style.display = "none";
            special_day_input.style.display = "none";

            var TimeConditionTypeSelect = document.getElementById("TimeConditionTypeSelect");
            if(TimeConditionTypeSelect.value == 'Weekly') {
                day_of_week_input.style.display = "flex";
            }else if(TimeConditionTypeSelect.value == 'Monthly') {
                day_of_month_input.style.display = "flex";
            }else if(TimeConditionTypeSelect.value == 'Annualy') {
                special_day_input.style.display = "flex";
            }
            
        }

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
            onChangeIntervalType();
            onChangeTargetType();
        });
    </script>
@endsection