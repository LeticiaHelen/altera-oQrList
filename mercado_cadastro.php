<?php
	require __DIR__.'/cabecalho_geral.php';
?>
<body>	

        <div class="ui mobile reversed equal width grid footerM">
          <div class="column footerM"></div>
          <div class="column footerM">

            <div class="marginCadM">
                <h1>
                    <div class="ui horizontal divider">
                        Cadastro de mercado
                    </div>
                </h1>
            </div>

            <form class="ui large form">
			  <div class="ui stacked segment">

			  	 <div class="field">
                  <label>Nome do mercado</label>
                  <input type="text" placeholder="Ex.: Pague Menos">
                </div>

                <div class="field">
                  <label>Telefone</label>
                  <input type="text" placeholder="Ex.: (00) 1234-5678">
                </div>

                <div class="field">
                  <label>CNPJ</label>
                  <input type="text" placeholder="Ex.: 22.333.333/4444.22">
                </div>

                <div class="field">
                  <label>Inscrição Estadual</label>
                  <input type="text" placeholder="Ex.: 22.333.333/4444.22">
                </div>

				<div class="two fields">
				  <div class="field">
				    <label>Rua</label>
				     <input placeholder="Ex.: Das Palmeiras" readonly="" type="text">
				   </div>

				   <div class="field">
				     <label>Cidade</label>
				     <select class="ui fluid dropdown">
				      	<option value="">Cidade</option>
				      	<option value="AL">Alabama</option>
				      </select>
				   </div>
				 </div>

				  <div class="fields">
				    <div class="eight wide field">
				      <label>Numero</label>
				      <input type="text" placeholder="Ex.: 365">
				    </div>

				    <div class="eight wide field">
				      <label>Bairro</label>
				      <select class="ui fluid dropdown">
				      	<option value="">Bairro</option>
				      	<option value="AL">Alabama</option>
				      </select>
				    </div>
				  </div>

				  <div class="fields">
				    <div class="eight wide field">
				      <label>CEP</label>
				      <input type="text" placeholder="Ex.: 12345-67">
				    </div>

				    <div class="eight wide field">
				      <label>UF</label>
				      <select class="ui fluid dropdown">
				      	<option value="">UF</option>
				      	<option value="AL">Alabama</option>
				      </select>
				    </div>
				  </div>

				  <div class="field">
                        <label>E-mail</label>
                        <input name="email" id="email" type="text" placeholder="Ex: ivo_reigel@gmail.com" required>
                    </div>

				  <div class="field">
                        <label>Senha</label>
                        <input name="senha" id="senha" placeholder="Ex: ******" type="password" required>
                    </div>

				<div class="ui fluid large teal submit button bg_secundario">Cadastrar</div>
			  </div>

			</form>
          </div>
          <div class="column footerM"></div>
        </div>


</div>
</div>
</div>
</body>
<?php include "footer.php"  ?>