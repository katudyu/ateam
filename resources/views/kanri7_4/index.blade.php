@extends('layouts.kanri4')
<style>
.pagination { font-size:10pt; }
.pagination li { display:inline-block }
tr th a:link { color: white; }
tr th a:visited { color: white; }
tr th a:hover { color: white; }
tr th a:active { color: white; }
</style>
@section('title', 'Kanri')

@section('menu_title')
お問い合わせ内容
@endsection
<h1><a href="Kanri7_2">管理者ページへ</a></h1>
@section('content')
   <table>
   <tr><th><a href="Kanri7_4?sort=opinion_id">ID</th><th>内容</th><th>返信</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->opinion_id}}</td>
           <td>{{$item->opinioncontent}}</td>
           <td><a href="/Kanri7_4/input?opinion_id={{$item->opinion_id}}">返信</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection