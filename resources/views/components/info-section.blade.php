<div class="mx-8 md:mx-40 mt-8">
    <h1 class="font-bold text-3xl md:text-4xl text-center mb-6">{{ $title }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        @if($iconPosition === 'left')
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset($icon) }}" alt="{{ $iconAlt }}" class="h-[300px] md:h-[400px]" />
            </div>
            <div>
                <h2 class="text-lg font-bold">{{ $subtitle }}</h2><br>
                <p class="text-justify">{!! $content !!}</p>
            </div>
        @else
            <div>
                <h2 class="text-lg font-bold">{{ $subtitle }}</h2><br>
                <p class="text-justify">{!! $content !!}</p>
            </div>
            <div class="flex justify-center md:justify-end">
                <img src="{{ asset($icon) }}" alt="{{ $iconAlt }}" class="h-[300px] md:h-[400px]" />
            </div>
        @endif
    </div>
</div>
