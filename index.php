<?php
include('phpFMplayer.php');



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.material.min.css">
    <link rel="stylesheet" href="css/framework7.material.colors.min.css">
    <link rel="stylesheet" href="css/framework7-icons.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="css/my-app.css">
    <style>
    
    .size-50 { font-size: 50px }
    .size-80 { font-size: 80px }
    
    </style>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/my-app.js"></script>
    <script type="text/javascript" src="js/kitchen-sink.js"></script>
    <script src="./js/jquery.min.js"></script>

	<script src="./js/angular.min.js"></script>
	
  </head>
  
  <?php
  if(false)
  {
	  
	  
	  //LOGIN
	  ?>
	  

	  <?php
	  
	  }else{
  ?>
  

  
  
  <body ng-init="init()" ng-app="myApp" ng-controller="myControler" >
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal" ng-controller="GetFilenames">
     
     
     <!--
     
      <div class="content-block">
        <div class="content-block-title">Uploaded songs</div>
    <div class="list-block">
      <ul>
        
    <li  ng-repeat="fileName in file_names" ng-click="replay(fileName)">
      <a href="#" class="item-link item-content">
        
        <div class="item-inner" >
			
          <div  class="item-title">{{fileName}}</div>
         
        </div>
      </a>
    </li>
      </ul>
      </div>
		</div>
             -->
               
               <div class="list-block">
      <ul>
        <li class="swipeout" filename='{{fileName}}' ng-repeat="fileName in file_names" ng-click="replay(fileName)">
          <div class="item-content swipeout-content" style="">
            <div class="item-media"><i class="icon icon-f7"></i></div>
            <div class="item-inner"> 
              <div class="item-title">{{fileName}}</div>
            </div>
          </div>
          <div class="swipeout-actions-right"><a href="#" data-confirm="Are you sure you want to delete this item?" class="swipeout-delete" style="left: 0px;">Delete</a></div>
        </li>
       
      </ul>
    </div>
               
               
               
               
     
      	 
    </div> <!-- left panel end -->
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block" ng-include="'./help.html'">
        <p>Right panel content goes here</p>
        
        
        
        

      </div>
      
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="center sliding">RASPBERRY PI RADIO App</div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
			  
            <!-- Scrollable page content-->
            <div class="page-content" > <!-- angularjs -->
            
              <div class="content-block-title">Welcome To My Awesome App</div>
              
             <!--  <div class="row">
        <div class="col-60"> 
			-->
			
			<marquee><?php if(isset($_GET['filename'])){echo 'Last uploaded file: '.$_GET['filename'];}?></marquee>
			
			
				<div class="content-block" >
					<div class="content-block-inner" >
						<p>RASPBERY PI radio</p>
						<p> This is a web interface for rasberry pi radio </p>
						<p> transmit radio by pressing PLAY </p>
						<br>
					</div>
				</div>
				
				  
    <div class="content-block bg-blue">
		<div class="content-block-inner color-orange bold"><h1>FREQUENCY</h1></div>
        <p class="content-block"style="font-size:5em;">{{frequency}}</p>
    </div>
 
 
   
				  
				  
        <!--
        <form id='form1' method="POST" enctype="multipart/form-data" action="./phpFMplayer.php">-->
        <form id='form1' method="POST" enctype="multipart/form-data" action="./index.php">
            <input class="custom-file-input " type='file' id='_file' name='music'>
			<input type='hidden' name='upload' value='valueplay'>
			<i id='mic' ng-click="go_live()" class="f7-icons size-50">mic</i>
			


              <p class="buttons-row" ><a href="#" ng-click="playFm()" class=" button button-big button-fill button-raised color-pink" >PLAY</a><a href="#" ng-click="stopFm()" class="button button-big button-fill button-raised color-teal">STOP</a></p>
            
<!--<div ng-app="">-->
            
              <div class="item-content">
           
            <div class="item-inner">
             
              <div class="item-input">
                <div class="range-slider">
                  <input ng-model="frequency" name='frequency' class="" min="88" max="108" value="95" step="0.1" type="range">
                </div>
              </div>
            </div>
            
            
            
            </div>
            
         </form>
  
 <!-- <h1>frequency {{frequency}}</h1> -->
  
<!--</div>-->
            <br>
            <br>
            <br>
            <br>
            
          </div>
          <!-- page-content end -->
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link open-panel">songs</a><a href="#" class="link open-panel" data-panel="right" >help</a></div>
        </div>
      </div>
    </div>
    
          <div class="login-screen modal-in">
         <div class="view">
            <div class="page">
               <div class="page-content login-screen-content">
                  <div class="login-screen-title">Login Here</div>
                  <form>
                     <div class="list-block">
                        <ul>
                           <li class="item-content">
                              <div class="item-inner">
                                 <div class="item-title label">Username</div>
                                 <div class="item-input">
                                    <input type="text" name="username" placeholder="Enter the username">
                                 </div>
                              </div>
                           </li>
                           <li class="item-content">
                              <div class="item-inner">
                                 <div class="item-title label">Password</div>
                                 <div class="item-input">
                                    <input type="password" name="password" placeholder="Enter the password">
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="list-block">
                        <ul>
                           <li><a href="#" class="item-link list-button">Log In</a></li>
                        </ul>
                        <div class="list-block-label">
                          <!--
                           <p><a href="#" class="close-login-screen">Click here to close Login Screen</a></p>
                      -->
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
    
    </body>
    
    <?php
    
			}
    ?>
    <script>
    //login
    
     var myApp = new Framework7();

         // If your using custom DOM library, then save it to $$ variable
         var $$ = Dom7;

         // Add the view
        /* var mainView = myApp.addView('.view-main', {
         // enable the dynamic navbar for this view:
            dynamicNavbar: true
         });
         */
         $$('.login-screen .list-button').on('click', function () {
            var uname = $$('.login-screen input[name="username"]').val();
            var pwd = $$('.login-screen input[name="password"]').val();
            //myApp.alert('Username: ' + uname + ', Password: ' + pwd, function () {
            //myApp.closeModal('.login-screen');
            
            console.log('haoi');
            $.post('./security.php',{'username':uname,'password':pwd},function (data){
				console.log(data.trim());
				console.log(data);
				if(data.trim()=="success")
				{
					myApp.closeModal('.login-screen');
					}
				
				});
            
            
         });
       <?php

		if(isset($_GET['filename']))
			{
				echo "
				console.log('vedan');
				myApp.closeModal('.login-screen');
				";
			}
