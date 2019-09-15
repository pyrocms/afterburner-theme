<section id="messages" class="fixed bottom-0 right-0">

    @if(messages()->has('success'))
        <div class="p-6 w-72 bg-green-500 text-green-100 color-white rounded mr-3 mb-3">
            @foreach(messages()->pull('success') as $message)
                {!! trans($message) !!}
            @endforeach
        </div>
    @endif

    @if(messages()->has('info'))
        <div class="p-6 w-72 bg-blue-500 text-blue-100 color-white rounded mr-3 mb-3">
            @foreach(messages()->pull('info') as $message)
                {!! trans($message) !!}
            @endforeach
        </div>
    @endif

    @if(messages()->has('warning'))
        <div class="p-6 w-72 bg-orange-500 text-orange-100 color-white rounded mr-3 mb-3">
            @foreach(messages()->pull('warning') as $message)
                {!! trans($message) !!}
            @endforeach
        </div>
    @endif

    @if(messages()->has('danger'))
        <div class="p-6 w-72 bg-red-500 text-red-100 color-white rounded mr-3 mb-3">
            @foreach(messages()->pull('danger') as $message)
                {!! trans($message) !!}
            @endforeach
        </div>
    @endif

</section>
