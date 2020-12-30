@extends('layouts.app')

@section('content')
<div class="container">
		<h1 class="title">Page d'accueil</h1>
		<h1>Bienvenue tout le monde!</h1>
		<br>
		<p>Bienvenue sur notre site, nous vous servons d'un service qui se represente dans un logiciel,
			cliquez sur "Savoir plus" pour plusieurs d'information, merci!</p>
		<!-- <input type="button" value="Logout" id="submit" onclick="validate()"/>		</div> -->
		<a class="btn-page" href="{{ url('/logout') }}" type="button">Déconnecter</a>
		<a class="btn-page" href="{{ url('/erp') }}" type="button">Savoir plus</a>
@endsection