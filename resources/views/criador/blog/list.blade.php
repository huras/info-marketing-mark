@extends('layouts/criador')

@section('content')
    <div class='container home-dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <span> Blog Posts </span>
            </h1>
        </div>
        <div class='row'>
            <!-- @include('partials/criador-table', ['items' => $posts, 'fields' => ['id' => 'text', 'title' => 'text', 'call' => 'text', 'cover' => 'image']]); -->

            <div class='col-md-12 criador-header'>
                <div class='actions'>
                    <a href='/admin/blog/new' class='action green'>
                        <i class="fas fa-plus"></i>
                        <div class='title'> New Post </div>
                    </a>
                </div>
            </div>

            <div class='col-md-12' style='margin-top: 8px; text-align: center;'>
                Showing {{count($posts)}} of {{$total}} total registers
            </div>

            @if(count($posts) > 0)
                <table class='col-md-12 criador-table hand'>
                    <thead>
                        <tr class='color-yes'>
                            <th></th>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Clicks</th>
                            <th style='min-width: 115px;'>Date</th>
                            <th style='min-width: 170px'>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $tableColor = false; ?>
                        @foreach($posts as $item)
                            <tr <?php if($tableColor) { echo 'class="color-yes" '; $tableColor = !$tableColor; } else {$tableColor = !$tableColor; }  ?> >
                                <td class='<?php if($item->status == 1) echo "published"; ?>'> </td>
                                <td>
                                    <div style='display: flex; justify-content:center; align-items:center;'>
                                        @switch($item->cover_type_id)
                                            @case(0)
                                                N/A
                                            @break
                                            @case(1)
                                                <img src="{{asset('images/posts/'.$item->id.'/'.$item->cover)}}">
                                            @break
                                            @case(2)
                                                <iframe width="220" height="150" src="https://www.youtube.com/embed/{{$item->cover}}"> </iframe>
                                            @break
                                        @endswitch
                                    </div>
                                </td>
                                <td style='text-align: center;'> {{$item->title}} </td>
                                <td style='text-align: center;'> {{$item->clicks}} </td>
                                <td> {{$item->created_at}} </td>
                                <td>
                                    <div class='actions'>
                                        @if($item->status == 0)
                                            <a href='/admin/blog/publish/{{$item->id}}' class='table-action-button blue' title='Make this post avaliable to readers'>
                                                <i class="far fa-eye"></i>
                                                <span> Show </span>
                                            </a>
                                        @else
                                            <a href='/admin/blog/hide/{{$item->id}}' class='table-action-button gray' title='Hide this post from readers'>
                                                <i class="far fa-eye-slash"></i>
                                                <span> Hide </span> 
                                            </a>
                                        @endif
                                        <a href='/admin/blog/{{$item->id}}/edit' class='table-action-button yellow' title='Edit this post'>
                                            <i class="fas fa-edit"></i>
                                            <span> Edit </span> 
                                        </a>
                                        <a href='/admin/blog/destroy/{{$item->id}}' class='table-action-button red' title='Delete this post (permanent)'>
                                            <i class="fas fa-trash-alt"></i>
                                            <span> Delete </span> 
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            <div class='col-md-12' style='margin-top: 16px; margin-bottom: 64px; display: flex; justify-content: center;'>
                {{ $posts->links() }}
            </div>            
            @else
                <h1> Nenhum registro </h1>
            @endif
        </div>
    </div>
@endsection