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
    <title>SNRU ebook</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon3.png">

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

        .head_text {
            border-bottom: 1px solid #8e918f;
            padding-bottom: 5px;
            margin-bottom: 20px;
            position: relative;
        }

        .head_text_string {
            font-family: notosansregular;
            color: #021a24;
            font-size: 30px;
            line-height: unset;
        }

        .option_head_text {
            align-items: center;
            position: absolute;
            right: 0;
            bottom: 7px;
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
        }

        .option_head_text a {
            color: #00bf6c;
            font-size: 22px;
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
                <!-- <a href="#" class="fas fa-heart"></a> -->
                <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
                <!--<div id="login-btn" class="fas fa-user"></div> -->


                <?php
                error_reporting (E_ALL ^ E_NOTICE);
                include('include/connect_db.php');
                if ($_SESSION['member_session_id'] != '') { 
                    $member_mem_id = $_SESSION['member_mem_id'];
                    //echo $member_mem_id;
                    
                   // $strSQL = "SELECT * FROM members WHERE username = '$username' AND password = '$password'";
                    $strSQL = "SELECT * FROM members where id = '$member_mem_id'";
                    $totalQuery = mysqli_query($link, $strSQL);
                    $total_all_rows = mysqli_num_rows($totalQuery);
                    $idv_members = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC); 
                    
                    ?>
                    <div>
                        <a href="member/member_profile.php?citized_id=<?php echo $idv_members[0]['citized_id'] ?>&username=<?php echo $idv_members[0]['username'] ?>&password=<?php echo $idv_members[0]['password'] ?>&tell_number=<?php echo $idv_members[0]['tell_number'] ?>&email=<?php echo $idv_members[0]['email'] ?>&profile_image=<?php echo $idv_members[0]['profile_image'] ?>&id=<?php echo $idv_members[0]['id'] ?>">  
                     <!-- <a href="member/member_profile.php">   -->
                            <img style="display: inline-block; position: relative; width: 50px; height: 50px; overflow: hidden; border-radius: 50%; } .circular--landscape img { width: auto; height: 100%; margin-left: -50px; " src="member/upload/images/<?php echo $idv_members[0]['profile_image'] ?>" />
                        </a>
                    </div>
                <?php } else { ?>
                    <div id="login-btn" class="fas fa-user"></div>
                <?php   } ?>


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

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>รวบรวมอีบุ๊กมากว่า 1000 เล่ม</h3>
                <p>SNRU Ebook เป็นคลังหนังสืออิเล็กทรอนิกส์ออนไลน์ ที่รวบรวมหนังสือหลากหลายประเภททั้งวิชาการ นิยาย เรื่องสั้น วารสารให้ท่านได้เลือกอ่านหนังสือออนไลน์บนระบบของเราได้อย่างสะดวกสบาย!</p>
                <a href="register_form" id="login-btn" class="btn">ลงทะเบียน</a>
                <!--  <div id="login-btn" class="fas fa-user"></div>-->
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                    <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
                </div>
                <img src="image/stand.png" class="stand" alt="">
            </div>

        </div>

    </section>

    <!-- home section ense  -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>สามารถอ่านฟรีได้</h3>
                <p>เพียงเข้าสู่ระบบ</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>มีความปลอดภัย</h3>
                <p>ด้วย Data Security</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>ใช้งานสะดวกในทุกอุปกรณ์</h3>
                <p>ด้วย Responsive Design</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>24/7 Support</h3>
                <p>ที่ส่งเสริมเเละงานทะเบียน</p>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- featured section starts  -->


    <section class="featured" id="featured">

        <!--<h1 class="heading"> <span>วิทยาศาสตร์</span></h1> -->

        <div class="head_text">
            <h2 class="head_text_string">วิทยาศาสตร์</h2>
            <div class="option_head_text">
                <a href="http://localhost/ebook/allbook_page?all_view=<?php echo 'sci_all' ?>" style="float: right;">ดูทั้งหมด</a>
            </div>
        </div>

        <?php

        include('include/connect_db.php');
        $sql = "SELECT * FROM ebooks_list where category='วิทยาศาสตร์' ORDER BY id DESC";

        $totalQuery = mysqli_query($link, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC); ?>

        <div class="swiper featured-slider">
            <a href="http://localhost/ebook/detail_page">

                <div class="swiper-wrapper">
                    <?php for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                            </div>
                            <div class="content">
                                <h3><?php echo $ebooks[$x]['title'] ?></h3>
                                <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                                <a href="http://localhost/ebook/detail_page?image=<?php echo $ebooks[$x]['image'] ?>&title=<?php echo $ebooks[$x]['title'] ?>&author=<?php echo $ebooks[$x]['author'] ?>&subjects=<?php echo $ebooks[$x]['subjects'] ?>&book=<?php echo $ebooks[$x]['book'] ?>&published_date=<?php echo $ebooks[$x]['published_date'] ?>&publisher=<?php  echo $ebooks[$x]['publisher'] ?>&page_count=<?php echo $ebooks[$x]['page_count'] ?>&category=<?php echo $ebooks[$x]['category'] ?>&qr_code=<?php echo $ebooks[$x]['qr_code'] ?>" class="btn">รายละเอียด</a>
                            </div>
                        </div>
                   <?php   }

                    ?>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </a>
        </div>
    </section>



    <section class="featured" id="featured">
        <!--<h1 class="heading"> <span>วิทยาศาสตร์</span></h1> -->
        <div class="head_text">
            <h2 class="head_text_string">การ์ตูน</h2>
            <div class="option_head_text">
                <a href="http://localhost/ebook/allbook_page?all_view=<?php echo 'cartoon_all' ?>" style="float: right;">ดูทั้งหมด</a>
            </div>
        </div>

        <?php

        include('include/connect_db.php');
        $sql = "SELECT * FROM ebooks_list where category='การ์ตูน' ORDER BY id DESC";

        $totalQuery = mysqli_query($link, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC); ?>

        <div class="swiper featured-slider">
            <a href="http://localhost/ebook/detail_page">

                <div class="swiper-wrapper">
                    <?php for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                            </div>
                            <div class="content">
                                <h3><?php echo $ebooks[$x]['title'] ?></h3>
                                <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                                <a href="http://localhost/ebook/detail_page?image=<?php echo $ebooks[$x]['image'] ?>&title=<?php echo $ebooks[$x]['title'] ?>&author=<?php echo $ebooks[$x]['author'] ?>&subjects=<?php echo $ebooks[$x]['subjects'] ?>&book=<?php echo $ebooks[$x]['book'] ?>&published_date=<?php echo $ebooks[$x]['published_date'] ?>&publisher=<?php  echo $ebooks[$x]['publisher'] ?>&page_count=<?php echo $ebooks[$x]['page_count'] ?>&category=<?php echo $ebooks[$x]['category'] ?>&qr_code=<?php echo $ebooks[$x]['qr_code'] ?>" class="btn">รายละเอียด</a>
                            </div>
                        </div>
                    <?php  }

                    ?>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </a>
        </div>
    </section>



    <section class="featured" id="featured">

        <!--<h1 class="heading"> <span>วิทยาศาสตร์</span></h1> -->

        <div class="head_text">
            <h2 class="head_text_string">วิชาการ</h2>
            <div class="option_head_text">
                <a href="http://localhost/ebook/allbook_page?all_view=<?php echo 'academic_all' ?>" style="float: right;">ดูทั้งหมด</a>
            </div>
        </div>

        <?php

        include('include/connect_db.php');
        $sql = "SELECT * FROM ebooks_list where category='วิชาการ' ORDER BY id DESC";

        $totalQuery = mysqli_query($link, $sql);
        $total_all_rows = mysqli_num_rows($totalQuery);

        $ebooks = mysqli_fetch_all($totalQuery, MYSQLI_ASSOC); ?>

        <div class="swiper featured-slider">
            <a href="http://localhost/ebook/detail_page">
                

                <div class="swiper-wrapper">
                    <?php for ($x = 0; $x <= $total_all_rows - 1; $x++) { ?>
                        <div class="swiper-slide box">
                            <div class="icons">
                                <a href="http://localhost/ebook/detail_page" class="fas fa-search"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-heart"></a>
                                <a href="http://localhost/ebook/detail_page" class="fas fa-eye"></a>
                            </div>
                            <div class="image">
                                <img style="width:150px;height:250px;-moz-box-shadow: 10px 10px 5px #ccc;-webkit-box-shadow: 10px 10px 5px #ccc;box-shadow: 10px 10px 5px #ccc;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;" src="admin/uploads/images/<?php echo $ebooks[$x]['image'] ?>" alt="">
                            </div>
                            <div class="content">
                                <h3><?php echo $ebooks[$x]['title'] ?></h3>
                                <div class="price"><?php echo $ebooks[$x]['author'] ?></div>
                                <a href="http://localhost/ebook/detail_page?image=<?php echo $ebooks[$x]['image'] ?>&title=<?php echo $ebooks[$x]['title'] ?>&author=<?php echo $ebooks[$x]['author'] ?>&subjects=<?php echo $ebooks[$x]['subjects'] ?>&book=<?php echo $ebooks[$x]['book'] ?>&published_date=<?php echo $ebooks[$x]['published_date'] ?>&publisher=<?php  echo $ebooks[$x]['publisher'] ?>&page_count=<?php echo $ebooks[$x]['page_count'] ?>&category=<?php echo $ebooks[$x]['category'] ?>&qr_code=<?php echo $ebooks[$x]['qr_code'] ?>"  class="btn">รายละเอียด</a>
                            </div>
                        </div>
                    <?php  }

                    ?>
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </a>
        </div>



    </section>


    <section class="featured" id="featured">

        <!--  <h1 class="heading"> <span>อีบุ๊กเเนะนำ</span> </h1> -->
        <div class="head_text">
            <h2 class="head_text_string">นิยาย</h2>
            <div class="option_head_text">
                <a href="http://localhost/ebook/allbook_page" style="float: right;">ดูทั้งหมด</a>
            </div>
        </div>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>หนังสือ</h3>
                        <div class="price">ผู้เขียน</div>
                        <a href="#" class="btn">รายละเอียด</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->

    <!-- newsletter section starts -->

    <section class="newsletter">

        <form action="">
            <h3>ติดตามการ update ข่าวสาร</h3>
            <input type="email" name="" placeholder="ใส่ email ของท่าน" id="" class="box">
            <input type="submit" value="ติดตาม" class="btn">
        </form>

    </section>

    <!-- newsletter section ends -->

    <!-- arrivals section starts  -->

    <section class="arrivals" id="arrivals">

        <h1 class="heading"> <span>มาใหม่</span> </h1>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>มาใหม่</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>เเนะนำ</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>วิทยาศาสตร์</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>นิยายแฟนตาซี</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>วิชาการ</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">มาใหม่ <span>มาใหม่</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <!-- arrivals section ends -->

    <!-- deal section starts  -->

    <section class="deal">

        <div class="content">
            <h3>SNRU ebook</h3>
            <h1>ยินดีให้บริการ</h1>
            <p>SNRU Ebook เป็นคลังหนังสืออิเล็กทรอนิกส์ออนไลน์ ที่รวบรวมหนังสือหลากหลายประเภททั้งวิชาการ นิยาย เรื่องสั้น วารสารให้ท่านได้เลือกอ่านหนังสือออนไลน์บนระบบของเราได้อย่างสะดวกสบาย!</p>
            <a href="#" class="btn">ลงทะเบียน</a>
        </div>

        <div class="image">
            <img src="image/deal-img.jpg" alt="">
        </div>

    </section>

    <!-- deal section ends -->

    <!-- reviews section starts  

    <section class="reviews" id="reviews">

        <h1 class="heading"> <span>client's reviews</span> </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="image/pic-1.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-2.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-3.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="image/pic-4.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-5.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="image/pic-6.png" alt="">
                    <h3>john deo</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- reviews section ends -->

    <!-- blogs section starts  

    <section class="blogs" id="blogs">

        <h1 class="heading"> <span>our blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- blogs section ends -->

    <!-- footer section starts  -->

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
                                       /* window.location.href = 'member/member_profile?citized_id=<?php /*echo $idv_members[0]['citized_id'] ?>&username=<?php echo $idv_members[0]['username'] ?>&password=<?php echo $idv_members[0]['password'] ?>&tell_number=<?php echo $idv_members[0]['tell_number'] ?>&email=<?php echo $idv_members[0]['email'] */?>';*/
                                       window.location.href = './'
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