@extends('client.layouts.master')
@section('title', 'Chỉnh sửa CV')

@section('content')
    <main class="main">
        <div class="container">
            <h4>Chỉnh sửa CV - {{ $template->template_name }}</h4>
        </div>
        <div class="container mt-5 p-4 bg-white rounded shadow">
            <form action="{{ route('client.cv.update', $template->id) }}" method="POST">
                @csrf
                <!-- Hiển thị toàn bộ nội dung mẫu CV với các input được thay thế -->
                <div class="cv-template">
                    {!! $templateContent !!}
                </div>

                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary">Lưu CV</button>
                </div>
            </form>
        </div>
    </main>

@endsection
