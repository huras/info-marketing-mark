@extends('layouts/criador')

@section('content')
    <div class='container home-dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <span> Contacts </span>
            </h1>
        </div>
        <div class='row'>
            <div class='col-md-12' style='margin-top: 8px; text-align: center;'>
                Showing {{count($contacts)}} of {{$total}} total registers
            </div>

            @if(count($contacts) > 0)
                <table class='col-md-12 criador-table hand'>
                    <thead>
                        <tr class='color-yes'>
                            <th></th>
                            <th> Name </th>
                            <th> Topic </th>
                            <th style='min-width: 115px;'>Created At</th>
                            <th style='min-width: 170px'>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $tableColor = false; ?>
                        @foreach($contacts as $item)
                            <tr <?php if($tableColor) { echo 'class="color-yes" '; $tableColor = !$tableColor; } else {$tableColor = !$tableColor; }  ?> >
                                <td class='<?php if($item->status == 1) echo "published"; ?>'> {{$item->id}} </td>
                                <td style='text-align: center;'> {{$item->name}} </td>
                                <td> {{$item->topic}} </td>
                                <td> {{$item->created_at}} </td>
                                <td>
                                    <div class='actions'>
                                        <a href='/admin/contact/view/{{$item->id}}' class='table-action-button orange' title='View contact details'>
                                            <i class="fas fa-glasses"></i>
                                            <span> View </span> 
                                        </a>
                                        <a href='/admin/contact/destroy/{{$item->id}}' class='table-action-button red' title='Delete this contact (permanent)'>
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
                <h1 style='color: black;'> - Nenhum registro aqui - </h1>
            @endif
        </div>
    </div>
@endsection