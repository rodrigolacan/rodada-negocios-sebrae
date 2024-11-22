<div id="banner" class="relative mt-20">
    <img src="{{ asset($bannerImage) }}" alt="{{ $bannerAlt }}" class="object-cover w-full h-[280px] md:h-[520px] mx-auto object-[94%] md:object-center">

    <!-- Conteúdo do banner em colunas -->
    <div class="absolute top-[100px] left-0 right-0 flex invisible md:visible mx-[100px]">
        <div class="flex flex-col justify-center w-[400px] delay-[300ms] duration-[600ms]">
            <img src="{{ $logo }}" alt="Logo White"><br>
            <h1 class="text-2xl font-bold text-white">{{ $title }}</h1>
            <p class="text-white mt-2 text-justify">{{ $description }}</p>
        </div>
        <div class="flex-1"></div>
    </div>
</div>
