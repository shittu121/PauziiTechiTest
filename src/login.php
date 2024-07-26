<?php 

include("authcode.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- JavaScript -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

   <!-- CSS -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
   <!-- Default theme -->
   <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>

</head>
<body>
    <div class="container">
        <div class="flex justify-center items-center">
           <img src="../multi-step-form-main/assets/images/logo.png" alt="logo">
        </div>
        <div class="hidden">
          <span id="stepIndicator1" class="circledefault border mt-6 text-[12px] pt-1">1</span>
          <span id="stepIndicator2" class="circledefault border mt-6 text-[12px] pt-1">2</span>
        </div>
        <form action="authcode.php" method="POST"> 
            <div id="step1">
                <div class="card shadow-md border border-gray-300 border-light max-w-sm m-auto w-100 rounded-md h-[26rem]">
                     <div class="text-2xl font-semibold px-8 py-4">Sign in</div>
                     <label for="Username" class="text-sm font-semibold px-8">Username</label>
                     <input type="text" name="username" id="usernameInput" class="mt-1 w-80 mx-8 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-cyan-500/50 -outline-offset-0"/>
                     <button id="nextBtn1" class="w-80 mx-8 text-1xl my-3 h-7 rounded-md" onclick="nextStep(event)" style="background-color: #FFD814;">Continue</button>
                    <div class="text-sm mx-8 my-2"><span>By continuing, you agree to Amazon's</span> <a class="text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400" href="#">Conditions of Use</a> and <a class=" text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400" href="#">Privacy Notice.</a></div>
                    <div class="flex mx-6 mt-5">
                        <svg id="svgIcon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M10.5 16.3q-.2 0-.35-.137T10 15.8V8.2q0-.225.15-.362t.35-.138q.05 0 .35.15l3.625 3.625q.125.125.175.25t.05.275t-.05.275t-.175.25L10.85 16.15q-.075.075-.162.113t-.188.037"/></svg>
                        <div class="text-sm text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400">Need help?</div>
                    </div>
                    <div class="text-sm ml-11 mt-1 text-blue-700"><a id="forgetPasswordLink" style="display: none;" href="forgetPassword.php">Forget your Password</a></div>
                    <div class="text-sm ml-11 mt-1 text-blue-700"><a id="otherLink" style="display: none;" href="#">Other issues with Sign-In</a></div>
                    <hr class="h-px my-5 w-80 mx-8">
                    <div class="text-sm font-semibold mx-8">Buying for work?</div>
                    <div class="text-sm my-2 mb-6 text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400 mx-8">Shop on Amazon Business</div>
                </div>

                <div class="inline-flex items-center justify-center w-full"> 
            <hr class="w-96 h-px my-7 bg-gray-200 border-0 dark:bg-gray-700"> 
            <span class="absolute px-3 font-light text-sm text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900">New to Amazon?</span> 
        </div>
        <div class="card shadow max-w-sm h-7 m-auto text-center mb-7 rounded-md" id="CYAmA">
            <a href="register.php" class="text-sm">Create your Amazon account</a>
        </div>
            </div>
            

            <div id="step2" style="display: none;" class="card shadow-md border border-gray-300 border-light max-w-sm m-auto w-100 rounded-md h-[18rem]">
             <div class="text-2xl font-semibold px-8 py-4">Sign in</div>
             <div class="flex my-3">
                <h5 id="displayUsername" class="text-sm pl-8"></h5>
                <button id="prevBtn2" class="text-sm text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400 mx-1" onclick="prevStep(event)">Change</button>
             </div>
             <div class="flex">
                <label for="Password" class="text-sm font-semibold px-8">Password</label>
                <a href="forgetPassword.php"><div class="text-sm ml-[90px] text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400">Forget your Password?</div><a>
             </div>
             <input type="password" name="password" class="mt-1 w-80 mx-8 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-cyan-500/50 -outline-offset-0"/>
             <button name="login_btn" type="submit"  class="w-80 mx-8 text-1xl my-3 h-7 rounded-md" style="background-color: #FFD814;">Sign in</button>
             
            
             <div class="flex mx-8 my-1">
                <input id="keepSignedIn" type="checkbox">
                <label for="keepSignedIn" class="ml-2 text-sm">Keep me signed in. </label>
                <div class="text-sm mx-1 text-blue-700 hover:underline hover:text-orange-400 hover:decoration-orange-400">Details</div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175"/></svg>
               
             </div>
           </div>
        </form>
    </div>

    <script>
        const svgIcon = document.getElementById('svgIcon');
        const forgetPasswordLink = document.getElementById('forgetPasswordLink');
        const otherLink = document.getElementById('otherLink');
        
        let linksVisible = false;
        
        svgIcon.addEventListener('click', function() {
            if (linksVisible) {
                forgetPasswordLink.style.display = 'none';
                otherLink.style.display = 'none';
            } else {
                forgetPasswordLink.style.display = 'block';
                otherLink.style.display = 'block';
            }
            
            linksVisible = !linksVisible;
        });
        
        // Add event listeners for hover effects
        forgetPasswordLink.addEventListener('mouseover', function() {
            forgetPasswordLink.style.textDecoration = 'underline'; 
            forgetPasswordLink.style.color = 'rgb(251 146 60 / var(--tw-text-opacity))'; 
        });
        forgetPasswordLink.addEventListener('mouseout', function() {
            forgetPasswordLink.style.textDecoration = 'none'; 
            forgetPasswordLink.style.color = ''; 
        });
        
        otherLink.addEventListener('mouseover', function() {
            otherLink.style.textDecoration = 'underline'; 
            otherLink.style.color = 'rgb(251 146 60 / var(--tw-text-opacity))'; 
        });
        otherLink.addEventListener('mouseout', function() {
            otherLink.style.textDecoration = 'none'; 
            otherLink.style.color = ''; 
        });

        // Register anchor Hover
        const createAccountLink = document.getElementById('CYAmA');

        createAccountLink.addEventListener('mouseover', function() {
            createAccountLink.style.backgroundColor = '#f0f0f0'; 
        });
        
        createAccountLink.addEventListener('mouseout', function() {
            createAccountLink.style.backgroundColor = '';
        });

        let currentStep = 1;

        function showStep(step) {
            document.getElementById(`step${currentStep}`).style.display = 'none';
            if (step === 2) {
              const username = document.getElementById('usernameInput').value;
              document.getElementById('displayUsername').textContent = `${username}`;
            }
            document.getElementById(`step${step}`).style.display = 'block';
            currentStep = step;
            updateButtons();
        }


        function nextStep(event) {
            event.preventDefault(); // Prevent form submission
            if (currentStep < 2) {
                showStep(currentStep + 1);
            } else {
                // Form is on the final step, submit the form
                const form = document.querySelector('form');
                form.submit();
            }
        }


        function prevStep(event) {
          event.preventDefault();
          if (currentStep > 1) {
            showStep(currentStep - 1);
          }
        }

        function updateButtons() {
            for (let i = 1; i <= 2; i++) {
                document.getElementById(`prevBtn${i}`).style.display = i === 1 ? 'none' : 'inline-block';
                document.getElementById(`nextBtn${i}`).style.display = i === 2 ? 'none' : 'inline-block';
            }
        }


        showStep(1);


    </script>

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
