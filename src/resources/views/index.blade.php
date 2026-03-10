@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title', 'Contact Form')

@section('content')
<div class="contact-form">

    <h2 class="contact-title">お問い合わせ</h2>

    <form class="form" action="{{ route('form.confirm') }}" method="post">
        @csrf

        <div class="form-group">
            <div class="form__label">
                <label>お名前</label>
            </div>
            <div class="form__input">
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="error">② {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form__label">
                <label>メールアドレス</label>
            </div>
            <div class="form__input">
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="error">④ {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form__label">
                <label>電話番号</label>
            </div>
            <div class="form__input">
                <input type="tel" name="tel" value="{{ old('tel') }}">
                @error('tel')
                    <p class="error">⑥ {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form__label">
                <label>お問合せ内容</label>
            </div>
            <div class="form__input">
                <textarea name="content">{{ old('content') }}</textarea>
            </div>
        </div>

        <div class="form__button">
            <button type="submit">送信</button>
        </div>
    </form>
</div>
@endsection




