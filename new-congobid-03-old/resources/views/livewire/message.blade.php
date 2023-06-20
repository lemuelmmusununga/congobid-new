<div>
    <div class="writing-block-chat fixed-bottom">
        <div class="content-writing d-flex align-items-center">
            <div class="avatar">
                <img src="{{asset('images/bg3.jpg')}}" alt="">
            </div>
            <div class="block-textarea">
                <textarea name="message" wire:model="message" id="message" cols="30" rows="2" class="form-control" placeholder="Tapez du texte"></textarea>
            </div>
            <button class="btn btn-send">
                <i class="fi fi-rr-paper-plane" wire:click.prevent="send()" id="send"></i>
            </button>
        </div>
    </div>
</div>
