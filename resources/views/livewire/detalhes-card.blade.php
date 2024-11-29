<div>
    <!-- Modal -->
    @if($isOpen)
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white w-[350px] h-[350px] rounded-[20px] p-[20px] grid grid-rows-6 grid-cols-2 gap-2">
            
            <!-- Imagem na coluna esquerda -->
            <div class="row-span-4 col-span-1 flex justify-center items-center">
                <img src="{{ asset('img/imageforchange.svg') }}" alt="Imagem da Empresa"
                    class="w-full h-auto rounded-2xl mr-4">
            </div>

            <!-- Informações na coluna direita -->
            <div class="row-span-4 col-span-1">
                <h2 class="text-lg font-semibold">Nome da Empresa</h2>
                <p class="text-sm text-gray-600">Área de atuação</p>
                <p class="font-bold text-gray-800 mt-2">Descrição completa do produto</p>
                <p class="text-sm text-gray-500 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor eget arcu efficitur.
                </p>
            </div>

            <!-- Hashtags ocupando ambas colunas -->
            <div class="row-span-1 col-span-2 text-gray-500 space-x-2">
                <span>#hashtag1</span>
                <span>#hashtag2</span>
                <span>#hashtag3</span>
                <span>#hashtag4</span>
            </div>

            <!-- Botões na última linha -->
            <div class="row-span-1 col-span-1 flex items-center">
                <button class="flex items-center border text-xs font-bold space-x-2 border border-[#d9d9d9] p-2 rounded-3xl max-w-28 cursor-pointer" wire:click="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.293 14.707a1 1 0 001.414-1.414L9.414 10l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Voltar</span>
                </button>
            </div>
            
        </div>
    </div>
    @endif
</div>
