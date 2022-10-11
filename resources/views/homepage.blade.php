<x-main>

    <x-slot name="title">Homepage</x-slot>
    <x-slider></x-slider>

    <x-slot name="content">
        <x-slider></x-slider>
        <section class="w-10/12 mx-auto flex justify-around flex-wrap">
            @foreach ($mycard as $sofa)
            <x-card>
                <x-slot name="name">{{ $sofa->name }}</x-slot>
                <x-slot name="description">{{ $sofa->description }}</x-slot>
            </x-card>
            @endforeach
        </section>
    </x-slot>

</x-main>

