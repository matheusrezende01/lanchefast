<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{
    

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

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

 public function store(){
    $this->validate();

    Cliente::create([
        'nome' => $this-> nome,
        'endereco' => $this->endereco,
        'telefone' => $this->telefone,
        'cpf' => $this->cpf,
        'email' => $this->email,
        'senha' => $this->senha
    ]);
 }



    public function render()
    {
        return view('livewire.clientes.create');
    }
}
