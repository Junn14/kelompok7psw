@extends('layouts.frontend')
@section('title', 'Favorite Items')
@section('content')
	<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210" style="background-image: url({{ asset('frontend/assets/img/bg/bgfav.jpeg') }})">
		<div class="container-fluid">
			<div class="breadcrumb-content text-center">
				<h2>About Us</h2>
				<ul>
					<li><a href="{{ url('/') }}">home</a></li>
					<li>About - Us</li>
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
                <h2 class-="text-justify">Who we are?</h2>
                <p class="text-justify">Welcome to our website, where we introduce our online thrift shop with a philanthropic mission! We not only offer a wide selection of affordable secondhand items 
                    but also dedicate a portion of our profits to support orphanages. In this blog, we will delve into the details of our social initiative, the impact it creates, 
                    and how you can contribute to making a difference. Let's get started!</p>

                <abbr class="text-justify" title="">Every time you make a purchase from our online thrift shop, a percentage of the profits goes directly to orphanages.
                     Your contribution helps fund essential resources, including food, clothing, education, healthcare, and other crucial needs. By indulging in your love for fashion,
                      you simultaneously make a positive impact on the lives of vulnerable children. It's fashion with heart!</abbr>

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

                <abbr  title="">E</abbr>

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