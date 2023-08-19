
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v5.3.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="HexHub V5.1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <meta name="description" content="HexHub V5 | #1 Roblox Script Hub">
  
  
  <title>HexHub V5 - Keysystem</title>
 
 
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap-reboot.min.css">

  
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bellota+Text:300,300i,400,400i,700,700i&display=swap"></noscript>
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://mobirise.com/extensions/securem4/assets/mobirise/css/mbr-additional.css">
  
</head>
<body>

 
  <section class="menu menu1 cid-svGZR3ZApP" once="menu" id="menu1-f">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-info display-2" href="https://hexhubv5.up.railway.app/">HexHub</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://discord.gg/mUdwjdMQ5h">
                        <img class="p-2 mbr-iconfont TopbarButton socicon" src="https://www.svgrepo.com/show/353655/discord-icon.svg" alt="">
                    </a>
                
                    
                </div>
                
            </div>
        </div>
    </nav>
</section>



<section class="pricing3 cid-svMH5RrVSg" id="Key">
    <!---->
    
    
    <div class="container" id="AccessTokenContainer" style="display: block;">
       
        <div class="row">
            <div class="card col-12">
                <div class="card-wrapper">
                    <div class="top-line row">
                        <div class="col">
                           <center>
                            <h4 class="card-title mbr-fonts-style display-5"><strong>HexHub Keysystem</strong></center></h4>
                            <center> <h3 class="mbr-fonts-style display-5"><strong>Last Step!</strong><br></h3></center>
                        </div>
                        
                    </div>
                    <div class="bottom-line">
                       <center> <p class="mbr-text mbr-fonts-style display-7"><strong>To Generate A Key, Please go to our last Checkpoint and get an Access Token To get your HexHub Key</strong><br></p></center>
                    </div>
                    <form method="post" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <center><input class="form-control display-7" type="text" name="AccessTokenInput" placeholder="Access Token" id="AccessToken"></center>
                        <center> <input type="submit" name="AccessTokenSub" value="Submit" class="btn btn-md btn-success display-7"></input></center>
                      </form>
                      
                     
                     <center> <a class="btn btn-md btn-success display-7">Get Token</a></center>
                    
                    
                      </div>
                      
                      
                      </div>
                </div>
            </div>


        </div>

        <div class="container" id="KeyGenerationBox" style="display: none;">
       
            <div class="row">
                <div class="card col-12">
                    <div class="card-wrapper">
                        <div class="top-line row">
                            <div class="col">
                               <center>
                                <h4 class="card-title mbr-fonts-style display-5"><strong>HexHub Keysystem</strong></center></h4>
                            </div>
                            
                        </div>
                        <div class="bottom-line">
                           <center> <p class="mbr-text mbr-fonts-style display-7"><strong>Success, Your key Has Been Generated, Enjoy!</strong><br></p></center>
                        </div>
                        
    
                       
                        
                        <div class="card">
                            
                         
                           
                              <h5 id="KeyTextBox"><center>Nice Try</center></h5>
                              
                            </div>

                            <center> <a class="btn btn-sm btn-success">Copy Key</a></center>
                          </div>
                          
                          
                          </div>
                    </div>
                </div>
    
    
            </div>

    </div>
</section>



    
 </body>  
    </html>
    
    
        
            











  
  
  
  
  
</body>
</html>

<?php
//CHECKING FOR THE CAPTCHA AND PERFORMING THE FUNCTIONS DEPENDING ON THE CASES
if (isset($_POST["AccessTokenSub"])){
    $Inp = $_POST["AccessTokenInput"];
   // $url = "http://redirect-api.work.ink/tokenValid/".$Inp;
    $json = json_decode(file_get_contents('https://redirect-api.work.ink/tokenValid/'.$Inp));
    if($json['valid'] == true ){
        $key = keytodb(generatekey(25));
        echo '<script> document.getElementById("KeyTextBox").innerHTML = '.$key.' </script>';
        echo '<script> document.getElementById("KeyGenerationBox").style.display = "block";</script>';
        echo '<script> document.getElementById("AccessTokenContainer").style.display = "none";</script>';
        echo '<h3><center>' . $key . '</center></h3>';
    }else{
       // echo '<script> document.getElementById("Notif").innerHTML = "Make sure the recaptcha is checked!" </script>';
    }
}



// GENERATING THE RANDOM KEY

function generatekey($length){

 $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

 $charactersLength = strlen($characters);

 $randomString = '';

 for ($i = 0; $i < $length; $i++){

     $randomString .= $characters[rand(0, $charactersLength - 1)];

 }

 return $randomString;
 
}

// GENERATING THE RANDOM KEY
function keytodb($generatedkey){
    $data = file_get_contents('database.php');
    $data2 = str_replace("<?php", "",$data);
    $data3 = str_replace("?>", "",$data2);
    $data4 =  substr_replace($data3,'\'' . $generatedkey.'\'' . ',',-3,-3);
    file_put_contents('database.php', '<?php' . $data4 . '?>');
    $_SESSION['time'] = NULL;
    $_SESSION['timetwo'] = NULL;
    $_SESSION['timethree'] = NULL;
    return $generatedkey;
}

// SAVING THE KEY INTO THE DATABASE 

?>