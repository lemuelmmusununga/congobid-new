<div wire:poll.keep-alive>
    <div wire:ignore.self class="text-center">
        <span style="font-size: 12px">
            {{Str::length(Str::before((intval($munite) /60), '.')) == 1 ? '0'. Str::before((intval($munite) /60), '.'):Str::before((intval($munite) /60), '.') }}:{{ Str::length( (intval($munite) % 60)) == 1 ? ('0'.intval($munite) % 60) : (intval($munite) % 60)  }}:{{ Str::length( $seconds) == 1 ? '0'. $seconds :  $seconds}}
        </span>
    </div>
    <script>
        document.addEventListener('livewire:load',function() {
            let chrono = setInterval(() => {
                @this.decrement();
                $('.chrono').text(@this.seconds)
            }, 1000);
            @this.on('refreshCountdown', () => {
                clearInterval(chrono)
                alert('hello');
            })
        })
    </script>
</div>

