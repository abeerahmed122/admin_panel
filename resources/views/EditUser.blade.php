@section('title')
Edit User

@endsection
<x-layout>
<div class="col-md-6 grid-margin stretch-card" style="margin-left:40px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> {{ $user['NAME'] }}</h4>
                    <form class="forms-sample material-form" action="/AllUsers/{{ $user['id'] }}" method="post">
                    @csrf
                    @method('put') 
                    <div class="form-group">
                        <input type="text" value="{{ $user['id'] }}" name="id" readonly/>
                        <label for="input" class="control-label">ID</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $user['NAME']}}" name="name" />
                        <label for="input" class="control-label">Name</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="email" value="{{ $user['email'] }}" name="email" />
                        <label for="input" class="control-label">Email</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $user['pass'] }}" name="pass" />
                        <label for="input" class="control-label">Password</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $user['role']}}" name="role" />
                        <label for="input" class="control-label">Role</label><i class="bar"></i>
                      </div>

                      <div class="button-container"  style="margin-top:70px; margin-left:50px;">
                        <a class="btn btn-light" href="/AllUsers" style="margin-right:10px;">Cancel</a>
                        <button type="submit" class="btn btn-dark"><span>UPDATE</span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              @if ($errors->any()) 
                  <div class="alert alert-danger" style="margin-left:50px;">
<ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        
        @endforeach
    </ul></div>

@endif 
</x-layout>
