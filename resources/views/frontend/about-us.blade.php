@extends('layouts.frontend')
@section('title', 'Favorite Items')
@section('content')
	<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url({{ asset('frontend/assets/img/banner/shirt-5.jpg') }})">
		<div class="container-fluid">
			<div class="breadcrumb-content text-center">
				<h2>ABOUT US</h2>
				<ul>
					<li><a href="{{ url('/') }}">home</a></li>
					<p>About - Us</p>
				</ul>
			</div>
		</div>
	</div>
	<div class="shop-page-wrapper shop-page-padding ptb-100">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">

              <section id="about-head" class="section-p1">
                <img src="frontend/assets/img/logo/a6.jpg" alt="">
                <div>
                <h1 class-="text-justify">Who we are?</h1>
                <p class="text-justify">Welcome to our website, where we introduce our online thrift shop with a philanthropic mission! We not only offer a wide selection of affordable secondhand items 
                    but also dedicate a portion of our profits to support orphanages. In this blog, we will delve into the details of our social initiative, the impact it creates, 
                    and how you can contribute to making a difference. Let's get started!</p>
                    <h3>Why We Donate to Orphanages</h3>
                <abbr class="text-justify" title="">We firmly believe in using our business platform to give back to society and support those in need. Orphanages play a vital role in providing care, shelter, and education to children who lack stable family environments. By donating a portion of our profits, we aim to contribute to the well-being and development of these children, helping them lead better lives.</abbr>

                <br><br>

                <marquee bg-color= "#ccc" loop="-1" scrollamount="5" width="100%">MERAKI</marquee>
                </div>
              </section>

              <section id="about-head" class="section-p1">
                <img src="frontend/assets/img/logo/b3.jpg" alt="">
                <div>
                <h3>Discovering Quality Items at Affordable Prices</h3>
                <p class="text-justify">Discovering Quality Items at Affordable Prices
                     Our online thrift shop offers an extensive range of fashion-forward items for every style and occasion. From trendy clothing pieces to vintage clothing pieces, you'll find unique and pre-loved treasures that won't break the bank. We ensure that all items undergo a thorough quality check before being made available for purchase. By embracing thrift fashion, you not only save money but also reduce waste and support sustainable practices in the fashion industry.
                 </p>

                <abbr  title=""></abbr>

                <br><br>

                <marquee bg-color= "#ccc" loop="-1" scrollamount="5" width="100%">MERAKI</marquee>
                </div>
              </section>
              









					</div>
				</div>
			</div>
		</div>
	</div>
@endsection