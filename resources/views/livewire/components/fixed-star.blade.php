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

        .Stars::before {
            content: "★★★★★";
            letter-spacing: 3px;
            background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

    </style>
    <div class="Stars" style="--rating: 3;" aria-label="Rating of this product is 4 out of 5."> </div>
</div>
