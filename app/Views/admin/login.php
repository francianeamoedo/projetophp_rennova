<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Login - Rennova</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body class="login-body">
  <div class="login-container">
    <form method="POST" action="/projetophp_rennova/login">
      <div class="form-floating">
        <label for="floatingInput">Usuário</label> <br />
        <input type="text" class="form-control" name="username" style="width:100%;" placeholder="Usuário" required>
      </div>
      <br />
      <div class="form-floating">
        <label for="floatingPassword">Senha</label> <br />
        <input type="password" class="form-control" id="floatingPassword" style="width:100%;" name="password" placeholder="Password"
          required>
      </div>
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
        <label class="form-check-label" for="checkDefault">
          Mantenha-me conectado
        </label>
      </div>
      <br>
      <button class="btn btn-primary w-100 py-2" type="submit">ENTRAR</button>
    </form>
  </div>
</body>

</html>