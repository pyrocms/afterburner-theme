<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta http-equiv="Content-Language" content="{{ config('app.locale') }}">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="{{ config('streams::distribution.name') }}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="{{ trans($template->get('meta_description') ?: config('app.name')) }}"/>

{{ $template->includes->render('meta') }}

<title>
    {{ config('app.name') }}
    &#8250;
    {{ trans($template->meta_title ?: config('app.name')) }}
</title>

{{ favicons("pyrocms.theme.afterburner::img/favicon.png") }}

{{ constants() }}

{!! assets()->style("pyrocms.theme.afterburner::css/theme.css", ["min", "watch@pyrocms.theme.afterburner::css/"]) !!}

{{ $template->includes->render('head') }}
