<div>
    @if ($isOpen)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
            <div class="bg-white w-[350px] h-auto rounded-[20px] p-[20px] grid gap-4 overflow-hidden">
                <!-- Título -->
                <h2 class="text-xl font-bold text-center">Quando será a reunião?</h2>

                <!-- Data e Hora -->
                <div>
                    <label class="block text-sm font-bold mb-2 text-left">Data e Hora</label>
                    <div class="flex gap-4 items-center">
                        <!-- Campo de Data -->
                        <input type="date" class="border rounded-lg px-2 py-2 text-[8px] focus:outline-none w-[100px]"
                            wire:model="data">

                        <!-- Campo de Hora -->
                        <div class="flex gap-2 items-center">
                            <span class="text-sm">Das</span>
                            <input type="time"
                                class="border rounded-lg px-2 py-2 text-[8px] focus:outline-none w-[65px]"
                                wire:model="horaInicio">
                            <span class="text-sm">às</span>
                            <input type="time"
                                class="border rounded-lg px-2 py-2 text-[8px] focus:outline-none w-[65px]"
                                wire:model="horaFim">
                        </div>
                    </div>
                </div>

                <!-- Localização -->
                <div>
                    <label class="block text-sm font-bold mb-2 text-left">Localização</label>
                    <div class="flex gap-4 items-center">
                        <label class="flex items-center">
                            <input type="radio" value="presencial" wire:model.live="localizacao" class="mr-2">
                            Presencial
                        </label>
                        
                        <label class="flex items-center">
                            <input type="radio" value="virtual" wire:model.live="localizacao" class="mr-2">
                            Virtual
                        </label>                        
                    </div>
                </div>        

                <!-- Inputs Condicionais -->
                <div>
                    @if ($localizacao === 'presencial')
                        <div>
                            <label class="block text-sm font-bold mb-2 text-left">Endereço</label>
                            <input type="text" class="w-full border rounded-lg px-4 py-2 focus:outline-none"
                                wire:model="endereco" placeholder="Digite o endereço">
                            @error('endereco')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    @elseif($localizacao === 'virtual')
                        <div>
                            <label class="block text-sm font-bold mb-2 text-left">Link da Reunião</label>
                            <input type="url" class="w-full border rounded-lg px-4 py-2 focus:outline-none"
                                wire:model="link" placeholder="Digite o link">
                            @error('link')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                </div>

                <!-- Botões -->
                <div class="flex justify-between mt-4">
                    <button class="flex items-center border text-xs font-bold space-x-2 border border-[#d9d9d9] p-2 rounded-3xl max-w-28 cursor-pointer" wire:click="fecharModal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 14.707a1 1 0 001.414-1.414L9.414 10l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Voltar</span>
                    </button>
                    <button wire:click="agendarReuniao"
                        class="px-4 py-2 bg-[#D9D9D9] text-white font-bold rounded-3xl text-sm">
                        Agendar Reunião
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
