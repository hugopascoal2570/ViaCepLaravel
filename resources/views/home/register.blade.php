
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="{{url('assets/login/css/admin.login.css')}}"/>
  </head>
  <body>
        <div class="login">
            <h1>Cadastro</h1>
            @if ($error)
        <div class="error">{{$error}}</div>
            @endif
            <form method="POST">
                @csrf
                <input type="text" class="input" name="name" {{$error}} placeholder="Digite Seu nome de Usuário" required/>
                <input type="email" class="input" name="email" placeholder="Digite Seu e-mail" required/>
                <input type="password"  class="input" name="password" placeholder="Digite Sua senha" required/>
                <input type="submit" value="Cadastrar" class="btn btn-light btn-block btn-large">
            </form>
            <br/>Já possui cadastro:? <a href="{{url('/login')}}">Faça login</a>
            </div>
        </div>
  </body>
</html>