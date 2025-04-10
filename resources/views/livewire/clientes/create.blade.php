<div class="container mt-4">
    <h2>Cadastrar Novo Cliente</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('clientes.create') }}">
        @csrf

    <div class="card">
        <h5 class="card-header">Cadastro de Cliente</h5>

        <div class="card-body">
            <form wire:submit.prevent="create">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label> 
                    <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                        id="nome" wire:model.defer="nome" placeholder="Ex: João da Silva">
                    @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control @error('endereco') is-invalid @enderror"
                        id="endereco" wire:model.defer="endereco" placeholder="Rua Exemplo, 123">
                    @error('endereco') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control @error('telefone') is-invalid @enderror"
                        id="telefone" wire:model.defer="telefone" placeholder="(11) 99999-9999">
                    @error('telefone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control @error('cpf') is-invalid @enderror"
                        id="cpf" wire:model.defer="cpf" placeholder="000.000.000-00">
                    @error('cpf') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" wire:model.defer="email" placeholder="email@exemplo.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control @error('senha') is-invalid @enderror"
                        id="senha" wire:model.defer="senha">
                    @error('senha') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
</div>