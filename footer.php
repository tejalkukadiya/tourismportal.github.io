<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  
  <style>

            .quick-links{
              background-color: rgba(0,0,0,0.7);
              color: white;
              border-radius: 6px;
              padding: 42px 76px;
              margin-top: 10px;
            }
            .quick-links .contact{
            }
            .quick-links .link-details{}
            .quick-links .contact p{
            padding: 10px 10px;
            color: rgb(203,203,203);
            }
            .quick-links .contact p>span{
            font-size: 16px;
            color: rgb(203, 203, 203);
            margin-right: 8px;
            }
            .quick-links .link-details ul>li{
            list-style: none;
            }
            .quick-links .link-details ul{padding-top: 10px;}
            .quick-links .link-details a{
            color: rgb(203, 203, 203);
            margin: 4px;
            margin-left: -40px; 
            font-size: 17px;
            }
            .quick-links .link-details a:before{
              color: gray;
              padding-right: 10px;
            }
            .quick-links .link-details a:hover{
              text-decoration: none;
            }
            .quick-links .news-letter p{
            padding-top: 10px;
            }
            .quick-links .news-letter input{
            margin-top: 6px;
            color: black;
            }
            .quick-links .news-letter button{
              color: rgba(0, 0, 0,0.5);
              padding: 8px 20px;
              border-radius: 10px;
              margin: 10px 0;
              background-color: rgba(77, 251, 136, 0.75);
              text-transform: capitalize;
              font-weight: 700;
            }


  </style>
</head>
<body>
<?php
print('
  <footer class="quick-links container" style="background-color: rgba(0,0,0,0.7);  color:white;border-radius: 6px;padding: 11px 100px;margin-top: 10px;">
    <div class="row">
      <div class="col-md-4 contact" style="color: rgb(203,203,203);">
        <h3 style="color: white;">
          Contact
        </h3>
        <p>
        <span><i class="fa fa-phone"></i></span>
          telephone: (212)888-77-88<br>
        <span><i class="fa fa-envelope"></i></span>
          email: xyz@abc.com<br>
        <span><i class="fa fa-link"></i></span>
          website: www.yewsdbgyw.com<br>
        <br>
        </p>
      </div>
      <div class="col-md-4 link-details">
        <h3> Quick links </h3>
        <ul >
          <li> <a href="#" class="fa fa-angle-right">History</a></li>
          <li> <a href="#" class="fa fa-angle-right">Guide-register</a></li>
          <li> <a href="#" class="fa fa-angle-right">Booking</a></li>
          <li> <a href="#" class="fa fa-angle-right">ContactUs</a></li>
          <li> <a href="#" class="fa fa-angle-right">AboutUs</a></li>
        </ul>
      </div>
      <div class="col-md-4 news-letter">
        <h3>
          For news-letter
        </h3>
        <p style="color: rgb(203,203,203);">
        Sign up for our newsletter for all the 
        latest news and information
        </p>
        <input type="text" name="news-letter" class="form-control"><br>
        <button type="button" class="btn btn-success" >subscribe</button>
      </div>
    </div>
  </footer>

');
  ?>
</body>
</html>