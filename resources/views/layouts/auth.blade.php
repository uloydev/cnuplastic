<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.meta')
    <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/seller.css') }}">
    @stack('styles')
</head>

<body style="background-color: #FF5733">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                @if($message = Session::get('status'))
                <x-alert type="info">
                    <strong>Status</strong>
                    {{ $message }}
                </x-alert>
                @endif
                @if ($errors->any())
                    <x-alert type="warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </x-alert>
                @endif
                @yield('content')
            </div>
        </section>
    </div>
    @stack('scripts')
    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
