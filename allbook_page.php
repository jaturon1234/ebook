<?php
session_start();
@$session_id = session_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="vendor/toastr/toastr.css" rel="stylesheet" media="all">
    <script src="vendor/toastr/toastr.min.js"></script>

    <style>
        .swal2-container {
            z-index: 20000 !important;
        }

        .is-invalid {
            background-color: ivory;
            border: none;
            outline: 2px solid red;
            border-radius: 5px;
        }
    </style>

</head>

<body>



    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> SNRU ebook </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="ค้นหาที่นี้..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
              <!--  <a href="#" class="fas fa-heart"></a> -->
              <!--  <a href="#" class="fas fa-shopping-cart"></a> -->
                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">หน้าหลัก</a>
                <a href="#featured">อีบุ๊กทั้งหมด</a>
                <a href="#arrivals">หมวดหมู่</a>
                <a href="#reviews">เกี่ยวกับ</a>
                <a href="#blogs">ติดต่อ</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="">
            <h3>เข้าสู่ระบบ</h3>
            <span>ชื่อผู้ใช้</span>
            <input type="text" name="" class="box" placeholder="กรุณาเพิ่มชื่อผู้ใช้" id="username">
            <span>รหัสผ่าน</span>
            <input type="password" name="" class="box" placeholder="กรุณาเพิ่มรหัสผ่าน" id="password">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> จดจำฉัน</label>
            </div>
            <button type="submit" id="submit" name="login" class="btn">
                เข้าสู่ระบบ
            </button>
            <!-- <input type="submit" id="submit" value="เข้าสู่ระบบ" class="btn"> -->
            <p>ถ้าท่านลืมรหัส ? <a href="#">กดที่นี้</a></p>
            <p>ถ้าท่านยังไม่มีบัญชีกรุณาสร้างบัญชี ? <a href="register_form">สร้างบัญชี</a></p>
        </form>

    </div>



    <?php if ($_GET['all_view'] == 'sci_all') { ?>

<section class="featured" id="featured">
    <h1 class="heading"> <span>วิทยาศาสตร์</span> </h1>
    <?php
    include('include/connect_db.php');
    $sql = "SELECT * FROM ebooks_list where category='วิทยาศาสตร์' ORDER BY id DESC";

    $totalQuery = mysqli_query($link, $sql);
    $total_all_rows = mysqli_num_rows($totalQuery);

    $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC);
    for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
        <div class="card" style="width: 30rem;">

            <div class="swiper featured-slider">

                <div class="">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                            <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                            <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                        </div>

                        <!--  <div class="icons">
                        <div class="content">
                            <h3><?php echo $ebooks[$x]['title'] ?></h3>
                        </div>
                    </div>  -->

                        <div class="image">
                            <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $ebooks[$x]['title'] ?></h3>
                            <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                            <a href="http://localhost/ebook/detail_page?image=<?php echo $ebooks[$x]['image'] ?>&title=<?php echo $ebooks[$x]['title'] ?>&author=<?php echo $ebooks[$x]['author'] ?>&subjects=<?php echo $ebooks[$x]['subjects'] ?>&book=<?php echo $ebooks[$x]['book'] ?>&published_date=<?php echo $ebooks[$x]['published_date'] ?>&publisher=<?php  echo $ebooks[$x]['publisher'] ?>&page_count=<?php echo $ebooks[$x]['page_count'] ?>&category=<?php echo $ebooks[$x]['category'] ?>&qr_code=<?php echo $ebooks[$x]['qr_code'] ?>" class="btn">รายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  }
    ?>
