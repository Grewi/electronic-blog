<use layout="index" />

<block name="index">
    <div class="login-form">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form method="post" action="">
                    <csrf type="input" name="auth"/>
                    <div>
                        <div class="{{$class_login}}"></div>
                        <div class="invalid-feedback">{{$error_login}}</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control {{$class_email}}" id="mail" value="{{$return_mail}}">
                        <label for="mail">Адрес электронной почты</label>
                        <div class="invalid-feedback">{{$error_email}}</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control {{$class_password}}" id="password" value="{{$return_password}}">
                        <label for="password">Пароль</label>
                        <div class="invalid-feedback">{{$error_password}}</div>
                    </div>
                    <div class="form-floating">
                        <input type="submit" class="form-control" id="password" value="Войти">
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</block>