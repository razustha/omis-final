<!--head contents -->

@include('organization.layouts.organization.head')

<!--head contents -->


<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg" id="omisapp">
    <div class="nk-app-root">
        <div class="nk-main">

			<!--sidebar -->
        	@include('organization.layouts.organization.sidebar')
  			<!--sidebar -->

  				<div class="nk-wrap">

  					<!-- Nav Bar -->		
  					@include('organization.layouts.organization.header')
  					<!-- Nav Bar -->	

					<!-- Popup Messages -->	
  					 @include('organization.layouts.organization.flash-message');
  					<!-- Popup Messages -->	

					<!-- @section('content')-->
  					  @yield('content')
					<!-- @section('content')-->

  					<!--footer -->
  					@include('organization.layouts.organization.footer')
  					<!--footer -->  
  				
  				</div>
        	
        </div>
   			
   			<!--check in -->
   			@include('organization.layouts.organization.clockIn') 
   			<!--check in --> 
	
	</div>

	<div class="modal fade " id="startTimer" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableLabel" aria-hidden="true">
	    <div class="modal-dialog modal-lg modal-dialog-top">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="scrollableLabel"> <em class="icon ni ni-clock"></em> Start Timer</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	            </div>
	            <div class="modal-body"> 
	                
	                <div class="col-lg-12">
	                    <div class="form-group">
	                    <?php createLabel('project', 'form-label', 'Project'); ?>
	                    
	                    <?php createSelect('project', 'project', '', '', ['Select One', 'Project', 'Project', 'Project']); ?>
	                    </div>
	                </div>
	                    <br>
	                <div class="col-lg-12">
	                    <div class="form-group">
	                    <?php createLabel('task', 'form-label', 'Task'); ?>
	                    
	                    <?php createSelect('task', 'task', '', '', ['Select One', 'Task', 'Task', 'Task']); ?>
	                    </div>
	                </div>

	                <br>
	                <div class="col-lg-12">
	                    <div class="form-group">
	                       
	                        <div class="form-control-wrap">
	                         <?php createLabel('memo','','Memo')?>
	                         <?php createTextArea('memo','','memo','','')?>
	                        </div>
	                    </div>
	                </div>

	            </div>
	            <div class="modal-footer"><button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-sm btn-danger"><em class="icon ni ni-play-fill"></em> Start Timer</button>
	            </div>
	        </div>
	    </div>
	</div>

	 <div class="modal fade new_CheckIn" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title align-self-center mt-0 text-center" id="exampleModalLabel">Add Check In</h5>
                        <button type="button" class="btn-primary close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('hr.attendence.checkIn')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <input type="hidden" value="{{auth()->user()->id}}">
                                <div class="col-md-12">
                                    {{ createText('location', 'location', 'location') }}
                                </div>
                                <div class="col-md-12">
                                    <div class="col-lg-12">
                                        {{ createText('workFrom', 'workFrom', 'Work From') }}
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <?php createButton("btn-primary","","Save"); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
	</div>


	<!-- Nav bar contents display -->

	@include('organization.layouts.organization.notification')

	@include('organization.layouts.organization.timer')

	@include('organization.layouts.organization.collapsecontent')

	<!-- Nav bar contents display -->

	<!--scripts / body/html End -->
	@include('organization.layouts.organization.scripts')
	<!--scripts / body/html End -->


