# VagasEscolares-PHP

<blockquote>
 	Projeto para escolas postarem vagas disponíveis e alunos poderem fazerem uma matricula
</blockquote><br>

<p>Instalação</p>

<ul>
  <li>Clonar este repositório</li>
  <li>Importar o arquivo sql "educacionalvagas.sql" que se encontra na pasta database para o seu mysql</li>
  <li>Ajustar os dados de conexão do arquivo <strong>Conexão.php</strong> que se encontra na pasta App/core, para os parâmetros do seu servidor</li>
  <li>Para mais praticidade na instalação e melhor utilização, indico utilizar o servidor embutido do php</li>
  <li>Caso utilize algum outro servidor (xampp ou wamp por exemplo) será necessário criar um virtual host, devido as urls amigáveis requer o virtual host </li>
  <li>Para executar a aplicação basta apenas carregar a pasta raíz do projeto, onde se encontra o <strong>index.php</strong> dentro do server anexado</li>
  <li>Ou apenas navegar no cmd até a index do projeto e rodar o comando php -S localhost:8080</li>
  <li>A aplicação tem que ser executada na porta 8080, mas caso queira utilizar outra porta é necessário modificar o <strong>URL_BASE do arquivo</strong> no endereço raíz <strong>index.php</strong> e colocar a porta que você deseja executar</li>
  <li>Este projeto foi desenvolvido na versão 7.4.8 do PHP</li>
</ul> 
