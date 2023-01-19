<pre><?php
$data = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=3055d20497d34d46506bb8302ff1ba18');

//echo $data;

$data = json_decode($data);

print_r($data);

/*for($i=0;$i<count($data->stdClass); $i++)
{
    $title= $data->stdClass[$i]->title;
    
    echo $title.'<br>';
}*/




?></pre>