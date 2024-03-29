@extends('theme::layouts/blank')

@section('content')
    
    @php
        $form  = form('login')->redirect('admin')->get();
        
        $colors = [
            'gray', 'blue', 'indigo', 'pink', 'red', 'orange', 'yellow', 'green', 'teal'
        ];
        
        $color = $colors[array_rand($colors)];
    @endphp

    <div class="flex h-screen items-stretch">
        <div class="w-1/2 flex justify-center items-center bg-white overflow-hidden p-4 px-3 py-10 bg-gray-200 flex justify-center border-gray-400 border-0 border-r-2">

            <div class="w-full max-w-xs position-relative">
                {{ $form->open(['class' => 'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 fadeIn fast animated']) }}
                <div class="mb-4">

                    {{-- {% if config('anomaly.module.users::login', 'email') == 'username' %}

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>

                        {#{{ form.fields.username.setPlaceholder(form.fields.username.label).addAttribute('autofocus', 1).input }}#}
                    {% else %}

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>

                        {#{{ form.fields.email.setPlaceholder(form.fields.email.label).addAttribute('autofocus', 1).input }}#}
                    {% endif %} --}}

                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="username" type="text" placeholder="Username" autofocus>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-between">
                    <button class="w-full bg-{{ $color }}-500 hover:bg-{{ $color }}-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        {{ trans('anomaly.module.users::button.login') }}
                    </button>
                </div>
                {{ $form->close() }}

                <a class="inline-block align-baseline font-bold text-xs text-bold text-gray-500 hover:text-gray-800 py-2 px-4 rounded focus:outline-none focus:shadow-outline" href="#">
                    {{ trans('anomaly.module.users::message.forgot_password') }}
                </a>

            </div>

            <div class="absolute bottom-0 left-0 ml-2 mb-2 text-gray-500 text-xs fadeInUp animated delay-1s">
                PYRO
                <span>{{ config('streams::distribution.version') }}</span>
            </div>

            {{-- <div class="absolute bottom-0 right-0 mb-2 mr-2">
        <a href="https://pyrocms.com/" class="p-2 bg-{{ $color }}-800 hover:bg-{{ $color }}-700 transition-bg items-center text-{{ $color }}-100 leading-none lg:rounded-full flex lg:inline-flex" target="_blank">
            <span class="flex rounded-full bg-{{ $color }}-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">v3.7 Released</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </a>
            </div> --}}

        </div>
        <div class="w-1/2 flex justify-center align-center items-center bg-{{ $color }}-500">
            <div class="svg-fill-white login-icon fadeIn fast animated">
                {!! img('pyrocms.theme.afterburner::img/logo.svg')->data() !!}
            </div>
        </div>
    </div>

@endsection
