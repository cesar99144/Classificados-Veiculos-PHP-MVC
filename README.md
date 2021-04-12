# Classificados-Veiculos-PHP-MVC
 Site de classificados para veículos. Onde pessoas podem anunciar, vender e buscar veículos

 <p>Instalação</p>

 <ul>
    <li>Clonar este repositório</li>
    <li>Importar o arquivo sql que encontra se no caminho: "vendasveiculos.sql" para o seu mysql</li>
    <li>Ajustar os dados de conexão do arquivo <strong>Conexao.php</strong> que se encontra na pasta App/core, para os parâmetros do seu servidor</li>
    <li>Para mais praticidade na instalação e melhor utilização, indico utilizar o servidor embutido do php</li>
    <li>Caso utilize algum outro servidor (xampp ou wamp por exemplo), devido ao sistema de rotas será necessário criar um virtual host para executar o projeto </li>
    <li>Para executar a aplicação utlizando o server do php, basta apenas navegar no cmd até o arquivo <strong>index.php</strong> que se encontra na raiz do projeto, e executar o comando <strong>php -S localhost:8080</li>
    <li>A aplicação tem que ser executada na porta 8080, mas caso queira utilizar outra porta é necessário modificar o <strong>URL_BASE do arquivo</strong> na raiz <strong>index.php</strong> e colocar a porta que você deseja executar</li>
</ul>

<img src="Resource/imagensWeb/homePage.gif">
<img src="Resource/imagensWeb/dashboard.gif">
