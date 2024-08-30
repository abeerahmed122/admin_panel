@section('title')
About Book

@endsection
<x-layout>
    
<div class="col-lg-6 grid-margin stretch-card" style="margin-left:40px;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"> {{ $book['title'] }} </h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                    <tr>
                    <th>Book ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Publish Year</th>
                  
                      </tr>
                      <tr>
                      <td>{{ $book['id'] }}</td>
                      <td class="text-danger">{{ $book['title'] }}</td>
                      <td>{{ $book['author'] }}</td>
                      <td>{{ $book['description'] }}</td>
                      <td>{{ $book['published_year'] }}</td>
                      </tr>
                  </table>
                </div>
                <div class="button-container">
                        <a href="/AllBooks" class="btn btn-dark" style="margin-top:70px; margin-left:50px;"><span>Done</span></a>
                      </div>
              </div>
            </div>
            </div>
           
          <div class="row flex-grow" style="margin-left:20px;">
                            <div class="col-8 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                              <h5 class="card-title card-title-dash">Book Cover</h5>
                                  <div class="row">
                                    <div class="col-lg-8 ">
                                      <div style="margin-top:20px">
                                        <img src="/images/book05.jpg" width="250" height="450"/>
                                                              <!-- {{ $book['cover'] }} -->
                                      </div>
</div>
                                </div>
                              </div>
                            </div>
                          </div></div>
          
</x-layout>
