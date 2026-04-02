@extends('layout')

@section('content')

<div class="header-section" data-aos="fade-down">
    <h4 class="mb-0">
        <i class="fas fa-book"></i>
        Todos os TCCs
    </h4>
    <a href="{{ route('tccs.create') }}" class="btn btn-success" data-aos="fade-left">
        <i class="fas fa-plus-circle"></i>
        Novo TCC
    </a>
</div>

<div class="card-custom" data-aos="fade-up">
    <div class="table-responsive">
        <table class="table table-hover table-borderless mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th><i class="fas fa-heading me-2 text-primary"></i>Título</th>
                    <th><i class="fas fa-user-graduate me-2 text-primary"></i>Aluno</th>
                    <th><i class="fas fa-chalkboard-user me-2 text-primary"></i>Orientador</th>
                    <th><i class="fas fa-file-lines me-2 text-primary"></i>Páginas</th>
                    <th><i class="fas fa-calendar me-2 text-primary"></i>Data</th>
                    <th><i class="fas fa-align-left me-2 text-primary"></i>Resumo</th>
                    <th class="text-center"><i class="fas fa-cog me-2 text-primary"></i>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tccs as $t)
                    <tr data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                        <td class="fw-semibold">
                            <i class="fas fa-circle me-2" style="color: var(--primary); font-size: 0.5rem;"></i>
                            {{ $t->titulo }}
                        </td>
                        <td>
                            {{ $t->aluno ?? '—' }}
                        </td>
                        <td>
                            {{ $t->orientador ?? '—' }}
                        </td>
                        <td>
                            {{ $t->paginas ?? '—' }}
                        </td>
                        <td>
                            {{ $t->data ? \Carbon\Carbon::parse($t->data)->format('d/m/Y') : '—' }}
                        </td>
                        <td class="text-truncate" style="max-width: 250px;" title="{{ $t->resumo ?? '' }}">
                            {{ Str::limit($t->resumo, 60) ?? '—' }}
                        </td>
                        <td>
                            <div class="d-flex gap-2 justify-content-center flex-wrap">
                                <a href="{{ route('tccs.edit', $t->id) }}" class="btn btn-warning btn-sm" title="Editar este TCC">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="d-none d-lg-inline ms-1">Editar</span>
                                </a>
                                @if($t->arquivo)
                                    <a href="{{ asset('storage/' . $t->arquivo) }}" target="_blank" class="btn btn-primary btn-sm" title="Visualizar PDF">
                                        <i class="fas fa-file-pdf"></i>
                                        <span class="d-none d-lg-inline ms-1">PDF</span>
                                    </a>
                                @endif
                                <form method="POST" action="{{ route('tccs.destroy', $t->id) }}" style="display:inline" onsubmit="return confirm('Tem certeza que deseja excluir este TCC?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Excluir este TCC">
                                        <i class="fas fa-trash"></i>
                                        <span class="d-none d-lg-inline ms-1">Excluir</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <i class="fas fa-inbox text-muted" style="font-size: 3rem;"></i>
                            <p class="text-muted mt-3">Nenhum TCC cadastrado</p>
                            <a href="{{ route('tccs.create') }}" class="btn btn-success btn-sm mt-3">
                                <i class="fas fa-plus-circle"></i>
                                Criar TCC
                            </a>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection