







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
        body{
          background-image: url("https://4kwallpapers.com/images/walls/thumbs_3t/15534.jpg");
        background-attachment: fixed;
        font-family: Arial, Helvetica, sans-serif;
    }
    #form{
         width: 400px; 
         margin: 20vh auto 0 auto; 
         background-color: whitesmoke; 
        border-radius: 5px;
        padding: 30px; 
    }
    h1{
        text-align: center;
        color:blue;
    }
    #form button{
        background-color: blue;
        color:white;
        border: 1px solid blue;
        border-radius: 5px;
        padding: 10px;
        margin: 20px 0px;
        cursor: pointer;
        font-size: 20px;
        width: 100%;
    }
    .input-group{
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }
    .input-group input{
        border-radius: 5px;
        font-size: 20px;
        margin-top: 5px;
        padding: 10px;
        border: 1px solid green;
    }
    .input-group input:focus{
        outline: 0;
    }
    .input-group .error{
        color: red;
        font-size: 16px;
        margin-top: 5px;
    }
    .input-group.sucess input{
        border-color: green;
    }
    .input-group.sucess input{
        border-color: red;
    }
    </style> 
<body>

<h1 class="text-center">signup</h1>


<div class="container">
<form action="game.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" placeholder='username' name="username"class="form-control" required >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email"placeholder='enter your Email'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input type="password" placeholder='enter your password'name="password" class="form-control"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">confirm-password</label>
    <input type="password" placeholder='retype password' name="cpassword" class="form-control"  >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script>
        const form = document.querySelector('#form')
        const username = document.querySelector('#username')
        const email = document.querySelector('#email')
        const password = document.querySelector('#password')
        const cpassword = document.querySelector('#cpassword')

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            Validateinputs();
        });

        function Validateinputs() {
            const usernameval = username.value.trim();
            const emailval = email.value.trim();
            const passwordval = password.value.trim();
            const cpasswordval = cpassword.value.trim();

            if (usernameval === '') {
                setError(username, 'Username is required');
            } else {
                setSuccess(username);
            }

            if (emailval === '') {
                setError(email, 'Email is required');
            } else if (!validateEmail(emailval)) {
                setError(email, 'Please enter a valid email');
            } else {
                setSuccess(email);
            }

            if (passwordval === '') {
                setError(password, 'Password is required');
            } else if (passwordval.length < 8) {
                setError(password, 'Password must be at least 8 characters long');
            } else {
                setSuccess(password);
            }

            if (cpasswordval === '') {
                setError(cpassword, 'Confirm Password is required');
            } else if (cpasswordval !== passwordval) {
                setError(cpassword, 'Passwords do not match');
            } else {
                setSuccess(cpassword);
            }
        }

        function setError(element, message) {
            const inputgroup = element.parentElement;
            const errorElement = inputgroup.querySelector('.error');
            errorElement.innerText = message;
            inputgroup.classList.add('error');
            inputgroup.classList.remove('success');
        }

        function setSuccess(element) {
            const inputgroup = element.parentElement;
            const errorElement = inputgroup.querySelector('.error');
            errorElement.innerText = '';
            inputgroup.classList.add('success');
            inputgroup.classList.remove('error');
        }

        function validateEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }
    </script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
