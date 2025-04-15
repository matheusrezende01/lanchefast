<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Card -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="bi bi-person-circle me-2"></i>Detalhes do Cliente</h4>
                </div>

                <div class="card-body">

                    {{-- Mensagem de sucesso --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    <!-- Exibição dos dados do cliente -->
                    <div class="mb-3">
                        <label class="form-label">ID do Cliente:</label>
                        <p class="form-control-plaintext">{{ $clienteId }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome:</label>
                        <p class="form-control-plaintext">{{ $nome }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Endereço:</label>
                        <p class="form-control-plaintext">{{ $endereco }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telefone:</label>
                        <p class="form-control-plaintext">{{ $telefone }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CPF:</label>
                        <p class="form-control-plaintext">{{ $cpf }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-mail:</label>
                        <p class="form-control-plaintext">{{ $email }}</p>
                    </div>

                    <!-- Senha (não vamos exibir, mas podemos permitir a atualização ou comparação) -->
                    <div class="mb-3">
                        <label class="form-label">Senha:</label>
                        <p class="form-control-plaintext">*******</p>  <!-- Ocultando a senha -->
                    </div>

                    <!-- Botões de Ação -->
                    <div class="text-center">
                        <a href="{{ route('clientes.edit', $clienteId) }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square me-1"></i> Editar Cliente
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
