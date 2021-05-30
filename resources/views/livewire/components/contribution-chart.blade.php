<div>
    <style>
        :root {
            --square-size: 14px;
            --square-gap: 5px;
            --week-width: calc(var(--square-size) + var(--square-gap));
        }

        .months {
            grid-area: months;
            list-style: none;
            font-size: 11px;
            padding-right: 25px;
        }

        .days {
            grid-area: days;
            list-style: none;
            font-size: 11px;
            padding: 0px;
        }

        .squares {
            grid-area: squares;
            list-style: none;
            padding: 0px;
        }

        .graph {
            display: inline-grid;
            grid-template-areas: "empty months"
                "days squares";
            grid-template-columns: auto 1fr;
            grid-gap: 10px;
        }

        .months {
            display: grid;
            grid-template-columns: calc(var(--week-width) * 4)
                /* Jan */
                calc(var(--week-width) * 4)
                /* Feb */
                calc(var(--week-width) * 4)
                /* Mar */
                calc(var(--week-width) * 5)
                /* Apr */
                calc(var(--week-width) * 4)
                /* May */
                calc(var(--week-width) * 4)
                /* Jun */
                calc(var(--week-width) * 5)
                /* Jul */
                calc(var(--week-width) * 4)
                /* Aug */
                calc(var(--week-width) * 4)
                /* Sep */
                calc(var(--week-width) * 5)
                /* Oct */
                calc(var(--week-width) * 4)
                /* Nov */
                calc(var(--week-width) * 5)
                /* Dec */
            ;
        }

        .days,
        .squares {
            display: grid;
            grid-gap: var(--square-gap);
            grid-template-rows: repeat(7, var(--square-size));
        }

        .squares {
            grid-auto-flow: column;
            grid-auto-columns: var(--square-size);
        }

        .graph {}

        .days li:nth-child(odd) {
            visibility: hidden;
        }

        .squares li {
            background-color: #eee;
        }

        .squares li[data-level="1"] {
            background-color: rgb(245, 255, 202);
            ;
        }

        .squares li[data-level="2"] {
            background-color: rgb(230, 207, 106);
            ;
        }

        .squares li[data-level="3"] {
            background-color: rgb(255, 209, 4);
            ;
        }

    </style>
    <div class="graph">
        <ul class="months">
            <li>Jan</li>
            <li>Feb</li>
            <li>Mar</li>
            <li>Apr</li>
            <li>May</li>
            <li>Jun</li>
            <li>Jul</li>
            <li>Aug</li>
            <li>Sep</li>
            <li>Oct</li>
            <li>Nov</li>
            <li>Dec</li>
        </ul>
        <ul class="days">
            <li>Sun</li>
            <li>Mon</li>
            <li>Tue</li>
            <li>Wed</li>
            <li>Thu</li>
            <li>Fri</li>
            <li>Sat</li>
        </ul>
        <ul class="squares">
            <!-- added via javascript -->
        </ul>
    </div>
    <script>
        const squares = document.querySelector('.squares');
        for (var i = 1; i < 359; i++) {
            const level = Math.floor(Math.random() * 3);
            squares.insertAdjacentHTML('beforeend',
                `<li data-placement="bottom" data-toggle="tooltip" class="tooltips" data-original-title="${level} Processes" data-level="${level}"></li>`
                );
        }

    </script>
</div>
