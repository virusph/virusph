<?=template_header('Home')?>
<div id='map' style='width: 100%; height: 93vh;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiamNhcXVpbm8wOTQ1IiwiYSI6ImNrOXBvcDNkNjBkNGIzbnFxYnJzcTdydXYifQ.GPkGqSzSUjq5D73w45pIwA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
</script>
<?=template_footer()?>