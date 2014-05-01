<!DOCTYPE html>
<html style="background: url('/img/bglogin.png')" ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title>Gruik. - Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>

    <body style="background: url('/img/bglogin.png')" ng-controller="LoginCtrl">

        <div class="form-box" id="login-box">
            <div class="header" style="background:#598D8F;">
                <img src="/img/gruik.png" alt=""> <br> Authentication
            </div>
            <form ng-submit="login()">
                <div class="body bg-gray">

                    <div class="text-center" ng-show="flash">
                        <small class="label label-danger"><i class="fa fa-times"></i> {{ flash }}</small>
                    </div>

                    <div class="form-group">
                        <input required ng-disabled="loading" ng-model="user.email" type="text" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input required ng-disabled="loading" ng-model="user.password" type="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="remember" >
                            <input ng-model="user.remember" type="checkbox" id="remember"/> Remember me
                        </label>
                    </div>
                </div>
                <div class="footer">
                    <button ng-disabled="loading" type="submit" class="btn bg-olive btn-block"><i ng-show="loading" class="fa fa-cog fa-spin"></i> Login</button>
                    <a href="{% URL::to('register') %}" class="btn btn-default btn-block">Register</a>

                    <p class="pull-right"><a href="#">I forgot my password</a></p>
                    <p><a href="{% URL::to('/') %}"><i class="fa fa-angle-double-left"></i> Return to home</a></p>
                </div>
            </form>
        </div>

        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/angular/angular.min.js" type="text/javascript"></script>
        <script src="/vendor/checklist-model/checklist-model.js"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/js/angular/main.js" type="text/javascript"></script>

    </body>
</html>