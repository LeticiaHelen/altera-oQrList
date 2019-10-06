<?php  require __DIR__.'/cabecalho_geral.php'; ?>
<body>

  <div class="ui mobile reversed equal width grid">
    <div class="column"></div>
    <div class="column">

      <div class="marginLog">
        <h2>
          <div class="ui horizontal divider">
            logue para entrar em sua conta
          </div>
        </h2>
      </div>

      <form class="ui large form" method="post" action="../controllers/usuario.php?acao=usuario_login">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email_login" placeholder="E-mail">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="senha_login" placeholder="Senha">
            </div>
          </div>
          <button class="ui fluid large teal submit button bg_secundario" name="entrar">Entrar</button>
        </div>
      </form>

      <center><div class="ui message">
        Novo por aqui?  <a href="usuario_cadastro.php">Cadastre-se</a>
      </div></center>
    </div>
    <div class="column"></div>
  </div>



</body>
<?php include "footer.php"  ?>