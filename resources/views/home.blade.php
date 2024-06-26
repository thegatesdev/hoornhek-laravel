<x-info-layout>
    <x-banner class="bg-gradient-brown">
        <div class="flex-1"></div>
        <div class="flex-none h-full">
            <x-application-logo class="w-auto h-full"></x-application-logo>
        </div>
        <div class="flex-1 flex flex-row justify-center space-x-4">
            <a href="{{ route('login') }}">Log in</a>
        </div>
    </x-banner>

    <x-banner-img class="h-60"></x-banner-img>
    
    <x-banner>
        <x-banner-twopiece header="Hello world!">
            Today sucks! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias consequatur dolorum dolores, assumenda nisi provident, cumque vitae, incidunt architecto totam ducimus minima minus autem aliquam deleniti voluptates odit sed quod nihil porro a ut veniam iure nostrum! Sint, dolorum maxime.
        </x-banner-twopiece>
    </x-banner>

    <x-banner-img class="h-60"></x-banner-img>

    <x-banner>
        <x-banner-twopiece header="Hello world 2!">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio corporis exercitationem error alias id eveniet sed eos atque reiciendis vitae.
        </x-banner-twopiece>
    </x-banner>

</x-info-layout>