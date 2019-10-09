{{-- {% htmlcompress %} --}}
<html lang="{{ config('app.locale') }}">

<head>
    @include('pyrocms.theme.afterburner::partials/metadata')
</head>

<body>

<div id="app">

    {{-- {% include "pyrocms.theme.afterburner::partials/top" %} --}}

    <div id="main" class="flex">

        {{-- {% include "pyrocms.theme.afterburner::partials/sidebar" %}
        {% include "pyrocms.theme.afterburner::partials/menu" %} --}}

        <div id="content" class="flex-grow bg-gray-100">

            {{-- {% include "pyrocms.theme.afterburner::partials/messages" %}
            {#{% include "pyrocms.theme.afterburner::partials/buttons" %}#} --}}

            @yield('content')

        </div>

    </div>

</div>

{{-- {% include "pyrocms.theme.afterburner::partials/footer" %}
{#{% include "pyrocms.theme.afterburner::partials/modals" %}#}
{% include "pyrocms.theme.afterburner::partials/assets" %} --}}

</body>
</html>
{{-- {% endhtmlcompress %} --}}
