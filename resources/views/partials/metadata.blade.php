{#
  The following 2 meta tags *must* come first in the <head>
  to consistently ensure proper document rendering.
  Any other head element should come *after* these tags.
#}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{# Locale #}
<meta http-equiv="Content-Language" content="{{ config('app.locale') }}">

{# To the Future! #}
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

{# Meta Tags #}
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="{{ config('streams::distribution.name') }}"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="{{ trans($template->get('meta_description') ?: config('app.name')) }}"/>

{# Meta Includes #}
{{ $template->includes->render('meta') }}

<title>
    {{ config('app.name') }}
    &#8250;
    {{ trans($template->meta_title ?: config('app.name')) }}
</title>

{# Favicon #}
{{ favicons("pyrocms.theme.afterburner::img/favicon.png") }}

{# Important!! #}
{{ constants() }}

{# Main Theme Styles #}
{{ assets()->style("pyrocms.theme.afterburner::css/theme.css", ["min", "watch@pyrocms.theme.afterburner::css/"]) }}

{# Head Includes #}
{{ $template->includes->render('head') }}
