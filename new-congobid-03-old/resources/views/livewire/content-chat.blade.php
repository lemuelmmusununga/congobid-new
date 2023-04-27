<div class="w-100">
    <div class="block-content-chat w-100" wire:poll.keep-alive>
        @foreach ($messages as $message)
        {{-- @dump(Auth::user()->created_at->format('d-m-Y') ,$message->created_at->format('d-m-Y')) --}}

            @if (Auth::user()->created_at->format('d-m-Y') >= $message->created_at->format('d-m-Y'))
                @if (Auth::user()&& $message->user_id == Auth::user()->id )
                    <div class="msg-row msg-row2 w-100 my-1">
                        <div class="msg-text">
                            <h3 class="name-user">{{$message->user->username ?? ''}}</h3>
                            <p>{{$message->libelle}}</p>
                            <div class="date text-end">

                                <span>
                                    {{$message->created_at->diffForHumans() ?? ''}}
                                </span>
                            </div>
                        </div>
                        <div class="avatar-block">
                            <div class="avatar">
                                <img src="{{asset('images/users/' . (Auth::user()->avatar == null ? 'default.png'  : Auth::user()->avatar  ) )}} " alt="">
                            </div>
                        </div>
                    </div>
                @else

                    <div class="msg-row mb-2">
                        <div class="avatar-block">
                            <div class="avatar">
                                <img src="{{asset('images/users/' . ($message->user?->avatar == null ? 'default.png' : $message->user?->avatar  ) ) }} " alt="">
                            </div>
                        </div>
                        <div class="msg-text">
                            <h3 class="name-user">{{$message->user->username ?? ''}}</h3>
                            {{-- @dump(Auth::user()->created_at->format('d-m-Y') ,$message->created_at->format('d-m-Y')) --}}

                            <p>{{$message->libelle}}</p>
                            <div class="date text-end">
                            <span>
                                {{$message->created_at->diffForHumans() ?? ''}}
                            </span>
                            </div>
                        </div>
                    </div>

                @endif

            @endif
        @endforeach

        @livewire('btnbidchat')
    </div>
    @livewire('message')
</div>
