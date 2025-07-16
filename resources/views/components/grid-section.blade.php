@props(['title','description'])
<x-filament::section @class(["pt-6 gap-4 filament-breezy-grid-section"]) {{ $attributes }}>

    <x-filament::section.heading>
        <h3 @class(['text-lg font-medium filament-breezy-grid-title'])>{{$title}}</h3>

        <p @class(['mt-1 text-sm text-gray-500 filament-breezy-grid-description'])>
            {{$description}}
        </p>
    </x-filament::section.heading>

    <x-filament::section.description>
        {{ $slot }}
    </x-filament::section.description>

</x-filament::section>
