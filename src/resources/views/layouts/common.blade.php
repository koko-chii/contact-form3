<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@yield('styles')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            {{-- 見本に合わせて、ここにはタイトルロゴだけを記述します --}}
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>

