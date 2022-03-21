@extends('layouts.main')

@section('content')

	<!-- BANNER -->
	<div id="slides" class="section banner">
		<ul class="slides-container">
			<li>
				<img src="images/4.jpg" alt="">
				<div class="overlay-bg"></div>
				<div class="container">
					<div class="wrap-caption">
						<h2 class="caption-heading">
							Plan
						</h2>
						<p class="excerpt">Leveraging our significant operations knowledge and proven
                            Engineering capability we implement safe and reliable design and
                            production solutions minimising downtime and providing long term
                            sustainable productivity improvement</p>
						<a href="/about" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="/contact" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
					</div>
				</div>
			</li>
			<li>
				<img src="images/6.jpeg" alt="">
				<div class="overlay-bg"></div>
				<div class="container">
					<div class="wrap-caption">
						<h2 class="caption-heading">
							Operate
						</h2>
						<p class="excerpt">As a Registered Operator we bring best practice oil and gas Operations
                            and Maintenance with a focus on safely delivering the lowest unit OPEX,
                            so you can focus on your highest value activities</p>
						<a href="/about" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="/contact" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
					</div>
				</div>
			</li>
			<li>
				<img src="images/3.jpg" alt="">
				<div class="overlay-bg"></div>
				<div class="container">
					<div class="wrap-caption">
						<h2 class="caption-heading">
							Maintain
						</h2>
						<p class="excerpt">We provide tailored, smart solutions for Wellsites and Facilities operations
                            and maintenance with a focus on multi-skilled workforces and collaboration
                            that sets new benchmarks in exceeding performance objectives</p>
						<a href="/about" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a>
                        <a href="/contact" class="btn btn-secondary" title="CONTACT US">CONTACT US</a>
					</div>
				</div>
			</li>

		</ul>

		<nav class="slides-navigation">
			<div class="container">
				<a href="#" class="next">
					<i class="fa fa-chevron-right"></i>
				</a>
				<a href="#" class="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
	      	</div>
	    </nav>

	</div>

    <!-- ABOUT FEATURE -->
	<div class="section feature overlap">
		<div class="container">

			<div class="row">

				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-icon-2">
						<div class="icon">
							<div class="fa fa-star-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">QUALITY DRIVEN</div>
							We always aim to impress. Our quality assurance teams strive to deliver the best outcome.
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-icon-2">
						<div class="icon">
							<div class="fa fa-umbrella"></div>
						</div>
						<div class="body-content">
							<div class="heading">CUSTOMER FOCUSED</div>
							Hand-In-Hand interraction with the customer make sure we deliver client defined results.
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-icon-2">
						<div class="icon">
							<div class="fa fa-users"></div>
						</div>
						<div class="body-content">
							<div class="heading">GLOBAL SOURCING</div>
							Our international footprint is unmateched, we have clients and partners from all over the world.
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h2 class="section-heading">
						ABOUT US
					</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-5 col-md-5">
					<div class="jumbo-heading">
						<h2>OUR REAL COMMITMENT REACHES BEYOND GAS &amp; OIL COMPANY.</h2>
						<span class="fa fa-paper-plane-o"></span>
					</div>
				</div>
				<div class="col-sm-7 col-md-7">
					<p class="lead">As the oil and gas industry evolves we continue to partner with our clients,
                        collaboratively developing solutions that are safe, sustainable and competitive.</p>
					<p>
                        A lot may have changed since we began in 1997, however many in the industry still fondly remember our
                        founding brand, Safari PPL. Over the years successful project delivery has continued to be at the core
                        of the business, allowing Safari PPL to successfully move with the market - and our clients. The Safari PPL
                        team has successfully maintained long term client relationships, in some cases for more than a decade.
                        A culture of collaboration plays a great part. Working closely with our clients we have been able to leverage
                        our Operator's mindset to develop innovative practices that deliver against safety, sustainability, expenditure,
                        productivity and integrity measures.
                        Safari PPL is committed to expanding our business to deliver fully integrated services and projects that add
                        value for our clients, our people and the communities in which we work.
                        </p>
				</div>

			</div>

		</div>
	</div>

    <div class="section why section-border bglight">
		<div class="container">
			<div class="row">

				<div class="col-sm-5 col-md-5">
					<div class="director-image">
						<div class="director-image-title">TEA DEDICATION</div>
						<img src="images/safety.jpg" alt="bos-photo">
					</div>
					<div class="margin-bottom-30"></div>
				</div>
				<div class="col-sm-7 col-md-7">
					{{-- <h3 class="director-title">Peter White</h3> --}}
					<div class="director-position">TEAM BEGINING</div>
					<div class="margin-bottom-30"></div>
					<p>Our multi-disciplined team of engineers and project managers assist clients throughout the
                        asset/project lifecycle.
                        We can add value during the planning phases of projects by leveraging our significant Operations and
                        Maintenance experience. As a result, our designs and modifications are safe, reliable and aligned with client
                        operational and financial objectives.
                        Early involvement in the project lifecycle has proven cost, schedule and
                        operational readiness benefits, across a range of services.
                        {{-- Engineering and design support: concept and design development, feasibility studies, pre-FEED, FEED
                        Design Hazard and Operability Study (HAZOP)
                        Instrument and controls enqineering
                        Field development planning and management
                        Asset support services under engineering change management systems
                        Due diligence, vessel/asset audits and expert reviews
                        Decommissioning, plug and abandonment services
                        Resourcing solutions for experienced individuals or entire project delivery organisations
                        Drilling and completions management
                        Procurement and logistics
                        Operability, constructability and operational readiness. --}}
                       </p>
					<p>&nbsp;</p>

					<blockquote>
						<p> Emergency management including contingency planning
                            Procurement, logistics and supply chain are the engine room of converting innovative design into a quality,
                            on-time, cost-effective solution. Long term relationships with key suppliers are key to the delivery of quality
                            projects. Our procurement and project management systems make sure cost, schedule and quality is highly
                            visible and monitored</p>
					</blockquote>
				</div>

			</div>
		</div>
	</div>



@endsection
