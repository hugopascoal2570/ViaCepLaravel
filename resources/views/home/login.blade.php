
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{url('assets/login/css/admin.login.css')}}"/>
  </head>
  <body>
	<div class="login">
		<div align="center" class="mb-4">
			<img src="{{url('assets/img/logo-branca.png')}}" width="270">
		</div>
            <form method="POST">
                @csrf
                <input class="input" type="email" name="email" placeholder="Digite Seu e-mail" required/>
                <input class="input" type="password" name="password" placeholder="Digite Sua senha" required/>
                <input type="submit" value="Entrar" class="btn btn-light btn-block btn-large">
                <!--Ainda não tem cadastro? <a href="{{url('/register')}}">Cadastre-se</a>-->
            </form>
	        </div>
  </body>
</html>
