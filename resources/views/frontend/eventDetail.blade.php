@extends('layouts.top')
@section('title','Event Detail')
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
						                    <h1 class="title text-center text-white">Event Details</h1>
						                </div>
						                <div class="breadcrumb-nav">
											<ul class="breadcrumb-link text-center list-unstyled mb-0">
												<li class="text-white"><a href="{{url('/')}}">Home</a></li>
												<li class="text-white active">Event Details</li>
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
    <div class="section section-blog">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-4 order-lg-2 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
                    <aside class="sidebar sidebar-padding bg-white border">
                    
                        <div class="pb-2 blog-side-padding">
                            <div class="blog-news d-flex align-items-center list-unstyled mb-2">
                                <h4 class="title f-16 pb-2 text-uppercase theme-color">RECENT POSTS</h4>  
                            </div>                            
                            <div class="blog-news-content">
                                <div class="blog-post-list">
                                    <ul class="list-unstyled">
                                        @isset($e4)
                                        @foreach($e4 as $v)
                                        <li>                                            
                                            <div class="blog-post-info">
                                                <a href="{{url('eventDetail',$v->id)}}" class="text-dark font-weight-regular">{{$v->title}}</a>
                                                <a href="{{url('eventDetail',$v->id)}}" class="post-date d-block font-weight-regular grey-text"> {{ date('F d, Y',strtotime($v->start_date));}}</a>
                                            </div>
                                        </li>
                                        @endforeach
                                        @endif                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        
                           
                     
                        
                    </aside>
                </div>              
                <div class="col-lg-8 order-lg-1 mt-lg-0 mt-4 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
                     <article class="blog-post-left bg-white border">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="blog-post-content text-left">
                                  
                                    <h4>
                                        <a href="#" class="text-left text-dark">
                                           {{$e->title}}
                                        </a>
                                    </h4> 
                                    <h6>
                                        <a href="#" class="text-center grey-text">
                                        {{ date('F d, Y',strtotime($e->start_date));}}
                                        </a>
                                    </h6>  
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="post-image mb-2">
                                    <a href="#">
                                        <img src="images/blog/blog-02.jpg" class="img-fluid img-thumbnail border-0" alt="">
                                    </a>
                                </div>
                                <div class="post-content">
                                    {!!$e->content!!}
                                      </div>
                               
                            </div>
                        </div>                        
                    </article>
                                       
                </div>
                
            </div>
        </div>
    </div>
@endsection