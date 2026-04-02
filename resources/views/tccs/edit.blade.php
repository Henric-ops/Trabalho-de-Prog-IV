@extends('layout')

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card-custom" data-aos="fade-up">

                <div class="header-section mb-4">
                    <h5 class="titulo-card mb-0">
                        <i class="fas fa-edit text-warning"></i>
                        Editar TCC
                    </h5>
                    <a href="{{ route('tccs.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </div>

                <form method="POST" action="{{ route('tccs.update', $tcc->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-3">
                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="50">
                            <label class="label">
                                <i class="fas fa-pen-fancy me-1"></i>
                                Título
                            </label>
                            <input type="text" name="titulo" class="form-control" value="{{ $tcc->titulo }}" placeholder="Digite o título do TCC" required>
                        </div>

                        <div class="col-md-6" data-aos="fade-left" data-aos-delay="50">
                            <label class="label">
                                <i class="fas fa-user-graduate me-1"></i>
                                Aluno
                            </label>
                            <input type="text" name="aluno" class="form-control" value="{{ $tcc->aluno }}" placeholder="Nome do aluno" required>
                        </div>

                        <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                            <label class="label">
                                <i class="fas fa-chalkboard-user me-1"></i>
                                Orientador
                            </label>
                            <input type="text" name="orientador" class="form-control" value="{{ $tcc->orientador }}" placeholder="Nome do orientador" required>
                        </div>

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <label class="label">
                                <i class="fas fa-book-open me-1"></i>
                                Páginas
                            </label>
                            <input type="number" name="paginas" class="form-control" value="{{ $tcc->paginas }}" placeholder="0" required>
                        </div>

                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <label class="label">
                                <i class="fas fa-calendar-days me-1"></i>
                                Data
                            </label>
                            <input type="date" name="data" class="form-control" value="{{ $tcc->data }}" required>
                        </div>

                        <div class="col-md-4" data-aos="fade-left" data-aos-delay="100">
                            <label class="label">
                                <i class="fas fa-clock me-1"></i>
                                Hora
                            </label>
                            <input type="time" name="hora" class="form-control" value="{{ $tcc->hora }}" required>
                        </div>

                        <div class="col-12" data-aos="fade-up" data-aos-delay="150">
                            <label class="label">
                                <i class="fas fa-align-left me-1"></i>
                                Resumo
                            </label>
                            <textarea name="resumo" class="form-control" rows="4" placeholder="Digite um breve resumo do TCC" required>{{ $tcc->resumo }}</textarea>
                        </div>

                        <div class="col-md-8" data-aos="fade-right" data-aos-delay="150">
                            <label class="label">
                                <i class="fas fa-tags me-1"></i>
                                Palavras-chave
                            </label>
                            <input type="text" name="palavras_chave" class="form-control" value="{{ $tcc->palavras_chave }}" placeholder="Ex: educação, tecnologia, inovação" required>
                        </div>

                        <div class="col-md-4" data-aos="fade-left" data-aos-delay="150">
                            <label class="label">
                                <i class="fas fa-file-pdf me-1"></i>
                                Arquivo PDF
                            </label>
                            <input type="file" name="arquivo" class="form-control" accept=".pdf">
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-5" data-aos="fade-up" data-aos-delay="200">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check-circle"></i>
                            Atualizar TCC
                        </button>
                        <a href="{{ route('tccs.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times-circle"></i>
                            Cancelar
                        </a>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection