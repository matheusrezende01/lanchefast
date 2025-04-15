<<<<<<< Updated upstream
<div class="container mt-4">
    <h2>Cadastrar Novo Cliente</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

  
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
=======
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Card -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar Cliente</h4>
                </div>

                <div class="card-body">

                    {{-- Mensagem de sucesso --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    {{-- Formulário --}}
                    <form wire:submit.prevent="update">

                        <!-- Nome -->
                        <div class="mb-3">
                            <label class="form-label">Nome:</label>
                            <input type="text" wire:model.defer="nome" class="form-control form-control-lg" placeholder="Digite o nome completo" style="border-color: #0056b3;">
                            @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Endereço -->
                        <div class="mb-3">
                            <label class="form-label">Endereço:</label>
                            <input type="text" wire:model.defer="endereco" class="form-control form-control-lg" placeholder="Rua, nº, Bairro, Cidade" style="border-color: #0056b3;">
                            @error('endereco') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Telefone -->
                        <div class="mb-3">
                            <label class="form-label">Telefone:</label>
                            <input type="text" wire:model.defer="telefone" class="form-control form-control-lg" placeholder="Ex: 11999998888" style="border-color: #0056b3;">
                            @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- CPF -->
                        <div class="mb-3">
                            <label class="form-label">CPF:</label>
                            <input type="text" wire:model.defer="cpf" class="form-control form-control-lg" placeholder="Apenas números" style="border-color: #0056b3;">
                            @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- E-mail -->
                        <div class="mb-3">
                            <label class="form-label">E-mail:</label>
                            <input type="email" wire:model.defer="email" class="form-control form-control-lg" placeholder="exemplo@dominio.com" style="border-color: #0056b3;">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Senha -->
                        <div class="mb-3">
                            <label class="form-label">Senha:</label>
                            <input type="password" wire:model.defer="senha" class="form-control form-control-lg" placeholder="Mínimo 6 caracteres (Deixe em branco para manter a mesma)" style="border-color: #0056b3;">
                            @error('senha') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Botão de edição -->
                        <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm hover-shadow" style="background-color: #28a745; border-color: #218838;">
                            <i class="bi bi-pencil-square me-1"></i> Atualizar Cliente
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

