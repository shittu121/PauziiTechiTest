<?php 

include("authcode.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">

  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
  
  
  <title>Register</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }

    .sidebar{
      background-image: url("../multi-step-form-main/assets/images/bg-sidebar-desktop.svg");
      background-size: cover;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
    }

    .circledefault{
      display: inline-block;
      width: 27px;
      height: 27px;
      line-height: 15px;
      text-align: center;
      border-radius: 50%;
      color: white;
      font-weight: 700;
    }
    .selected {
       border-color: #473dff;
    }

  </style>
</head>
<body class="bg-[gray]">
  <div class="container">
    <div class="card flex rounded-lg lg:flex xxs:hidden md:flex sm:hidden bg-white m-auto my-18 mt-10  lg:w-[700px] md:w-full h-[30rem]">
        <div class="sidebar w-52 m-3">
            <div class="firstSidebarContent mx-5 flex">
              <span id="stepIndicator1" class="circledefault border mt-6 text-[12px] pt-1">1</span>
              <div class="text-white mx-3 mt-5 text-[12px]">
                <span class="block font-normal text-gray-400 -mb-1">Register</span>
                <span class="font-medium">YOUR INFO</span>
              </div>
            </div> 

        </div>
        <form action="authcode.php" method="POST">
              <div class="step1 px-16 pt-10" id="step1">
                <span class="text-2xl font-medium">Personal info</span>
                <span class="font-light block text-[12px] text-gray-400 py-1">Please provide your name, email address, phone number and Password.</span>
                <div class="m">
                  <label class="text-[12px] font-normal pt-6">Name</label>
                  <input type="text" name="username" required placeholder="e.g. Stephen King" class="placeholder:font-black mt-1 w-80 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-[#02295a] -outline-offset-0"/>
    
                  <label class="text-[12px] block font-normal pt-6">Email Address</label>
                  <input type="email" name="email" required placeholder="e.g. stephenking@lorem.com" class="placeholder:font-black mt-1 w-80 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-[#02295a] -outline-offset-0"/>
    
                  <label class="text-[12px] block font-normal pt-6">Phone Number</label>
                  <input type="text" name="phone_no" required placeholder="e.g. +1 234 567 890" class="placeholder:font-black mt-1 w-80 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-[#02295a] -outline-offset-0"/>

                  <label class="text-[12px] block font-normal pt-6">Password</label>
                  <input type="password" name="password" required placeholder="e.g. your Password" class="placeholder:font-black mt-1 w-80 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-[#02295a] -outline-offset-0"/>
                </div>
                <input type="submit" name="register_btn" value="Register"  class="float-end mt-2 mr-5 text-white text-[12px] rounded-md" style="background-color: #02295a; height: 30px; width: 80px;"/>
              </div>
        </form>
    </div>
  </div>
  
  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Your Name Here</a>.
  </div>


  <script>
        <?php if(isset($_SESSION['message'])) { ?>
                alertify.set('notifier','position', 'top-right');
                alertify.success('<?= $_SESSION['message']; ?>');
                <?php
               unset($_SESSION['message']);
      
               }
      
        ?>
  </script>

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>


 </body>
</html>
