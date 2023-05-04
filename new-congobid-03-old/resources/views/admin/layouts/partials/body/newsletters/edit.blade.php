@extends('admin.layouts.master')

@section('css')
@endsection

@section('body')

    <div class="panel-header bg-primary-gradient">
    <div class="page-inner py-2">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                <div>
                    <h2 class="text-white pb-2 fw-bold">Modifier une newsletter</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('newsletters.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="newsletter_id" value="{{$newsletter->id}}">
                                <div class="form-group">
                                    <label for="smallInput">Sujet</label>
                                    <input type="text" name="subject" class="form-control form-control-sm" id="smallInput"
                                        placeholder="Entrez son nom" required value="{{$newsletter->subject}}">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Message</label>
                                    <textarea class="form-control" name="message" id="message"
                                        rows="5"> {!! $newsletter->message !!} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Statut</label>
                                    <select class="form-control form-control-sm" id="smallSelect" name="statut_id">
                                        @foreach ($statuts as $statut)
                                            <option value="{{ $statut->id }}"
                                                {{$statut->id == $newsletter->statut_id ? 'selected':''}}
                                                >{{ $statut->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-sm btn-success">Enregistrer</button>
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
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'message');
    </script>
@endsection
