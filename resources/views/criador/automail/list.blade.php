@extends('layouts/criador')

@section('content')
    <?php $dayOfTheWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']; ?>
    <?php $meses_abreviados = ['Not a month','January','Febuary','March','April','May','June','July','August','September','October','November','December']; ?>


    <div class='container home-dashboard'>
        <div class='row criador-breadcrumb'>
        <h1 style='color: black;'> 
                <a href='/'> <i class="fas fa-home"></i> </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <a href='/mail/dashboard'> Email System </a> <i class="fas fa-caret-right"></i>
                <span> Automails </span>
            </h1>
        </div>
        @if(session()->has('window_msg'))
            <div class='w-100 window-msg home'>
                <div class='row'>
                    <div class='col-lg-12 col-md-6 col-sm-12'>
                        <div class="window-message {{ Session::get('msg_context') }} w-100"> {{ Session::get('window_msg') }} </div>
                    </div>
                </div>
            </div>
            <p class="alert "></p>
        @endif

        <div class='row'>
            <div class='col-md-12 criador-header'>
                <div class='actions'>
                    <a href='/automail/new' class='action green'>
                        <i class="fas fa-plus"></i>
                        <div class='title'> New Automail </div>
                    </a>
                </div>
            </div>

            @if(count($automails) > 0)
                <table class='col-md-12 criador-table hand'>
                    <thead>
                        <tr class='color-yes'>
                            <th>ID</th>
                            <th>Targets</th>
                            <th>Interval</th>
                            <th>Conditions</th>
                            <th>Template</th>
                            <th>Topic</th>
                            <th>Content sample</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $tableColor = false; ?>
                        @foreach($automails as $item)
                            <tr>
                                <td class="<?php if($item->active) echo 'published'; ?>"> {{$item->id}} </td>
                                <td style='text-align: center; max-width: 160px;'>
                                    @switch($item->target_type)
                                        @case('all')
                                            All contacts
                                        @break
                                        @case('has-name')
                                            Only contacts with first and last names
                                        @break
                                        @case('has-first_name')
                                            Only contacts with at least the first name
                                        @break
                                        @default
                                            {{$item->target_type}}
                                        @break
                                    @endswitch
                                 </td>     
                                <td style='text-align: center;'>
                                    {{$item->time_condition_type}}
                                 </td>                                
                                <td style='text-align: center;'>
                                    @switch($item->time_condition_type)
                                        @case('Daily')
                                            At <br>{{$item->shot_time}}
                                        @break
                                        @case('Weekly')
                                            Every {{$dayOfTheWeek[$item->day_of_week]}} at <br>
                                            {{$item->shot_time}}
                                        @break
                                        @case('Monthly')
                                            Every {{$item->day_of_month}}
                                            @if($item->day_of_month == 1)st @endif
                                            @if($item->day_of_month == 2)nd @endif
                                            @if($item->day_of_month == 3)rd @endif
                                            @if($item->day_of_month > 3)th @endif
                                            day <br>
                                            at {{$item->shot_time}}
                                        @break
                                        @case('Annualy')
                                            Every <br>
                                            {{$meses_abreviados[number_format(date( "m", strtotime($item->special_day)))]}}/{{ date( "d", strtotime($item->special_day)) }} at <br>
                                            at {{$item->shot_time}}
                                        @break
                                        @default
                                            ???
                                        @break
                                    @endswitch
                                </td>
                                <td style='text-align: center;'> {{$item->template_name}} </td>
                                <td style='text-align: center;'> {{$item->topic}} </td>
                                <td style='max-width: 250px; white-space: pre-line;'> {{substr($item->content, 0, 128)}} <?php if(strlen($item->content) > 255) echo '...'; ?> </td>
                                <td>
                                    <div class='actions'>
                                        @if(!$item->active)
                                            <a href='/automail/activate/{{$item->id}}' class='table-action-button gray' title='Activate this automail'>
                                                <i class="fas fa-toggle-off"></i>
                                                <span> Activate </span>
                                            </a>
                                        @else
                                            <a href='/automail/deactivate/{{$item->id}}' class='table-action-button blue' title='Deactivate this automail'>
                                                <i class="fas fa-toggle-on"></i>
                                                <span> Deactivate </span> 
                                            </a>
                                        @endif
                                        <a href='/automail/{{$item->id}}/preview' class='table-action-button yellow' title='Preview this automail message'>
                                            <i class="far fa-envelope-open"></i>
                                            <span> Preview </span> 
                                        </a>
                                        <!-- <a href='/automail/{{$item->id}}/edit' class='table-action-button yellow' title='Edit this automail'>
                                            <i class="fas fa-edit"></i>
                                            <span> Edit </span> 
                                        </a> -->
                                        <a href='#' onclick="confirmDelete({{$item->id}})" class='table-action-button red' title='Delete this automail (permanent)'>
                                            <i class="fas fa-trash-alt"></i>
                                            <span> Delete </span> 
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>            
            @else
                <h1 style='color: black;'> No entries </h1>
            @endif
        </div>
    </div>

    <script>
    function confirmDelete(id){
        if (window.confirm('Do you really want to delete the automail '+id+' ?'))
        { 
            window.location = '/automail/destroy/'+id;
        }
    }
    </script>
@endsection