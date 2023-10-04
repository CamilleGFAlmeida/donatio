<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro - Instituição</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="stylesheet" href="css/cadastrostyle.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="headline">
        <h1>Bem-vindo! Cadastre a sua instituição para começar.</h1>
      </div>
      <form class="form" method="get" action="../BD/cadastroj.php">
        <div class="signup">
          <div class="form-group">
            <label for="" class="label">CNPJ</label>
            <input type="text" placeholder="Digite seu CNPJ" required="" id="cnpj"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Nome</label>
            <input type="text" placeholder="Digite seu Nome" required="" id="nome"/>
          </div>

          <div class="form-group">
            <label for="" class="label">CEP</label>
            <input type="text" placeholder="Digite seu CEP" required="" id="cep"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Número</label>
            <input type="text" placeholder=" Digite seu Número" required="" id="numero"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Complemento</label>
            <input
              type="text"
              placeholder="Digite seu Complemento"
              required=""
              id="complemento"
            />
          </div>

          <div class="form-group">
            <label for="" class="label">DDD</label>
            <input type="text" placeholder="DDD. Ex(11)..." required="" id="ddd"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Telefone</label>
            <input type="text" placeholder="Digite seu Telefone" required="" id="tel"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Email</label>
            <input type="email" placeholder="Digite seu Email" required="" id="email"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Senha</label>
            <input type="password" placeholder="Digite sua Senha" required="" id="senha"/>
          </div>
          <input type="submit" class="btn" value="Cadastrar"> <!-- modificado -->
          <input type="submit" value="sim">
          
          <div class="account-exist">
            Já tem uma conta? <a href="../prototipo/index.html" id="login">Volte à pagina inicial</a>
          </div>
        </div>
      
        <div class="signin">
          <div class="form-group">
            <input type="email" placeholder="Email" required="" />
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" required="" />
          </div>
          <div class="forget-password">
            <div class="check-box">
              <input type="checkbox" id="checkbox" />
              <label for="checkbox">Remember me</label>
            </div>
            <a href="#">Forget password?</a>
          </div>
          <button type="submit" class="btn">LOGIN</button>
          <div class="account-exist">
            Create New a account? <a href="#" id="signup">Signup</a>
          </div>
        </div>
      </form>
    </div>

    <script src="js/instituição.js"></script>
  </body>
</html>
