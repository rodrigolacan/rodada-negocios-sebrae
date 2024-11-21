<div class="mt-5 p-5 bg-[#29292C] text-white font-bold shadow-md rounded-2xl">
    <div class="flex justify-between items-center mb-4">
        {{-- Botão Voltar (Arrow Left SVG) --}}
        <button class="p-2 rounded-md"
            wire:click="
                {{ $viewMode === 'mes' ? 'mudarMes(-1)' : ($viewMode === 'ano' ? 'mudarAno(-1)' : 'mudarEscopoAnos(-1)') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        {{-- Título Clicável --}}
        <h2 wire:click="alternarView" class="text-lg cursor-pointer">
            @if ($viewMode === 'mes')
                {{ Str::title(\Carbon\Carbon::create($anoAtual, $mesAtual, 1)->locale('pt_BR')->translatedFormat('M Y')) }}
            @elseif ($viewMode === 'ano')
                {{ $anoAtual }}
            @else
                {{ $anoAtual - 5 }} - {{ $anoAtual + 5 }}
            @endif
        </h2>

        {{-- Botão Próximo (Arrow Right SVG) --}}
        <button class="p-2 rounded-md"
            wire:click="
                {{ $viewMode === 'mes' ? 'mudarMes(1)' : ($viewMode === 'ano' ? 'mudarAno(1)' : 'mudarEscopoAnos(1)') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    {{-- Conteúdo do Calendário --}}
    @if ($viewMode === 'mes')
        @php
            // Definir o dia atual
            $diaAtual = \Carbon\Carbon::today()->day;
        @endphp

        {{-- Exibir Dias do Mês --}}
        <div class="grid grid-cols-7 gap-2 ">
            @foreach (['DOM', 'SEG', 'TER', 'QUA', 'QUI', 'SEX', 'SÁB'] as $diaDaSemana)
                <div class="text-center font-semibold text-[#BFBFCD] uppercase">{{ $diaDaSemana }}</div>
            @endforeach

            @for ($i = 0; $i < $primeiroDiaSemana; $i++)
                <div class="p-2"></div>
            @endfor

            @for ($dia = 1; $dia <= $diasNoMes; $dia++)
                <div
                    class="pt-1.5 size-9 text-center 
            {{ $dia == $diaAtual ? 'bg-blue-500 text-white rounded-md' : 'hover:bg-gray-700 rounded-md' }}">
                    {{ $dia }}
                </div>
            @endfor
        </div>
    @elseif ($viewMode === 'ano')
        {{-- Exibir Meses do Ano --}}
        <div class="grid grid-cols-3 gap-2">
            @foreach (range(1, 12) as $mes)
                <div wire:click="selecionarMes({{ $mes }})"
                    class="p-2 rounded-md text-center cursor-pointer hover:bg-gray-700">
                    {{ Str::upper(\Carbon\Carbon::create($anoAtual, $mes, 1)->locale('pt_BR')->translatedFormat('M')) }}
                </div>
            @endforeach
        </div>
    @else
        {{-- Exibir Escopo de Anos --}}
        <div class="grid grid-cols-5 gap-2">
            @foreach (range($anoAtual - 5, $anoAtual + 5) as $ano)
                <div wire:click="selecionarAno({{ $ano }})"
                    class="p-2 rounded-md text-center cursor-pointer hover:bg-gray-700">
                    {{ $ano }}
                </div>
            @endforeach
        </div>
    @endif

    {{-- Botão Hoje (Centralizado na parte inferior) --}}
    <div class="mt-4 flex justify-center">
        <button class="px-4 py-2 bg-blue-500 text-white rounded-md" wire:click="voltarParaHoje">
            Hoje
        </button>
    </div>
</div>
