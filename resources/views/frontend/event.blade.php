@extends('layouts.top')
@section('title','Event')
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
						                    <h1 class="title text-center text-white">Events</h1>
						                </div>
						                <div class="breadcrumb-nav">
											<ul class="breadcrumb-link text-center list-unstyled mb-0">
												<li class="text-white"><a href="{{url('/')}}">Home</a></li>
												<li class="text-white active">Events</li>
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

  
 	<section class="section">
 		<div class="container">
	 			<div class="blog-post-grid">
	 				<div class="row">
	 					<!-- Start Blog Item -->
						@if(isset($e))
						@foreach($e as $v)
	 					<div class="col-md-6 col-lg-4">	 						
	 						<div class="blog-item mt-4 blog-item-padding">
	 							
	 							<div class="hover-thumb-img"></div>
	 							<div class="blog-post-info position-relative">
	 									<h4 class="blog-post-title my-3">
	 									<a href="{{url('eventDetail',$v->id)}}" class="font-weight-medium">{{$v->title}}</a>
	 								</h4>
	 								<div class="blog-info-meta my-3">
	 									<a href="{{url('eventDetail',$v->id)}}" class="font-weight-medium">{{ date('F d, Y',strtotime($v->start_date));}}</a>
	 								</div>
	 								
	 								<div class="blog-post-action mt-4">
	 									<a href="{{url('eventDetail',$v->id)}}" target="_blank" class="btn theme-dark-btn text-white font-weight-medium">Read Full Post</a>
	 								</div>
	 							</div>
	 						</div>	 						
	 					</div>
						@endforeach
						@endif
	 		
	 		
	 				</div>
	 			</div>
	 			<div class="pagination  d-flex justify-content-center mt-5">
				 {{ $e->links() }}
	 			</div>
 		</div>
 	</section>
     @endsection