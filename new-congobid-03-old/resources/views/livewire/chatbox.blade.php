<div wire.pool.keeplive>
    <div class="chat-box-header d-flex align-items-center justify-content-between">
        <h5>Live chat</h5>
        <button class="btn btn-close-chat-box">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
    <div class="chat-box-body" >
        <div class="all-chat" id="parentDiv">
            @foreach ($messages as $message)
                @if (Auth::user()&& $message->user_id == Auth::user()->id )
                    <div class="content-chat-sm me">
                        <div class="card">
                            <h6>Moi</h6>
                            <p>
                                {{$message->libelle}}
                            </p>
                            <span class="date">{{$message->created_at->diffForHumans() ?? ''}}</span>
                        </div>
                    </div>
                @else
                    <div class="content-chat-sm">
                        <div class="card">
                            <h6>{{$message->user->username ?? ''}}</h6>
                            <p>
                                {{$message->libelle}}
                            </p>
                            <span class="date">{{$message->created_at->diffForHumans() ?? ''}}</span>
                        </div>
                    </div>
                @endif

            @endforeach
        </div>
    </div>
    <div class="chat-box-footer">
        <form action="">
            <div class="row align-items-center">
                <div class="col-10 pe-0">
                    <input wire:model="message" maxlength="100" name="" id="" cols="30" rows="2" class="form-control" placeholder="Message">
                </div>
                <div class="col-2 d-flex justify-content-end pe-0">
                    <button class="btn">
                        <i class="bi bi-send" wire:click.prevent="send()"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
   var objDiv = document.getElementById("parentDiv");
    objDiv.scrollTop = objDiv.scrollHeight;
</script>
