<div class="card-footer">
    <div class="text-center ">
        @if (Auth::user())
            @if ($salon->pivotclientsalon->where('user_id', Auth::user()->id)->first() != null)

                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEnchereAnnuler_{{ $salon->id  }}" class="btn-participer" > Annuler votre participation</a>

            @else
                <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchereSalon_{{ $salon->id  }}"><span class="iconify" data-icon="akar-icons:plus"></span> Participer au salon</a>
            @endif
        @else
            <a href="#" class="btn-participer" data-bs-toggle="modal" data-bs-target="#modalEnchereSalon_{{ $salon->id }}"><span class="iconify" data-icon="akar-icons:plus"></span> Participer au salon</a>
        @endif
    </div>
    <br>
</div>


