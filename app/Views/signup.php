<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Comic Sans MS', sans-serif;
    background-image:url("");
    background-size: cover;
    background-position: center;
    background-color: #ffffff;
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
    background: rgba(255, 255, 255, 0.9); /* Background putih dengan transparansi */
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
    .signup{
        display: flex;
        justify-content: center;
        font-weight: bold;
        color: #4a934a;
}

button:hover {
    background-color: #0056b3;
}
</style>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                     
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?=base_url('home/aksi_signup')?>" method="POST">
                        <h2 class="signup">SIGN UP :D</h2>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                      
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>