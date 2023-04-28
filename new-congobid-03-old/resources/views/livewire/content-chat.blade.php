<div class="w-100" wire:poll.keep-alive>
 
    

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="content-chatbox">
              <div class="row g-3">
                  @foreach ($messages as $message)
                  {{-- @if ($message->created_at->format('d-m-Y') >= $message->created_at->format('d-m-Y')) --}}
                  <div class="col-12">
                      <div class="card card-chat">
                          <div class="content-chat d-flex">
                              <div class="avatar">
                                  <img src="{{asset('images/users/' . ($message->user?->avatar == null ? 'default.png' : $message->user?->avatar  ) ) }}" alt="">
                              </div>
                              <div class="content-name">
                                  <div class="d-flex align-items-center mt-2 mb-2">
                                      <h5>{{$message->user->username ?? ''}}</h5>
                                      <span class="date">{{$message->created_at->diffForHumans() ?? ''}}</span>
                                  </div>
                                  <div class="message">
                                      <p class="mb-2">
                                        {{$message->libelle}}
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>
            </div>
            @livewire('message')
          </div>
        </div>
      
</div>