?>   
    
    </script>
    

    
    
	<script>
var files=null;

// Add events
$('input[type=file]').on('change', prepareUpload);//calls prepareupload function when file in selected or in english upload file when file selected


// Grab the files and set them to our variable
function prepareUpload(event)
{
	//console.log('selected file changed');
  files = event.target.files;
  form1.submit();//on file select trigger file upload
}


</script>
	
<script>
	//setting up angular js
	var app = angular.module('myApp', []);
app.controller('myControler', function($scope,$http) {

	$scope.init = function () {
		//inital function
  	
  		$scope.stopFm();

  	
}
    $scope.frequency = "95";
    //call post ///call jquery fmplay through angular
    
    
        $scope.mic_status="off";
    $scope.go_live=function(){
		
		
		
						
				if($scope.mic_status=="off")//if off then
				{
					
			 $.post('./phpFMplayer.php',{'go_live':$scope.frequency});
					mic.innerHTML="mic_fill";
					
				$('#mic').removeClass("size-50 color-black");	
				$('#mic').addClass("f7-icons size-80 color-red");
					$scope.mic_status='on';
					
					
					
					}else{
						$.post('./phpFMplayer.php',{'go_offline':'go_offline'});
						//go_offline
				mic.innerHTML="mic";
				$('#mic').removeClass("size-80 color-red");
				$('#mic').addClass("f7-icons size-50 color-black");
					$scope.mic_status='off';
						}
		
		
		
		
		}
   $scope.playFm=function(){
				fq=$scope.frequency;
//$.post('./phpFMplayer.php',{'play':'play','frequency':fq,'music':gobalformData});

$scope.replay('<?php echo $_GET['filename']; ?>');




	/*	var file_data = $('#_file').prop('files')[0];   

$.post('http://192.168.1.10/~pi/dev_piFM_project/phpFMplayer.php',{'play':'play','frequency':fq,'file':file_data}).done(function(data){console.log('received'+data)}).fail(function(data){console.log("ERROR"+data)});

$.post('http://192.168.43.10/~pi/dev_piFM_project/phpFMplayer.php',{'play':'play','frequency':fq}).done(function(data){console.log(data)});
$.post('http://raspberrypi.local/~pi/dev_piFM_project/phpFMplayer.php',{'play':'play','frequency':fq}).done(function(data){console.log(data)});
*/
	//form1.submit();//defaulft upload
	//uploadFiles();


}
	$scope.stopFm=function(e){
		
		$.post('./phpFMplayer.php',{'stop':'play'});
		
	$.post('http://192.168.1.10/~pi/dev_piFM_project/phpFMplayer.php',{'stop':'play'});
	$.post('http://192.168.43.10/~pi/dev_piFM_project/phpFMplayer.php',{'stop':'play'});//if wifi in meizu m2 note
	$.post('http://raspberrypi.local/dev_piFM_project/~pi/phpFMplayer.php',{'stop':'play'});//if from pc

	}
	
	$scope.replay=function(filename){
		
			console.log(filename);
	 myApp7.addNotification({
                 message: 'Now Playing:'+filename
             });
			fq=$scope.frequency;
		$.post('./phpFMplayer.php',{'replay':filename,'frequency':fq},function(data){
			//alert(data);
			console.log('replay responce');
			
			
             setTimeout(function(){
				 
				 console.log('close notification');
			myApp7.closeNotification('.notification-item') 

				 },5000);
			});	
		}


});
getFileNames=null;//for calling get file names after words
app.controller('GetFilenames', function($scope, $http) {
    
    
    $scope.getFileNames=function(){
    
    $http.get("./getuploadedsongs.php")
    .then(function(response) {
        $scope.file_names = response.data;
        
      
      
			 /*   $$('.swipeout').on('deleted', function () {
           myApp7.alert('Item removed');
         });
			 */
           
        
       console.log("getuploadedsongs called");
       
       
    });
    
			}
			$scope.getFileNames();	
			getFileNames=$scope.getFileNames;	//for calling get file names after words	 
            });
  
			



	/*
function fmplay(){


	frequency=
$.post('http://192.168.1.10/~pi/index.php',{'play':'play','frequency':'95.0'});

}*/
	function finetunner()
	{
		
			
	f.value=parseFloat(parseFloat(slider1.value)+parseFloat(slider2.value))
	}
</script>
<script>
	//framework 7 notification
	
	 var myApp7 = new Framework7({
           material: true
         });
         var mainView = myApp7.addView('.view-main');

         var $$ = Dom7;

        
       /*     
       uncomment to show welcome message
        myApp7.addNotification({
                 message: 'Welcome to pi radio'
             });
            */
        /*     $$('.swipeout').on('deleted', function () {
           myApp7.alert('Item removed');
         });
         */
         
        
	$$('.open-panel').click(function(){
		
		
		getFileNames();//load newly uploaded files list
		
		//adds deleted item event on left pannel open 
			 $$('.swipeout').on('deleted', function () {
			 
			 var filename=this.getAttribute('filename');
			 
			 $.post('./phpFMplayer.php',{'delete_song':filename},function(d){console.log('request delete file')});
         
			 //myApp7.alert('song '+filename+' removed');
                
                  
				x=this;
				});
											});
	x=null;//for debuging deleted item
	</script>
	<script language='javascript' src='./js/ajaxupload.js'></script>
</html>
