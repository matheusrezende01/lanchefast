<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;
    public $imagem;

    protected $rules = [
        'name' => 'required|string|max:255',
        'ingredients' => 'required|string|max:1000',
        'value' => 'required|numeric|min:0',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // validação da imagem
    ];

    // Função que será chamada ao enviar o formulário
    public function saveProduct()
    {
        $this->validate();

        // Faz o upload da imagem e gera o caminho para armazenar
        $imagePath = $this->image->store('products', 'public'); 

        // Cria o produto no banco de dados
        Produto::create([
            'nome' => $this->name,
            'ingrediente' => $this->ingredients,
            'valor' => $this->value,
            'imagem' => $imagePath,
        ]);

        // Envia uma mensagem de sucesso e limpa os campos do formulário
        session()->flash('message', 'Produto criado com sucesso!');

        // Limpar os campos após o envio
        $this->reset();

        // Redirecionar ou fazer outra ação, como voltar à lista de produtos
        return redirect()->route('products.index');
    }
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
