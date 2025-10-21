
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login | The Sunken Fate</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #FF2D2D; --secondary: #FF5E14; --dark: #1A1A1A;
      --light: #F5F5F5; --accent: #FFD700; --neon: #00F7FF;
    }
    *{box-sizing:border-box;margin:0;padding:0;font-family:'Orbitron',sans-serif}
    body{
      background:var(--dark);
      color:var(--light);
      background-image:radial-gradient(circle at 25% 25%,rgba(255,45,45,.15) 0%,transparent 50%),radial-gradient(circle at 75% 75%,rgba(0,247,255,.15) 0%,transparent 50%);
      display:flex;align-items:center;justify-content:center;height:100vh;
    }
    .login-box{
      background:rgba(30,30,30,.9);
      border:1px solid var(--neon);
      border-radius:10px;
      padding:2.5rem 2rem;
      width:320px;
      box-shadow:0 0 25px rgba(0,247,255,.25);
    }
    .login-box h2{
      text-align:center;
      margin-bottom:1.5rem;
      color:var(--neon);
      letter-spacing:2px;
    }
    .input-group{
      position:relative;
      margin-bottom:1.2rem;
    }
    .input-group input{
      width:100%;
      padding:.7rem .9rem;
      background:transparent;
      border:1px solid var(--neon);
      border-radius:4px;
      color:var(--light);
      outline:none;
      transition:all .3s ease;
    }
    .input-group input:focus{
      border-color:var(--accent);
      box-shadow:0 0 8px var(--accent);
    }
    .input-group label{
      position:absolute;
      left:.9rem;
      top:.7rem;
      color:#aaa;
      pointer-events:none;
      transition:all .2s ease;
    }
    .input-group input:focus + label,
    .input-group input:not(:placeholder-shown) + label{
      top:-.55rem;
      left:.5rem;
      font-size:.75rem;
      color:var(--neon);
      background:var(--dark);
      padding:0 .3rem;
    }
    .login-btn{
      width:100%;
      background:linear-gradient(90deg,var(--primary),var(--secondary));
      border:none;
      padding:.8rem;
      border-radius:4px;
      color:#fff;
      font-weight:700;
      letter-spacing:1px;
      cursor:pointer;
      transition:all .3s ease;
    }
    .login-btn:hover{
      box-shadow:0 0 15px var(--primary);
      transform:translateY(-2px);
    }
    .error{
      text-align:center;
      color:var(--primary);
      margin-top:.8rem;
      font-size:.85rem;
    }
  </style>
</head>
<body>

<form class="login-box" action="admin.php" method="POST">
  <h2><i class="fas fa-user-lock"></i> Admin Login</h2>

  <div class="input-group">
    <input type="text" name="user" id="user" required placeholder=" ">
    <label for="user">Username</label>
  </div>

  <div class="input-group">
    <input type="password" name="pass" id="pass" required placeholder=" ">
    <label for="pass">Password</label>
  </div>

  <button type="submit" class="login-btn">Enter</button>

  <?php
    /* simple server-side gate inside the same file if renamed to .php */
    if($_SERVER['REQUEST_METHOD']==='POST'){
      if($_POST['user']==='Nicecat' && $_POST['pass']==='Paul1098'){
        header('Location: admin.php'); exit;
      } else {
        echo '<p class="error">Invalid credentials</p>';
      }
    }
  ?>
</form>

</body>
</html>
