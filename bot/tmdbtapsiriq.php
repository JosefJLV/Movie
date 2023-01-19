<pre><?php
$con=mysqli_connect('localhost','jymaxjgd_anbar','Yusif1996','jymaxjgd_kinobaza');
$tarix=date('Y-m-d H:i:s');

$data = file_get_contents('https://api.themoviedb.org/3/discover/movie?primary_release_date.gte=2015-01-01&primary_release_date.lte=2015-12-31&api_key=3055d20497d34d46506bb8302ff1ba18&page=3');

//echo $data;

$data = json_decode($data);

//print_r($data);

for($i=0;$i<count($data->results); $i++)
{
    $id= $data->results[$i]->id;
    
    $tamdata = file_get_contents('https://api.themoviedb.org/3/movie/'.$id.'?api_key=3055d20497d34d46506bb8302ff1ba18');
    
    $tamdata = json_decode($tamdata);
    
    //print_r($tamdata);
   break;
    $kino_id = $tamdata->id;
    $adult = $tamdata->adult;
    $backdrop = $tamdata->backdrop_path;
    echo'<img width="500" height="700" src= "https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$backdrop.'"> ';
    
    $budget = $tamdata->budget;
    $genre = $tamdata->genres[0]->name;  
    $homepage = $tamdata->homepage;
    $imdb = $tamdata->imdb_id;
    $language = $tamdata->original_language;
    $original_title = $tamdata->original_title;
    $overview = $tamdata->overview;
    $popularity = $tamdata->popularity;
    $poster = $tamdata->poster_path;
    echo'<img width="500" height="700" src= "https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$poster.'"> ';
   
    $country = $tamdata->production_countries[0]->name;
    $release_date = $tamdata->release_date;
    $runtime = $tamdata->runtime;
    $tagline = $tamdata->tagline;
    $spoken_language = $tamdata->spoken_languages[0]->english_name;
    $title = $tamdata->title;
    $vote_average = $tamdata->vote_average;
    $vote_count = $tamdata->vote_count;
    
    $vdata = file_get_contents('https://api.themoviedb.org/3/movie/'.$id.'/videos?api_key=3055d20497d34d46506bb8302ff1ba18');
    
    $vdata = json_decode($vdata);
    
    //print_r($vdata);
    
    if($vdata->results[0]->site=='YouTube')
    {
        $video = $vdata->results[0]->key;
    }
    else
    {
        $vdata = file_get_contents('https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=1&q='.urlencode($title).'&regionCode=AZ&type=videp&key=AIzaSyD21vKdfz785G2W96g7sqVFHA5ugb9RjnQ');
        
        $vdata = json_encode($vdata);
        
        $video = $vdata->items[0]->id->videoId;
    }
    
    echo'<iframe width="600" height="400" src="https://www.youtube.com/embed/'.$video.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>';
    
    $daxilet = mysqli_query($con,"INSERT INTO kinolar(kino_id,adult,backdrop,budget,genre,homepage,imdb,language,original_title,overview,popularity,poster,country,release_date,runtime,tagline,spoken_language,title,vote_average,vote_count,video,tarix)
    
        VALUES('".$kino_id."','".$adult."','".$backdrop."','".$budget."','".$genre."','".$homepage."','".$imdb."','".$language."','".$original_title."','".$overview."','".$popularity."','".$poster."','".$country."','".$release_date."','".$runtime."','".$tagline."','".$spoken_language."','".$title."','".$vote_average."','".$vote_count."','".$video."','".$tarix."')  ");
}




?></pre>