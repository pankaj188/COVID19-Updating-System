<!DOCTYPE html>
<html>
<head>



<script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-160698988-4');
	</script>
	
	<link rel='stylesheet' type='text/css' media='screen' href='main.css'>

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

	<title></title>
	<?php include 'links.php';?>
	<?php include 'style.php';?>
	
</head>
<body onload="fetch()">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div>
        <h1 class="navbar-brand text-success my-1" >COVID-19 Tracking System </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#aboutid">ABOUT <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#preventid">PREVENTION <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#update">UPDATES <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#sympid">SYMPTOMS<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-light" href="#contactid">CONTACT<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.html">GRAPHS<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>



<div class="the-head">
        <h1>COVID-19 Live Tracking System ! </h1>
        <div class="header-section">
            <div class="left">
                <img src="./img/corona-1.png" alt="CORONA-IMAGE">
            </div>
            <div class="right">
                <img src="./img/banner.png" alt="COVID-19">
            </div>
        </div>
    </div>



	




	<div class="container-fluid pt-5 pb-5" id="prevent">
        <div class="section-header text-center mb-5 mt-4">
            <h1><strong>The Important Prevention Steps Against Coronavirus</strong></h1>
        </div>
        
        <div class="the-medias">
            <div class="media">
                <img src="./img/wash.png" class="mr-3" alt="..." width="90" height="90">
                <div class="media-body">
                  Wash your hands regularly for 20 seconds, with soap and water or an alcohol based hand rub.
                </div>
            </div>
            <div class="media">
                <img src="./img/mask.png" class="mr-3" alt="..." width="90" height="90">
                <div class="media-body">
                  Cover your nose and mouth with disposable tissue or elbow whenever you cough. Also, Use Masks.
                </div>
            </div>
            <div class="media">
                <img src="./img/avoid.png" class="mr-3" alt="..." width="90" height="90">
                <div class="media-body">
                  Avoid close contact (1 meter or 3 feet) with people who are unwell
                </div>
            </div>
            <div class="media">
                <img src="./img/home.png" class="mr-3" alt="..." width="90" height="90">
                <div class="media-body">
                  Stay at home as much as possible and break the chain. Stay isolated from others if you feel unwell to avoid the spread.
                </div>
            </div>
            <div class="media">
                <img src="./img/news.png" class="mr-3" alt="..." width="90" height="90">
                <div class="media-body">
                  Stay informed and aware by watching news & follow the recommended practices.
                </div>
            </div>
            <div class="media">
                <img src="./img/medical.png" class="mr-3" alt="medical" width="90" height="90">
                <div class="media-body">
                  If you have cough, fever, difficulty in breathing then seek medical care as early as possible.
                </div>
            </div>
        </div>
	</div>
	




<!--corona update part-->



<div class="tab-info" id="update">
        <h3><strong>Countrywise Data of COVID-19</strong></h3>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search for a Country" aria-label="Search" id="searchbox">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchbtn">Search</button>
        </form>
    </div>
    <div class="tab-bg">
        <div class="container my-3">
            <div class="table-responsive">
                <table class="table table-dark table-bordered  "  id="tval">
                    <thead class="thead-light">
                    <tr>
                        <!-- <th scope="col">S.No</th> -->
                        <th scope="col">COUNTRY</th>
                        <th scope="col" class="text-danger">CONFIRMED</th>
                        <th scope="col" class="text-danger">Recovered</th>
                        <th scope="col" class="text-danger">Deaths</th>
                        <th scope="col" class="text-danger">NewConfirmed</th>
                        <th scope="col" class="text-danger">NewRecovered</th>
                        <th scope="col" class="text-danger">NewDeaths</th>
					</tr>
					



					
                    </thead>
                    <tbody id="tablebody">
                    </tbody>
                </table>
            </div>   
        </div>
    </div>







<!--about section-->


<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>ABOUT COVID-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="./img/virus.png " class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>WHAT IS CORONA</h2><br>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>
    		<p>HOW IT SPREADS:
Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.</p>
		</div>
	</div>
</div>
<!--SYMPTOMS-->

