<!-- login form  -->

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="vendor/toastr/toastr.css" rel="stylesheet" media="all">
    <script src="vendor/toastr/toastr.min.js"></script>


</head>

<style>
    .is-invalid {
        background-color: ivory;
        border: none;
        outline: 2px solid red;
        border-radius: 5px;
    }

    .register-form-container {


        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .9);
        position: fixed;
        top: 0;
        /* right:-105%;*/
        /* z-index: 10000; */
        height: 100%;
        width: 100%;


    }

    .register-form-container.active {
        right: 0;
    }

    .register-form-container form {
        background: #fff;
        border: var(--border);
        width: 40rem;
        padding: 2rem;
        box-shadow: var(--box-shadow);
        border-radius: .5rem;
        margin: 2rem;
    }

    .register-form-container form h3 {
        font-size: 2.5rem;
        text-transform: uppercase;
        color: var(--black);
        text-align: center;
    }

    .register-form-container form span {
        display: block;
        font-size: 1.5rem;
        padding-top: 1rem;
    }

    .register-form-container form .box {
        width: 100%;
        margin: .7rem 0;
        font-size: 1.6rem;
        border: var(--border);
        border-radius: .5rem;
        padding: 1rem 1.2rem;
        color: var(--black);
        text-transform: none;
    }

    .register-form-container form .checkbox {
        display: flex;
        align-items: center;
        gap: .5rem;
        padding: 1rem 0;
    }

    .register-form-container form .checkbox label {
        font-size: 1.5rem;
        color: var(--light-color);
        cursor: pointer;
    }

    .register-form-container form .btn {
        text-align: center;
        width: 100%;
        margin: 1.5rem 0;
    }

    .register-form-container form p {
        padding-top: .8rem;
        color: var(--light-color);
        font-size: 1.5rem;
    }

    .register-form-container form p a {
        color: var(--green);
        text-decoration: underline;
    }

    .register-form-container #close-login-btn {
        position: absolute;
        top: 1.5rem;
        right: 2.5rem;
        font-size: 5rem;
        color: var(--black);
        cursor: pointer;
    }
</style>

<div class="register-form-container"> <!--tabindex="-1" aria-hidden="true" -->

    <!-- <div id="close-login-btn" class="fas fa-times"></div>  -->

    <form action="">
        <h3>ลงทะเบียน</h3>
        <span>ชื่อผู้ใช้</span>
        <input type="text" name="username" class="box" placeholder="กรุณาเพิ่มชื่อผู้ใช้" id="username">
        <span>รหัสประชาชน</span>
        <input type="text" name="citized_id" class="box" placeholder="กรุณาเพิ่มรหัสประชาชน" id="citized_id">
        <span>อีเมล์</span>
        <input type="email" name="email" class="box" placeholder="กรุณาเพิ่มอีเมล์" id="email">
        <span>เบอร์โทร</span>
        <input type="text" name="tell_number" class="box" placeholder="กรุณาเพิ่มอีเมล์" id="tell_number">
        <span>รหัสผ่าน</span>
        <input type="password" name="password" class="box" placeholder="กรุณาเพิ่มรหัสผ่าน" id="password">
        <!-- <span>conform รหัสผ่าน</span>
        <input type="password" name="" class="box" placeholder="กรุณา conform รหัสผ่าน" id="password"> 
        <input type="submit"   data-toggle="modal" data-target="#addUserModal" value="ลงทะเบียน" class="btn"> -->
        <!-- <input type="submit" id="submit" name="register" value="ลงทะเบียน" class="btn"> -->
        <button type="submit" id="submit" name="register" class="btn">
            ลงทะเบียน
        </button>
        <p>ถ้าท่านต้องการกลับหน้าหลัก ? <a href="./">กลับหน้าหลัก</a></p>

    </form>

</div>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#submit').on('click', function(e) {
            e.preventDefault()

            console.log('Hi');

            $("#citized_id").removeClass('is-invalid');
            $("#username").removeClass('is-invalid');
            $("#password").removeClass('is-invalid');
            $("#tell_number").removeClass('is-invalid');
            $("#email").removeClass('is-invalid');

            var citized_id = $('#citized_id').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var tell_number = $('#tell_number').val();
            var email = $('#email').val();

            if (username == '') {
                //alert("กรุณากรอก username");
                $("#username").focus();
                $("#username").addClass('is-invalid');
                toastr.error('ระบุชื่อผู้ใช้งาน', toastr.options = {
                    "closeButton": true,
                    "timeOut": "1500"
                })
            } else if (citized_id == '') {
                // alert("กรุณากรอก citized_id");
                $("#citized_id").focus();
                $("#citized_id").addClass('is-invalid');
                toastr.error('ระบุรหัสประชาชน', toastr.options = {
                    "closeButton": true,
                    "timeOut": "1500"
                })
            } else if (email == '') {
                // alert("กรุณากรอก email");
                $("#email").focus();
                $("#email").addClass('is-invalid');
                toastr.error('ระบุอีเมล์', toastr.options = {
                    "closeButton": true,
                    "timeOut": "1500"
                })
            } else if (tell_number == '') {
                //  alert("กรุณากรอก tell_number");
                $("#tell_number").focus();
                $("#tell_number").addClass('is-invalid');
                toastr.error('ระบุเบอร์โทร', toastr.options = {
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

                // if (citized_id != '' && username != '' && password != '' && tell_number != '' && email != '') { 

                $.ajax({
                    method: "POST",
                    url: "member/register",
                    data: {
                        citized_id: citized_id,
                        username: username,
                        password: password,
                        tell_number: tell_number,
                        email: email
                    },

                    success: function(response) {

                        response = JSON.parse(response);

                        console.log(response);
                        console.log(response.status);

                        if (response.status == 'true') {

                            Swal.fire({
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                icon: 'success',
                                title: 'Success',
                                text: "ลงทะเบียนสมาชิกสำเร็จ",
                                showConfirmButton: true,
                                confirmButtonText: "เข้าสู่ระบบ"

                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'member/member_profile';
                                }
                            })
                        }else if(response.status == 'citizen_found'){
                            Swal.fire({
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                icon: 'error',
                                title: 'Error',
                                text: "มเลขบัตรประชาชนนี้มีในระบบแล้ว",
                                showConfirmButton: true,
                            })
                        }else if(response.status == 'username_found'){
                            Swal.fire({
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                icon: 'error',
                                title: 'Error',
                                text: "Username นี้มีในระบบแล้ว",
                                showConfirmButton: true,
                            })
                        } else {
                            // alert('failed');
                            Swal.fire({
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                icon: 'error',
                                title: 'Error',
                                text: "ลงทะเบียนสมาชิกไม่สำเร็จ",
                                showConfirmButton: true,
                            })
                        }

                    }
                });
            }
            /*    else {
                alert('กรุณากรอกข้อมูลให้ครบ');
              }*/

        })

    })
</script>