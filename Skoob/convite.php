<?php
session_start();
?>

<!DOCTYPE html>
<html xmlns='//www.w3.org/1999/xhtml'>
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# books: http://ogp.me/ns/books#">
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />        <title>Cadastro</title>
                <meta name="language" content="pt-br"/>
        <meta name="google-site-verification" content="h_F9-djAws40JfpX_W4juzsPjd9YZ2v-s0YvOG-D388"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="apple-itunes-app" content="app-id=904670263"/>
        <meta name="google-play-app" content="app-id=com.gaudium.skoob" />
        <meta name="msapplication-config" content="none"/>
        <script type="text/javascript" src="//www.google.com/jsapi"></script>

        <!-- Google AD -->
<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/101690757/SKY-120X90', [120, 600], 'div-gpt-ad-1432259496859-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-HOME-BOX', [250, 250], 'div-gpt-ad-1432305651296-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-HOME-MIDDLE-1', [[728, 90], [960, 110], [970, 90]], 'div-gpt-ad-1432317211110-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-HOME-MIDDLE-2', [[728, 90], [960, 110], [970, 90]], 'div-gpt-ad-1432317211110-1').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-CORTESIA-BOX-1', [250, 250], 'div-gpt-ad-1432579139176-0').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-CORTESIA-BOX-2', [250, 250], 'div-gpt-ad-1432579139176-1').addService(googletag.pubads());
    googletag.defineSlot('/101690757/SK-BOOK-TOP-ADX', [960, 90], 'div-gpt-ad-1442757100761-0').addService(googletag.pubads());
    //googletag.defineSlot('/101690757/SK-BOOK-HOME-TOP', [960, 90], 'div-gpt-ad-1462825042240-0').addService(googletag.pubads());
    //googletag.defineSlot('/101690757/BOOK-HOME',[[728, 90], [735,100]], 'div-gpt-ad-1432318237463-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/base.min.js?1474564786"></script><script type="text/javascript" src="https://cache.skoob.com.br/local/skoob/js/angularjs/main.min.js?1477598477"></script><link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/main.min.css?1474564795"/>
        <!--
        -->
    </head>

    <body id="ng-app" ng-app="skoob">
    <div>
        <div id='topo' class='navbar navbar-fixed-top' style='height:48px;'>
      

      <div id="topoInterno" class="container" style="">
            <a href="index.html">
                  <img src="img/skoob-logo-topo.gif" class="logo" alt="logo Skoob" title="logo Skoob" width="109" height="33"/>            </a>

            <div id='tbusca' data-ng-controller="SearchCtrl" data-ng-mouseleave="leave = true">
    <form  class="form-inline" action="/livro/lista/" method="post" id="topo-menu-search">
        <span data-ng-cloak  data-ng-show="search_total > 0" class="busca-loading-container" data-ng-bind="search_total | numberDecimal"></span>
        <div data-ng-cloak data-ng-show="search_loading" id='suggestions_loadingmessage'>
            <img src='//skoob-sp.s3.amazonaws.com/img/v2/base/load-padrao.gif' alt="loading">
        </div>
        <div class="input-append">
            <input type="text" id="search" class="form-control" name="data[Busca][tag]" placeholder="Busque por título, autor, editora, ISBN..." data-ng-model="busca" data-ng-blur="searchExit()" autocomplete="off">
            <span class="input-group-btn" >
                <button class="btn btn-default btn-form-lupa" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <div data-ng-cloak data-ng-show="search_result" id="suggestions" data-ng-mouseover="leave = false">
        <ul id="searchresults" style="list-style: none;">
            <li data-ng-repeat="book in books" class="item-master">

                <div class="capa">
                    <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" title='{{book.nome_portugues}}' ng-cloack><img data-ng-src='{{book.img_url}}' alt="" ng-cloack></a>
                </div>
                <div class='search-item-links'>
                    <div class='search-item-links-base'>
                        <strong>
                            <!-- 
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" title='{{book.nome_portugues}}' class='l13ab' data-ng-bind="( book.serie )| limitTo:50" ng-cloack></a>
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" title='{{book.nome_portugues}}' class='l13ab' data-ng-bind="book.nome_portugues| limitTo:50" ng-cloack></a>
                            -->
                            <a rel="nofollow" data-ng-href="/livro/{{book.livro_id}}ED{{book.id}}" class='l13ab' ng-cloack>
                                <book-name-format name="book.nome_portugues"  serie="book.serie" volume="book.volume" max="50"></book-name-format>
                            </a>
                        </strong>
                        <div class="busca-subtitulo"><span data-ng-bind="book.subtitulo_portugues| limitTo:60" ng-cloack></span></div>
                        <div class="busca-autor"><span data-ng-bind="book.autor| limitTo:60" ng-cloack></span></div>
                    </div>

                    <div class='mini'>
                        <!-- idioma -->
                        <img data-ng-if="book.idioma === 'es'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/es.gif" alt="espanha" title="espanha" class="bandeira">
                        <img data-ng-if="book.idioma === 'us'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/us.gif" alt="ingles" title="ingles" class="bandeira">
                        <img data-ng-if="book.idioma === 'al'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/ge.gif" alt="alemanha" title="alemanha" class="bandeira">
                        <img data-ng-if="book.idioma === 'rs'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/ru.gif" alt="russia" title="russia" class="bandeira">
                        <img data-ng-if="book.idioma === 'jp'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/jp.gif" alt="japao" title="japao" class="bandeira">
                        <img data-ng-if="book.idioma === 'hl'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/nl.gif" alt="holanda" title="holanda" class="bandeira">
                        <img data-ng-if="book.idioma === 'fr'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/fr.gif" alt="franca" title="franca" class="bandeira">
                        <img data-ng-if="book.idioma === 'pt'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/pt.gif" alt="portugal" title="portugual" class="bandeira">
                        <img data-ng-if="book.idioma === 'it'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/it.gif" alt="italia" title="italia" class="bandeira">
                        <img data-ng-if="book.idioma === 'ep'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/ep.gif" alt="esperanto" title="esperanto" class="bandeira">
                        <img data-ng-if="book.idioma === 'br'" src="//s3-sa-east-1.amazonaws.com/skoob-sp/flag/br.gif" alt="brasil" title="brasil" class="bandeira">
                        <!-- editora -->
                        <a data-ng-if="book.editora_id > 0" data-ng-href="/editora/{{book.editora_id}}-{{book.editora}}" class="l11" ng-cloack> {{book.editora}}</a>
                        <span data-ng-if="book.editora_id === 0"> {{book.editora}}</span>
                        <!-- edicoes -->
                        <span data-ng-if="book.qt_edicoes <= 1">| edições: <span data-ng-bind="book.qt_edicoes"></span></span>
                        <span data-ng-if="book.qt_edicoes > 1">| edições: <a data-ng-href="/livro/edicoes/{{book.livro_id}}" data-ng-bind="book.qt_edicoes" class="l11" ng-cloack></a></span>
                        <!-- leitores -->
                        <span>| leitores: <span data-ng-bind="book.qt_estantes | numberDecimal"></span></span>
                    </div>
                </div>
                <br clear="all">
            </li>
            <li data-ng-cloak>
                <form action="/livro/lista" method='post'>
                    <input type='hidden' name='data[Busca][tag]' value='"{{busca}}"' ng-cloack />
                    <input type='hidden' name='data[Busca][tipo]' value='livro' />
                    <button type='submit'>Ver todos os (<span data-ng-bind="search_total | numberDecimal" ng-cloack></span>) resultados</button>
                </form>
            </li>
        </ul>
    </div>
