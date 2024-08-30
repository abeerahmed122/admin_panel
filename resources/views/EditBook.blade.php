@section('title')
Edit Book

@endsection
<x-layout>
<div class="col-md-6 grid-margin stretch-card" style="margin-left:40px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"> {{ $book['title'] }}</h4>
                    <form class="forms-sample material-form" action="/AllBooks/{{ $book['id'] }}" method="post">
                    @csrf
                    @method('put') 
                    <div class="form-group">
                        <input type="text" value="{{ $book['id'] }}" title="id" readonly/>
                        <label for="input" class="control-label">ID</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $book['title']}}" name="title" />
                        <label for="input" class="control-label">Title</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $book['author']}}" name="author" />
                        <label for="input" class="control-label">Author</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{$book['description']}}" name="description" />
                        <label for="input" class="control-label">Description</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{ $book['published_year']}}" name="published_year" />
                        <label for="input" class="control-label">Published Year</label><i class="bar"></i>
                      </div>

                      <div class="button-container"  style="margin-top:70px; margin-left:50px;">
                        <a class="btn btn-light" href="/AllBooks" style="margin-right:10px;">Cancel</a>
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