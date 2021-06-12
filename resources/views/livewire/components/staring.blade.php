<div>
    <div class="staring"></div>
</div>
<script>
    ! function(r) {
        r(function() {
            r(".staring").raty({
                score: 0,
                starOff: "far fa-star text-dark",
                starOn: "fas fa-star text-warning",
                click: function(a) {
                    alert("\nscore: " + a)
                }
            })
        })
    }(jQuery);

</script>
