@extends('layout')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card-custom" data-aos="fade-up">

            <div class="header-section mb-4">
                <h5 class="titulo-card mb-0">
                    <i class="fas fa-plus-circle text-primary"></i>
                    Nova Banca
                </h5>
                <a href="{{ route('bancas.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>

            <form method="POST" action="{{ route('bancas.store') }}">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="50">
                        <label class="label">
                            <i class="fas fa-user-tie me-1"></i>
                            Nome
                        </label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do(a) avaliador(a)" required>
                    </div>

                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="50">
                        <label class="label">
                            <i class="fas fa-graduation-cap me-1"></i>
                            Titulação
                        </label>
                        <input type="text" name="titulacao" class="form-control" placeholder="Ex: Doutora em Educação" required>
                    </div>

                    <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                        <label class="label">
                            <i class="fas fa-book me-1"></i>
                            Selecione um TCC
                        </label>
                        <select name="tcc_id" class="form-control" required>
                            <option value="">-- Escolha um TCC --</option>
                            @foreach($tccs as $t)
                                <option value="{{ $t->id }}">
                                    <i class="fas fa-file-alt"></i>
                                    {{ $t->titulo }} ({{ $t->aluno }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                        <label class="label">
                            <i class="fas fa-user me-1"></i>
                            Avaliador 1
                        </label>
                        <input type="text" name="avaliador_1" class="form-control" placeholder="Nome do avaliador 1" required>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <label class="label">
                            <i class="fas fa-user me-1"></i>
                            Avaliador 2
                        </label>
                        <input type="text" name="avaliador_2" class="form-control" placeholder="Nome do avaliador 2" required>
                    </div>

                    <div class="col-md-4" data-aos="fade-left" data-aos-delay="100">
                        <label class="label">
                            <i class="fas fa-user me-1"></i>
                            Avaliador 3
                        </label>
                        <input type="text" name="avaliador_3" class="form-control" placeholder="Nome do avaliador 3" required>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-5" data-aos="fade-up" data-aos-delay="150">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-check-circle"></i>
                        Salvar Banca
                    </button>
                    <a href="{{ route('bancas.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times-circle"></i>
                        Cancelar
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection