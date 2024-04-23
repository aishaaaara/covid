<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
    <link rel="stylesheet" href="login/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
</head>
<body>    
    <div class="login-box" style="display: none;"> 
        <img src="login/user.png" class="avatar">
        <br>
        <h2>Login Here</h2>
        <form action="login/proses-login.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter your Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your Password">
            <span id="togglePassword" style="cursor: pointer;">👁️</span><br><br>
            <input type="checkbox" name="remember"> Remember Me<br><br>
            <input type="submit" name="login" value="Login">
        </form>
        <br>
    </div>

    <script>
    $(document).ready(function() {
        $('.login-box').fadeIn(1500);
        $('form').submit(function(event) {
            var username = $('input[name="username"]').val();
            var password = $('input[name="password"]').val();
            if (username === '' || password === '') {
                event.preventDefault(); 
                alert('Username and password are required!');
            }
        });

        $('#togglePassword').click(function() {
            var type = $('input[name="password"]').attr('type') === 'password' ? 'text' : 'password';
            $('input[name="password"]').attr('type', type);
            $(this).text($(this).text() == '👁️' ? '🙈' : '👁️'); 
        });

        $('input[type="submit"]').hover(
            function() { 
                $(this).animate({ backgroundColor: "#4CAF50", color: "#ffffff" }, 'slow');
            }, 
            function() { 
                $(this).animate({ backgroundColor: "#f8f9fa", color: "#333" }, 'slow');
            }
        );
    });
    </script>
</body>
</html>
