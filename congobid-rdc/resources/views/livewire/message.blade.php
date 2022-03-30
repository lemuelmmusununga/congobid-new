<div>
    <div class="nav-chat">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10" class="message">
                    <textarea name="message" wire:model="message" id="" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="col-2 d-flex justify-content-end ps-0">
                    <button class="btn" wire:click.prevent="send()">
                        <span class="iconify" data-icon="fluent:send-16-regular"></span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
