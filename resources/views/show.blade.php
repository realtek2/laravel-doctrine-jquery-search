@extends('layout')

@section('content')
<div class="mt-4 custom">
    <h1 class="mb-4">{{ $item['company'] }}</h1>
    <h1 class="mb-4">{{ $item['title'] }}</h1>
    <p class="mt-3">Category : <b>{{ $item['categories'] }}</b></p>
    <p>{{ $item['content'] }}</p>
    <img src="https://getadblock.com/images/dark_banner.png?v=1564022898" width="100%">
    <p>Post date: <em>{{ $item['createdAt'] }}</em></p>
</div>
@endsection