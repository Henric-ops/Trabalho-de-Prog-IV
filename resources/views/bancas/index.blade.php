@extends('layout')

@section('content')

<div class="header-section" data-aos="fade-down">
    <h4 class="mb-0">
        <i class="fas fa-users-square"></i>
        Lista de Bancas
    </h4>
    <a href="{{ route('bancas.create') }}" class="btn btn-success" data-aos="fade-left">
        <i class="fas fa-plus-circle"></i>
        Nova Banca
    </a>
</div>

<div class="card-custom" data-aos="fade-up">
    <div class="table-responsive">
        <table class="table table-hover table-borderless mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th><i class="fas fa-id-card me-2 text-primary"></i>Nome</th>
                    <th><i class="fas fa-graduation-cap me-2 text-primary"></i>Titulação</th>
                    <th><i class="fas fa-bookmark me-2 text-primary"></i>TCC</th>
                    <th><i class="fas fa-user-tie me-2 text-primary"></i>Avaliador 1</th>
                    <th><i class="fas fa-user-tie me-2 text-primary"></i>Avaliador 2</th>
                    <th><i class="fas fa-user-tie me-2 text-primary"></i>Avaliador 3</th>
                    <th class="text-center"><i class="fas fa-cog me-2 text-primary"></i>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bancas as $b)
                    <tr data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                        <td class="fw-semibold">
                            <i class="fas fa-circle me-2" style="color: var(--primary); font-size: 0.5rem;"></i>
                            {{ $b->nome }}
                        </td>
                        <td>
                            {{ $b->titulacao ?? '—' }}
                        </td>
                        <td>
                            {{ $b->tcc->titulo ?? '—' }}
                        </td>
                        <td>
                            {{ $b->avaliador_1 ?? '—' }}
                        </td>
                        <td>
                            {{ $b->avaliador_2 ?? '—' }}
                        </td>
                        <td>
                            {{ $b->avaliador_3 ?? '—' }}
                        </td>
                        <td>
                            <div class="d-flex gap-2 justify-content-center">
                                <a href="{{ route('bancas.edit', $b->id) }}" class="btn btn-warning btn-sm" title="Editar esta banca">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="d-none d-md-inline ms-1">Editar</span>
                                </a>
                                <form method="POST" action="{{ route('bancas.destroy', $b->id) }}" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir esta banca?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Excluir esta banca">
                                        <i class="fas fa-trash"></i>
                                        <span class="d-none d-md-inline ms-1">Excluir</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <i class="fas fa-inbox text-muted" style="font-size: 3rem;"></i>
                            <p class="text-muted mt-3">Nenhuma banca cadastrada</p>
                            <a href="{{ route('bancas.create') }}" class="btn btn-success btn-sm mt-3">
                                <i class="fas fa-plus-circle"></i>
                                Criar Banca
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection