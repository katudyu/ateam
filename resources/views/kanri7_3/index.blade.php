@extends('layouts.kanri3')
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
会員情報一覧
@endsection
<h1><a href="Kanri7_2">管理者ページへ</a></h1>
@section('content')

<form action="/Kanri7_3/find" method="post">
    @csrf
    <find><input type="text" name="input" value="{{$input}}"></find>
    <input type="submit" value="検索">
    </form>
<h3><a href="Kanri7_3/add">新規登録</a></h3>
   <table  align="center">
   <tr>
   <th><a href="Kanri7_3?sort=id">ID</a></th><th>名前</th><th>Eメール</th><th>詳細</th><th>更新</th><th>削除</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td><a href="/Kanri7_3/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/Kanri7_3/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/Kanri7_3/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
    {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection

