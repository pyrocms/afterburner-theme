{{--{% htmlcompress %}--}}
<html lang="{{ config('app.locale') }}">

<head>
    @include('pyrocms.theme.afterburner::partials/metadata')
</head>

<body>

<main id="app">

    @include('pyrocms.theme.afterburner::partials/messages')

    @yield('content')

</main>

{{--{% include "pyrocms.theme.afterburner::partials/assets" %}--}}

</body>
</html>
{{--{% endhtmlcompress %}--}}
