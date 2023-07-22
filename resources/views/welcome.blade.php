<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add an ant path animation to a line</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
 .btn-report{
    position: absolute;
    margin: 10px;

 }
</style>
</head>
<body>
    <div class="">
            
        <x-mapbox 
        id="map" 
        class="hellomap"   
        mapStyle="mapbox/streets-v12" 
        :center="['long' => 120.594, 'lat' => 13.227]"
        :navigationControls="true"
        :interactive="true"
        :zoom=16
        :markers="[['long' => 120.594836, 'lat' => 13.226598,'description' => 'Municipality of Mamburao']]" />
 
    </div>

    {{-- 13.226598, 120.594836
// mapbox://styles/mapbox/satellite-streets-v12
Mamburao Loc --}}

<script>


 


</script>

</body>
</html>