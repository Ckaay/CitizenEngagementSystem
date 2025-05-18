            @extends('admin.layout.app')
            @section('title', 'Dashboard - Admin')

            @section('content')


            @auth
    @if(auth()->user()->role === 'SuperUser')
                  
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-12 col-md-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 h-100">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3 flex-grow-1 text-end">
                    <p class="mb-2">Super Admin Management</p>
                    <h6 class="mb-3">Add Agency User</h6>
                    <a  href="{{ route('admin.agency-users.create') }}"  class="btn btn-primary w-100">Add Agency User</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 h-100">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3 flex-grow-1 text-end">
                    <p class="mb-2">Super Admin Management</p>
                    <h6 class="mb-3">Manage Agency User</h6>
                         <a  href="{{ route('admin.agency-users.store') }}"  class="btn btn-primary w-100">Manage Agency User</a>
                </div>
            </div>
        </div>


          <div class="col-12 col-md-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 h-100">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3 flex-grow-1 text-end">
                    <p class="mb-2">Super Admin Management</p>
                    <h6 class="mb-3">Manage Update / Delete</h6>
                         <a  href="{{ route('admin.agency-users.store') }}"  class="btn btn-primary w-100">Update/Delete</a>
                </div>
            </div>
        </div>

  


 

 
    </div>
</div>
<!-- Sale & Revenue End -->
    @endif
@endauth
  




@auth
    @if(auth()->user()->role === 'AgencyUser')
        <!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-12 col-md-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 h-100">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3 flex-grow-1 text-end">
                    <p class="mb-2">Agency Management</p>
                    <h6 class="mb-3">$1234</h6>
                    <a  href="{{ route('admin.complaints.index') }}"  class="btn btn-primary w-100">View Complaint</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 h-100">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3 flex-grow-1 text-end">
                    <p class="mb-2">Agency Management</p>
                    <h6 class="mb-3">$1234</h6>
                         <a  href="{{ route('admin.complaints.index') }}"  class="btn btn-primary w-100">Update Complaint</a>
                </div>
            </div>
        </div>


          <div class="col-12 col-md-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 h-100">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3 flex-grow-1 text-end">
                    <p class="mb-2">Agency Management</p>
                    <h6 class="mb-3">$1234</h6>
                         <a  href="{{ route('admin.complaints.index') }}"  class="btn btn-primary w-100">Complaint Status</a>
                </div>
            </div>
        </div>

  


 

 
    </div>
</div>
<!-- Sale & Revenue End -->
    @endif
@endauth



            @endsection('content')