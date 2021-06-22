<div id="score">
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <span class="{{ $clz1 }}" wire:click="addStar(1)">★</span><span class="{{ $clz2 }}"
        wire:click="addStar(2)">★</span><span class="{{ $clz3 }}" wire:click="addStar(3)">★</span><span
        class="{{ $clz4 }}" wire:click="addStar(4)">★</span><span class="{{ $clz5 }}"
        wire:click="addStar(5)">★</span> {{ $response }}

    @if ($success)
        <script>
            Swal.fire(
                'Good job!',
                'You clicked the button!',
                'success'
            )
            /* 
                title: 'Good job!',
                icon: 'question',
                text: 'Thank you for you rating!',
                timer: 5000,
                willClose: () => {
                    clearInterval(timerInterval)
                } */

        </script>
    @endif
</div>
