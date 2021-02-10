@extends('layouts.activityAteam')


@section('content')
   <table>
    <tr>
        
        <th>内容</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td><a href="toro">{{ $item->trophy_id }}</a></td>
        
    </tr>
    @endforeach
</table>
@endsection