</section>
<?php  } 
else if ($_GET['all_view'] == 'cartoon_all') {  ?>


<section class="featured" id="featured">
    <h1 class="heading"> <span>การ์ตูน</span> </h1>
    <?php
    include('include/connect_db.php');
    $sql = "SELECT * FROM ebooks_list where category='การ์ตูน' ORDER BY id DESC";

    $totalQuery = mysqli_query($link, $sql);
    $total_all_rows = mysqli_num_rows($totalQuery);

    $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC);
    for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
        <div class="card" style="width: 30rem;">

            <div class="swiper featured-slider">

                <div class="">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                            <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                            <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                        </div>

                        <!--  <div class="icons">
                <div class="content">
                    <h3><?php echo $ebooks[$x]['title'] ?></h3>
                </div>
            </div>  -->

                        <div class="image">
                            <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $ebooks[$x]['title'] ?></h3>
                            <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                            <a href="http://localhost/ebook/detail_page?image=<?php echo $ebooks[$x]['image'] ?>&title=<?php echo $ebooks[$x]['title'] ?>&author=<?php echo $ebooks[$x]['author'] ?>&subjects=<?php echo $ebooks[$x]['subjects'] ?>&book=<?php echo $ebooks[$x]['book'] ?>&published_date=<?php echo $ebooks[$x]['published_date'] ?>&publisher=<?php  echo $ebooks[$x]['publisher'] ?>&page_count=<?php echo $ebooks[$x]['page_count'] ?>&category=<?php echo $ebooks[$x]['category'] ?>&qr_code=<?php echo $ebooks[$x]['qr_code'] ?>" class="btn">รายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  }
    ?>
</section>

<?php
}    else if ($_GET['all_view'] == 'academic_all'){  ?>

<section class="featured" id="featured">
    <h1 class="heading"> <span>วิชาการ</span> </h1>
    <?php
    include('include/connect_db.php');
    $sql = "SELECT * FROM ebooks_list where category='วิชาการ' ORDER BY id DESC";

    $totalQuery = mysqli_query($link, $sql);
    $total_all_rows = mysqli_num_rows($totalQuery);

    $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC);
    for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
        <div class="card" style="width: 30rem;">

            <div class="swiper featured-slider">

                <div class="">
                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                            <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                            <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                        </div>

                        <!--  <div class="icons">
                <div class="content">
                    <h3><?php echo $ebooks[$x]['title'] ?></h3>
                </div>
            </div>  -->

                        <div class="image">
                            <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                        </div>
                        <div class="content">
                            <h3><?php echo $ebooks[$x]['title'] ?></h3>
                            <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                            <a href="http://localhost/ebook/detail_page?image=<?php echo $ebooks[$x]['image'] ?>&title=<?php echo $ebooks[$x]['title'] ?>&author=<?php echo $ebooks[$x]['author'] ?>&subjects=<?php echo $ebooks[$x]['subjects'] ?>&book=<?php echo $ebooks[$x]['book'] ?>&published_date=<?php echo $ebooks[$x]['published_date'] ?>&publisher=<?php  echo $ebooks[$x]['publisher'] ?>&page_count=<?php echo $ebooks[$x]['page_count'] ?>&category=<?php echo $ebooks[$x]['category'] ?>&qr_code=<?php echo $ebooks[$x]['qr_code'] ?>" class="btn">รายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php  }
    ?>
</section>

<?php 


} else  {  ?>

<?php }





//session_start();
unset($_SESSION["view_all"]);

?>





  <!--  <section class="featured" id="featured">

        <h1 class="heading"> <span>วิทยาศาสตร์</span> </h1>

        <?php
