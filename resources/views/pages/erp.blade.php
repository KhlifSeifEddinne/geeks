@extends('layouts.app')

@section('content')
<div class="container">
		<h1 class="title">Description du logiciel</h1>
		<div class="row justify-content-center">
			<img src="{{ asset('images/odoo.png') }}">
		</div>
		<p>Odoo, formerly known as OpenERP, is a suite of open-source business apps written in Python and released under
			the AGPL license. This suite of applications covers all business needs, from Website/Ecommerce down to
			manufacturing, inventory and accounting, all seamlessly integrated. It is the first time ever a software
			editor managed to reach such a functional coverage. Odoo is the most installed business software in the
			world. Odoo is used by 2.000.000 users worldwide ranging from very small companies (1 user) to very large
			ones (300 000 users).</p>
		<!-- <input type="button" value="Logout" id="submit" onclick="validate()"/>		</div> -->
		<a class="btn-page" href="{{ url('/page1') }}" type="button">Retour</a>
		<a class="btn-page" href="{{ url('/logout') }}" type="button">Déconnecter</a>
        @endsection