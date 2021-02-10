@extends('layouts.contactdone')

<input class="click1" type="button" onclick="location.href='./form'" value="戻る"><br>

<h1>送信内容確認</h1>

<form action="{{action('ContactController5@process')}}" method="POST">

{{$contact->message}}
 
@foreach($contact->getAttributes() as $key => $value)
<input type="hidden" name="{{$key}}" value="{{$value}}">
@endforeach

<input class="click" type="button" onclick="location.href='./process'" value="送信"><br>