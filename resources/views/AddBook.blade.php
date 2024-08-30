@section('title')
Add New Book

@endsection
<x-layout>
  
<div class="col-lg-6 grid-margin stretch-card" style="margin-left:40px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">New Book</h4>
                    <form class="forms-sample material-form" action="/AllBooks" method="post">
                    @csrf
                      <div class="form-group">
                        <input type="text" value="{{old('title')}}" name="title" />
                        <label for="input" class="control-label">Title</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{old('author')}}" name="author" />
                        <label for="input" class="control-label">Author</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{old('description')}}" name="description" />
                        <label for="input" class="control-label">Description</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                        <input type="text" value="{{old('published_year')}}" name="published_year" />
                        <label for="input" class="control-label">Published Year</label><i class="bar"></i>
                      </div>
                      <div class="form-group">
                      <input type="file" name="cover" style=" display:inline-block; margin-top:20px;" value="">
                        <label for="input" class="control-label">Book Cover</label><i class="bar"></i>
                      </div>

                      <div class="button-container"  style="margin-top:70px; margin-left:50px;">
                        <a class="btn btn-light" href="/AllBooks" style="margin-right:10px;">Back</a>
                        <button type="submit" class="btn btn-dark"><span>ADD BOOK</span></button>
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