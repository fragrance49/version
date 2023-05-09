
 <head>
    <link rel="stylesheet" href="/Original/Questions/css/styles.css">
  
</head> 

<div class="jsonui">
    <!-- Opening Animation -->
    <img id="introAnimation">

    <!-- Rating Form -->
    <div class="ratingForm">
        <!-- Title -->
        <div class="formText" id="title"></div>
        
        <!-- Rating-Bar -->
        <div class="ratingBar">
            <img class="buttonBox" id="leftThumbImg">
            <div                   id="rateButtonsContainer"></div>
            <img class="buttonBox" id="rightThumbImg">
        </div>

        <!-- Navigation-Bar [Bottom] -->
        <div class="navigationBar">
            <button class="navigationButton" id="prevButton"></button>
            <div    class="formText"         id="comment"></div>
            <button class="navigationButton" id="nextButton"></button>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/Original/Questions/js/jquery.min.js"></script>
    
    <!-- Scripts -->
    <!-- <script src="./assets/js/ConfigMaps.js"></script> -->
    <script type="text/javascript">
    	const __mapCidToPath =
		{
		    "default" : "/Original/data/1.json",
		    // "test"    : "./json/test.json",
		    // "border"  : "./json/border.json",

		    1 : "./json/cfg1.json",
		    2 : "./json/cfg2.json",
		    3 : "./json/cfg3.json",
		    4 : "./json/cfg4.json"
		};

    </script>
    <script src="/Original/Questions/js/src/RatingForm.js"></script>
</div>
