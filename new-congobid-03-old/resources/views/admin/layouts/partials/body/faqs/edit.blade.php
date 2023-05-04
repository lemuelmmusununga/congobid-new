@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Modifier une FAQ</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('faqs.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <input type="hidden" name="faq_id" value="{{$faq->id}}">
                                <div class="form-group">
                                    <label for="comment">Question</label>
                                    <textarea class="form-control" name="questions" id="comment" rows="5"
                                        required> {{$faq->questions}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Réponse</label>
                                    <textarea class="form-control" name="reponses" id="comment" rows="5"
                                        required>{{$faq->reponses}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}"
                                                {{$statut->id == $faq->statut_id ? 'selected':''}}
                                                >{{ $statut->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="text-white btn btn-congo">Enregistrer</button>
                        <a href="{{  url()->previous() }}" class="btn btn-sm btn-danger">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    @include('admin.layouts.partials.footer.footer')

@endsection

@section('javascript')
@endsection
