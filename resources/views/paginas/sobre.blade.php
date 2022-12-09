@extends('layout.layout')


<!-- Javascrip -->
<script src="{{asset('calculadora/jquery.min.js')}}"></script>
<script src="../calculadora/calculos_gerais.js"></script>


<!-- Styles-->
<link rel="stylesheet" href="{{ url('calculadora/style_calculadora.css')}}">
<!-- Bootstrap-->
<link rel="stylesheet" href="{{ asset('calculadora/bootstrap.css')}}">

<!-- Seção do cabeçalho da página -->
@section('titulo_pagina')
<h6 class="m-0 font-weight-bold text-primary">Sobre</h6>
@stop


<!-- Seção do conteúdo -->
@section('conteudo')
<section class="anime" id="equipe">
    <div class="grid-text">
        <h2 class="text-center bg-primary text-white" ><b>Equipe</b></h2>

        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Cássio de Almeida Lima</b></h5>
                            <div class="card-text">Doutorando Programa de Pós Graduação em Ciências da Saúde</div>
                            <div class="card-text">Universidade Estadual de Montes Claros</div>
                            <a target="_blank" href="http://lattes.cnpq.br/7657540950800509" class="btn btn-primary">Currículo Lattes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Jefferson Aparecido Martins de Moura</b></h5>
                            <div class="card-text">Mestre em Modelagem Computacional e Sistemas.</div>
                            <div class="card-text">Universidade Estadual de Montes Claros</div>
                            <a target="_blank" href="http://lattes.cnpq.br/7792398142091042" class="btn btn-primary">Currículo Lattes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Profª. Dra. Marise Fagundes Silveira</b></h5>
                            <div class="card-text">Programa de Pós Graduação em Ciências da Saúde</div>
                            <div class="card-text">Universidade Estadual de Montes Claros</div>
                            <a target="_blank"href="http://lattes.cnpq.br/1173597651022014" class="btn btn-primary">Currículo Lattes</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Profº Dr. Renê Rodrigues Veloso </b></h5>
                            <div class="card-text">Programa de Pós Graduação em Modelagem Computacional e Sistemas - Universidade Estadual de Montes Claros</div>
                            <a target="_blank" href="http://lattes.cnpq.br/5262545895128956" class="btn btn-primary">Currículo Lattes</a>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><b>Profª. Dra. Maria Fernanda Santos Figueiredo Brito</b></h5>
                            <div class="card-text">Departamento de Saúde Mental e Saúde Coletiva</div>
                            <div class="card-text">Universidade Estadual de Montes Claros</div>
                            <a target="_blank"href="http://lattes.cnpq.br/2215319716880740" class="btn btn-primary">Currículo Lattes</a>
                        </div>
                    </div>
                </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><b>Profª. Dra. Lucinéia de Pinho</b></h5>
                                <div class="card-text">Departamento de Saúde Mental e Saúde Coletiva</div>
                                <div class="card-text">Universidade Estadual de Montes Claros</div>
                                <a target="_blank"href="http://lattes.cnpq.br/7278576493532093" class="btn btn-primary">Currículo Lattes</a>
                            </div>
                        </div>
                    </div>
            </div>
            
        </div>

    </div>
</section>
</br>
<section class="anime" id="desenvolvimento">
    <div class="grid-text">
        <h2 class="text-center bg-primary text-white"><b>Ferramentas de Desenvolvimento</b></h2>
        <div class="grid-img text-center">
            <img src="../calculadora/img/php.png" class="img-fluid"  height="15%" width="15%"  alt="Imagem responsiva"/>
            <img src="../calculadora/img/laravel.png" class="img-fluid" height="15%" width="15%" alt="Imagem responsiva"/>
            <img src="../calculadora/img/bootstrap.png" class="img-fluid" height="15%" width="15%" alt="Imagem responsiva"/>
            <img src="../calculadora/img/javascript.png" class="img-fluid" height="15%" width="15%" alt="Imagem responsiva"/>

        </div>
    </div>
</section>
@stop
