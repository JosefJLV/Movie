<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
           
<?php
echo'<div class="container">
        <div class="alert alert-info">
            <form method="post">
                <h5>Axtar:</h5>
                <input type="text" name="ad" class="form-control">
                <input type="radio" name="say" value="5">5<br>
                <input type="radio" name="say" value="10">10 <br>
                <button type="submit" name="axtar" class="btn btn-primary">Axtar</button>
            </form>
        </div>
    </div>';


if(isset($_POST['axtar']))
{
$data = file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$_POST['say'].'&q='.urlencode($_POST['ad']).'&regionCode=AZ&type=videp&key=AIzaSyD21vKdfz785G2W96g7sqVFHA5ugb9RjnQ');

//echo $data;

$data = json_decode($data);

//print_r($data);

    for($i=0;$i<count($data->items); $i++)
    {
        $title = $data->items[$i]->snippet->title;
        
        echo '<h5>'.$title.'</h5>';
        
        $key = $data->items[$i]->id->videoId;
        echo'<iframe width="600" height="350" src="https://www.youtube.com/embed/'.$key.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>';
        
    }
}
?>

