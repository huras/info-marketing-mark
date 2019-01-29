@if(count($items) > 0)
    <table class='col-md-12'>
        <thead>
            <tr>
                @foreach($items[0]->getOriginal() as $key => $value)
                    @if(array_key_exists($key, $fields))
                        <th>
                            {{$key}}
                        </th>
                    @endif
                @endforeach
            </tr>
        </thead>

        <tbody>
            @foreach($items as $item)
                <tr>
                    @foreach($item->getOriginal() as $key =>  $value)
                        @if(array_key_exists($key, $fields))
                            @switch($fields[$key])
                                @case('text')
                                    <td> {{$value}} </td>
                                @break
                                @case('image')
                                    <td> <img src='{{$value}}'> </td>
                                @break
                            @endswitch
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h1> Nenhum registro </h1>
@endif