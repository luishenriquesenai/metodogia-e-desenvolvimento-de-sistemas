
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    

<div class="fixed-top">
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading1">Metodologia agil</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading3">>Metodologia Cascata</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading4">Scrum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading5">kamban</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pgusuario.php">cadastrar projetos</a>
    </li>
    <li>
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Cadastrar
            </button>
          </li>
          <li>
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
              Login
            </button>
          </li>
    </div>
    

<!-- cadastrar -->
        
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="processa.php">
			               <label>Nome: </label>
			               <input type="text" name="nome" placeholder="Digite o nome completo" required><br><br>
                     
                     <label>e-mail: </label>
			               <input type="email" name="email" placeholder="Digite o nome completo" required><br><br>
			

                     <label>Senha: </label>
			               <input type="password" name="senha" placeholder="Digite o sua senha"required> <br><br>
			
			              <input type="submit" class="btn btn-success mx-3" value="Cadastrar">
		                <button type="button" class="btn bg-dark text-bg-success" data-bs-dismiss="modal">cancelar</button>                  
                    </form>
                  
                  </div>
                </div>
              </div>
            </div>
          </li>
<!-- fim cadastrar -->
<!--  modal login-->
         
              <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="validar.php">
			               <label>Nome: </label>
			               <input type="text" name="email" placeholder="Digite seu e-mail" required><br><br>
			
			               <label>Senha: </label>
			               <input type="password" name="senha" placeholder="Digite o sua senha"required><br><br>

						              <input type="submit" name="submit" class="btn btn-success mx-3" value="Login">
		                <button type="button" class="btn bg-dark text-bg-success" data-bs-dismiss="modal">cancelar</button>                  
                    </form>
                  
                  </div>
                </div>
              </div>
            </div>
            <!-- fim modal login -->


      </ul>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h2 id="scrollspyHeading1" class="mt-5 text-center">Metodologia Ágil</h2>
  <img src="./img/metodo-agil-caracteristicas.jpg " class="w-100" alt="">
<h3 class=" mt-5"> A metodologia ágil é considerada um divisor de águas na indústria de software, em razão da sua abordagem revolucionária.

Em 2001, quando ela foi oficialmente lançada, os desenvolvedores e, principalmente, os clientes, penavam para chegar a soluções satisfatórias.

Muito por causa de uma mentalidade defasada, na qual os processos esbarravam na burocracia e no excesso de requisitos formais.

Ela foi tão bem sucedida que não demorou a ser replicada em empresas de diversos outros segmentos.

Profissionais de ponta de áreas como Administração, Engenharia ou que exerçam qualquer cargo de liderança, têm no método ágil uma competência quase obrigatória.

Se você se enquadra em algum desses perfis ou tem interesse no assunto, continue lendo este texto e conheça a fundo a metodologia que mudou o meio corporativo para melhor.</h5>
  

  <h4 id="scrollspyHeading3"  class="mt-5"></h4>
  <img src="./img/logo.jpg widht" alt="">
  <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="./img/cascata2.jpg" alt="Foto" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h2>Metodologia em Cascata</h2><br><br>
                <h3>O Método Cascata, do inglês Waterfall Model, é uma metodologia de desenvolvimento e planejamento
                   de software, em que todo o projeto é realizado como uma cachoeira, onde as fases de análise, projeto,
                    implementação, testes, integração e manutenção ocorrem em um fluir, em sequência. Por ser um planejamento 
                    fluido, onde uma etapa leva a outra de maneira integral, o nome Waterfall foi usado para definir essa 
                    metodologia, pois acredita-se que
                   o primeiro a utilizar esse termo foi W.W. Royce, em um artigo publicado na década 1970.</h3>
            </div>
            <h3>As Metodologias Waterfall e Agile, mais conhecidas como metodologias ágeis, são muito utilizadas
                     por empresas de tecnologia, por exemplo, pela funcionalidade e benefícios que trazem para os projetos,
                      principalmente de software. </h3>
        </div>
        <style>
    .m-6 {
        margin-top: 100px !important;
    }
</style>

  
  <h4 id="scrollspyHeading4" class=" mt-5"></h4>
  <div  class="float-end m-5">
  <img src="./img/logo.jpg" alt="" class=" mt-5">
</div>
<div class=" m-6">
  <h2>SCRUM</h2>
  <BR></BR>
 <h3 >O Scrum é uma estrutura ágil de gestão de projetos que ajuda as equipes a estruturar e gerenciar o trabalho por meio do conjunto de valores, princípios e práticas. Semelhante a uma equipe de rugby (de onde vem o nome) treinando para o grande jogo, o Scrum estimula as equipes a aprender com as experiências, a se organizar para resolver um problema e a refletir sobre os êxitos e fracassos para melhorar sempre.

Embora o Scrum sobre o qual estou falando seja mais usado pelas equipes de desenvolvimento de software, os princípios e as lições dessa estrutura podem ser aplicados a todos os tipos de trabalhos em equipe. Esse é um dos motivos de o Scrum ser tão popular. Muitas vezes considerado uma estrutura de gestão de projetos de agilidade, o Scrum descreve um conjunto de reuniões, ferramentas e cargos que atuam juntos para ajudar as equipes a organizarem e gerenciarem o trabalho.

Neste artigo, abordaremos como uma estrutura de Scrum tradicional é formada com a ajuda do Guia do Scrum e de David West, CEO da Scrum.org. Nós também incluiremos exemplos de como vemos nossos clientes se desviarem desses fundamentos para encaixarem suas necessidades específicas. Para isso, a gerente de produtos do grupo para Jira Software e ex-instrutora de agilidade, Megan Cook, dará dicas e truques na série de vídeos Instrutor de agilidade:

</h3>
 
    
  <h4 id="scrollspyHeading5" ></h4>
   <style>
    .m-6 {
        margin-top: 100px !important;
    }
</style>
 <div>
 <h4 class="m-6">KAMBAN</h4>
  <img src="./img/th.jpg" alt="" class="w-100 ">
  </div>
 
 <h3> Kanban é um sistema visual de gestão de trabalho, que busca conduzir cada tarefa por um fluxo predefinido de trabalho.

Em geral, o conceito de Kanban pode ser definido pelos seguintes itens:

O sistema visual: um processo, definido em um quadro com colunas de separação, que permite dividir o trabalho em segmentos ou pelo seu status, fixando cada item em um cartão e colocando em uma coluna apropriada para indicar onde ele está em todo o fluxo de trabalho. 
Os cartões: que descrevem o trabalho real que transita por este processo.
A limitação do trabalho em andamento: que permite atribuir os limites de quantos itens podem estar em andamento em cada segmento ou estado do fluxo de trabalho.
Ou seja, o Kanban é um fluxo de trabalho que busca indicar (e limitar) o trabalho em andamento — ou WIP, Work In Progress.

O Kanban pode ser considerado também como uma metodologia ágil exatamente por ter o objetivo de evitar a procrastinação e render mais no dia a dia.

Isso acontece porque todo o sistema é pautado  de uma forma organizada para tornar  o workflow mais produtivo.

Essa lógica de pensamento é muito vista na metodologia lean, onde se evitam desperdícios.

A junção desses conceitos pode ser chamada de “lean Kanban”, onde o fluxo de trabalho segue por etapas de forma enxuta. 

Portanto, o método Kanban pode ser descrito como um processo para melhorar gradualmente tudo o que você faz.</h3>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>