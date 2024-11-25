<!-- Div do Card -->
<div
    class="mt-5 bg-transparent border border-[#d9d9d9] rounded-2xl h-56 w-auto max-w-3xl mx-auto p-5 grid grid-cols-3 w-full h-full">
    <!-- Coluna da esquerda (imagem) -->
    <div class="col-span-1 h-56 w-32 ">
        <img src="{{ asset('img/imageforchange.svg') }}" alt="Imagem" class="object-cover rounded-2xl" />
    </div>
    <div class="flex col-start-2 col-span-2 grid grid-rows-6">
        <!-- Coluna da direita (ícone e texto) -->
        <div class="flex justify-end text-[#A6A6A6] text-xs space-x-2">
            <img src="{{ asset('img/clock.svg') }}" alt="Clock" class="h-4 w-4">
            <span>06 nov</span>
        </div>
        <!-- Coluna da direita (ícone e texto) -->
        <div class="flex justify-start text-[#A6A6A6] text-xs space-x-2 pl-5 md:pl-0">
            <span>Nome da Empresa</span>
        </div>
        <div class="flex justify-start font-bold text-sm space-x-2 pl-5 md:pl-0">
            <span>Descrição do produto</span>
        </div>
        <div class="row-start-6 flex justify-end text-right font-bold text-xs space-x-2 pl-5 md:pl-0 items-center">
            <span>Agende uma reunião com essa empresa</span>
            <img src="{{ asset('img/calendar-rounded.svg') }}" alt="Clock" class="h-8 w-8">
        </div>
    </div>
    <!-- Nova linha para o texto "Ver detalhes" -->
    <div class="flex justify-self-end col-start-2 col-span-2 text-xs font-bold space-x-2 border border-[#d9d9d9] p-2 rounded-2xl max-w-28 cursor-pointer"
        wire:click="verDetalhes">
        <span>Ver detalhes</span>
        <img src="{{ asset('img/arrow-right.svg') }}" alt="Arrow" class="h-4 w-4">
    </div>
</div>
