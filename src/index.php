<?php 
include("authcode.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
    

</head>
<body class="bg-[#d6edfb]">
<div class="container">
      <nav class='flex bg-black h-[70px]'>
        <img src="../multi-step-form-main/assets/images/download.png" alt="amazonlogo" width={130} height={50} class='hover:border m-2' />
       
       <div class="px-8 py-2 my-2 hover:border -ml-5" style="font-size: 15px">
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
    <div class="flex my-3.5 mx-1">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-e-0 border-gray-300 dark:border-gray-700 dark:text-white rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800" type="button">All <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
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
        <div class="relative w-full">
            <input type="search" id="search-dropdown" class="block p-2.5 w-[550px] outline-[#da9513] z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg rounded-s-gray-100 rounded-s-2 border border-gray-300 focus:ring-orange-500 focus:border-orange-500 dark:bg-orange-500 dark:border-orange-500 dark:placeholder-orange-500 dark:text-white dark:focus:border-orange-500" placeholder="Search" required />
            <button type="submit" class="absolute bg-[#da9513]  amazonbuttonlogo top-0 end-0 p-2.5 h-full text-sm font-medium text-white rounded-e-lg border border-blue-700 hover:bg-[rgb(255, 166, 0)] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-4 h-4" color='black' aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    <path stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
  </svg></button>
        </div>
    </div>
</form>

    
    <a class="flex text-white my-4 hover:border px-5 -ml-0.5 mx-3">
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
    <div class="px-4 py-2 my-2 hover:border -ml-3" style="font-size: 15px">
            <div class="text-white font-medium text-[12px] -mb-0.5">Returns</div>
            <div class="text-white font-bold h-8 ml-2 flex">
                <span class='-ml-2'>& Order</span>
            </div>
    </div>

    <div class="flex text-white px-3.5 py-2 my-2 hover:border -ml-4">
        <svg class="-my-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="60" height="60" viewBox="0 0 256 256" xml:space="preserve">
            <defs>
            </defs>
            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(53.989105058365766 53.98910505836572) scale(1.63 1.63)" >
            	<path d="M 72.975 58.994 H 31.855 c -1.539 0 -2.897 -1.005 -3.347 -2.477 L 15.199 13.006 H 3.5 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 h 14.289 c 1.539 0 2.897 1.005 3.347 2.476 l 13.309 43.512 h 36.204 l 10.585 -25.191 h -6.021 c -1.933 0 -3.5 -1.567 -3.5 -3.5 s 1.567 -3.5 3.5 -3.5 H 86.5 c 1.172 0 2.267 0.587 2.915 1.563 s 0.766 2.212 0.312 3.293 L 76.201 56.85 C 75.655 58.149 74.384 58.994 72.975 58.994 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
            	<circle cx="28.88" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
            	<circle cx="74.59" cy="74.33" r="6.16" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                <text x='40' y='25' fill="#f09f08" font-weight="700" font-size="45">0</text>
            </g>
        </svg>
        <span class='text-[13px] font-[700] mt-4 -ml-2'>Cart</span>
    </div>

      </nav>
      <div class="all bg-black h-10">
        <div class="nav-bar flex bg-[#232f3e] h-10">
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

    <div class="container mb-28">
        <img src="../multi-step-form-main/assets/images/productlogo.jpg" width="100%" alt="">
        <div class="flex absolute gap-3 -my-72">
            <div class="card h-[24.5rem] w-[18rem] ml-5 shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650] ">
                 Gaming accessories
                </div>
                <div class="card-body">
                    <div class="flex">
                        <div class="headset">
                            <img src="../multi-step-form-main/assets/images/headsetlogo.jpg" alt="">
                            <span class="text-[12px] mx-7">Headsets</span>
                        </div>
                        <div class="keyboard">
                            <img src="../multi-step-form-main/assets/images/keyboardlogo.jpg" alt="">
                            <span class="text-[12px] mx-6">Keyboards</span>
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

                    <div class="text-sm my-3 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-7">See more</div>
                </div>
            </div>

            <div class="card h-[24.5rem] w-[19.5rem] shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650]">
                 Shop deals in Fashion 
                </div>

                <div class="card-body">
                    <div class="flex">
                        <div class="jeans">
                            <img src="../multi-step-form-main/assets/images/jeansunderlogo.jpg" width="130" class="mx-4 h-24" alt="">
                            <span class="text-[12px] mx-4">Jeans under $50</span>
                        </div>
                        <div class="keyboard">
                            <img src="../multi-step-form-main/assets/images/topunderlogo.jpg" width="130" class="h-24" alt="">
                            <span class="text-[12px]">Tops under 25$</span>
                        </div>
                    </div>

                    <div class="flex mt-6">
                        <div class="dress">
                            <img src="../multi-step-form-main/assets/images/dressunderlogo.jpg" width="130" class="mx-4 h-24" alt="">
                            <h5 class="text-[12px] mx-4 mt-1">Dresses under $30</h5>
                        </div>
                        <div class="">
                            <img src="../multi-step-form-main/assets/images/shoeunderlogo.jpg" width="130" class="h-24" alt="">
                            <span class="text-[12px] ">Shoes under $50</span>
                        </div>
                    </div>

                    <div class="text-sm my-3 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-4">See all deals</div>
                </div>
            </div>

            <div class="card h-[24.5rem] w-[19.5rem] shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650]">
                 Refresh your space
                </div>

                <div class="card-body">
                    <div class="flex">
                        <div class="dining">
                            <img src="../multi-step-form-main/assets/images/dininglogo.jpg" width="130" class="mx-4 h-24" alt="">
                            <span class="text-[12px] mx-4">Dining</span>
                        </div>
                        <div class="keyboard">
                            <img src="../multi-step-form-main/assets/images/homelogo.jpg" width="130" class="h-24" alt="">
                            <span class="text-[12px]">Home</span>
                        </div>
                    </div>

                    <div class="flex mt-6">
                        <div class="dress">
                            <img src="../multi-step-form-main/assets/images/kitchenlogo.jpg" width="130" class="mx-4 h-24" alt="">
                            <h5 class="text-[12px] mx-4 mt-1">Kitchen</h5>
                        </div>
                        <div class="">
                            <img src="../multi-step-form-main/assets/images/healthlogo.jpg" width="130" class="h-24" alt="">
                            <span class="text-[12px] ">Health and Beauty</span>
                        </div>
                    </div>

                    <div class="text-sm my-3 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-4">See more</div>
                </div>
            </div>

            <div class="card h-[24.5rem] w-[18rem] shadow-lg bg-white">
                <div class="card-title p-5 text-[22px] font-[650]">
                 Deals in PCs 
                </div>

                <div class="card-body">
                    <img src="../multi-step-form-main/assets/images/dealsinpclogo.jpg" class="ml-[15px] w-64 h-[17rem]" alt="">
                    <div class="text-sm my-2.5 text-blue-700 hover:text-orange-400 hover:decoration-orange-400 mx-4">Shop more</div>
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

    </script>

    <script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>

</body>
</html>