{{-- {{ assets()->scripts("pyrocms.theme.afterburner::js/theme.js", ["min", "watch@pyrocms.theme.afterburner::js/"]) }} --}}

@foreach (assets()->scripts("scripts.js", ["min"]) as $script)
    {!! $script !!}
@endforeach

{{ $template->includes->render('scripts') }}

@foreach (assets()->styles("styles.css", ["min"]) as $style)
    {!! $style !!}
@endforeach
