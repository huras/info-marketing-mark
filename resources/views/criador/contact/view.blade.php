@extends('layouts/criador')

@section('content')
    <div class='container home-dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/'> <i class="fas fa-home"></i> </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/contacts'> Contacts </a> <i class="fas fa-caret-right"></i>
                <span> Contact #{{$contact->id}} </span>
            </h1>
        </div>
        <div class='row'>
            <div class='col-md-6 field-group'>
                <label> Name </label>
                <div class='value'> {{$contact->name}} </div>
            </div>
            <div class='col-md-6 field-group'>
                <label> Topic </label>
                <div class='value'> {{$contact->topic}} </div>
            </div>
            <div class='col-md-12 field-group'>
                <label> Created At </label>
                <div class='value'> {{$contact->created_at}} </div>
            </div>

            <div class='col-md-12 field-group'>
                <label> Message </label>
                <div class='value'> {{$contact->message}} </div>
            </div>

            <div class='col-md-6 field-group'>
                <label> Email </label>
                <div class='value'> {{$contact->email}} </div>
            </div>
            <div class='col-md-6 field-group'>
                <label> Phone </label>
                <div class='value'> {{$contact->phone}} </div>
            </div>
        </div>
    </div>
@endsection