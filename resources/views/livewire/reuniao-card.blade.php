<div>
    @if($isOpen)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white w-[350px] h-auto rounded-[20px] p-[20px] grid gap-4">
            <!-- Título -->
            <h2 class="text-xl font-bold text-center">Quando será a reunião?</h2>

            <!-- Data -->
            <div>
                <label class="block text-sm font-bold mb-2 text-left">Data</label>
                <div class="relative">
                    <input 
                        type="date" 
                        class="w-full border rounded-lg px-4 py-2 focus:outline-none" 
                        wire:model="data">
                    <img src="{{ asset('img/calendar-icon.svg') }}" alt="Calendário" class="absolute right-3 top-2 h-6 w-6">
                </div>
            </div>

            <!-- Hora -->
            <div class="grid grid-cols-3 items-center gap-2">
                <label class="text-sm font-bold">Das</label>
                <div class="relative">
                    <input 
                        type="time" 
                        class="border rounded-lg px-4 py-2 focus:outline-none" 
                        wire:model="horaInicio">
                    <img src="{{ asset('img/clock-icon.svg') }}" alt="Relógio" class="absolute right-3 top-2 h-6 w-6">
                </div>
                <span class="text-center">às</span>
                <div class="relative">
                    <input 
                        type="time" 
                        class="border rounded-lg px-4 py-2 focus:outline-none" 
                        wire:model="horaFim">
                    <img src="{{ asset('img/clock-icon.svg') }}" alt="Relógio" class="absolute right-3 top-2 h-6 w-6">
                </div>
            </div>

            <!-- Localização -->
            <div>
                <label class="block text-sm font-bold mb-2 text-left">Localização</label>
                <div class="flex gap-4 items-center">
                    <!-- Botão Radio para Presencial -->
                    <label class="flex items-center">
                        <input 
                            type="radio" 
                            value="presencial" 
                            wire:model="localizacao" 
                            class="mr-2">
                        Presencial
                    </label>
                    <!-- Botão Radio para Virtual -->
                    <label class="flex items-center">
                        <input 
                            type="radio" 
                            value="virtual" 
                            wire:model="localizacao" 
                            class="mr-2">
                        Virtual
                    </label>
                </div>
            </div>

            <!-- Inputs Condicionais -->
            <div>
                @if($localizacao === 'presencial')
                <div>
                    <label class="block text-sm font-bold mb-2 text-left">Endereço</label>
                    <input 
                        type="text" 
                        class="w-full border rounded-lg px-4 py-2 focus:outline-none" 
                        wire:model="endereco" 
                        placeholder="Digite o endereço">
                </div>
                @elseif($localizacao === 'virtual')
                <div>
                    <label class="block text-sm font-bold mb-2 text-left">Link da Reunião</label>
                    <input 
                        type="url" 
                        class="w-full border rounded-lg px-4 py-2 focus:outline-none" 
                        wire:model="link" 
                        placeholder="Digite o link">
                </div>
                @endif
            </div>

            <!-- Botões -->
            <div class="flex justify-between mt-4">
                <button 
                    wire:click="fecharModal" 
                    class="px-4 py-2 bg-gray-300 rounded-lg text-sm hover:bg-gray-400">
                    Voltar
                </button>
                <button 
                    wire:click="agendarReuniao" 
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg text-sm hover:bg-blue-600">
                    Agendar Reunião
                </button>
            </div>
        </div>
    </div>
    @endif
</div>
