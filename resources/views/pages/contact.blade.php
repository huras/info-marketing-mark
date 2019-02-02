@extends('layouts/themed')

@section('content')
    @include('partials/home-header')
        <div class='container'>
            <div class='row contact-form'>
                    <h1 style='text-align: center;'> {{__('Contact')}} </h1>
                    <form method='POST' action='/contact' class='w-100' style='display: flex; flex-wrap: wrap;'>
                        {{ csrf_field() }}

                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label> Name </label>
                                <input type='text' name='name'>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label> E-mail </label>
                                <input type='text' name='email'>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label> Phone </label>
                                <input type='text' name='phone'>
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label> Topic </label>
                                <select name='topic'>
                                    @foreach($topics as $topic)
                                        <option value='{{$topic}}'> {{$topic}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class='col-md-12'>
                            <div class='form-group'>
                                <label> Message </label>
                                <textarea rows='7' name='message'></textarea>
                            </div>
                        </div>

                        <div class='col-md-12'>
                            <div class='form-group' style='width:100%; display:flex; justify-content:center; align-items: center;'>
                                <input type='submit' style='width:50%;' value='Submit'>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @include('partials/footer')
@endsection