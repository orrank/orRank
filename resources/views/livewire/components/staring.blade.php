<div>
    <style>
        :root {
            --star-size: 35px;
            --star-color: rgb(136, 136, 136);
            --star-background: #fc0;
        }

        .Stars {
            --percent: calc(var(--rating) / 5 * 100%);
            display: inline-block;
            font-size: var(--star-size);
            font-family: Times;
            line-height: 1;
        }

        span {
            cursor: pointer;
        }

        .star {
            display: inline-block;
            font-size: 30px;
            font-family: Times;
            line-height: 1;
        }

        .yellow {
            color: #fc0;
        }

        .Stars::before {
            content: "★★★★★";
            letter-spacing: 3px;
            background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    </style>
    <div class="star">
        <span class="{{ $clz1 }}" wire:click="addStar(1)">★</span><span class="{{ $clz2 }}"
            wire:click="addStar(2)">★</span><span class="{{ $clz3 }}" wire:click="addStar(3)">★</span><span
            class="{{ $clz4 }}" wire:click="addStar(4)">★</span><span class="{{ $clz5 }}"
            wire:click="addStar(5)">★</span>

        <br>
        <p class="mb-0 float-right" style="font-size: 12px;">{{ $totalrating }} Rating</p>
    </div>
</div>
