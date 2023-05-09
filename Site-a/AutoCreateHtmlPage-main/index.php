<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Csv generate</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">
    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">
    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- <script src="https:////cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" charset="utf-8"></script> -->
  </head>
<body>

</body>
    <div class="main_area">
    <?php if(isset($_GET['from']) && !empty($_GET['text'])) { ?>
         <!--<table class="table-responsive">-->
             <!--<tbody>-->
        <?php
        
          $number = $_GET['text'];
          $form   = $_GET['from'];
          
          
        $fp = fopen (  "assets/upload/number.csv" , "r" );
        while (( $data = fgetcsv ( $fp , 1000 , "," )) !== FALSE ) {
            $data1[] =$data;
         
        }
        fclose ( $fp );
               
      
        $data = [
               [$_SERVER['REMOTE_ADDR'], $number,  date('Y-m-d H:i'), $form ],
            ];
            
        if(!empty($data1)) {
             $dataList = array_merge($data1, $data); 
        } else {
           $dataList = [
               ["User IP","Number", "Current time","from Param" ],
               [$_SERVER['REMOTE_ADDR'], $number,  date('Y-m-d H:i'), $form ],
           
            ] ; 
        }
    
       
        $filename ='number.csv';
        
        // open csv file for writing
        $f = fopen('assets/upload/'.$filename, 'w');
        
        if ($f === false) {
          die('Error opening the file ' . $filename);
        }
        
        // write each row at a time to a file
        foreach ($dataList as $row) {
          fputcsv($f, $row);
        }
        
        // close the file
        fclose($f);
        ?>
            <!--</tbody>-->
        <!--</table>-->
        <h1 class="thanks-register">Thank you for register</h1>
    <?php } elseif(isset($_GET['QueryPage'])) { ?>
        
        <div class="main_content_para">
            <h1> <?php echo $_GET['QueryPage']; ?></h1>

            

        </div>
     <?php } elseif(isset($_GET['qjson'])) { ?>
        
        <div class="main_content_para">
            <h1> <?php echo $_GET['qjson']; ?></h1>

           <?php 
                include("jsonload.php");
            ?> 

        </div>
        
        
     <?php } elseif(isset($_GET['from']) && $_GET['from'] !='QueryPage' && $_GET['from'] !='HomePage') { ?>
       
            <div class="main_content_para_defulat">
              <h1 class="title"> <?php echo $_GET['from']; ?></h1>
                
            </div>
            <form class="search" method="get" action="action.php"  id="form">
                <input type="hidden" value="<?php echo $_GET['from']; ?>" name="form">
                <input type="search" id="query" name="QueryPage" placeholder="Number..." required>
                <div class="submit_bar">
                    <button type="submit">Submit</button>
                </div>
            </form>
     <?php } elseif(isset($_GET['from']) && $_GET['from'] =='HomePage') { ?>
        
            <div class="main_content_para_defulat">
                <h1 class="title"><?php echo $_GET['from']; ?></h1>
                
            </div>
         <form class="search" method="get" action="action.php"  id="form">
             <input type="hidden" value="<?php echo $_GET['from']; ?>" name="form">
            <input type="search" id="query" name="QueryPage" placeholder="Number..." required>
            <div class="submit_bar">
                <button type="submit">Submit</button>
            </div>
        </form>
    <?php } else { ?>
        <?php
            header("Location: index.php?from=HomePage");
            exit();
        ?>
    <?php } ?>
    </div>
  
</body>
</html>

