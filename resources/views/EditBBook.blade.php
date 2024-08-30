@section('title')
Edit Borrowed Book

@endsection
<x-layout>
<div class="col-md-6 grid-margin stretch-card" style="margin-left:40px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> Book {{ $bbook['id'] }}</h4>
                    <form class="forms-sample material-form" action="/BBooks/{{ $bbook['id'] }}" method="post">
                    @csrf
                    @method('put') 
                    <div class="form-group">
                        <input type="text" value="{{ $bbook['id'] }}" title="id" readonly/>
                        <label for="input" class="control-label">ID</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $bbook['borrowed_at']}}" name="borrowed_at" />
                        <label for="input" class="control-label">Borrowed At</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $bbook['due_date']}}" name="due_date" />
                        <label for="input" class="control-label">Due Date</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{$bbook['returned_at']}}" name="returned_at" />
                        <label for="input" class="control-label">Returned At</label><i class="bar"></i>
                      </div>
      
                      <div class="button-container"  style="margin-top:70px; margin-left:50px;">
                        <a class="btn btn-light" href="/BBooks" style="margin-right:10px;">Cancel</a>
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
    </ul>
</div>
@endif 
</x-layout>