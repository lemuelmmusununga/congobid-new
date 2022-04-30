<div class="w-100">
    <div class="block-content-chat w-100" wire:poll.keep-alive>
        @foreach ($messages as $message)

            @if (Auth::user()&& $message->user_id == Auth::user()->id)
                <div class="msg-row msg-row2 w-100">
                    <div class="msg-text">
                        <h3 class="name-user">{{$message->user->nom ?? ''}}</h3>
                        <p>{{$message->libelle}}</p>
                        <div class="date text-end">
                            <span>

                                {{$message->created_at->format('H:i') ?? ''}}
                            </span>
                        </div>
                    </div>
                    <div class="avatar-block">
                        <div class="avatar">
                            <img src="{{asset('images/img-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            @else

                <div class="msg-row">
                    <div class="avatar-block">
                        <div class="avatar">
                            <img src="{{asset('images/img-1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="msg-text">
                        <h3 class="name-user">{{$message->user->nom ?? ''}}</h3>
                        <p>{{$message->libelle}}</p>
                        <div class="date text-end">
                        <span>
                            {{$message->created_at->format('H:i') ??''}}
                        </span>
                        </div>
                    </div>
                </div>

            @endif

        @endforeach

    </div>

</div>
