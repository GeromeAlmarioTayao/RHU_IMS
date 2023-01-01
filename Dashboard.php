<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="pictures/pla.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a href="Dashboard.php" class="icon-a" style="background: #043e7d;"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="Announcement.php" class="icon-a"><i class="fa fa-bullhorn icons"></i> &nbsp;&nbsp;Announcement</a>
        <a href="Date.php" class="icon-a"><i class="fa fa-calendar icons"></i> &nbsp;&nbsp;Date</a>
        <a href="Inventory.php" class="icon-a"><i class="fa fa-list icons"></i> &nbsp;&nbsp;Inventory</a>
        <a href="Product.php" class="icon-a"><i class="fa fa-medkit"></i> &nbsp;&nbsp;Product</a>
        <a href="Gallery.php" class="icon-a"><i class="fa fa-picture-o"></i> &nbsp;&nbsp;Gallery</a>
        <a href="NewStaff.php" class="icon-a"><i class="fa fa-plus-circle  icons"></i> &nbsp;&nbsp;Add New Staff </a>
        <a href="ContactUs.php" class="icon-a"><i class="fa fa-phone icons"></i> &nbsp;&nbsp;Contact us </a>
        <a href="AboutUs.php" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;About Us </a>
        <a href="Login.php" class="icon-b" onmouseover="this.style.background='red'" onmouseout="this.style.background='#0A5CB5'"><i class="fa fa-window-close  icons"></i> &nbsp;&nbsp;Logout</a>
    </div>
    <div id="main"   >
        <h1>List of Products</h1>
        <iframe src="display_product.php" style="width: 100%; height: 600px; zoom:50%;"></iframe>
        <br><br><br><hr>
        <h1>List of Staffs</h1>
        <iframe src="display_staff.php" style="width: 100%; height: 600px; zoom:50%;"></iframe>
        <br><br><hr><br><br>
    </div>









</body>
</html>
