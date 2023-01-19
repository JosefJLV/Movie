<pre><?php


$data = file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=10&q='.urlencode('Quba sheheri').'&regionCode=AZ&type=videp&key=AIzaSyD21vKdfz785G2W96g7sqVFHA5ugb9RjnQ');

//echo $data;

$data = json_decode($data);

//print_r($data);

for($i=0;$i<count($data->items); $i++)
{
    $title = $data->items[$i]->snippet->title;
    
    echo $title.'<br>';
    
    $key = $data->items[$i]->id->videoId;
    echo'<iframe width="1520" height="577" src="https://www.youtube.com/embed/'.$key.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>';
    
}

?></pre>

