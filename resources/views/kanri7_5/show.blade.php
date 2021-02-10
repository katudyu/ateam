@extends('layouts.kanri0')
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
詳細画面

@endsection
@section('content')
<table>
   <tr><th>ID</th><th>サイト名</th><th>画像</th><th>Url</th></tr>
       <tr>
           <td>{{$item->site_id}}</td>
           <td>{{$item->site_name}}</td>
           <td>{{$item->site_ig}}</td>
           <td>{{$item->site_url}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 管理者
@endsection
