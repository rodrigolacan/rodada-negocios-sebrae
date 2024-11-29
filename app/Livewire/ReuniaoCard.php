<?php

namespace App\Livewire;

use Livewire\Component;

class ReuniaoCard extends Component
{
    public $isOpen = false;
    public $data;
    public $horaInicio;
    public $horaFim;
    public $localizacao = 'presencial'; // 'presencial' ou 'virtual'
    public $endereco = '';
    public $link = '';

    protected $listeners = ['abrirModalReuniao'];

    // Regras de validação
    protected $rules = [
        'data' => 'required|date',
        'horaInicio' => 'required|date_format:H:i',
        'horaFim' => 'required|date_format:H:i|after:horaInicio',
        'localizacao' => 'required|in:presencial,virtual',
        'endereco' => 'required_if:localizacao,presencial',
        'link' => 'required_if:localizacao,virtual|url',
    ];

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
        // Validação usando o método validate
        $this->validate();

        // Lógica para salvar os dados da reunião (você pode adicionar a lógica de persistência aqui)

        // Emissão de evento ou outra ação após o agendamento
        $this->emit('reuniaoAgendada');
        $this->fecharModal();
    }

    public function render()
    {
        return view('livewire.reuniao-card');
    }
}
