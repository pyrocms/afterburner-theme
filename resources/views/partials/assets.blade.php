{#
    Main CSS can be found in metadata.twig
#}
{{-- {{ assets()->scripts("pyrocms.theme.afterburner::js/theme.js", ["min", "watch@pyrocms.theme.afterburner::js/"]) }} --}}

{# Include Scripts Loaded From Outside #}
@foreach (assets()->scripts("scripts.js", ["min"]) as $script)
    {{ $script }}
@endforeach

{# Deferred JS Includes #}
{{ $template->includes->render('scripts') }}

{# Include Styles Loaded From Outside #}
@foreach (assets()->styles("styles.css", ["min"]) as $style)
    {{ $style }}
@endforeach
