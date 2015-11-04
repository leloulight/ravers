@extends('layouts.default')

@section('content')
	<div class="blue">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 margin-top-lg margin-bottom-xlg">
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}
						<div class="col-sm-6 col-sm-offset-3">
							<h3 class="texto-blanco text-uppercase">{{ $user }}</h3>
							<p class="text-justify texto-blanco">We are finishing the last adjustments of our platform. In order to register as a member we need a valid email. <br>In this way we can notify you of our advancements and projects developed. You can also register to participate for free EDM Festival tickets or private invitations for EDM clubs worldwide. <br><br>We all are International Ravers. Join Us!</p>
							<input type="text" name="email" id="email" class="form-control" placeholder="@ Email">
							<input type="hidden" name="name" id="name" class="form-control" value="{{ $user }}">
							<input type="hidden" name="id" value="{{ $id }}">
							<br>
							<button type="submit" class="btn btn-success">ADD</button>
							<br/>
							<img src="{{ asset('img/isologo.png') }}" width="40%" alt="" class="center-block img-responsive"/>
							<h2 class="text-center texto-blanco text-uppercase">international ravers charity</h2>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop