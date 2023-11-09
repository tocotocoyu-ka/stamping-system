@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/stamp.css">
@endsection

@section('content')
<div class="stamping-content">
    <div class="stamping-heading">
        @foreach ($creates as $create)
        <h2>{{$create->name}}お疲れ様です！</h2>
        @endforeach
    </div>
    <form class="stamping__button" action="/stamp" method="post">
        @csrf
        <button class="stamping__button-submit" type="submit">勤務開始</button>
        <button class="stamping__button-submit" type="submit">勤務終了</button>
        <button class="stamping__button-submit" type="submit">休憩開始</button>
        <button class="stamping__button-submit" type="submit">休憩終了</button>
    </form>
</div>
@endsection