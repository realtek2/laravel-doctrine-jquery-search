@extends('layout')

@section('content')
<h1 class="bg-full">My new work — here!</h1>
<div class="mt-3">
    <table id="SearchTable" class="mdc-data-table__cell hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Category</th>
                <th>Company</th>
                <th style="width: 15%">Date created</th>
            </tr>
        </thead>
    </table>
</div>
@endsection