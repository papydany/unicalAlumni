@extends('layouts.top')
@section('title','Alumni')
@section('content')
<section class="inner-header-bg">          
            <div class="container">
                <!-- Breadcrumb Start-->
				    <div class="section-breadcrumb">
						<div class="container">							
							<div class="row">				
								<div class="col-md-12 justify-content-center align-self-center pb-2">
									<div class="breadcrumb-content">
										<div class="title-section">				                    
						                    <h1 class="title text-center text-white">Alumni</h1>
						                </div>
						                <div class="breadcrumb-nav">
											<ul class="breadcrumb-link text-center list-unstyled mb-0">
												<li class="text-white"><a href="{{url('/')}}">Home</a></li>
												<li class="text-white active">Alumni</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- Breadcrumb End -->
            </div>
    </section>
    <!-- BradCrumb header End -->     
 	<!-- Start Aboutus Top-->
 	<section class="section about-inner">
 		<div class="container">
         <div class="about-bottom-section mt-5 wow fadeIn" data-wow-duration="1.0s">
                <div class="title-section">
                  
                    <h2 class="title text-md-left text-center f-40">Alumni</h2>
                </div>
                    <div class="para-text text-left mt-4">
                   <h5> We are malabites, we are Malabres</h5>
                   <p class="para-text text-sm-left text-center">“Great Malabites and Malabres, though you are no longer a student the University of Calabar and 
    the Alumni Association are always here for you, we are your community” get involved today…….
    <a href="{{ route('createAlumni') }}" target="_blank"> Click here</a></p>
     <p class="para-text text-sm-left text-center">
<b>Alumni Directory: </b> Unical Alumni Association Directory is your comprehensive resource to stay in touch with your coursemates…..Create a link
     </p>
     <p class="para-text text-sm-left text-center">
<b>Benefits and Resources: </b> the benefits and services made available to Unical Alumni globally from across the University……Create a link
     </p>
     <p class="para-text text-sm-left text-center">
     <b>Alumni Communities: </b> alumni chapters and shared interest groups offer a wide range of opportunities for Malabites and Malabres to engage with the Unical community across the globe…… create a link
     </p>
                            </div>
 				</div>
	 		
 			</div>
 		</div>
 	</section>
     @endsection