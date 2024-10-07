@extends('client.layouts.master')
@section('title', 'Mẫu CV')

@section('content')
    <main class="main">
        <div class="container mt-5 p-4 bg-white rounded shadow">
        {!! $templateContent !!}
        </div>

    </main>

@endsection
