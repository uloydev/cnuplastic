@extends('layouts.customer')

@section('content')
<div class="konten-about">
	<div class="container">
  		<div class="row">
    		<div class="col-sm-7">
    			<div class="konten1">
    				<h3>ABOUT US</h3>
    				<p>Jempol adalah Jembatan Penjualan Online yang wewadahi seluruh masyarakat UPN Veteran Jakarta untuk berjualan online dan mengenalkan produknya untuk dijual di lingkungan internal kampus UPN Veteran Jakarta.</p>
    			</div>
    		</div>
    		<div class="col-sm-5">
    			<div class="konten2">
    				<p><img src="{{ asset('image/jempol.png') }}" width="300px"></p>
    			</div>
    		</div>
    	</div>
    	<div class="menukonten2">
    		<div class="row">
    			<div class="col-sm-7">
    				<div class="konten3">
    					<h5>Our Services</h5>
    					<p>
		    				<img src="{{ asset('image/promotion.png') }}">
		    				<img src="{{ asset('image/promotion.png') }}">
		    				<img src="{{ asset('image/promotion.png') }}">
		    				<img src="{{ asset('image/promotion.png') }}">
		    			</p>
    				</div>
    			</div>
    		<div class="col-sm-5">
    			<div class="konten4">
    				<h5>Created By</h5>
    				<p><img src="{{ asset('image/promotion.png') }}"></p>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="row">
    		<div class="col-sm-3">
    			<div class="konten5">
    				<p><img src="{{ asset('image/promotion.png') }}" width="143px"></p>
    			</div>
    		</div>
    		<div class="col-sm-4">
    			<div class="konten7">
    				<h5>For more information, contact us!</h5>
    				<p><img src="{{ asset('image/whatsapp.png') }}" width="25px"></p>
    				<p><img src="{{ asset('image/whatsapp.png') }}" width="25px"></p>
    				<p><img src="{{ asset('image/whatsapp.png') }}" width="25px"></p>
    				<p><img src="{{ asset('image/whatsapp.png') }}" width="25px"></p>
    			</div>
    		</div>
    		<div class="col-sm-5">
    			<div class="konten6">
                    <p>
                        <img src="{{ asset('image/promotion.png') }}">
                        <img src="{{ asset('image/promotion.png')}}">
                    </p>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@endsection