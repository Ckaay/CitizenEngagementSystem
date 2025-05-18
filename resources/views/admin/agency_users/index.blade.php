
            @extends('admin.layout.app')
            @section('title', "Add Agency")
            @section('content')
          
            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                 <a href="{{ route('admin.agency-users.create') }}" class="btn btn-success mb-3">
                    Add New Agency User
                </a>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="row g-4">
                     
                    
                    
                    
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">All Agency User</h6>
                            <div class="table-responsive ">
                                <table  class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Full names</th>
                                             
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Update At</th>
                                            <th scope="col">Update</th>
                                            <th scope="col">Delete</th>
                                           
                            
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($agencyUsers as $key => $user)
                                        <tr>
                                            <th scope="row"> {{ $key + 1 }} </th>
                                            <td>{{ $user->name }}</td>
                                            <td> {{ $user->email }} </td>
                                            <td> Agency User</td>
                                            <td> {{ $user->updated_at }} </td>
                                            <td>
                                                <a href="{{ route('admin.agency-users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.agency-users.destroy', $user->id) }}" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Delete this user?')" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

            @endsection('content')