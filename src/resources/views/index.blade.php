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
                <label>お名前<span class="form__label--required">必須</span></label>
            </div>
            <div class="form__input">
                <input type="text" name="name" value="{{ old('name') }}"
                placeholder="テスト太郎">
                @error('name')
                    <p class="error">② {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form__label">
                <label>メールアドレス<span class="form__label--required">必須</span></label>
            </div>
            <div class="form__input">
                <input type="email" name="email" value="{{ old('email') }}"
                placeholder="test@example.com">
                @error('email')
                    <p class="error">④ {{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form__label">
                <label>電話番号<span class="form__label--required">必須</span></label>
            </div>
            <div class="form__input">
                <input type="tel" name="tel" value="{{ old('tel') }}"
                placeholder="09012345678">
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
                <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
            </div>
        </div>

        <div class="form__button">
            <button type="submit">送信</button>
        </div>
    </form>
</div>
@endsection




