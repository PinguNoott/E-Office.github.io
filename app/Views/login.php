<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page for your website">
    <meta name="keywords" content="login, CAPTCHA, reCAPTCHA, website">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Comic Sans MS', sans-serif;
            background: #a2c2e2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 360px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <?php if (session()->getFlashdata('toast_message')): ?>
                <div class="alert alert-<?= session()->getFlashdata('toast_type') == 'success' ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('toast_message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <h2>LOGIN</h2>
            <form id="loginForm" action="<?= base_url('home/aksi_login') ?>" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <!-- CAPTCHA gambar -->
               <!--  <div class="form-group captcha-container" id="captchaContainer">
                    <label for="captcha_code">Enter CAPTCHA</label>
                    <input type="text" class="form-control" id="captcha_code" name="captcha_code" placeholder="Enter CAPTCHA code" required>
                    <img id="captchaImage" src="" alt="CAPTCHA" style="display: block; margin-top: 10px;">
                </div> -->
                <!-- Google reCAPTCHA -->
               <!--  <div class="form-group" id="recaptchaContainer" style="display: none;">
                    <div class="g-recaptcha" data-sitekey="6LeKfiAqAAAAAIYfzHJCoT6fOpGTpktdJza3fixn"></div>
                </div> -->
                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
               
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

   <!--  <script>
        document.addEventListener('DOMContentLoaded', function() {
            const captchaContainer = document.getElementById('captchaContainer');
            const recaptchaContainer = document.getElementById('recaptchaContainer');
            const captchaCodeInput = document.getElementById('captcha_code');
            const captchaImage = document.getElementById('captchaImage');
            const isOnlineField = document.createElement('input');
            isOnlineField.type = 'hidden';
            isOnlineField.name = 'is_online';
            document.getElementById('loginForm').appendChild(isOnlineField);

            if (navigator.onLine) {
                recaptchaContainer.style.display = 'block';
                captchaContainer.style.display = 'none';
                captchaCodeInput.removeAttribute('required');
                captchaImage.style.display = 'none'; // Hide CAPTCHA image
                isOnlineField.value = 'true';
            } else {
                recaptchaContainer.style.display = 'none';
                captchaContainer.style.display = 'block';
                captchaCodeInput.setAttribute('required', 'required');
                captchaImage.src = '<?= base_url('home/generateCaptcha') ?>';
                captchaImage.style.display = 'block'; // Ensure CAPTCHA image is visible
                isOnlineField.value = 'false';
            }
        });
    </script> -->
</body>
</html>