</div>
            <div id="topo-menu-dinamico">
                  <div id='topo-menu-login'><a href="login.html" rel="nofollow" class="l13" title="Acesse">Entrar</a></div>                  <ul id="topo-menu-explorar" class="nav nav-pills" style="float:left; margin-right: 0px; border:0px solid red; height: 36px; padding: 0px; margin: 0px;">
                        <li class="dropdown" style="margin-top: -2px;">
                              <a class="dropdown-toggle--" data-toggle="dropdown" href="#" style="border-bottom:4px solid #fff; margin-top:5px;">
                                    Explorar
                                    <b class="caret"></b>
                              </a>
                                    <ul id="topo-menu-explorar-hover" class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="margin-top: 5px;  border:0px solid black;">
                                    <li><a href="https://www.skoob.com.br/livro/lista/" title="Livros">Livros</a></li>
                                    <li><a href="https://www.skoob.com.br/autor/recentes/" title="Autores">Autores</a></li>
                                    <li><a href="https://www.skoob.com.br/editoras/" title="Editoras">Editoras</a></li>
                                    <li><a href="https://www.skoob.com.br/usuario/lista" title="Leitores">Leitores</a></li>
                                    <li><a href="https://www.skoob.com.br/grupo/atualizados/" title="Grupos" rel="nofollow">Grupos</a></li>
                                    <li><a href="https://www.skoob.com.br/plus/" title="Trocas" rel="nofollow">Plus - Trocas</a></li>
                                    <li><a href="https://www.skoob.com.br/cortesia/" title="Cortesias">Cortesias</a></li>
                                    <li><a href="https://www.skoob.com.br/livro/lancamentos/" title="Lançamentos">Lançamentos</a></li>
                                    <li><a href="https://www.skoob.com.br/livro/top_mais/lidos/" title="Top Mais">Top Mais</a></li>
                                    <li><a href="https://www.skoob.com.br/booktubers/" title="Booktubers">Booktubers</a></li>
                                    <li><a href="https://www.skoob.com.br/meta/ano/2016/" title="Meta de Leitura 2016">Meta de Leitura 2016</a></li>
                              </ul>
                        </li>
                  </ul>
            </div>

            <br clear='all' />
      </div>
