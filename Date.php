<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="pictures/pla.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <style>


          td, tr{

			color:black;
        }

        fieldset {
            background-color: white;
            width: auto;
            border-color: #046ec4;
            border-width: thick;
            border-radius: 8px;
            box-shadow: 0 0 10px #666;
            padding-top: 10px;
            text-align: left;
        }

        legend {
            background-color: #043e7d;
            color: white;
            padding: 5px 10px;
            font-size: 1.5em;
            border-radius: 8px;
        }

        input {
            margin: 5px;
        }

        button {
            margin: 10px;
            width: 100px;
            height: 50px;
            border-radius: 8px;
        }

            button:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }

        h1 {
            color: black;
            font-size: 2em;
        }

        .tabout {
            background-color: white;
            width: 800px;
        }

        img {
            width: 7%;
        }
		.table{
			border-color: white;
		}
    </style>
</head>
<body>
    <div class="headerz" style="background: #043e7d; height: auto;">
        <table>
            <tr>
                <td style="width:100px; text-align:right;">
                    <img src="pictures/doh.png" style="width:80px; " />
                </td>
                <td style="width: 810px; ">
                    <h1 style="color: #b5d1e2; font-size: 3.3em; padding: 0px; border: 0px; margin:0; align-content:center;">Inventory Management System</h1>
                </td>
                <td style="width: 100px;">
                    <img src="pictures/bul.png" style="width: 80px; height: 80px;" />
                </td>
                <td style="width: 130px;">
                    <img src="pictures/pla.png" style="width: 80px; height: 80px;" />
                </td>
            </tr>
        </table>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="Dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="Announcement.php" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Announcement</a>
        <a href="Date.php" class="icon-a" style="background: #043e7d;"><i class="fa fa-calendar icons"></i> &nbsp;&nbsp;Date</a>
        <a href="Inventory.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Inventory</a>
        <a href="Product.php" class="icon-a"><i class="fa fa-medkit"></i> &nbsp;&nbsp;Product</a>
        <a href="Gallery.php" class="icon-a"><i class="fa fa-picture-o"></i> &nbsp;&nbsp;Gallery</a>
        <a href="NewStaff.php" class="icon-a"><i class="fa fa-plus-circle  icons"></i> &nbsp;&nbsp;Add New Staff </a>
        <a href="ContactUs.php" class="icon-a"><i class="fa fa-phone icons"></i> &nbsp;&nbsp;Contact us </a>
        <a href="AboutUs.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;About Us </a>
        <a href="Login.php" class="icon-b" onmouseover="this.style.background='red'" onmouseout="this.style.background='#0A5CB5'"><i class="fa fa-window-close  icons"></i> &nbsp;&nbsp;Logout</a>
    </div>





    <div id="main">
			<center>
			<br><br>
			<form action="add_date.php" method="post">
            <fieldset>
                <legend>Add a Date</legend>
                <table>
                    <tr>
                        <td>
                            <label for="man_date">Mannufacuring Date: </label>
                        </td>
                        <td>
                            <input type="date" name="man_date" id="man_date">
							</td>
							                        <td>
                            <label for="exp_date">Expiration Date: </label>
                        </td>
                        <td>
                            <input type="date" name="exp_date" id="exp_date">
							</td>
				</tr>
				                    <tr>
                        <td>
                            <label for="ship_date">Shipment Date: </label>
                        </td>
                        <td>
                            <input type="date" name="ship_date" id="ship_date">
							</td>
							                        <td>
                            <label for="prod_date">Product Date: </label>
                        </td>
                        <td>
                            <input type="date" name="prod_date" id="prod_date">
							</td>
				</tr>


						</table>
						<center>
						<button type="submit" style="background-color:#85FCA9" name=savedate><b>Submit</b>
						<center>
			</fieldset>
        </form>
		</center>
    </div>






</body>
</html>