/*
        include('include/connect_db.php');
        $sql = "SELECT * FROM ebooks_list where category='วิทยาศาสตร์' ORDER BY id DESC";

        $totalQuery = mysqli_query($link, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC);
        for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
            <div class="card" style="width: 30rem;">

                <div class="swiper featured-slider">

                    <div class="">
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                            </div>

                            <!--  <div class="icons">
                                <div class="content">
                                    <h3><?php echo $ebooks[$x]['title'] ?></h3>
                                </div>
                            </div>  -->

                            <div class="image">
                                <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                            </div>
                            <div class="content">
                                <h3><?php echo $ebooks[$x]['title'] ?></h3>
                                <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                                <a href="http://localhost/ebook/detail_page" class="btn">รายละเอียด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php  }
       */ ?>
 <!--   </section>  -->


    <!-- featured section ends -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>หมวดหมู่</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> วิทยาศาสตร์ </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> วิชาการ </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> การ์ตูน </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> แม็กกาซีน </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> นิตยสาร </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> นิยาย</a>
            </div>

            <div class="box">
                <h3>การเข้าถึง</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> หน้าหลัก </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> อีบุ๊กทั้งหมด </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> หมวดหมู่ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> เกี่ยวกับ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> ติดต่อ </a>
            </div>

            <div class="box">
                <h3>เกี่ยวกับเรา</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> เกี่ยวกับระบบ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> คำเเนะนำ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> เเผนที่ </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> กาสมัครสมาชิก </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> การบริการ </a>
            </div>

            <div class="box">
                <h3>ติดต่อเราได้ที่</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
                <a href="admin/"><i class="fas fa-user"></i> Admin</a>
                <img src="image/worldmap.png" class="map" alt="">
            </div>

        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> พัฒนาโดย <span>สํานักส่งเสริมและงานทะเบียนมหาวิทยาลัยราชภัฏ​สกลนคร</span> | ทั้งหมดขอสงวนลิขสิทธิ์! </div>

    </section>

    <!-- footer section ends -->

    <!-- loader  -->

    <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- login -->
    <script>
        $(document).ready(function() {
            /** Ajax Submit Login */
            //$("#submit").submit(function(e){
            $('#submit').on('click', function(e) {

                e.preventDefault()

                console.log('Hi');

                $("#username").removeClass('is-invalid');
                $("#password").removeClass('is-invalid');


                var username = $('#username').val();
                var password = $('#password').val();

                if (username == '') {
                    // alert("กรุณากรอก username");
                    $("#username").focus();
                    $("#username").addClass('is-invalid');
                    toastr.error('ระบุชื่อผู้ใช้งาน', toastr.options = {
                        "closeButton": true,
                        "timeOut": "1500"
                    })
                } else if (password == '') {
                    // alert("กรุณากรอก password");
                    $("#password").focus();
                    $("#password").addClass('is-invalid');
                    toastr.error('ระบุรหัสผ่าน', toastr.options = {
                        "closeButton": true,
                        "timeOut": "1500"
                    })
                } else {


                    $.ajax({
                        method: "POST",
                        url: "member/login.php",
                        data: {
                            username: username,
                            password: password,
                        },

                        success: function(response) {

                            // response = JSON.parse(response);

                            console.log(response);

                            if (response.status == 1) {

                                // Swal.fire(
                                //     'Good job!',
                                //     'You clicked the button!',
                                //     'success'
                                // )
                                //location.href = 'member/member_profile'

                                Swal.fire({
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    icon: 'success',
                                    title: 'Success',
                                    text: "เข้าสู่ระบบสำเร็จ",
                                    showConfirmButton: true,
                                    confirmButtonText: "เข้าสู่ระบบ"

                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = 'member/member_profile';
                                    }
                                })



                            } else {
                                // if (response.status == 0) {
                                // document.getElementById("submit").innerHTML = 'เข้าสู่ระบบ';
                                Swal.fire({
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    icon: 'error',
                                    title: 'Error',
                                    text: "ชื่อผู้ใช้งาน/รหัสผ่านไม่ถูกต้อง",
                                    showConfirmButton: true,
                                })
                                // document.getElementById("submit").disabled = false;
                                // document.getElementById("submit").value = "เข้าสู่ระบบ";

                                // Swal.fire(
                                //     'NO job!',
                                //     'You clicked the button!',
                                //     'success'
                                // )

                            }

                        }
                    });
                }

            })

        })
    </script>


</body>

</html>