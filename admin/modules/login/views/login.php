<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= isset($this->comp['company3']) ? $this->comp['company3'] : 'Divyansh Packers and Movers' ?> | Admin Panel</title>
    
    <link href="<?=base_url()?>assets/admin/css/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/images/logo/favicon.png"/>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%) !important;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif !important;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(52, 211, 153, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }

        #hoeapp-wrapper {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .col-sm-4.col-sm-offset-4 {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: 
                0 8px 32px rgba(31, 38, 135, 0.37),
                0 0 0 1px rgba(255, 255, 255, 0.18) !important;
            padding: 60px 45px !important;
            animation: slideUpFade 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            max-width: 480px;
            width: 100%;
            margin-left: auto !important;
            margin-right: auto !important;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        @keyframes slideUpFade {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .col-sm-4.col-sm-offset-4::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #34d399, #3b82f6, #8b5cf6);
            border-radius: 24px 24px 0 0;
            opacity: 0.8;
        }

        h2 {
            color: #1a1a2e !important;
            font-size: 32px !important;
            font-weight: 700 !important;
            margin-bottom: 8px !important;
            letter-spacing: -0.5px;
        }

        .subtitle {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .img-show {
            filter: drop-shadow(0 8px 16px rgba(102, 126, 234, 0.15)) !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-bottom: 10px;
        }

        .img-show:hover {
            transform: scale(1.08) translateY(-2px);
            filter: drop-shadow(0 12px 24px rgba(102, 126, 234, 0.25)) !important;
        }

        .alert {
            border-radius: 12px !important;
            border: none !important;
            padding: 14px 18px !important;
            margin-bottom: 24px !important;
            font-size: 13px;
            animation: slideDown 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-12px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-danger {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%) !important;
            color: #991b1b !important;
            border-left: 4px solid #dc2626 !important;
        }

        .alert-info {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%) !important;
            color: #0c4a6e !important;
            border-left: 4px solid #0284c7 !important;
        }

        .alert-warning {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%) !important;
            color: #78350f !important;
            border-left: 4px solid #f59e0b !important;
        }

        .form-group {
            margin-bottom: 24px !important;
            position: relative;
        }

        .form-group label {
            display: block !important;
            margin-bottom: 10px !important;
            color: #1f2937 !important;
            font-weight: 600 !important;
            font-size: 13px !important;
            float: none !important;
            text-align: left !important;
            width: 100% !important;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group .col-lg-8 {
            padding-left: 0 !important;
            padding-right: 0 !important;
            width: 100% !important;
            float: none !important;
        }

        .form-control {
            padding: 14px 16px !important;
            border: 2px solid #e5e7eb !important;
            border-radius: 10px !important;
            font-size: 14px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            background-color: #f9fafb !important;
            width: 100% !important;
            box-shadow: none !important;
            font-weight: 500;
        }

        .form-control:hover {
            border-color: #d1d5db !important;
            background-color: #ffffff !important;
        }

        .form-control:focus {
            outline: none !important;
            border-color: #3b82f6 !important;
            background-color: white !important;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1), inset 0 0 0 1px rgba(59, 130, 246, 0.2) !important;
        }

        .form-control::placeholder {
            color: #9ca3af !important;
            font-weight: 500;
        }

        .btn {
            border-radius: 10px !important;
            font-weight: 700 !important;
            padding: 14px 16px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            border: none !important;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 13px;
        }

        .btn-info {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
            color: white !important;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
        }

        .btn-info::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-info:active::after {
            width: 300px;
            height: 300px;
        }

        .btn-info:hover {
            transform: translateY(-3px) !important;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5) !important;
        }

        .btn-info:active {
            transform: translateY(-1px) !important;
        }

        .btn-block {
            display: block !important;
            width: 100% !important;
        }

        p.col-sm-6.col-sm-offset-3 {
            padding: 0 !important;
            width: 100% !important;
            margin-left: 0 !important;
            margin-top: 24px !important;
        }

        br {
            display: none;
        }

        .form-horizontal {
            margin-bottom: 0;
        }

        .security-note {
            font-size: 11px;
            color: #9ca3af;
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            font-weight: 500;
        }

        .security-note strong {
            color: #34d399;
        }

        @media (max-width: 640px) {
            .col-sm-4.col-sm-offset-4 {
                padding: 40px 24px !important;
            }

            h2 {
                font-size: 26px !important;
            }

            .form-control {
                padding: 12px 14px !important;
            }

            .btn {
                padding: 12px 14px !important;
            }
        }
    </style>
</head>
<body hoe-navigation-type="vertical" hoe-nav-placement="left" theme-layout="wide-layout" class="view-animate-container">
    <div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop" class="view-animate">
        
<br><br><br><br>            
    <div class=" col-sm-4 col-sm-offset-4 text-center">
        <h2 align="center">Welcome Administrator</h2>
        <p class="subtitle">Secure <?= isset($this->comp['company3']) ? $this->comp['company3'] : 'Divyansh Packers and Movers' ?> Admin Panel Access</p>
        <br>
        <img src="<?=base_url("assets/images/logo/logo.png")?>" class="img-show" style="width:120px;" alt="logo">
        <br><br><br>
        <form class="form-horizontal" action="<?=site_url('login/check');?>" method="post">
           <?php 
           $error=validation_errors();
            if(isset($msg))
                echo '<div class="alert alert-danger">'.$msg.'</div>';
            else
            if(!$error)
                echo '<div class="alert alert-info">Please login with your Username and Password.</div>';
            else echo '<div class="alert alert-warning">'.$error.'</div>';?>
        
          
          <div class="form-group">  
            <label for="name" class="col-lg-2 control-label">Username</label>  
            <div class="col-lg-8">  
              <input class="form-control span10" name="user" autofocus id="username" value="<?=set_value('username');?>" placeholder="Username"/> 
            </div>  
          </div>  
          <div class="form-group">  
            <label for="email" class="col-lg-2 control-label">Password</label>  
            <div class="col-lg-8">  
              <input class="form-control span10" name="pass" id="password" type="password"  placeholder="Password"/> 
            </div>  
          </div> 
          <p class="col-sm-6 col-sm-offset-3">
              <button type="submit" class="btn btn-info btn-block" onclick="setvalue()" id="myButton">Sign In</button>
          </p>
        </form>
        <div class="security-note">
            🔒 <strong>Secure Connection</strong> • Your data is encrypted and protected
        </div>         
    </div>

</div>
<script>
    function setvalue(){
        document.getElementById('myButton').innerText ='Verifying...';
    }
</script>
</body>
</html>
