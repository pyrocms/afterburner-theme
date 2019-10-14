{{-- {% import "pyrocms.theme.afterburner::macros/sections.twig" as menu %} --}}

<aside id="menu" class="w-56 p-6 bg-gray-200">

    <ul>
        @foreach ($template->get('cp')->getSections()->root()->visible() as $section)
            {{dd($section)}}
            {{-- {{ menu.sections(template.cp.sections, section) }} --}}
        @endforeach
    </ul>

</aside>
