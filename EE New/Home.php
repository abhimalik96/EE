<!DOCTYPE html>

<html>

	<head>
		<title>
			TaleBox Author Registration Page
		</title>

		<!--META-->
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  
  		<!--BOOTSTRAP CSS-->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  		<!--JQUERY-->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  		<script type="text/javascript">

  			$(document).ready(function(){
    		
    			$('[data-toggle="tooltip"]').tooltip(); 
	
			});
  		
  		</script>
  
  		<!--BOOTSTRAP JS-->
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	
      <style>

        h3 {            /*ALL H3 VALUES*/ 

          text-align: center;
          color: #2196f3;
          font-size: 30px;
          font-style: italic;
        }

      body {            /*FOR BODY CONTENT*/

          font-family: arial; 
          z-index: -1;
          background-image: url('new.jpg'); 
          background-repeat: no-repeat; 
          background-position: center;
      }

      @font-face {        /*CUSTOM FONT FOR THE LOGO*/

          font-family: titleFont;
          src: url(Pacifico.ttf);
      }

      #title {          /*MAIN TAILBOX TITLE*/
        
          text-align: center;
          font-family: titleFont;
          font-size: 80px;
          z-index: 1;
          color: white;
      }

      h4 {            /*ALL H4 VALUES*/ 

          text-align: center;
          font-family: titleFont;
      }

      .btn-success{
        background-color: white;
        font-family: titleFont;
        font-size: 17px;
        z-index: 10;
        border-radius: 10px;
        height: 30px;
        width: 100px;
      }

      .btn{
        background-color: white;
        font-family: titleFont;
        font-size: 17px;
        z-index: 10;
        border-radius: 10px;
      }

      li {

        color: black;
        font-weight: bold;
        font-size: 17px; 
      }

      #nav{
        z-index: 100;

      }

      #form{
        z-index: 10;
      }

      .borderless td, .borderless th {
    border: none !important;
}

      </style>
		

	</head>

	<body>

			<div>
				<br>
				
        <h1 id="title" style="vertical-align: center;">
					TaleBox<sup>&copy;</sup> 
				</h1>

        <h4 style="font-size: 12px; font-family: arial; font-weight: bold;">
           All Rights Reserved, Copyright of ABC Corp 
        </h4>
				
			</div>

			<br>
      <div class="col-md-12"> 

        <header>

          <div id="nav" class="col-md-12" style="background-color: white; width: 100%;margin-right: 10%; border-radius: 10px; align-content: center;">

            <div class="col-md-3">  
              
              <button class="btn" style="margin-top: 1%; margin-bottom: 1%; margin-right: 5%; margin-left: 5%; ">| Home |</button>
            
            </div>

            <div class="col-md-3">  
              
              <button class="btn" style="margin-top: 1%; margin-bottom: 1%; margin-right: 5%; margin-left: 5%; ">| About Us |</button>
            
            </div>

            <div class="col-md-3">  
              
              <button class="btn" style="margin-top: 1%; margin-bottom: 1%; margin-right: 5%; margin-left: 5%; ">| Become An Author |</button>
            
            </div>

            <div class="col-md-3">  
              
              <button class="btn" style="margin-top: 1%; margin-bottom: 1%; margin-right: 5%; margin-left: 5%; ">| Copy Right Information |</button>
            
            </div>
          
          </div>

        </header>
        </div>  
        <br>
        <br>
        <br>
  
        
        
       
        
        
        
          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%; height: 100px;" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
              
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              
              <li data-target="#myCarousel" data-slide-to="1"></li>
              
              <li data-target="#myCarousel" data-slide-to="2"></li>
            
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              
              <div class="item active">
              
                <img src="first.jpg" alt="Los Angeles" style="width:100%; height: 400px;">
              
              </div>

              <div class="item">
              
                <img src="new3.jpg" alt="Chicago" style="width:100%; height: 400px;">
              
              </div>
          
              <div class="item">
                
                <img src="new5.jpg" alt="New york" style="width:100%; height: 400px;">
              
              </div>
          
          </div>
        
        </div>
      
      

    
    

	</body>
</html>