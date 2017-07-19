

<html>
<head>
  <title>
   Navigation
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#2d2251">


  <link rel="shortcut icon" type="image/x-icon" href="/static/images/favicon.ico">
<!--   <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'> -->
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/font-awesome.css">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53104159-5', 'auto');
  ga('send', 'pageview');

  </script>
</head>
<body onload="check()">







  


  <div class="overlay-dark">
    <div class="cross-mobile"><i class="fa fa-times"></i></div>
  </div>
  <div class="left-nav left-index-bg">
    <div class="index-overlay">
    </div>
    
    <div class="logo logo-index">
    
      <img src="images/eninov.jpg">
        <h3> ENINOV SYSTEMS</h3>
    </div>
     

    <div class="left-nav-inner left-nav-inner-index">
      <ul>
        <li class="active index-list">
          <a href="/"><i class="fa fa-home"></i> &nbsp;Home</a>
        </li>
        <li class="index-list">
          <a href="/notices/"><i class="fa fa-thumb-tack"></i> &nbsp;All notices</a>
        </li>
        <!-- <li>
          <a class="search2"><i class="fa fa-search"></i> &nbsp;Search</a>
        </li> -->
        <li class=" index-list"><a href="/about/" >
          <i class="fa fa-newspaper-o"></i> &nbsp;About</a>
        </li>
          <li class=" index-list">
            <a href="/contact/">
            <i class="fa fa-phone"></i> &nbsp;Contact</a>
          </li>
          <li class="">
            <a href="http://jssaten.ac.in" target="_blank">
            <i class="fa fa-globe"></i> &nbsp;Eninov Website</a>
          </li>
          
          <li class="index-list">
            <a href="/accounts/login/">
            <i class="fa fa-sign-out"></i> &nbsp;LogIn</a>
          </li>
          
          

      </ul>
    </div>

  </div>
<div class="relevant-page index-page">
  
    <div class="index-head">
    

    <h3 class="tag-line">Stay updated, anywhere anytime!</h3>



    
    <h3 class="index-welcome"><span class="index-bars"><i class="fa fa-bars"></i></span><a href="#">Welcome User</a></h3>
    

    </div>

    


<script src="js/jquery.js"></script>
<script type="text/javascript" src="cordova.js"></script>

<script src="js/main.js"></script>


<script type="text/javascript">
function check() {

  // body...
  if(!localStorage.login==null)
  {
    alert("logged out");
    window.location,replace('index.html');

  }
  else
  {
    alert("logged in");
  }
}
   
</script>


</body>

</html>
