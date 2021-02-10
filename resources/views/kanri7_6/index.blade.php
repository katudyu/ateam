@extends('layouts.kanri6')
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
企業情報一覧画面
@endsection
<h1><a href="Kanri7_2">管理者ページ</a></h1>
@section('content')
<form action="/Kanri7_6/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>

<h3><a href="Kanri7_6/add">新規登録</a></h3>
   <table>
   <tr><th><a href="Kanri7_6?sort=id">ID</th><th>会社名</th><th>担当者名</th><th>電話番号</th><th>Eメール</th><th>詳細</th><th>更新</th><th>削除</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->company_name}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->phone_number}}</td>
           <td>{{$item->email}}</td>
           <td><a href="/Kanri7_6/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/Kanri7_6/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/Kanri7_6/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection

