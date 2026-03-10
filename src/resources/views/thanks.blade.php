@extends('common')

@section('title', '送信完了')

@section('content')
    <h2>送信が完了しました</h2>
    <p>お問い合わせいただきありがとうございました。</p>
    <a href="{{ route('form.index') }}">TOPへ戻る</a>
@endsection
