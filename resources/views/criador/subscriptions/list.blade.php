@extends('layouts/criador')

@section('content')
    <div class='container home-dashboard'>
        <div class='row criador-breadcrumb'>
            <h1 style='color: black;'> 
                <a href='/'> <i class="fas fa-home"></i> </a> <i class="fas fa-caret-right"></i>
                <a href='/admin/dashboard'> Dashboard </a> <i class="fas fa-caret-right"></i>
                <span> Subscriptions </span>
            </h1>
        </div>
        <div class='row'>
            <div class='col-md-12' style='margin-top: 8px; text-align: center;'>
                Showing {{count($subs)}} of {{$total}} total registers
            </div>

            @if(count($subs) > 0)
                <table class='col-md-12 criador-table hand'>
                    <thead>
                        <tr class='color-yes'>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Created At</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $tableColor = false; ?>
                        @foreach($subs as $item)
                            <tr <?php if($tableColor) { echo 'class="color-yes" '; $tableColor = !$tableColor; } else {$tableColor = !$tableColor; }  ?> >
                                <td> {{$item->first_name}} </td>
                                <td> {{$item->last_name}} </td>
                                <td> {{$item->email}} </td>
                                <td> {{$item->phone}} </td>
                                <td> {{$item->created_at}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1 style='color: black;'> No entry </h1>
            @endif
        </div>
    </div>
@endsection