<?php

namespace App\Livewire;

use Livewire\Component;

class ReuniaoCard extends Component
{
    public $isOpen = false;
    public $data;
    public $horaInicio;
    public $horaFim;
    public $localizacao = 'virtual'; // 'presencial' ou 'virtual'
    public $endereco = '';
    public $link = '';

    protected $listeners = ['abrirModalReuniao'];

    public function abrirModalReuniao()
    {
        $this->isOpen = true;
    }

    public function fecharModal()
    {
        $this->isOpen = false;
    }

    public function agendarReuniao()
    {
        // Validação básica
        if ($this->localizacao === 'presencial' && !$this->endereco) {
            $this->addError('endereco', 'Por favor, preencha o endereço.');
            return;
        }
        if ($this->localizacao === 'virtual' && !$this->link) {
            $this->addError('link', 'Por favor, preencha o link.');
            return;
        }

        // Lógica para salvar os dados da reunião
        $this->emit('reuniaoAgendada');
        $this->fecharModal();
    }

    public function render()
    {
        return view('livewire.reuniao-card');
    }
}
