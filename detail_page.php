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
        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
        }

        div {
            display: block;
        }

        .swal2-container {
            z-index: 20000 !important;
        }

        .is-invalid {
            background-color: ivory;
            border: none;
            outline: 2px solid red;
            border-radius: 5px;
        }

        /*detali_page*/
        #container_detail {
            top: 90px;
        }

        .body-section {
            min-height: calc(100vh - 350px);
        }

        #book_details {
            margin-bottom: 40px;
        }

        #book_details_lg {
            position: relative;
            display: block;
        }

        .wrap_book_details {
            width: 100%;
            max-width: 688px;
            margin: auto;
            margin-top: auto;
            margin-right: auto;
            margin-bottom: auto;
            margin-left: auto;
        }

        .book_name {
            font-family: notosansmedium;
            font-size: 32px;
            color: #111;
            text-align: center;
            margin-top: 55px;
            margin-bottom: 44px;
        }

        h1 {
            display: block;
            font-size: 2em;
            margin-block-start: 0.67em;
            margin-block-end: 0.67em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }


        body,
        html {
            background: #fefefe;
            height: 100%;
            color: #021a24;
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
        }

        .mete_data_book_details {
            width: 100%;
            display: table;
        }

        .image_book {
            width: 100%;
            max-width: 312px;
            max-height: 510px;
            overflow: hidden;
            float: left;
            box-shadow: 0 0 20px 0 rgb(0 0 0 / 15%);
            border: solid 1px #f6f6f6;
            border-radius: 3px;
            position: relative;
        }

        .image_book img {
            width: 100%;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .mete_data {
            padding-left: 40px;
            float: left;
            width: calc(100% - 312px);
        }

        #book_details_lg .mete_data_author_publisher_category .mete_data_text {
            margin-bottom: 15px;
        }

        .wrap_btn_buy {
            float: left;
        }

        .btn_sample {
            width: 120px;
            height: 50px;
            border-radius: 25px;
            border: solid 1px var(--main-color);
            color: var(--main-color);
            background-color: #fff;
            font-family: notosansmedium;
            font-size: 18px;
            margin-right: 10px;
            float: left;
        }

        .btn_buy {
            width: 206px;
            height: 50px;
            border-radius: 25px;
            border: solid 1px var(--main-color);
            color: #fff;
            background-color: var(--main-color);
            font-family: notosansmedium;
            font-size: 18px;
        }

        :root {
            --main-bg-color: linear-gradient(to bottom, #00af70, #37c13d);
            --main-color: #00bf6c;
            --font-color-menu: #5a5a5a;
            --font-color: #1d6548;
            --font-color-gray: #5a5a5a;
            --link-color: #00bf6c;
        }

        .wrap_menu_list_book_details {
            width: auto;
            font-size: 0;
            display: table;
            margin: auto;
        }

        .mete_data_other {
            margin-top: 20px;
        }

        .wrap_menu_list_book_details {
            width: auto;
            font-size: 0;
            display: table;
            margin: auto;
        }

        .display_rating {
            text-align: center;
            margin-bottom: 30px;
        }

        .rating_text {
            width: max-content;
            font-size: 14px;
            display: inline-block;
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
            color: #e0166a;
            margin-right: 5px;
        }


        .wrap_btn_book_details {
            text-align: left;
            display: table;
            margin-bottom: 10px;

        }

        .total_rating_text {
            width: max-content;
            display: inline-block;
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
            font-size: 14px;
            color: var(--font-color-gray);
        }

        .display_rating {
            text-align: center;
            margin-bottom: 10px;
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        .wrap_menu_list_book_details {
            width: auto;
            font-size: 0;
            display: table;
            margin: auto;
        }

        .menu_list_book_details {
            width: 84px;
            font-size: 12px;
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
            display: inline-block;
            float: left;
            text-align: center;
            color: var(--main-color);
        }

        .menu_list_book_details button {
            color: var(--main-color);
        }

        button2 {
            color: var(--main-color);
        }


        element.style {
            width: 30px;
            height: 30px;
        }

        svg {
            overflow: hidden;
            vertical-align: middle;
        }


        element.style {}

        .wrap_menu_list_book_details button {
            background: unset;
            border: unset;
        }

        .menu_list_book_details button {
            color: var(--main-color);
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        .wrap_menu_list_book_details button {
            background: unset;
            border: unset;
        }

        .menu_list_book_details button,
        .text_color_main {
            color: var(--main-color);
        }

        [type=button]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button {
            border-radius: 0;
        }

        .mete_data_other {
            margin-top: 20px;
        }

        .mete_data_other .mete_data_text {
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
            font-size: 14px;
            text-align: left;
            padding-top: 8px;
            padding-bottom: 8px;
            color: var(--font-color-gray);
            border-bottom: 1px solid #eee;
        }


        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        :root {
            --main-bg-color: linear-gradient(to bottom, #00af70, #37c13d);
            --main-color: #00bf6c;
            --font-color-menu: #5a5a5a;
            --font-color: #1d6548;
            --font-color-gray: #5a5a5a;
            --link-color: #00bf6c;
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        #description_listing {
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
            color: #5a5a5a;
            font-size: 14px;
            word-wrap: break-word;
        }

        .book_details_listing {
            width: 100%;
            max-width: 800px;
            margin: auto;
            margin-top: 60px;
        }


        .book_details_listing {
            width: 100%;
            max-width: 800px;
            margin: auto;
            margin-top: 30px;
        }


        .genre_tag {
            font-family: Helvetica, Thonburi, Tahoma, sans-serif;
            font-size: 14px;
            border: 1px solid #e6e6e6;
            border-radius: 3px;
            display: inline-block;
            color: #5a5a5a !important;
            padding: 5px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none !important;
        }
    </style>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="#" class="logo"> <i class="fas fa-book"></i> SNRU ebook</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="ค้นหาที่นี้..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <!--  <a href="#" class="fas fa-shopping-cart"></a> -->
                <div id="login-btn" class="fas fa-user"></div>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="./">หน้าหลัก</a>
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


    <div class="box-container">
        <div id="container_detail">
            <div class="body-section">
                <div id="book_details">
                    <div id="book_details_lg" class="wrap_book_details">
                        <div class="wrap_book_details">
                            <h1 class="book_name"><?php echo $_GET['title'];  ?></h1>
                            <div class="mete_data_book_details">
                                <div class="image_book">
                                    <img id="image_book_detail_large" src="admin/uploads/images/<?php echo $_GET['image']; ?>" alt="Saga of the Veotear ภาค ตำนานดวงใจแห่งวีโอเทียร์ เล่ม 2" title="Saga of the Veotear ภาค ตำนานดวงใจแห่งวีโอเทียร์ เล่ม 2">
                                    <div style="position:absolute;width: 39px;left: 5px;top: 5px;border-radius: 50%;">
                                        <img src="https://www.mebmarket.com/web/dist/assets/images/icon_shop_campaign_mini.png" alt="Icon Shop Camapign" title="Icon Shop Camapign">
                                    </div>
                                </div>
                                <div class="mete_data">
                                    <div class="mete_data_author_publisher_category">
                                        <div class="mete_data_text">
                                            <span style="color:#5a5a5a;margin-right: 5px;font-size: 165%">ผู้เขียน</span>
                                            <a href="https://www.mebmarket.com/?action=search_book&type=author_name&search=Inversat&exact_keyword=1" style="color:var(--main-color);font-size: 165%" title="Inversat"><?php echo $_GET['author']; ?></a>
                                        </div>
                                        <div class="mete_data_text">
                                            <span style="color:#5a5a5a;margin-right: 5px;font-size: 165%">สำนักพิมพ์</span>
                                            <a href="https://www.mebmarket.com/?action=search_book&type=author_name&search=Inversat&exact_keyword=1" style="color:var(--main-color);font-size: 165%" title="Inversat"><?php echo $_GET['publisher'];  ?></a>
                                        </div>
                                        <div class="mete_data_text">
                                            <span style="color:#5a5a5a;margin-right: 5px;font-size: 165%">หมวดหมู่</span>
                                            <a href="https://www.mebmarket.com/?action=search_book&type=author_name&search=Inversat&exact_keyword=1" style="color:var(--main-color);font-size: 165%" title="Inversat"><?php echo $_GET['category'];  ?></a>
                                        </div>
                                    </div>
                                    <div class="wrap_btn_book_details">
                                        <div class="wrap_btn_buy">                               
                                            <a href="<?php echo $_GET['book']; ?>" target="_blank">
                                                <button id="add_sample_button" class="btn_sample" onclick="ManageBooks.checkVerifyUser(0,0,224611);">ทดลองอ่าน</button>
                                            </a>
                                        </div>
                                        <div class="wrap_btn_book_details">
                                            <div class="wrap_btn_buy buy_button_book_details_224611"> 
                                            <?php error_reporting (E_ALL ^ E_NOTICE); if  ($_SESSION['member_session_id'] != '') { ?>    
                                                <a href="<?php echo $_GET['book']; ?>" target="_blank">
                                                    <button id="buy_book_button" book_id="224611" class="btn_buy btn-add-cart-book-224611" onclick="ManageBooks.addBookToCart(224611,1,'',0,0,'',0);" price="170" series-id="8768">ชื้อ 29 บาท</button>
                                                </a>                                        
                                            <?php } ?>   
                                            <?php error_reporting (E_ALL ^ E_NOTICE); if  ($_SESSION['member_session_id'] == '') { ?>    
                                                <a href="register_form.php" target="_blank">
                                                    <button id="buy_book_button" book_id="224611" class="btn_buy btn-add-cart-book-224611" onclick="ManageBooks.addBookToCart(224611,1,'',0,0,'',0);" price="170" series-id="8768">ชื้อ 29 บาท</button>
                                                </a>                                        
                                            <?php } ?>                                             
                                            </div>
                                        </div>
                                    </div>

                                    <!--   <div class="wrap_btn_book_details">
                                        <div class="wrap_btn_buy buy_button_book_details_224611">
                                            <a href="http://localhost/ebook/flip-book-jquery-master/">
                                                <button id="buy_book_button" book_id="224611" class="btn_buy btn-add-cart-book-224611" onclick="ManageBooks.addBookToCart(224611,1,'',0,0,'',0);" price="170" series-id="8768">อ่านอีบุ๊ค</button>
                                            </a>
                                        </div>
                                    </div> -->



                                    <div class="display_rating">
                                        <img src="admin/uploads/images/<?php echo $_GET['qr_code']; ?>" alt="not have qr code now" />
                                    </div>

                                    <div class="display_rating">
                                        <div class="rating_text">5.00</div>
                                        <div class="rating_image">
                                            <img src="https://www.mebmarket.com/web/dist/assets/images/ic-rating-active@2x.png" style="width:12px;" alt="Icon Rating" title="Icon Rating">
                                            <img src="https://www.mebmarket.com/web/dist/assets/images/ic-rating-active@2x.png" style="width:12px;" alt="Icon Rating" title="Icon Rating">
                                            <img src="https://www.mebmarket.com/web/dist/assets/images/ic-rating-active@2x.png" style="width:12px;" alt="Icon Rating" title="Icon Rating">
                                            <img src="https://www.mebmarket.com/web/dist/assets/images/ic-rating-active@2x.png" style="width:12px;" alt="Icon Rating" title="Icon Rating">
                                            <img src="https://www.mebmarket.com/web/dist/assets/images/ic-rating-active@2x.png" style="width:12px;" alt="Icon Rating" title="Icon Rating">
                                        </div>
                                        <div class="total_rating_text">4 Rating</div>
                                    </div>

                                    <!--     <div class="wrap_menu_list_book_details">
                                        <div class="menu_list_book_details">
                                            <div class="wrap_btn_add_wishlist">
                                                <button onclick="ManageBooks.userAddWishList('224739')">
                                                    <svg style="width: 30px;height: 30px;">
                                                        <use xlink:href="#ic-add-wishlist" style="fill: var(--main-color);"></use>
                                                    </svg>
                                                    <br>
                                                    รีวิว
                                                </button>
                                            </div>
                                        </div>
                                        <div class="menu_list_book_details">
                                            <div class="wrap_btn_add_wishlist">
                                                <button onclick="ManageBooks.addBookToCart(224739,1,'',0,0,'',1);">
                                                    <svg style="width: 30px;height: 30px;">
                                                        <use xlink:href="#ic-add-wishlist" style="fill: var(--main-color);"></use>
                                                    </svg>
                                                    <br>
                                                    บันทึก
                                                </button>
                                            </div>
                                        </div>
                                        <div class="menu_list_book_details">
                                            <div class="wrap_btn_add_wishlist">
                                                <button onclick="ManageBooks.userAddWishList('224739')">
                                                    <svg style="width: 30px;height: 30px;">
                                                        <use xlink:href="#ic-add-wishlist" style="fill: var(--main-color);"></use>
                                                    </svg>
                                                    <br>
                                                    ติดตาม
                                                </button>
                                            </div>
                                        </div>
                                        <div class="menu_list_book_details">
                                            <div class="wrap_btn_add_wishlist">
                                                <button onclick="ManageBooks.userAddWishList('224739')">
                                                    <svg style="width: 30px;height: 30px;">
                                                        <use xlink:href="#ic-add-wishlist" style="fill: var(--main-color);"></use>
                                                    </svg>
                                                    <br>
                                                    เเชร์
                                                </button>
                                            </div>
                                        </div> -->


                                    <div class="mete_data_other">
                                        <div class="mete_data_text">
                                            <div style="display: inline-block;color:#c0c0c0;">หมวดหมู่</div>
                                            <div style="display: inline-block;float:right;">
                                                <a href="https://www.mebmarket.com/?action=series_detail&series_id=11285" title="ฮูหยินของข้า"><?php echo $_GET['category'];  ?></a>
                                            </div>
                                        </div>
                                        <div class="mete_data_text" style="margin-top: 0px;">
                                            <div style="display: inline-block;color:#c0c0c0;">ประเภทไฟล์</div>
                                            <div style="display: inline-block;float:right">pdf, epub
                                                <span class="btn_show_toc" onclick="getTableOfContents();" style="color: var(--main-color); font-size: 12px; cursor: pointer;">(สารบัญ)</span>
                                            </div>
                                        </div>
                                        <div class="mete_data_text">
                                            <div style="display: inline-block;color:#c0c0c0;">วันที่พิมพิ์</div>
                                            <div style="display: inline-block;float:right"><?php echo $_GET['published_date'];  ?></div>
                                        </div>
                                        <div class="mete_data_text">
                                            <div style="display: inline-block;color:#c0c0c0;">ความยาว</div>
                                            <div style="display: inline-block;float:right"><?php echo $_GET['page_count'];  ?> หน้า</div>
                                        </div>
                                        <div class="mete_data_text">
                                            <div style="display: inline-block;color:#c0c0c0;">ราคาปก</div>
                                            <div style="display: inline-block;float:right">ไม่มีข้อมูล</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>

                <div id="book_related_listing" class="book_details_listing" style="border-bottom: 1px solid #EEE;padding-bottom: 40px;">
                    <div style="font-family: notosansmedium;font-size: 22px;color: #111;">เรื่องย่อ</div>
                    <div id="description_listing" class="book_details_listing">
                        <!-- ชีวิตเด็กกำพร้าพ่อแม่ตายตั้งแต่อายุ7ขวบ แต่โชคดีที่เธอได้พบกับคุณยายใจดีฐานะร่ำรวยรับอุปการะเลี้ยงดูเธอเอาไว้ เธอเป็นเด็กดีเสมอมาจนสามารถสอบชิงทุนไปเรียนต่อต่างประเทศได้การตัดสินใจมาเรียนต่อเพื่ออนาคตที่ดีกับพลิกผันทำให้ชีวิตของเธอเปลี่ยนไปตลอดกาล จากเด็กสาวผู้อ่อนต่อโลกกลายเป็นผู้หญิงใจแตกท้องไม่มีพ่อ ความเสียใจผิดหวังกับความรักครั้งแรกในชีวิตทำให้เธอคิดจะฆ่าตัวตายแต่สุดท้ายคำว่า "แม่" คำเดียวทำให้เธอได้สติ! เปลี่ยนความคิดที่จะทำร้ายตัวเองและเด็กในท้อง เธอตัดสินใจเก็บเด็กเอาไว้และพยายามทำงานเก็บเงินเพื่อที่เธอจะได้กลับไปเริ่มต้นชีวิตใหม่กับลูกสาวตัวน้อยที่บ้านเกิดเมืองนอน แต่เขาผู้ที่เคยสร้างบาดแผลลึกเอาไว้กับเธออยู่ๆ ก็กลับเข้ามาในชีวิตเธอสองแม่ลูกอีกครั้ง กลับมาทำให้แผลเก่าที่คิดว่าตกสะเก็ดแล้วกับมามีเลือดซึมอีกครั้งเธอจะสู้กับเขาได้อย่างไรในเมื่อมัธจุราชร้ายกลับมาทวงสิทธิ์ของเขาที่เคยผลักไสคืนสู้อ้อมกอด... -->
                        <?php echo $_GET['subjects'];  ?>
                    </div>
                </div>

                <div id="wrap_genre_tag">
                    <div class="book_details_listing">
                        <a href="https://www.mebmarket.com/?action=search_book&type=tag&tag_id_list=[86]&tag_name=ดรามา&category_group_id=all" class="genre_tag" title="ดรามา">ดรามา</a>
                        <a href="https://www.mebmarket.com/?action=search_book&type=tag&tag_id_list=[86]&tag_name=ดรามา&category_group_id=all" class="genre_tag" title="นิยาย">นิยาย</a>
                        <a href="https://www.mebmarket.com/?action=search_book&type=tag&tag_id_list=[86]&tag_name=ดรามา&category_group_id=all" class="genre_tag" title="วิทยาศาสตร์">วิทยาศาสตร์</a>
                    </div>
                </div>
                <div id="book_related_listing" class="book_details_listing" style="border-bottom: 1px solid #EEE;padding-bottom: 40px;">
                    <div style="font-family: notosansmedium;font-size: 22px;color: #111;margin-bottom: 10px;">เรื่องที่คุณน่าจะสนใจ</div>



                    <div class="swiper-container swiper-container-related swiper-container-horizontal swiper-container-free-mode"></div>
                </div>
                <div class="book_details_listing">
                    <div class="wrap_form_book_comment">
                        <div style="font-family: notosansmedium;font-size: 22px;color: #111;margin-bottom: 10px;">เขียนรีวิวและให้เรตติ้ง</div>
                        <div style="border: 1px solid #e6e6e6;border-radius: 3px;"></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>





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




</body>

</html>

<script src="js/script.js"></script>