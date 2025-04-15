<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;
    public $clienteId;


    // Regras de validação
    protected $rules = [
        'nome'     => 'required|string|max:255',
        'endereco' => 'required|string|max:255',
        'telefone' => 'required|min:10|max:15', // Telefone com mínimo e máximo
        'cpf'      => 'required|:11', // CPF com exatamente 11 dígitos
        'email'    => 'required|email|unique:clientes,email', // Verificar se o e-mail é único
        'senha'    => 'required|min:6', // Senha com no mínimo 6 caracteres
    ];

    // Mensagens de erro personalizadas
    protected $messages = [
        'nome.required' => 'O nome é obrigatório.',
        'endereco.required' => 'O endereço é obrigatório.',
        'telefone.required' => 'O telefone é obrigatório.',
        'telefone.min' => 'O telefone deve ter no mínimo 10 caracteres.',
        'telefone.max' => 'O telefone não pode ter mais de 15 caracteres.',
        'cpf.required' => 'O CPF é obrigatório.',
        'cpf.digits' => 'O CPF deve ter exatamente 11 dígitos.',
        'email.required' => 'O e-mail é obrigatório.',
        'email.email' => 'O formato do e-mail é inválido.',
        'email.unique' => 'Este e-mail já está em uso.',
        'senha.required' => 'A senha é obrigatória.',
        'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
    ];
    // Método para carregar os dados do cliente
    public function mount($id)
    {
        // Obter o cliente com o ID passado
        $cliente = Cliente::find($id);

        // Atribuir os dados ao Livewire
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
    }

    // Método para salvar as alterações no cliente
    public function update()
    {
        // Validar os dados
    //    $this->validate();

        // Atualizar os dados do cliente
        $cliente = Cliente::find($this->clienteId);
        // Atualizando os dados
        if ($cliente)
            $cliente->update([
                'nome'     => $this->nome,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone,
                'cpf'      => $this->cpf,
                'email'    => $this->email,
                'senha'    => $this->senha ? bcrypt($this->senha) : $cliente->senha, // Se a senha estiver vazia, mantém a original
            ]);
        // Flash message de sucesso
        return redirect()->route('clientes.index')->with(['success' => 'Cliente atualizado com sucesso!']);
    }
    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
