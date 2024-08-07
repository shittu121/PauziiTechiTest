<?php 
include("authcode.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazechic</title>
    <link href="./output.css" rel="stylesheet">
    <link href="./input.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    

  <style>
    .no-scroll {
        overflow: hidden;
    }
  </style>

</head>
<body class="bg-[#d6edfb]" id="mainBody">
<div class="container">

    <!-- Small Screen Toggle Items Content -->

    <div class="bg-gray-300 w-[80%] overflow-y-auto h-screen fixed hidden lg:hidden md:hidden z-10" id="toggleContainer">
        <!-- Close Svg -->
       <svg xmlns="http://www.w3.org/2000/svg" id="closeToggleButton" width="35px" height="35px" class="absolute right-0" viewBox="0 0 24 24">
	   <path fill="white" d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z" />
       </svg>

       <div class="bg-[#232f3e] h-40 flex">
        <a href="index.php" class="mx-[24px] my-auto"><h1 class="text-white text-2xl">Browse AMAZECHIC</h1></a>
       </div>

       <div class="shadow-lg bg-white h-32 flex">
        <a href="index.php" class="flex justify-between gap-10 items-center m-auto">
           <h1 class="font-bold text-2xl flex-shrink-0">Amazechic Home</h1>
           <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 1024 1024">
	         <path fill="currentColor" d="M1016.7 513.36L536.331 10.192a31.92 31.92 0 0 0-23.088-9.84a32.04 32.04 0 0 0-23.088 9.84L7.307 513.344c-12.24 12.752-11.808 32.992.944 45.248c12.752 12.224 32.992 11.872 45.248-.944l43.007-44.832v478.832c0 17.68 14.336 32 32 32h223.552c17.632 0 31.936-14.256 32-31.905l1.008-319.664h254.992v319.568c0 17.68 14.32 32 32 32H895.53c17.68 0 32-14.32 32-32V512.655l42.992 45.04a32 32 0 0 0 23.09 9.84c7.967 0 15.967-2.944 22.16-8.944c12.736-12.224 13.152-32.48.928-45.232zm-153.165-58.544v504.831H704.063V640.095c0-17.68-14.32-32-32-32h-318.88c-17.632 0-31.936 14.256-32 31.904l-1.008 319.664H160.511V454.815c0-2.64-.416-5.168-1.008-7.632L513.263 78.56l351.424 368.208c-.688 2.592-1.152 5.264-1.152 8.048" />
           </svg>
        </a>
       </div>

       <div class="shadow-lg h-72 bg-white flex my-2">
        <div href="index.php" class="mx-[24px]">
           <h1 class="font-bold text-2xl my-10">Trending for You</h1>
           <h1 class="text-lg my-10">New Releases</h1>
           <h1 class="text-lg">Hottest Products</h1>
        </div>
       </div>

       <div class="shadow-lg h-[22rem] bg-white flex my-2">
        <div href="index.php" class="mx-6">
           <h1 class="font-bold text-2xl my-10">Categories for You</h1>
           <h1 class="text-lg my-10">Accessories</h1>
           <h1 class="text-lg">Clothes & Apparel</h1>
           <h1 class="text-lg my-10">Beauty</h1>
        </div>
       </div>

       <div class="shadow-lg h-[22rem] bg-white flex">
        <div href="index.php" class="mx-6">
           <h1 class="font-bold text-2xl my-10">Settings</h1>
           <h1 class="text-lg my-10">English</h1>
           <h1 class="text-lg mb-10">United State</h1>
           <a href="logout.php" class="my-10"><h1 class="text-lg">Sign Out</h1></a>
        </div>
       </div>

    </div>

    <div class="bg-[#232f3e]">
      <nav class='flex justify-between lg:bg-black mb-0 md:bg-black xsbg lg:h-[70px] md:h-[90px] xsh w-full lg:w-full md:w-[163.5%] md:text-sm'>
        <div class="flex items-center hover:border m-2">
           <img src="../multi-step-form-main/assets/images/menu.png" id="toggleButton" alt="amazonlogo" width={130} height={50} class='w-[30px] h-[30px]  lg:hidden md:hidden sm:hidden' />
           <img src="../multi-step-form-main/assets/images/download.png" alt="amazonlogo" width={130} height={50} class='w-full lg:w-full md:w-full h-full lg:h-full md:h-full' />
        </div>
       
       <div class="px-8 xshidden py-2 my-2 hover:border -ml-5" style="font-size: 15px">
            <div class="text-white font-light text-[12px] -mb-1">Deliver to</div>
            <div class="text-white flex font-bold -ml-7 h-8 ">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="28" height="20" viewBox="0 0 256 256" xml:space="preserve">
                <defs>
                </defs>
                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                	<path d="M 45 2 c 18.403 0 33.375 14.972 33.375 33.375 c 0 7.881 -2.816 15.54 -7.929 21.566 L 45 86.91 L 19.555 56.941 c -5.113 -6.026 -7.929 -13.685 -7.929 -21.567 C 11.625 16.972 26.597 2 45 2 M 45 50.705 c 9.125 0 16.548 -7.423 16.548 -16.548 c 0 -9.125 -7.423 -16.548 -16.548 -16.548 s -16.548 7.423 -16.548 16.548 C 28.452 43.282 35.875 50.705 45 50.705 M 45 0 C 25.463 0 9.625 15.838 9.625 35.375 c 0 8.722 3.171 16.693 8.404 22.861 L 45 90 l 26.97 -31.765 c 5.233 -6.167 8.404 -14.139 8.404 -22.861 C 80.375 15.838 64.537 0 45 0 L 45 0 z M 45 48.705 c -8.035 0 -14.548 -6.513 -14.548 -14.548 c 0 -8.035 6.513 -14.548 14.548 -14.548 s 14.548 6.513 14.548 14.548 C 59.548 42.192 53.035 48.705 45 48.705 L 45 48.705 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                </g>
            </svg>
                <span class=''>Nigeria</span>
            </div>
       </div>
        
      <form>
          <div class="lg:flex md:flex my-3.5 mx-1">
        <label for="search-dropdown" class="mb-2 xshidden text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <div class="xshidden">
            <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center xshidden py-2.5 px-4 text-sm font-medium text-center text-gray-900 lg:bg-gray-100 md:bg-gray-100 xsbgnone lg:border lg:border-e-0 lg:border-gray-300 dark:border-gray-700 dark:text-white rounded-s-lg lg:hover:bg-gray-200 focus:ring-4 focus:outline-none lg:focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button"><span class="xshidden">All</span>
                <svg class="w-2.5 h-2.5 ms-2.5 xshidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" class="xshidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
        </div>
        <div id="dropdown" class="z-10 hidden xshidden lg:bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Shopping</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Images</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">News</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Finance</a>
            </li>
            </ul>
        </div>
        <div class="w-full h-full xshidden border">
            <div class="relative w-full lg:w-full block lg:my-0 md:my-0">
                <div class="w-full block">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full lg:-ml-0 md:ml-[4px] lg:w-[550px] md:w-[550px] outline-[#da9513] z-20 text-sm text-gray-900 bg-gray-50 " placeholder="Search" required />
                    <button type="submit" class="absolute bg-[#da9513]  amazonbuttonlogo top-0 end-0 p-2.5 h-full text-sm font-medium text-white"><svg class="w-4 h-4" color='black' aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                       <path stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                       </svg>
                    </button>
                </div>
            </div>  
        </div>
          </div>
      </form>


       <div class="xshidden lg:flex md:flex">
        <a class="flex xshidden text-white my-4 hover:border px-5 lg:-ml-0.5 md:-ml-0.5 mx-3">
            <img src="../multi-step-form-main/assets/images/usalogo.png" alt="" class='h-4 my-3'/>
            <span class='my-2 mx-1'>EN</span>
            <svg xmlns="http://www.w3.org/2000/svg" color='lightgray' class='-ml-2 mt-2 w-5' width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175"/></svg>
        </a>

        <?php
                if(isset($_SESSION['auth']))
                {
                    ?>
                        <div class="px-4 py-2 my-2 hover:border -ml-6" onmouseover="displayButton()" onmouseout="hideButton()" style="font-size: 15px; position: relative;">
                            <div class="text-white font-medium text-[12px] -mb-0.5">Hello, <?= $_SESSION['auth_user']['username']; ?></div>
                            <div class="text-white font-bold h-8 ml-2 flex">
                                <span class='-ml-2'>Accounts & Lists</span>
                                <svg xmlns="http://www.w3.org/2000/svg" color='lightgray' class='w-5 -ml-[1px] -mt-1' width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175"/></svg>
                            </div>
                            <div id="myButton" style="display: none;" class="card h-20 w-72 -ml-16 bg-white absolute">
                                <a href="logout.php" class="border font-[Poppins] duration-500 px-6 hover:bg-cyan-500 rounded">
                                    Log Out
                                </a>
                                <a href="createNewPassword.php"class="border font-[Poppins] duration-500 px-6 hover:bg-cyan-500 rounded">
                                    Change Password</a>
                            </div>
                        </div>
                        
                    <?php
                }
                else{
                    ?>
                       <div class="px-4 py-2 my-2 hover:border -ml-6" onmouseover="displayButton2()" onmouseout="hideButton2()" style="font-size: 15px; position: relative;">
                                <div class="text-white font-medium text-[12px] -mb-0.5">Hello, sign in</div>
                                <a href="login.php"><div class="text-white font-bold h-8 ml-2 flex">
                                    <span class='-ml-2'>Accounts & Lists</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" color='lightgray' class='w-5 -ml-[1px] -mt-1' width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175"/></svg>
                                </div></a>
                                <div id="myButton2" style="display: none;" class="card h-40 w-72 -ml-16 bg-white absolute">
                                <a href="login.php" class="border font-[Poppins] duration-500 px-6 hover:bg-cyan-500 rounded">
                                    Sign in
                                </a>
                                </div>
                        </div>
                    <?php
                }
        ?>
        <div class="px-4 py-2 my-2 xshidden hover:border -ml-3" style="font-size: 15px">
                <div class="text-white font-medium text-[12px] -mb-0.5">Returns</div>
                <div class="text-white font-bold h-8 ml-2 flex">
                    <span class='-ml-2'>& Order</span>
                </div>
        </div>
       </div>

            <!-- Small Sreen Authentication -->

        <?php
            if(isset($_SESSION['auth']))
            {
                ?>
                    <div class="flex items-center">
                         <a href="index.php" class="flex items-center gap-1 lg:hidden md:hidden">
                             <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24">
	                         <path fill="white" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19M12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4" />
                             </svg>
                             <span class="text-white"><?= $_SESSION['auth_user']['username']; ?></span>
                         </a>
                
                         <div class="flex text-white px-3.5 py-2 my-2 hover:border xshidden -ml-1 lg:-ml-4 md:-ml-4">
                             <svg class="-my-0 lg:-my-2 md:-my-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="60" height="60" viewBox="0 0 256 256" xml:space="preserve">
                                 <defs>
                                 </defs>
                                 <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(53.989105058365766 53.98910505836572) scale(1.63 1.63)" >
                                 	<path d="M 72.975 58.994 H 31.855 c -1.539 0 -2.897 -1.005 -3.347 -2.477 L 15.199 13.006 H 3.5 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 h 14.289 c 1.539 0 2.897 1.005 3.347 2.476 l 13.309 43.512 h 36.204 l 10.585 -25.191 h -6.021 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 H 86.5 c 1.172 0 2.267 0.587 2.915 1.563 s 0.766 2.212 0.312 3.293 L 76.201 56.85 C 75.655 58.149 74.384 58.994 72.975 58.994 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                 	<circle cx="28.88" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                 	<circle cx="74.59" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                     <text x='40' y='25' fill="#f09f08" font-weight="700" font-size="45">0</text>
                                 </g>
                             </svg>
                             <span class='text-[13px] font-[700] mt-4 -ml-2 xshidden'>Cart</span>
                         </div>
                
                    </div>
                    <?php
            }
            else{
                ?>
                    <div class="flex items-center">
                         <a href="login.php" class="flex items-center gap-1 lg:hidden md:hidden">
                             <svg xmlns="http://www.w3.org/2000/svg" class="" width="30" height="30" viewBox="0 0 24 24">
	                         <path fill="white" d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19M12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4" />
                             </svg>
                             <span class="text-white">Sign In</span>
                         </a>
                
                         <div class="flex text-white px-3.5 py-2 my-2 hover:border xshidden -ml-1 lg:-ml-4 md:-ml-4">
                             <svg class="-my-0 lg:-my-2 md:-my-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="60" height="60" viewBox="0 0 256 256" xml:space="preserve">
                                 <defs>
                                 </defs>
                                 <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(53.989105058365766 53.98910505836572) scale(1.63 1.63)" >
                                 	<path d="M 72.975 58.994 H 31.855 c -1.539 0 -2.897 -1.005 -3.347 -2.477 L 15.199 13.006 H 3.5 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 h 14.289 c 1.539 0 2.897 1.005 3.347 2.476 l 13.309 43.512 h 36.204 l 10.585 -25.191 h -6.021 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 H 86.5 c 1.172 0 2.267 0.587 2.915 1.563 s 0.766 2.212 0.312 3.293 L 76.201 56.85 C 75.655 58.149 74.384 58.994 72.975 58.994 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                 	<circle cx="28.88" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                 	<circle cx="74.59" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                     <text x='40' y='25' fill="#f09f08" font-weight="700" font-size="45">0</text>
                                 </g>
                             </svg>
                             <span class='text-[13px] font-[700] mt-4 -ml-2 xshidden'>Cart</span>
                         </div>
                
                    </div>
                <?php
    
            }
        ?>
         
    
        </nav>
        <div class="all bg-[#232f3e] w-full lg:w-full md:w-[163.5%] lg:bg-black mt-0 md:bg-black  h-20 lg:h-10 md:h-10">
         
           <!-- Small Screen Form Search -->
    
            <form action="">
                <div class="smsearch lg:hidden md:hidden mx-2">
                    <div class="relative">
                        <input type="search" id="search-dropdown" class="block rounded-[15px] p-2.5 w-full h-full outline-[#da9513] z-20 text-sm text-gray-900 bg-gray-50 " placeholder="Search" required />
                        <button type="submit" class="absolute rounded-[10px] bg-[#da9513]  amazonbuttonlogo top-0 end-0 p-2.5 h-full text-sm font-medium text-white"><svg class="w-4 h-4" color='black' aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                              </svg>
                        </button>
                    </div>
                </div>
            </form>
    
            <div class="xshidden">
                <div class="nav-bar flex bg-[#232f3e] h-20 lg:h-10 md:h-10">
                  <div class="text-white flex mx-3.5 hover:border p-2">
                      <svg xmlns="http://www.w3.org/2000/svg" color='white' width="32" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M4 7q-.425 0-.712-.288T3 6t.288-.712T4 5h16q.425 0 .713.288T21 6t-.288.713T20 7zm0 12q-.425 0-.712-.288T3 18t.288-.712T4 17h16q.425 0 .713.288T21 18t-.288.713T20 19zm0-6q-.425 0-.712-.288T3 12t.288-.712T4 11h16q.425 0 .713.288T21 12t-.288.713T20 13z"/></svg>
                      <span >All</span>
                  </div>
         
                  <div class="text-white flex hover:border p-2">
                      <span >Today's Deals</span>
                  </div>
         
                  <div class="text-white flex hover:border p-2">
                      <span >Customer Service</span>
                  </div>
         
                  <div class="text-white flex hover:border p-2">
                      <span >Registry</span>
                  </div>
                  
                  <div class="text-white flex hover:border p-2">
                      <span >Gift Cards</span>
                  </div>
         
                  <div class="text-white flex hover:border p-2">
                      <span >Sell</span>
                  </div>
         
                  
                </div>
            </div>
        </div>
    </div>
    <div class="mb-28">
        <img src="../multi-step-form-main/assets/images/productlogo.jpg" width="100%" class="h-auto w-full lg:w-full md:w-[163.5%] object-cover" alt="">
        <div class="lg:flex md:flex absolute gap-3 top-64">
            <div class="card h-full lg:h-[24.5rem] md:h-[24.5rem] w-full lg:w-[18rem] md:w-[18rem] lg:ml-5 md:ml-5 shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650] ">
                 Gaming accessories
                </div>
                <div class="card-body">
                    <div class="flex">
                        <div class="headset">
                            <a href="products.php?id=1">
                               <img src="../multi-step-form-main/assets/images/headsetlogo.jpg" alt="">
                               <span class="text-[12px] mx-7">Headsets</span>
                            </a>
                        </div>
                        <div class="keyboard">
                        <a href="products.php?id=2">
                            <img src="../multi-step-form-main/assets/images/keyboardlogo.jpg" alt="">
                            <span class="text-[12px] mx-6">Keyboards</span>
                        </a>
                        </div>
                    </div>

                    <div class="flex mt-8">
                        <div class="computerMice">
                            <img src="../multi-step-form-main/assets/images/mouselogo.jpg" alt="">
                            <h5 class="text-[12px] mx-7">Computer mice</h5w>
                        </div>
                        <div class="keyboard">
                            <img src="../multi-step-form-main/assets/images/chairlogo.jpg" alt="">
                            <span class="text-[12px] mx-6">Chairs</span>
                        </div>
                    </div>

                    <div class="text-sm py-10 lg:py-3 md:py-3 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-7">See more</div>
                </div>
            </div>

            <div class="card my-5 lg:my-0 md:my-0 h-full lg:h-[24.5rem] md:h-[24.5rem] w-full lg:w-[19.5rem] md:w-[19.5rem] shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650]">
                 Shop deals in Fashion 
                </div>

                <div class="card-body">
                    <div class="flex gap-10 lg:gap-0 md:gap-0">
                        <div class="jeans">
                            <img src="../multi-step-form-main/assets/images/jeansunderlogo.jpg" width="" class="mx-4 h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <span class="text-[12px] mx-4">Jeans under $50</span>
                        </div>
                        <div class="keyboard">
                            <img src="../multi-step-form-main/assets/images/topunderlogo.jpg" width="130" class="h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <span class="text-[12px]">Tops under 25$</span>
                        </div>
                    </div>

                    <div class="flex mt-6 gap-10 lg:gap-0 md:gap-0">
                        <div class="dress">
                            <img src="../multi-step-form-main/assets/images/dressunderlogo.jpg" width="130" class="mx-4 h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <h5 class="text-[12px] mx-4 mt-1">Dresses under $30</h5>
                        </div>
                        <div class="">
                            <img src="../multi-step-form-main/assets/images/shoeunderlogo.jpg" width="130" class="h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <span class="text-[12px] ">Shoes under $50</span>
                        </div>
                    </div>

                    <div class="text-sm py-10 lg:py-3 md:py-3 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-4">See all deals</div>
                </div>
            </div>

            <div class="my-5 lg:my-0 md:my-0 card h-full lg:h-[24.5rem] md:h-[24.5rem] w-full lg:w-[19.5rem] md:w-[19.5rem] shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650]">
                 Refresh your space
                </div>

                <div class="card-body">
                    <div class="flex gap-10 lg:gap-0 md:gap-0">
                        <div class="dining">
                            <img src="../multi-step-form-main/assets/images/dininglogo.jpg" width="130" class="mx-4 h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <span class="text-[12px] mx-4">Dining</span>
                        </div>
                        <div class="keyboard">
                            <img src="../multi-step-form-main/assets/images/homelogo.jpg" width="130" class="h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <span class="text-[12px]">Home</span>
                        </div>
                    </div>

                    <div class="flex mt-6 gap-10 lg:gap-0 md:gap-0">
                        <div class="dress">
                            <img src="../multi-step-form-main/assets/images/kitchenlogo.jpg" width="130" class="mx-4 h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <h5 class="text-[12px] mx-4 mt-1">Kitchen</h5>
                        </div>
                        <div class="">
                            <img src="../multi-step-form-main/assets/images/healthlogo.jpg" width="130" class="h-full lg:h-24 md:h-24 w-full lg:w-[130px] md:w-[130px]" alt="">
                            <span class="text-[12px] ">Health and Beauty</span>
                        </div>
                    </div>

                    <div class="text-sm py-10 lg:py-3 md:py-3 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-4">See more</div>
                </div>
            </div>

            <div class="card my-5 lg:my-0 md:my-0 h-full lg:h-[24.5rem] md:h-[24.5rem] w-full lg:w-[18rem] md:w-[18rem] shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650]">
                 Deals in PCs 
                </div>

                <div class="card-body">
                    <img src="../multi-step-form-main/assets/images/dealsinpclogo.jpg" class="lg:ml-[15px] md:ml-[15px] mx-ml-[15px] h-full lg:h-[17rem] md:h-[17rem] w-full lg:w-64 md:w-64" alt="">
                    <div class="text-sm py-10 lg:py-2.5 md:py-2.5 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-4">Shop more</div>
                </div>
            </div>

        </div>
    </div>

    
    

    <script>
        function displayButton() {
            document.getElementById('myButton').style.display = 'block';
        }
        function hideButton() {
            document.getElementById('myButton').style.display = 'none';
        }
        function displayButton2() {
            document.getElementById('myButton2').style.display = 'block';
        }
        function hideButton2() {
            document.getElementById('myButton2').style.display = 'none';
        }

        <?php if(isset($_SESSION['message'])) { ?>
          alertify.set('notifier','position', 'top-right');
          alertify.success('<?= $_SESSION['message']; ?>');
          <?php
         unset($_SESSION['message']);

         }

       ?>

       /* Small Screen Toggle */

       document.getElementById('toggleButton').addEventListener('click', function() {
            const container = document.getElementById('toggleContainer');
            const mainBody = document.getElementById('mainBody');
            container.classList.toggle('hidden');
            mainBody.classList.toggle('no-scroll');
        });

        document.getElementById('closeToggleButton').addEventListener('click', function() {
            const container = document.getElementById('toggleContainer');
            const mainBody = document.getElementById('mainBody');
            container.classList.add('hidden');
            mainBody.classList.remove('no-scroll');
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

</body>
</html>