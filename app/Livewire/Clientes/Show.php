<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Show extends Component
{
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    // Método para pegar os dados do cliente e popular as propriedades
    public function mount($id)
    {
        // Atribui o clienteId e busca os dados do cliente
        $this->clienteId = $id;
        $cliente = Cliente::find($id);

        if ($cliente) {
            $this->nome = $cliente->nome;
            $this->endereco = $cliente->endereco;
            $this->telefone = $cliente->telefone;
            $this->cpf = $cliente->cpf;
            $this->email = $cliente->email;
            $this->senha = $cliente->senha;  // Não exiba a senha diretamente
        }
    }
    public function render()
    {
        return view('livewire.clientes.show');
    }
}
