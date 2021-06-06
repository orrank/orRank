<div>
    <div style="padding: 15px; background-color: white;">
        <center>
            <div id="qrcode"></div>
        </center>
    </div>
    <script src="{{ asset('assets/js/easy.qrcode.min.js') }}"></script>
    <script type="text/javascript">
        var options = {
            text: "{{ url('~' . $uniqueid) }}",
            width: 256,
            height: 256,
            colorDark: "#000000",
            colorLight: "#ffffff",
            logo: "{{ asset('assets/images/Ratinq.svg') }}",
            logoWidth: 50,
            logoHeight: 50,
        };
        new QRCode(document.getElementById("qrcode"), options);

    </script>
</div>
