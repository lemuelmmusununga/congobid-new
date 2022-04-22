

    @if (Auth::user() && Auth::user()->role_id == 5)
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href=""data-bs-toggle="modal" data-bs-target="#option_roi_{{$article->enchere->pivotbideurenchere->first()->enchere_id ?? ''}}">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first()->roi ?? 0}}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#option_foudre_{{$article->enchere->pivotbideurenchere->first()->enchere_id ?? ''}}">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first()->foudre ?? 0 }}</span>
            </a>
            <a href=""data-bs-toggle="modal" data-bs-target="#option_click_{{$article->enchere->pivotbideurenchere->first()->enchere_id ?? ''}}">
                <img src="{{asset('images/click.png')}}" alt="click">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first()->clicks ?? 0 }}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#option_bouclier_{{$article->enchere->pivotbideurenchere->first()->enchere_id ?? ''}}">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$article->enchere->id)->first()->bouclier ?? 0 }}</span>
            </a>
        </div>
    @else
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href="/login">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
            </a>
            <a href="/login">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
            </a>
            <a href="/login">
                <img src="{{asset('images/click.png')}}" alt="click">
            </a>
            <a href="/login">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
            </a>
        </div>
    @endif