</div>
<div style="margin-top:70px;">        <div style="width:950px;margin:auto;">
                    </div>

        <div id='container-full' class=''>
            <div id='corpo' data-ng-controller="mainCtrl as main">
                <div style='font-size:15px; margin:20px 0px;'>
          <style type="text/css">
          #boxEsquerdo {
                    float:left;
                    padding:10px;
          }

          #boxCrieSuaConta {
                    background-color:#EAEFF5;
                    border:#B7D0E6 1px solid;
                    padding:8px;
                    margin-bottom:0px;
          }

          #boxErro {
                    background-color:#FFCECE;
                    border:#CC0000 1px solid;
                    padding:10px;
                    margin:2px 0px 10px 0px;
          }

          #boxCadastro
          {
                    border:#ccc 0px solid;
                    padding:0px;
                    margin:0px;
                    width:960px;
          }

          .boxlabel {border-bottom:#e4e4e4 0px solid; margin-bottom: 15px; padding-bottom: 15px;}

</style>

<div id="boxCadastro">
        <fieldset class="corner8" style="text-align:left; border:#B7D0E6 2px solid; margin:0px; padding:25px; ">

        <div style='float:left; width:600px; padding:10px; border-right: 0px dotted #ccc;'>
        <form id='form' name='form' method='POST' action='#' onsubmit="return validarForm()">

        <div class="boxlabel">
                  <h2 style="font-size:30px; color: #3366CC; padding: 0px; margin: 0px;">Cadastre-se!</h2>
                  <h3 style="font-size:22px; color: #666666; padding: 0px; margin: 0px;">Fácil, Rápido e Gratuito.</h3>
        </div>

        Nome completo:<br />
        <input name="txtnome" size="40" type="text" id="UsuarioNome"/><br /><br />
        Apelido:(como gostaria de ser chamado)<br />
        <input name="txtapelido" size="15" type="text" id="UsuarioApelido"/><br /><br />
        Sexo:<br />
        <select name="opsexo" id="sexo">
            <option value=''>Selecione</option>
            <option value='M'>Masculino</option>
            <option value='F'>Feminino</option>
        </select><br /><br />
        Estado:<br />
        <select name="opuf" id="uf">
            <option value=""></option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AM">Amazonas</option>
            <option value="AP">Amapá</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goias</option>
            <option value="MA">Maranhão</option>
            <option value="MG">Minas Gerais</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MT">Mato Grosso</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="PR">Paraná</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="SC">Santa Catarina</option>
            <option value="SE">Sergipe</option>
            <option value="SP">São Paulo</option>
            <option value="TO">Tocantins</option>
        </select><br /><br />
        Email:<br />
        <input name="txtemail" size="15" type="text" id="UsuarioSenha"/><br /><br />
        Crie uma senha<br />
        <input name="psdsenha" size="15" type="password" id="UsuarioSenha"/><br /><br />
        Redigite a senha criada<br />
        <input name="psdsenhaConfirmacao" size="15" type="password" id="UsuarioSenhaConfirmacao"/><br /><br />
        <input type="checkbox" name="chkautomatico" value="true" ><span style='font-size:11px;'> Desejo receber emails com promoções do SKOOB e de seus parceiros.</span><br /><br />
        <div class="submit"><input type="submit" value="  Fazer Cadastro  " name="submit"/></div>
    </form>
    <?php
    include("validarCAD.php");
    ?>
</div>
          </fieldset>
</div></div>            </div>
        </div>

        <br clear='all'/>
    </div>

    <link rel="stylesheet" type="text/css" href="https://cache.skoob.com.br/local/skoob/css/ver2/responsive/v2_responsivo_bootstrap.css?1476483467"/>
    <footer class='skoobv20150930 clearfix'>
        <div class="container clearfix">
            <div class="row super">
                    <div class="col-md-6 hidden-sm hidden-xs clearfix about">
                        <br />
                        <img src="img/logo-footer.png" class="logo-footer" style="margin-bottom: 29px;" alt=""/> 
                        <div class="brief" style="width: 380px; border:0px solid red; font-size: 14px;">
                            Somos a maior rede social do Brasil 100% focada em leitores. Funcionamos como uma estante virtual onde você pode colocar os livros que já leu, como aqueles que ainda deseja ler.
                            Compartilhe suas opiniões com seus amigos... <a href='https://www.skoob.com.br/inicio/quem_somos'>Leia mais</a>.
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12  clearfix links">
                        <br/>
                        <ul>
                            <li><a href='https://www.skoob.com.br/ajuda/faq'>FAQ</a></li>
                            <li><a href='https://www.skoob.com.br/inicio/quem_somos'>Quem Somos</a></li>
                            <li><a href='https://blog.skoob.com.br/'>Blog</a></li>
                            <li><a href='https://www.skoob.com.br/acervo/adicionar/'>Cadastro de livros</a></li>
                            <li><a href='https://www.skoob.com.br/autor/checar/'>Cadastro de autores</a></li>
                            <li><a href='https://www.skoob.com.br/downloads/'>Downloads</a></li>
                            <li><a href='https://www.skoob.com.br/ajuda/faq'>Fale Conosco</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 clearfix social">
                        <div>
                            <br />
                            <div class="networks">
                                <a href="//www.facebook.com/skoobnews" alt="Facebook - Skoob" title="Facebook - Skoob" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                <a href="//www.youtube.com/user/skoobnews" alt="Youtube - Skoob" title="Youtube - Skoob" target="_blank"><i class="fa fa-youtube-square"></i></a>
                                <a href="//twitter.com/skoobnews" rel="nofollow" alt="Twitter - Skoob" title="Twitter - Skoob" target="_blank"><i class="fa fa-twitter-square"></i></a>
                                <a href="//instagram.com/skoobnews" rel="nofollow" alt="Instagram - Skoob" title="Instagram - Skoob" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="//plus.google.com/106271037006970682640/posts" rel="nofollow" alt="Google plus - Skoob" title="Google plus - Skoob" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                            </div>
                        </div>
                        <div>
                            <h5>Baixe nosso app</h5>
                            <div class="apps">
                                <a href="https://itunes.apple.com/br/app/skoob/id904670263?l=pt&amp;ls=1&amp;mt=8"><img src="https://skoob-sp.s3.amazonaws.com/img/mkt/2015-SET/app-store.jpg" alt="Baixe para iPhone"></a>
                                <a href="https://play.google.com/store/apps/details?id=com.gaudium.skoob&amp;hl=pt_BR"><img src="https://skoob-sp.s3.amazonaws.com/img/mkt/2015-SET/google-play.jpg" alt="Baixe para Android"></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row subfooter clearfix" style="margin-right: 0px;">
            <ul>
                <li><a title="Livros" href='https://www.skoob.com.br/livro/lista/'>Livros</a></li>
                <li><a title="Autores" href='https://www.skoob.com.br/autor/recentes/'>Autores</a></li>
                <li><a title="Editoras" href='https://www.skoob.com.br/editoras/'>Editoras</a></li>
                <li><a title="Leitores" href='https://www.skoob.com.br/usuario/lista'>Leitores</a></li>
                <li><a rel="nofollow" title="Grupos" href='https://www.skoob.com.br/grupo/atualizados/'>Grupos</a></li>
                <li><a rel="nofollow" title="Trocas" href='https://www.skoob.com.br/plus/'>Trocas</a></li>
                <li><a title="Cortesias" href='https://www.skoob.com.br/cortesia/'>Cortesias</a></li>
                <li><a title="Lançamentos" href="https://www.skoob.com.br/livro/lancamentos/">Lançamentos</a></li>
                <li><a title="Top Mais" href='https://www.skoob.com.br/livro/top_mais/lidos/'>Top Mais</a></li>
                <li><a title="Meta de Leitura" href="https://www.skoob.com.br/meta/ano/2016/">Meta de Leitura 2016</a></li>
            </ul>
        </div>
    </footer>
    <script type="application/javascript" src="/application/banner"></script>
    <script language="javascript">
    function validarForm(){ 

    var nome = document.forms["form"]["txtnome"].value;
    var apelido = document.forms["form"]["txtapelido"].value;
    var sexo = document.forms["form"]["opsexo"].value;
    var uf = document.forms["form"]["opuf"].value;
    var email = document.forms["form"]["txtemail"].value;
    var senha = document.forms["form"]["psdsenha"].value;
    var senhaRepetida = document.forms["form"]["psdsenhaConfirmacao"].value;
    
    // Validade nome
    if (nome==null || nome==""){
    alert("Campo Nome tem que ser preenchido");

    document.forms["form"]["txtnome"].focus();
    return false;
    }

    // Validade Apelido
    if (apelido==null || apelido==""){
    alert("Campo Apelido tem que ser preenchido");

    document.forms["form"]["txtapelido"].focus();
    return false;
    }

    // Validade Sexo

    if (sexo==null || sexo==""){
    alert("Campo Sexo tem que ser preenchido");

    document.forms["form"]["opsexo"].focus();
    return false;
    }
    // Validade UF
    if (uf==null || uf==""){
    alert("Campo UF tem que ser preenchido");

    document.forms["form"]["opuf"].focus();
    return false;
    }

    // Validade Email
    if (email==null || email==""){
    alert("Campo Email tem que ser preenchido");

    document.forms["form"]["txtemail"].focus();
    return false;
    }

    // Validade Senha
    if (senha==null || senha==""){
    alert("Campo Senha tem que ser preenchido");

    document.forms["form"]["psdsenha"].focus();
    return false;
    }

    // Validar Senhas repetindo
    if (senha != senhaRepetida){
        alert("Repita a senha corretamente");
        document.forms["form"]["psdsenhaConfirmacao"].focus();  
        return false;
       }
    }
    </script>
</body>
</html>