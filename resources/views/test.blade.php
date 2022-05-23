<link rel="stylesheet" href="font-awesome.min.css">
<link href="buttonLoader.css" rel="stylesheet">

<script src="jquery-1.11.3.min.js"></script>

<script src="jquery.buttonLoader.js"></script>
<button class="button-class"> loading</button>

<script>
$('.button-class').click(function () {

var btn = $(this);

$(btn).buttonLoader('start');

setTimeout(function () {

$(btn).buttonLoader('stop');

}, 5000);

});
</script>