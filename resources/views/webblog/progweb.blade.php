@extends('layouts.webblog')
@section('subtitle', 'Programação Web ')
@section('content')

<!-- #Breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a>Programação Web</a></li>
  </ol>
</nav>
<!-- .Breadcrumb -->

<div class="row">
	<div id="col-left" class="col-2" align="center"></div>
	<div id="col-center" class="col-8" align="justify">
		<h4><strong>WordPress: como gerenciador de conteúdo (CMS)</strong></h4>
		</b></b>
		<p><strong>O que é CMS?</strong></p>
		</b>
		<p>
			Os CMS´s (Content Management System – Sistema de Gerenciamento de Conteúdo) são, em grande parte, softwares livres, desenvolvido por programadores do mundo inteiro, onde o usuário pode editar e criar conteúdo para seus sites com grande facilidade. Acessado diretamente pelo navegador, possui uma linguagem visual prática e intuitiva.
		</p>
		<p>
			<strong>Tipos de CMS:</strong>
		</p>
		<ul>
		    <li>WordPress, Joomla, Drupal – Criação de Sites “normal”, estilo Blog;</li>
		    <li>Dolphin e Jcow – Para criar sites de Rede Social;</li>
		    <li>Magento eCommerce – Criar uma loja virtual;</li>
		    <li>MediaWiki – Criar sites tipo Wikipédia;</li>
		    <li>Etc.</li>
		</ul>
		<p>
			<strong>O que é WordPress?</strong>
		</p>
		<p>
			O WordPress é um <strong>Sistema de Gerenciamento de Conteúdo</strong> (CMS) sigla para “Content Management System” e <strong>desenvolvido na linguagem PHP com banco de dados MySQL</strong>.
		</p>
		<p>
			Possui um painel de gerenciamento que permite a construção de um Blog ou Site sem ter que editar códigos, é hoje o CMS mais usado no mundo, talvez por este motivo seja o melhor de todos os CMS, tem uma comunidade maior de usuários e colaboradores o que resulta em mais recursos, atualizações e melhorias.
		</p>
		<p>
			<strong>Uma plataforma completa</strong>
		</p>
		<p>
			O WordPress é muito mais que um Software, é uma plataforma completa de Desenvolvimento Web e grandes empresas o utilizam como plataforma de seus sites como:
		</p>
		<ul>
		    <li>Ford;</li>
		    <li>Sony;</li>
		    <li>Samsung;</li>
		    <li>CNN;</li>
		    <li>Mozilla Firefox;</li>
		    <li>Petrobras; e</li>
		    <li>Google.</li>
		</ul>
		<p>
			<strong>WordPress é um site ou blog?</strong>
		</p>
		<p>
			<strong>Inicialmente desenvolvido para criação de Blog</strong>, uma característica fundamental que esta embutida no WordPress até os dias atuais;
		</p>
		<p>
			Ao longo dos anos e hoje é possível a criação de sites básicos até lojas virtuais sobre esta plataforma;
		</p>
		<p>
			Todos os Sites feitos com o WordPress já possuem toda a estrutura de um <strong>Blog completo e profissional</strong>.
		</p>
		<p>
			<strong>O que torna o WordPress tão popular</strong>
		</p>
		<ul>
		    <li>Fácil de usar;</li>
		    <li>Licença de código aberto;</li>
		    <li>Extensão através de plug-ins;</li>
		    <li>Grande acervo de temas;</li>
		    <li>Documentação mais completa que qualquer outro CMS.</li>
		</ul>
		<p>
			<strong>Diferença de WordPress.com e WordPress.org</strong>
		</p>
		<p>
			WordPress.com é um site na mesma estrutura do Blogger do Google e com a possibilidade de você criar um site apenas escolhendo o modelo ou tema e fazendo as postagens ao estilo blog, tudo <strong>on-line</strong>.
		</p>
		<p>
			WordPress.org é um site para <strong>fazer download</strong> do software WordPress que vai ser instalado no servidor web ou em alguns casos no computador do usuário, podendo assim fazer qualquer modificação no código fonte dando total liberdade ao desenvolvedor.
		</p>
		<p>
			<strong>O projeto</strong>
		</p>
		<p>
			Foi desenvolvido no CMS WordPress e desenvolvemos um blog educativo, para postagem de assuntos relevantes a educação e tecnologias aplicadas ao ensino. Sua hospedagem foi feita no hostinger.
		</p>
	</div>
	<div id="col-right" class="col-2" align="center"></div>
</div>
@endsection