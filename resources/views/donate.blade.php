@extends('layouts.default')

@section('content')

<div class="bg_donate">
	<div class="container ">
      <div class="col-xs-10 col-xs-offset-1 margin-bottom-lg">
          <h3 class="textdonate visible-lg text-shadow"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVAL WORLDWIDE.</strong></h3>
          <h4 class="textdonate visible-sm visible-md text-shadow"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVAL WORLDWIDE.</strong></h4>
					<h4 class="textdonate visible-xs bg-imagen text-shadow"><strong>3.4 MILLION</strong>  people die yearly by <strong>water</strong> related problems around the world. <br> That's the same <strong>NUMBER OF RAVERS</strong> who attend to the 20 biggest <strong>EDM FESTIVAL WORLDWIDE.</strong></h4>
          <h2 class="text-center texto-blanco text-shadow" id="warriors" >WE CAN DO ANITHING?</h2>
      </div>

      <div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      		<div class="div-donate padding-top padding-center padding-bottom margin-bottom">
						<h3 class="text-center">Water accesibility program</h3>
						<form>
						  <div class="form-group">
						    <label for="inputRave">Last EDM Festival or Club you attended</label>
						    <input type="text" class="form-control" id="inputRave" placeholder="">
						  </div>
						  <div class="form-group">
						    <label for="inputDays">How many days (or nights)</label>
						    <input type="number" class="form-control" id="inputDays" value="1">
						  </div>
						  <div class="form-group">
						    <label for="inputLiter">Average of water you drank in the Rave dayli</label>
						    <input type="number" class="form-control" id="inputLiter" value="1">
						  </div>
						  <div class="form-group">
						    <label for="inputAmmount">Amount you want to donate per liter consumed</label>
						    <div class="input-group">
				          <div class="input-group-addon">$</div>
				          <input type="number" class="form-control" id="inputAmmount" value="0.50">
				          
				        </div>
					  	</div>
					  	<div class="form-group">
						    <label for="inputTotal">Total</label>
						    <div class="input-group">
				          <div class="input-group-addon">$</div>
				          <input type="number" class="form-control" id="inputTotal">
				          
				        </div>
					  	</div>


					  	<p class="text-justify">*our research about the average of water that a raver drinks on a festival day is 3.7 lts of water. for this reason is impossible  donate more than 4 lts dayli.</p>
					  	<div class="text-center">
					  		<button type="submit" class="btn btn-default">Give by <i class="fa fa-credit-card"></i></button>
					  		<button type="submit" class="btn btn-default">Give by <i class="fa fa-paypal"></i></button>	
					  	</div>
						  
						</form>
      		</div>
      	</div>
      	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      		<div class="div-donate padding-top padding-center padding-bottom">
						<h3 class="text-center">Sanitation & hygiene program</h3>
								<form>
								  <div class="form-group">
								    <label for="inputAmmount">You can donate one time or monthly</label>
								    <div class="input-group">
						          <div class="input-group-addon">$</div>
						          <input type="number" class="form-control" id="exampleInputAmount" value="0.50">
						        </div>
							  	</div>
							  	<div class="checkbox">
						  	    <label>
						  	      <input type="checkbox"> Make this a recurring monthly gift
						  	    </label>
						  	  </div>

							  	<div class="text-center">
							  		<button type="submit" class="btn btn-default">Give by <i class="fa fa-credit-card"></i></button>
							  		<button type="submit" class="btn btn-default">Give by <i class="fa fa-paypal"></i></button>	
							  	</div>
								  
								</form>
      		</div>
      	</div>
      </div>
    </div>

</div>

@stop


@section('script')
	<script>
		document()
	</script>
@stop
