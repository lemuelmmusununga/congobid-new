<div>
    <div>
        <h1>Compte à rebours</h1>
        <h2>Il reste {{ $seconds }} secondes</h2>
    </div>
    <script>
        // Livewire.on('refreshCountdown', function () {
        //     alert('hello');

        //     window.setTimeout(function () {
        //         Livewire.emit('decrement');
        //     }, 1000);
        // });
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

