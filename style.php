<style type="text/css">
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Muli', sans-serif;
}
.row{
	margin-left: 0!important;
	margin-right: 0!important;
	}
.nav_style{
  background-color: #a29bfe!important;
}
.nav_style a{
	color:white;
}
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
.corona_round img{
	animation: corona 3s linear infinite;
}
.the-head{
    background-color: #0d0102;
    background-image: url("virus.png");
}
.the-head h1{
    text-align: center;
    padding-top: 75px;
    font-weight: 850;
    color: white;
    font-family: cursive;
}
.header-section{
    padding: 2rem 9rem 2rem 6rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.header-section .left img{
    width: 325px;
    animation: gocorona 6s linear infinite;
}
.card-cont{
    padding-top: 2rem;
    padding-bottom: 2rem;
    margin-bottom: 2rem;
    display: flex;
    justify-content: center;
}
.the-cards{
    
    background-image: url("https://www.transparenttextures.com/patterns/asfalt-light.png");
    text-align: center;
}
.the-cards .cov-head{
    animation: head 5s linear infinite;
}
.the-cards .cov-head{
    font-weight: 750;
    color: white;
    font-family: cursive;
}
.my-card{
    padding: 20px 40px;
    border: 3px solid white;
    border-radius: 30px;
    margin-right: 6.5rem;
    text-align: center;
}
.my-card h1, .my-card h3{
    font-weight: 650;
    color: black;
} 
.card-1{
    background-color: #f74036;
    
}
.card-2{
    background-color: lightgreen;
}
.card-3{
    background-color: #848a81;
}
.the-medias{
    padding: 2rem 5rem;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-row-gap: 35px;
    grid-column-gap: 70px;
}
.tab-info{
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: whitesmoke;
}
.tab-bg{
    padding: 2rem 0;
    background-color: black;
}
.tab-info h3{
    margin-top: 2rem;
}
@keyframes head{
    0% { transform: scale(0.97); }
    20% { transform: scale(1); }
    40% { transform: scale(0.97); }
    60% { transform: scale(1); }
    80% { transform: scale(0.97); }
    100% { transform: scale(0.97); }
}
@keyframes corona{
	0% {transform: rotate(0);}
	100% {transform: rotate(360deg);}
}
.leftside img{
	animation: unity 5s linear infinite;
}
@keyframes unity
{
	0% {transform: scale(0.75);}
	20% {transform: scale(1);}
	40% {transform: scale(0.75);}
	60% {transform: scale(1);}
	80% {transform: scale(0.75);}
	100% {transform: scale(0.75);}
}
/* corona update*/
.corona_update{
	margin: 0 0 30px 0; 
}
.corona_update h3{
	color: #ff7675;
}
.corona_update h1{
	font-size: 2rem;
	text-align: center;
}
.sub_section{
	background-color: #fbfafd;
}
.container-fluid {
	    padding-bottom: 0rem!important;
}
/* .footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
} */
#gotoTop{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding:10px;
	border-radius: 10px;
}
#gotoTop:hover{
	background: #606060;
}
/*responsive section*/
@media(max-width: 780px){
.main_header{
	height: 700px; 
	text-align: center;
}
.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
	.count_style{
		display: inline!important;
	}
	.count_style p{
		text-align: center;
	}
	.about_res{
		margin-left: 0!important;
	}
}
.color_change{
	color: red;
}
</style>
