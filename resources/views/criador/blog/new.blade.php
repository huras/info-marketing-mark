@extends('layouts/criador')

@section('content')
    <div class='container'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/blog'> Blog </a> <i class="fas fa-caret-right"></i>
                <span> New Blog Post </span>
            </h1>
        </div>

        <div class='w-100 criador-form'>
            <form class='w-100' method="POST" action="/admin/blog/create" enctype="multipart/form-data">
                <div class='form-group w-100'>
                    <input type='submit' class='my-btn save' value='Save'>
                </div>
                {{ csrf_field() }}

                <div class="bd-example bd-example-tabs w-100">
                    <ul class="nav nav-tabs w-100" id="myTab" role="tablist">
                        <div class='form-group col-md-12'>
                            <div class='separator'></div>
                        </div>
                        <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Post Status</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cover</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active show" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Content</a>
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
                            
                            <div class='form-group col-md-12'>
                                <div>
                                    <label style='width:unset;'> {{ __('Type') }} </label>
                                </div>
                                <select id='cover_type_select' class="{{ $errors->has('cover_type_id') ? ' is-invalid' : '' }}" name='cover_type_id' onchange='onChangeCoverType()'>
                                        <option value='0'> None </option>
                                    @foreach($cover_types as $type)
                                        <option <?php if(old('cover_type_id') == $type->id) echo " selected "; ?> value='{{$type->id}}' > {{$type->name}} </option>
                                    @endforeach
                                </select>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'cover_type_id'])
                            </div>

                            <div class='form-group col-md-12' id='image-input'>
                                <input class="{{ $errors->has('cover') ? ' is-invalid' : '' }}" type='file' accept="image/*" name='cover' value="{{ old('cover') }}" >
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'cover'])
                            </div>

                            <div class='form-group w-100' id='video-input' style='display: flex; flex-direction: row; align-items: center;'>
                                <div class='col-md-1'>
                                    <label style='width:unset;'> {{ __('Link') }} </label>
                                </div>
                                <div class='col-md-11'>
                                    <input class="{{ $errors->has('cover') ? ' is-invalid' : '' }}" type='text' name='cover' value="{{ old('cover') }}" >
                                </div>
                                @include('partials/form-errors', ['errors' => $errors, 'fieldName' => 'cover'])
                            </div>
                        </div>
                        <div class="tab-pane fade row active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class='form-group col-md-12'>
                                <div class='separator'></div>
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

@section('scripts')
    <script>
        function onChangeCoverType(){
            var imageInput = document.getElementById("image-input");
            var videoInput = document.getElementById("video-input");

            var coverTypeSelect = document.getElementById("cover_type_select");
            if(coverTypeSelect.value == 1) {
                imageInput.style.display = "flex";
                videoInput.style.display = "none";
            }
            else if(coverTypeSelect.value == 2) {
                imageInput.style.display = "none";
                videoInput.style.display = "flex";
            }
            else{
                imageInput.style.display = "none";
                videoInput.style.display = "none";
            }
        }

        $( document ).ready(function() {
            onChangeCoverType();
        });
    </script>
@endsection