<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">

		<h1>CORONA VIRUS SYMPTOMS</h1>
	</div>
	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="./img/cough.jpg" class="img-fluid" width="120" height="120">
                     <figcaption>COUGH</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="./img/RUNNY NOSE.png" class="img-fluid" width="80" height="80">
                     <figcaption>RUNNY NOSE</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="./img/cold.png" class="img-fluid" width="80" height="80">
                     <figcaption>COLD</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="./img/fever.png" class="img-fluid" width="120" height="120">
                     <figcaption>FEVER</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="./img/exhausted.png" class="img-fluid" width="70" height="70">
                     <figcaption>TIREDNESS</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="./img/DIFFICULTY BREATHING.jpg" class="img-fluid" width="80" height="80">
                     <figcaption>DIFFICULTY BREATHING</figcaption>
			</figure>
		</div>

	</div>
	</div>
	<!--PREVENTION-->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header  text-center mb-5 mt-4">
		<h1>6 STEPS PREVENTION AGAINST CORONAVIRUS</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="https://www.pngarts.com/files/7/Hand-Wash-PNG-Pic.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>wash your hands regularly for 20 seconds ,with soap and water or alcohol-based hand rub. <span class="color_change">To see how to wash hand  </span><a href="https://www.youtube.com/watch?v=IisgnbMfKvI" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT0Pnv1222zoenY9D2i9uUI22TeDt3CoXLHvw&usqp=CAU" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>cover your nose and mouth with a disposal tissue or flexed elbow when you cough or sneeze.<span class="color_change">How to cover your face </span><a href="https://www.youtube.com/watch?v=A_ariGyzOmQ" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="https://image.shutterstock.com/image-vector/social-distancing-keep-your-distance-260nw-1675454764.jpg" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>avoid close contact (1 meter or 3 feet ) with people who are unwell.<span class="color_change">To know what is social distancing </span><a href="https://www.youtube.com/watch?v=bYQjssb7xdk" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="https://uxwing.com/wp-content/themes/uxwing/download/15-healthcare-and-medical/quarantine.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>stay home and self-isolate from others in the household if you feel unwell.<span class="color_change">To know what is home quarantine is </span><a href="https://www.youtube.com/watch?v=MRAgEzpJhUc" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="https://png.pngtree.com/png-clipart/20190920/original/pngtree-news-player-tv-illustration-png-image_4685218.jpg" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>stay informed by wathing news & follow the recommended practise <span class="color_change">To get the news </span><a href="https://www.youtube.com/results?search_query=live+channel+in+bangladesh" target="_blank">click here</a></p>
					</div>
				</div>
			</div>
						<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
				<img src="https://e7.pngegg.com/pngimages/345/371/png-clipart-ambulance-computer-icons-emergency-medical-services-ambulance-logo-ambulance.png" class="img-fluid" width="90" height="90"> 
			</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>if you have fever ,cough and difficulty breathing ,seek medicine care early <span class="color_change">Call the hotline number</span> 16263</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>


<!--contact us-->

<!-- <div class="container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header  text-center mb-5 mt-4">
	<h1>TravelHistoryQuestionnaire </h1>
        
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12"> -->

<!-- form fields-->
<!-- <form action=" " method="POST">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@gmail.com" autocomplete="off" required>
  </div>
    <div class="form-group">
    <label >mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
<div class="form-group">
	
<label>Have you been to China in last 2 weeks?</label><br>
<input type="radio" id="yes" name="china" value="chinayes">
  <label>YES</label><br>
<input type="radio" id="no" name="china" value="chinano">
  <label >NO</label><br>
<label>Have you travelled out of India in the last 2 weeks?</label><br>
<input type="radio" id="travyes" name="india" value="travyes">
  <label>YES</label><br>
<input type="radio" id="travno" name="india" value="travno">
  <label >NO</label><br> -->
<!-- <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox3" name="coronasym[]" value="breath">
  <label class="custom-control-label" for="custom-checkbox3"> difficulty in breath</label>
</div> -->
<!-- <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox4" name="coronasym[]" value="feeling weak">
  <label class="custom-control-label" for="custom-checkbox4"> feeling weak</label>
</div> -->
<!-- <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox5" name="coronasym[]" value="no symp">
  <label class="custom-control-label" for="custom-checkbox5"> no symp</label>
