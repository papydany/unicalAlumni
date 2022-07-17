@extends('layouts.top')
@section('title','Our Programme')
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
						                    <h1 class="title text-center text-white"> Programme </h1>
						                </div>
						                <div class="breadcrumb-nav">
											<ul class="breadcrumb-link text-center list-unstyled mb-0">
												<li class="text-white"><a href="{{url('/')}}">Home</a></li>
												<li class="text-white active">Programme</li>
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
                  
                    <h2 class="title text-md-left text-center f-39">Trust and endowment fund</h2>
                </div>
                    <div class="para-text text-left mt-4">
                    <p>The University of Calabar Trust and Endowment Fund LTD/GTE is a private company limited 
                        by guarantee with company registration number 1904027.  
                        This legal status was facilitated by the University Management,
                         and approved by the  Nigeria Corporate Affairs Commission on the 
                         11th day of March 2022.</p>
                         <h4>List of programme interventions</h4>
                         <br/>
                         <table class="table table-bordered table-responsive">
                         <thead class="thead-dark">
                                <tr>
                                    <th>Code</th>
                                    <th>Title</th>
                                    <th>Purpose</th>
                                </tr>
                         </thead>
                         <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Infrastructure</td>
                                    <td>Improve the status of infrastructure to facilitate better service delivery 
                                        and educational outcomes. </td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Furniture</td>
                                    <td>To create a dynamic learning environment through 
                                        improvement in the ergonomics of the classrooms and other facilities </td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Equipment</td>
                                    <td>Increase lecturers and students access to quality equipment for practical
                                         learning and adequate preparation for the world of work  </td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Transportation</td>
                                    <td>Improve and strengthen  mobility systems for staff and students </td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>Professorial chairs</td>
                                    <td>To promote teaching, research and community service in line with the University's 
                                        needs and goals</td>
                                </tr>
                                <tr>
                                    <td>006</td>
                                    <td>Lectureships</td>
                                    <td>To bridge the existing and future gaps in human resources for teaching.</td>
                                </tr>
                                <tr>
                                    <td>007</td>
                                    <td>Research</td>
                                    <td>To meet the overarching goal of birthing innovations that meet
                                         current and future needs.</td>
                                </tr>
                                <tr>
                                    <td>008</td>
                                    <td>Scholarship schemes</td>
                                    <td>Improving access to quality education </td>
                                </tr>
                                <tr>
                                    <td>009</td>
                                    <td>Academic prizes</td>
                                    <td>Promote academic excellence and leadership among students</td>
                                </tr>
                                <tr>
                                    <td>010</td>
                                    <td>University community engagement for leadership, health,  development,  
                                        and collaborative outreaches</td>
                                    <td>Increase students, staff and selected population access to donor-funded interventions in leadership, health and development-related initiatives through 
                                        collaborative partnerships, mentoring,  and sustainable  fieldwork </td>
                                </tr>
                            </tbody>
                         </table>
                        
                                              
                    </div>
 				</div>
	 		
 			</div>
 		</div>
 	</section>
     @endsection