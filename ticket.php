<!DOCTYPE html>
<html lang="en">
<head>
     <title>Ticketing Site | Nepal's Best Online Ticket Booking Site</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.woff">
     <link rel="stylesheet" type="text/css" href="fonts/glyphicons-halflings-regular.ttf">

     <link rel="stylesheet" type="text/css" href="custom.css">

     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

     <style>

          #main-container{
               margin-top: 20px;
          }

          #ticket-title{
               background-color: rgb(157,186,191);
               padding-top: 10px;
               padding-bottom: 15px;
               padding-left: 10px;
          }

          #ticket-content{
               background-color: rgb(203,219,222);
               padding-top: 20px;
               padding-bottom: 50px;
               padding-left: 25px;
          }

          #busInfo{
               background-color: rgb(0,51,49);
               color: white;
               padding: 5px;
               text-align: center;
          }

     </style>
</head>
<body>

	<div class="row" id="header">
		<marquee style="font-weight: bolder; font-size: 20px;">The No.1 site for online ticket booking.</marquee>
	</div><!-- end header -->

     <div class="container" id="main-container">
          <div class="row">
               <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" id="book-container1">
                    <div id="ticket-title">
                         <h1 style="margin-top: 0;">Book your ticket.</h1>
                         <small style="font-weight: bold;">For affordable price, book your travel at TravellingSite.</small>
                    </div><!-- end ticket-title -->
    
                    <div id="ticket-content">
                         <form method="post">
                              <label>Name:</label><br>
                              &emsp;&emsp;&emsp;First:&nbsp;<input type="text" name="fname"> &emsp;&emsp;&emsp; Last&emsp;&nbsp;:&nbsp;<input type="text" name="lname"><br><br/>
                              <label>Address:</label><br>
                              &emsp;&emsp;&emsp;State:&nbsp;<input type="text" name="state"> &emsp;&emsp;&emsp; Street&nbsp;:&nbsp;<input type="text" name="street"><br><br/>
                              <label>Contact no:</label><br>
                              &emsp;&emsp;&nbsp;Mobile:&nbsp;<input type="text" name="mobile_no"> &emsp; Telephone&nbsp;:&nbsp;<input type="text" name="tel_no"><br><br/>
                              <label>Passengers:</label><br>
                              &emsp;&emsp;&emsp;Adult:&nbsp;<input type="text" name="adult_pass"> &emsp;&emsp; Children&nbsp;:&nbsp;<input type="text" name="children_pass"><br><br/>
                              <label>Seats:&emsp;&emsp;</label>
                              <input type="text" name="seats" placeholder="example-example-example" style="width: 190px;"><br><br/>
                              <button type="submit" name="submit" class="btn btn-success" style="border-radius: 0; width: 150px; float: right; margin-right: 20px; font-weight: bold;">Book</button>
                         </form>
                    </div><!-- end ticket-content -->
               </div><!-- end book-container1 -->

               <div class="col-lg-3 col-lg-offset-2 col-md-3 col-sm-12 col-xs-12" id="book-container2">
                    <div id="busInfo">
                         <h4>Ba 3421</h4>
                         <p><h3>Available Seats</h3></p>
                    </div><!-- end busNo -->

                    <div id="availableSeat">
                         <table class="table table-bordered">
                              <thead>
                                   <tr>
                                        <th style="font-size: 12px; text-align: center; width: 50px; background-color: rgb(157,186,191);">Door</th>
                                        <th colspan="4"></th>
                                        <th style="font-size: 12px; width: 60px; background-color: rgb(157,186,191);">Driver's Seat</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td colspan="2" rowspan="4"></td>
                                        <td>3</td>
                                        <td>4</td>
                                   </tr>
                                   <tr>
                                        <td>5</td>
                                        <td style="background-color: red;">6</td>
                                        <td>7</td>
                                        <td style="background-color: red;">8</td>
                                   </tr>
                                   <tr>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                   </tr>
                                   <tr>
                                        <td>11</td>
                                        <td>12</td>
                                        <td style="background-color: red;">13</td>
                                        <td>14</td>
                                   </tr>
                                   <tr>
                                        <td>15</td>
                                        <td>16</td>
                                        <td style="background-color: red;">17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div><!-- end availableSeat -->
               </div><!-- end book-container1 -->
          </div><!-- end row-->
     </div><!-- end main-container -->

     <div class="row" id="footer">
          <div class="container">
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="copy-right">
                    <text>Copyright &copy; 2017 By Megha Tamang</text>
               </div><!-- end copy-right -->

               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="about">
                    <b>About</b><br>
                    <p style="text-align: justify;">This is my new web development project.I hope it is good. This is my new web development project.I hope it is good. This is my new web development project.I hope it is good. This is my new web development project.This is my new web development project.</p>
               </div><!-- end about -->

               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="navigation">
                    <b>Navigation</b><br>
                    <text><a href="#">Home</a></text><br>
                    <text><a href="#">Inside Valley</a></text><br>
                    <text><a href="#">Outside Valley</a></text><br>
                    <text><a href="#">Contact</a></text><br>
                    <text><a href="#">About Us</a></text><br>
               </div><!-- end navigation -->

               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="follow">
                    <b>Follow Us on</b><br>
                    <text><a href="#">Facebook</a></text><br>
                    <text><a href="#">Instagram</a></text><br>
                    <text><a href="#">Twitter</a></text><br>
               </div>

               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="footer-logout">
                    <b>Logout  <span class="glyphicon glyphicon-log-in"></span></b><br>
                    <p><a href="#" data-toggle="modal">Click here to logout !</a></p>
          
               </div><!-- end footer-logout -->
          </div><!-- end container -->
     </div><!-- end footer -->
</body>
</html>
