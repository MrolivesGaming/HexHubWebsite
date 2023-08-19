<?php

$database = include('database.php');
$blacklist = include('usedkey.php');



function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}




$sub = $_GET["key"];
$hwid = $_GET['hwid'];

$endResult = hash('ripemd160', $sub . $hwid);

$devkeys = array(
    "okrblx1@gmail.com", //5d8ec2b7415347aca25a3e04ff363272819ce46c
    "5d8ec2b7415347aca25a3e04ff363272819ce46c",

    ); 


    
if (in_array($sub, $blacklist,TRUE))
{
    echo json_encode(array('Valid' => false,'Used' => true,'Success' => true));
    return; 
}
else if (in_array($sub, $database,TRUE)) {
     // $GayAssThis = json_encode(array('Valid' => true));
     echo json_encode(array('Valid' => true,'Success' => true));
//Redirect('http://hexhub.rf.gd/HexHubKeySystem/SeparateFilesBecausePHPisRetarded/RetardedTrue.json', false);
    keytodb($sub);
    return;
} 
else if (in_array($endResult, $devkeys,TRUE)) {
    echo json_encode(array('Valid' => false,'DevKey' => true,'Success' => true));
    return; 
} 
else {
  //echo "{'Valid': false}";
 echo json_encode(array('Valid' => false,'Success' => true));


// $GayAssThis = json_encode(array('Valid' => false));

//print("ass");

//at this point im just making it super unsecure because roblox and this shit hosting is retarded as fucking shit

//Redirect('http://hexhub.rf.gd/HexHubKeySystem/SeparateFilesBecausePHPisRetarded/RetardedFalse.json', false);
}




function keytodb($generatedkey){
    $data = file_get_contents('usedkey.php');
    $data2 = str_replace("<?php", "",$data);
    $data3 = str_replace("?>", "",$data2);
    $data4 =  substr_replace($data3,'\'' . $generatedkey.'\'' . ',',-3,-3);
    file_put_contents('usedkey.php', '<?php' . $data4 . '?>');
    return $generatedkey;
}


?>
