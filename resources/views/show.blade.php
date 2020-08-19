@extends('layout')

@section('content')
<div class="mt-5">
    <h1>{{ $item['title'] }}</h1>
    <p>Company : <em><b>{{ $item['company'] }}</b></em></p>
    <p>Category : <b>{{ $item['categories'] }}</b></p>
    <p>{{ $item['content'] }}</p>
</div>
@endsection