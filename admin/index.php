<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <title></title>
        <style>
            /* Basic reset */
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }
    
            /* Body styling to center content */
            body {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background-image: url("th4.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                
            }
    
            /* Container for the login form */
            .login-container {
                background: white;
                padding: 30px 40px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 300px;
            }
    
            /* Form fields */
            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 12px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
    
            /* Submit and Forgot buttons */
            button {
                width: 100%;
                padding: 10px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
    
            button[type="submit"] {
                background-color: #4CAF50;
                color: white;
            }
    
            button.forgot-btn {
                background-color: #f1f1f1;
                color: #333;
            }
    
            h2 {
                margin-bottom: 20px;
            }

        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form name="frm" method="post" action="authentication.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <button type="button" class="forgot-btn">Forgot Password?</button>
                <button type="button" class="forgot-btn" onclick="window.open('../home.html','_parent');">CharBot Asistant</button>
                
            </form>
        </div>
    </body>
</html>