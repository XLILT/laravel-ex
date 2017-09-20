<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link type="text/css" rel="stylesheet" href="/static/css/index/main.css" />
        <link type="text/css" rel="stylesheet" href="/static/lib/bootstrap-3.3.6/css/bootstrap.min.css" />

        <title>鲲鹏</title>
	</head>
	<body>
        <div class="index-main">
            <div class="index-main-center">
                <div class="index-header">
                    <h1 class="logo"></h1>
                    <h4>在自由的天空展翅翱翔</h4>
                </div>
                <div class="index-desk">
                    <div class="index-table-nav">                        
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active"><a href="#">注册</a></li>
                            <li role="presentation"><a href="#">登陆</a></li>                          
                        </ul>                   
                    </div>
                    <div class="view-signup">
                        <form class="signup-box" action="/index/signup" method="POST">
                            <div class="input-wrapper">
                                <input required type="text" class="form-control" placeholder="姓名">
                            </div>                            
                            <div class="input-wrapper">
                                <input required type="text" class="form-control" placeholder="手机号">
                            </div>
                            <div class="input-wrapper">
                                <input required type="password" class="form-control" placeholder="密码">
                            </div>
                            <div class="button-wrapper">
                                <button type="submit" class="btn btn-primary sign-btn">注册鲲鹏</button>
                            </div>
                        </form>
                    </div>
                    <div class="view-signin hide">
                    </div>
                </div>                
            </div>
        </div>
        <div class="footer">
        </div>        
	</body>
</html>