</div> -->
<!-- </div> -->


  <!-- <div class="form-group">
    <label for="exampleFormControlTextarea1" >Body temperature </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="temp"></textarea>
  </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form >
			</div>
		</div>
	</div>
	</div> -->



	<!--contact us-->

<div class="container-fluid  pt-5 pb-5" id="contactid">
	<div class="section_header  text-center mb-5 mt-4">
	<h1>CONTACT WITH US </h1>
        <h2>If You HAVE  THE FOLLOWING SYMPTOMS</h2.>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">

<!-- form fields-->
<form action=" " method="POST">

  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@gmail.com" autocomplete="off" required>
  </div>
    <div class="form-group">
    <label >mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required>
  </div>
<div class="form-group">
	
<label> select symptoms</label><br>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox1" name="coronasym[]" value="cold">
  <label class="custom-control-label" for="custom-checkbox1"> cold</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox2" name="coronasym[]" value="fever">
  <label class="custom-control-label" for="custom-checkbox2"> fever</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox3" name="coronasym[]" value="breath">
  <label class="custom-control-label" for="custom-checkbox3"> difficulty in breath</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox4" name="coronasym[]" value="feeling weak">
  <label class="custom-control-label" for="custom-checkbox4"> feeling weak</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  <input type="checkbox" class="custom-control-input" id="custom-checkbox5" name="coronasym[]" value="no symp">
  <label class="custom-control-label" for="custom-checkbox5"> no symp</label>
</div>
</div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1" >ADDRESS </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form >
			</div>
		</div>
	</div>
	</div>



	





<!--top cursor-->
<button onclick="topFunction()" id="gotoTop" title="Go to top">Top</button>
<!--FOOTER-->
<!-- <footer class="container mt-5">
	<div class="footer_style text-white  text-center container-fluid"> -->
		<!-- <p>@copyright by ismail hosain</p> -->
<!-- </div>
</footer>  -->












 
<script type="text/javascript" >
	
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("gotoTop").style.display = "block";
    } else {
        document.getElementById("gotoTop").style.display = "none";
    }
   
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
 
     $('html, body').animate({scrollTop:0}, 'slow');
}

function fetch(){

	$.get("https://api.covid19api.com/summary",

			function(data){

				//console.log(data['Countries'].length);
			 var tval= document.getElementById('tval');
			 for(var i=1;i<(data['Countries'].length);i++){

			 	var x = tval.insertRow();
			 	x.insertCell(0);

			 	tval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
			 	// tval.rows[i].cells[0].style.background ='#7a4a91';
			 	tval.rows[i].cells[0].style.color ='#fff';
				
				x.insertCell(1);
			 	tval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
			 	// tval.rows[i].cells[1].style.background ='#4bb7d8';
			 	
			 	x.insertCell(2);
			 	tval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
			 	// tval.rows[i].cells[2].style.background ='#f36e23';
			 	
			 	x.insertCell(3);
			 	tval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
			 	// tval.rows[i].cells[3].style.background ='#4bb7d8';
			 
			 	x.insertCell(4);
			 	tval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
			 	// tval.rows[i].cells[4].style.background ='#9cc850';
			 	
			 	x.insertCell(5);
			 	tval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
			 	// tval.rows[i].cells[5].style.background ='#f36e23';

			 	x.insertCell(6);
			 	tval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
			 	// tval.rows[i].cells[6].style.background ='#4bb7d8';



			 }
			}


		)
}


</script>
</body>


<script src='main.js'></script>

</html>




<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {

 $username =$_POST['name'];
 $email =$_POST['email'];
 $mobile =$_POST['mobile'];
 $symp =$_POST['coronasym'];
 $message =$_POST['msg'];

 $chk="";

 foreach ($symp as $chk1 ) {
 	$chk .= $chk1. ",";
 }
  $insertquery= "insert into  contactdetails(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$message')";
  $query= mysqli_query( $conn,$insertquery);
  if($query){
	?>
<script type="text/javascript">
	// alert("inserted successful");
</script>

	<?php
}else{
	?>

	< <script type="text/javascript">
	alert("no inserted ");
 </script>
	<?php
} 

}

?>

