@extends('layouts.kanri5')
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
リンク一覧
@endsection
<h1><a href="Kanri7_2">管理者ページへ</a></h1>
@section('content')
<h3><a href="Kanri7_5/add">新規登録</a></h3>
   <table>
   <tr><th><a href="Kanri7_5?sort=site_id">ID</th><th>サイト名</th><th>画像</th><th>Url</th><th>詳細</th><th>変更</th><th>削除</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->site_id}}</td>
           <td>{{$item->site_name}}</td>
           <td>{{$item->site_ig}}</td>
           <td>{{$item->site_url}}</td>
           <td><a href="/Kanri7_5/show?site_id={{$item->site_id}}">詳細</a></td>
           <td><a href="/Kanri7_5/edit?site_id={{$item->site_id}}">変更</a></td>
           <td><a href="/Kanri7_5/del?site_id={{$item->site_id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2020 管理者.
@endsection