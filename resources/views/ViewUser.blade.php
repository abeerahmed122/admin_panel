@section('title')
About User

@endsection
<x-layout>
    
<div class="col-lg-7 grid-margin stretch-card" style="margin-left:40px;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"> {{ $user['NAME']}}</h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                      <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                  
                      </tr>
                      <tr>
                      <td>{{ $user['id'] }}</td>
                      <td class="text-danger">{{ $user['NAME'] }}</td>
                      <td>{{ $user['email'] }}</td>
                      <td>{{ $user['pass'] }}</td>
                      <td>{{ $user['role'] }}</td>
                      </tr>
                  </table>
                </div>
                <div class="button-container">
                        <a href="/AllUsers" class="btn btn-dark" style="margin-top:70px; margin-left:50px;"><span>Done</span></a>
                      </div>
              </div>
            </div>
           </div>
          </div>
          
</x-layout>
