@extends('layout.layout')


<!-- Styles-->
<link rel="stylesheet" href="{{ url('calculadora/style_calculadora.css')}}">

<!-- Bootstrap-->
<link rel="stylesheet" href="{{ asset('calculadora/bootstrap.css')}}">

<!-- Seção do cabeçalho da página -->
@section('titulo_pagina')
<h6 class="m-0 font-weight-bold text-primary">Instruções</h6>
@stop


<!-- Seção do conteúdo -->
@section('conteudo')

    <section class="anime" id="descricao">
        <div class="grid-text">
            <h2 class="text-center"><b>A Calculadora Online VME e CC</b></h2>
            <p class="text-justify">
            Os instrumentos utilizados em pesquisas científicas devem apresentar propriedades psicométricas satisfatórias para 
            serem considerados adequados. Especialmente os instrumentos que se propõem aferir constructos e medidas subjetivas 
            devem ser elaborados e avaliados mediante diversas evidências de validade e de confiabilidade, 
            a fim de auxiliar pesquisadores e profissionais na escolha das melhores ferramentas para utilização,
            conferindo qualidade e fidedignidade aos resultados identificados em suas pesquisas. 
            </p>
          
          <p class="text-justify">
          Entre as características psicométricas, estão a <b> variância média extraída (VME) e a confiabilidade composta (CC)</b>, 
          que são indicadores associados à qualidade de uma medida. A VME é considerada como um atributo da validade de construto 
          convergente e  a CC é um dos indicadores de confiabilidade de um instrumento.  
          </p>

          <p class="text-justify">
          Os cálculos da VME e CC são realizados com base nos pesos fatoriais (ou cargas fatoriais), estimados por meio da Análise 
          Fatorial Confirmatória (AFC). Os softwares  utilizados para as análises fatoriais fornecem esses valores, mas geralmente 
          não disponibilizam os resultados de VME e CC automaticamente. Assim, criamos essa calculadora on line para os cálculos 
          desses indicadores. Essa calculadora utiliza duas equações propostas por Fornell & Larcker (1981):
          </p>

          <div class="grid-img">
            <img src="../calculadora/img/vme.png" class="img-fluid" alt="Imagem responsiva">
          </div>

          <p class="text-justify">
          Na qual, VME é a Variância Média Extraída; λ2 representa a carga fatorial de cada item  elevada ao quadrado;  Σ(λ2 ) indica 
          a soma das cargas fatoriais elevadas ao quadrado; e Σε é a soma dos erros de mensuração. Usualmente é preconizado o valor de
           VME ≥ 0,50 como  adequado.
          </p>

          <div class="grid-img">
            <img src="../calculadora/img/cc.png" class="img-fluid" alt="Imagem responsiva">
          </div>

          <p class="text-justify">
          Na qual, CC é a confiabilidade composta; Σλ representa a soma das cargas fatoriais e Σε é a soma dos erros de mensuração 
          (ou variância residual). Usualmente é adotado o valor de CC ≥ 0,70 como adequado.
          </p>
        
         <p class="text-justify">
          As equações de VME e CC são semelhantes e ambas são calculadas a partir das cargas fatoriais e do erro (ou variância residual). 
          A diferença entre as duas equações é que na equação da CC, deve-se somar todas as cargas fatoriais dos itens e em seguida elevar
           essa soma ao quadrado; e, para a VME, deve-se elevar as cargas fatoriais de cada item ao quadrado e em seguida somá-las Σ(λ2). 
         </p>
      
        <p class="text-justify">
          Observação: os valores de ambos os indicadores sofrem alterações em função do número de itens e da homogeneidade das cargas fatoriais, 
          de modo que a utilização de pontos de corte fixos (VME ≥ 0,50 e CC ≥ 0,70) requer cautela para a interpretação dos resultados 
          dos estudos psicométricos. Então se recomenda aos usuários desta página uma consulta a autores da literatura sobre Psicometria e
          Bioestatística para fundamentarem seus achados. 
        </p>
        
        <p>
            <h5 class="text-center"><i><b>Os autores desta página desejam sucesso àqueles que dela fizerem uso para seus estudos e pesquisas. Esperamos ter contribuído! </b></i></h5>
        </p>

        <p class="text-justify">
        <b>Referências</b></p>

        <p class="text-justify"> FORNELL, C.; LARCKER, D. F. Evaluating structural equations models with unobservable variables and measurement error. Journal of Marketing, v. 18, n. 1, p. 39-50, 1981. https://doi.org/10.2307/3151312 </p>

        <p class="text-justify">HAIR, J. F.; BLACK, W. C.; BABIN, B. J.; ANDERSON, R. E.; TATHAM, R. L. Análise multivariada de dados. 6. ed. Bookman: Porto Alegre; 2009.</p>

        <p class="text-justify">SOUZA, A. C.; ALEXANDRE, N. M. C.; GUIRARDELLO, E. B. Psychometric properties in instruments evaluation of reliability and validity. Epidemiologia e Serviços de Saúde, v. 26, n. 3, p. 649-659, 2017. https://doi.org/10.5123/s1679-49742017000300022.</p>

        <p class="text-justify">VALENTINI, F.; DAMÁSIO, B. F. Variância média extraída e confiabilidade composta: indicadores de precisão. Psicologia: Teoria e Pesquisa, Brasília (DF), v. 32, n. 2, e322225, 2016. https://doi.org/10.1590/0102-3772e322225</p>

        </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0"><h1></h1>
    <section class="anime" id="comopreencher">
        <div class="grid-img img-right"></div>
        <div class="grid-text">
            <h2 class="text-center"><b>Como Preencher</b></h2>
            <p class="text-justify">1. Inserir carga fatorial no item</p>
            <p class="text-justify">2. Com base no carregamento da CARGA FATORIAL é estimado a variância do erro (ɛ=1-λ²)</p>
            <p class="text-justify">3. Com base no carregamento da CARGA FATORIAL é estimado o seu valor ao quadrado (r²=λ²=1-ɛ)</p>
            <p class="text-justify">4. Clique em ADICIONAR para continuar a inserir a carga fatorial para cada item</p>
            <p class="text-justify">5. A cada item adicionado é mostrado a numeração</p>
            <p class="text-justify">6. Clique em EXCLUIR para remover qualquer item</p>
            <p class="text-justify">7. É mostrado os valores totais da CC e VME</p>
            <p class="text-justify">8. Clique em LIMPAR, caso queira redefinir a calculadora</p>
        </div>
        <div class="p-3 mb-2 bg-primary text-white">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="../calculadora/img/calc1.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc2.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc3.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc4.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc5.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc6.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc7.png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../calculadora/img/calc8.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
@stop
<script src="{{asset('calculadora/jquery.min.js')}}"></script>
