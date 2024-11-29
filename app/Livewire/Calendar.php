<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Calendar extends Component
{
    public $mesAtual;
    public $anoAtual;
    public $viewMode = 'mes'; // 'mes', 'ano', 'anos'

    public function mount()
    {
        $now = Carbon::now();
        $this->mesAtual = $now->month;
        $this->anoAtual = $now->year;
    }

    public function mudarMes($incremento)
    {
        $novaData = Carbon::create($this->anoAtual, $this->mesAtual, 1)->addMonths($incremento);
        $this->mesAtual = $novaData->month;
        $this->anoAtual = $novaData->year;
    }

    public function mudarAno($incremento)
    {
        $this->anoAtual += $incremento;
    }

    public function mudarEscopoAnos($incremento)
    {
        $this->anoAtual += $incremento * 10;
    }

    public function alternarView()
    {
        if ($this->viewMode === 'mes') {
            $this->viewMode = 'ano';
        } elseif ($this->viewMode === 'ano') {
            $this->viewMode = 'anos';
        } else {
            $this->viewMode = 'mes';
        }
    }

        public function selecionarAno($ano)
    {
        $this->anoAtual = $ano;
        $this->viewMode = 'ano'; // Muda para a visão de meses
    }

    public function selecionarMes($mes)
    {
        $this->mesAtual = $mes;
        $this->viewMode = 'mes'; // Retorna à visão dos dias do mês
    }

    public function voltarParaHoje()
    {
        $hoje = Carbon::now();
        $this->anoAtual = $hoje->year;
        $this->mesAtual = $hoje->month;
        $this->viewMode = 'mes'; // Retorna à visão dos dias do mês
    }

    public function render()
    {
        return view('livewire.calendar', [
            'primeiroDiaSemana' => Carbon::create($this->anoAtual, $this->mesAtual, 1)->dayOfWeek,
            'diasNoMes' => Carbon::create($this->anoAtual, $this->mesAtual, 1)->daysInMonth,
        ]);
    }
}