    @if (Auth::user() && Auth::user()->role_id == 5)
        <div class="block-power d-flex justify-content-between align-items-center">
            <a href=""data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/couronne.png')}}" alt="couronne">
                <span>X{{Auth::user()->pivotbideurenchere->where('enchere_id',$this->getart)->first()->roi ?? 0}}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/foudre.png')}}" alt="foudre">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$this->getart)->first()->foudre ?? 0 }}</span>
            </a>
            <a href=""data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/click.png')}}" alt="click">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$this->getart)->first()->click ?? 0 }}</span>
            </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalliste">
                <img src="{{asset('images/bouclier.png')}}" alt="bouclier">
                <span>X{{ Auth::user()->pivotbideurenchere->where('enchere_id',$this->getart)->first()->bouclier ?? 0 }}</span>
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
