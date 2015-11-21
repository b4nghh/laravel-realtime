<p id="power">0</p>

<script src="{{ asset('assets/js/socket.io.js') }}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script>
var socket = io('http://localhost:3000');
socket.on("send-msg-bang:App\\Events\\SendMessage", function(message){
    console.log(message);
     // increase the power everytime we load test route
     $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
 });
</script>

