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
                            <input type="text" wire:model.defer="nome" class="form-control form-control-lg" placeholder="Digite o nome completo">
                            @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Endereço -->
                        <div class="mb-3">
                            <label class="form-label">Endereço:</label>
                            <input type="text" wire:model.defer="endereco" class="form-control form-control-lg" placeholder="Rua, nº, Bairro, Cidade">
                            @error('endereco') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Telefone -->
                        <div class="mb-3">
                            <label class="form-label">Telefone:</label>
                            <input type="text" wire:model.defer="telefone" class="form-control form-control-lg" placeholder="Ex: 11999998888">
                            @error('telefone') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- CPF -->
                        <div class="mb-3">
                            <label class="form-label">CPF:</label>
                            <input type="text" wire:model.defer="cpf" class="form-control form-control-lg" placeholder="Apenas números">
                            @error('cpf') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- E-mail -->
                        <div class="mb-3">
                            <label class="form-label">E-mail:</label>
                            <input type="email" wire:model.defer="email" class="form-control form-control-lg" placeholder="exemplo@dominio.com">
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Senha -->
                        <div class="mb-3">
                            <label class="form-label">Senha:</label>
                            <input type="password" wire:model.defer="senha" class="form-control form-control-lg" placeholder="Mínimo 6 caracteres (Deixe em branco para manter a mesma)">
                            @error('senha') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm hover-shadow">
                            <i class="bi bi-pencil-square me-1"></i> Atualizar Cliente
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
