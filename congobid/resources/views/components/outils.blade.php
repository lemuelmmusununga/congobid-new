    @if (Auth::user() && Auth::user()->role_id == 5)
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href="#">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                <span>X{{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->roi ?? 0 }}</span>
            </a>
            <a href="#">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                <span>X{{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->foudre ?? 0 }}</span>
            </a>
            <a href="#">
                <img src="{{asset('images/click.png')}}" alt="click">
                <span>X{{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->clicks ?? 0 }}</span>
            </a>
            <a href="#">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                <span>X{{ $article->enchere->pivotbideurenchere->where('user_id', Auth::user()->id)->first()->bouclier ?? 0 }}</span>
            </a>
        </div>
    @else
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href="#">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
            </a>
            <a href="#">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
            </a>
            <a href="#">
                <img src="{{asset('images/click.png')}}" alt="click">
            </a>
            <a href="#">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
            </a>
        </div>
    @endif
