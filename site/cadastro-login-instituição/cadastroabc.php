<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro - Instituição</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
      <script src="js/cep.js"></script>
    <link rel="stylesheet" href="css/cadastrostyle.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="headline">
        <h1>Bem-vindo! Cadastre a sua instituição para começar.</h1>
      </div>
      <form class="form" id="form" method="get" action="../BD/cadastroj.php"> 
        <div class="signup">
          <div class="form-group">
            <label for="cnpj" class="label">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" placeholder="Digite seu CNPJ" required onkeypress="$(this).mask('00.000.000/0000-00')" />
          </div>

          <div class="form-group">
            <label for="username" class="label">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required size="52" maxlength="70" /> 
          </div>

          <div class="form-group">
            <label for="" class="label">CEP</label>
            <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" required onkeypress="$(this).mask('00000-000')" onblur="pesquisacep(this.value);" />
          </div>

          <!-- Campos Adicionados -->
          <div class="form-group">
            <label for="endereco" class="label">Endereço</label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço. Ex: Rua Alemanha, 255" required>
          </div>

          <input type="text" name="bairro" id="bairro" hidden>

          <input type="text" name="cidade" id="cidade" hidden>

          <input type="text" name="uf" id="uf" hidden>

          <input type="text" name="ibge" id="ibge" hidden>
<!--  -------------------------------------------------  -->

          <div class="form-group">
            <label for="" class="label">Número</label>
            <input type="text" id="numero" name="numero" placeholder=" Digite seu Número" required maxlength="3"/>
          </div>

          <div class="form-group">
            <label for="" class="label">Complemento</label>
            <input
              type="text"
              placeholder="Digite seu Complemento"
              id="complemento"
              name="complemento"
              required=""
            />
          </div>

          <div class="form-group">
            <label for="" class="label">DDD</label>
            <input type="text" id="ddd"  name="ddd" placeholder="DDD. Ex(11)..." required maxlength="2" />
          </div>

          <div class="form-group">
            <label for="" class="label">Telefone</label>
            <input type="text" id="tel"  name="tel" placeholder="Digite seu Telefone" required onkeypress="$(this).mask('(00) 00000-0000')"/>
          </div>

          <div class="form-group">
            <label for="email" class="label">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu Email" required /> 
          </div>

         <!-- <div class="form-group">
            <label for="password" class="label">Senha</label>
            <input type="password" placeholder="Digite sua Senha" required id="confirm_password" maxlength="8" min="1" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$])[a-zA-Z0-9@#$]{8,50}$"/> 
          </div> --> 
         
          <input type="submit" class="btn" value="Cadastrar"> <!-- type = button / anterior -->
          
          <div class="account-exist">
            Já tem uma conta? <a href="../prototipo/index.html" id="login">Volte à pagina inicial</a>
          </div>
        </div>
      </form>
      
     <!--   <div class="signin">
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
    </div> --> 

    <!--Mascara de formatação Jquery para os campos de cadastro -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="js/instituição.js"></script>
  </body>
</html>
