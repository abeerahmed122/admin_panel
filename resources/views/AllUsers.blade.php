@section('title')
All Users

@endsection
<x-layout>
    
<div class="col-lg-9 grid-margin stretch-card" style="margin-left:40px;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Users </h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                      <td>{{ $user['id'] }}</td>
                      <td>{{ $user['NAME'] }}</td>
                      <td>{{ $user['email'] }}</td>
                      <td>{{ $user['pass'] }}</td>
                      <td>{{ $user['role'] }}</td>
                      <td class="actions-colomn">
            <a href="{{ url('ViewUser/' . $user['id']) }}" class="btn btn-warning btn-sm">Details</a>
            <a href="{{ url('EditUser/' . $user['id']) }}" class="btn btn-success btn-sm">Edit</a>
            <form action="{{ url('DeleteUser/' . $user['id']) }}" method="post" style="display:inline;">
                @method('delete')
                @csrf
                <input type="submit" class="btn btn-danger btn-sm" value="Delete"/>
            </form>
        </td>
    </tr>
@endforeach    
                    </tbody>
                  </table>
                </div>
                <div class="button-container">
    <a href="{{ url('/AddUser') }}" class="btn btn-dark" style="margin-top:70px; margin-left:50px;"><span>ADD NEW USER</span></a>
</div>
              </div>
            </div>
           </div>
          </div>
          
</x-layout>
