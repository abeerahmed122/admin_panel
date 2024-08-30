@section('title')
About Borrowed Book

@endsection
<x-layout>
    
<div class="col-lg-7 grid-margin stretch-card" style="margin-left:40px;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title"> Book {{$bbook['id']}} </h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Book ID</th>
                        <th>Borrowed At</th>
                        <th>Due Date</th>
                        <th>Returned At</th>
                  
                      </tr>
                      <tr>
                      <td>{{ $bbook['id'] }}</td>
                      <td>{{ $bbook['borrowed_at'] }}</td>
                      <td class="text-danger">{{ $bbook['due_date'] }}</td>
                      <td>{{ $bbook['returned_at'] }}</td>
                      
                      </tr>
                  </table>
                </div>
                <div class="button-container">
                        <a href="/BBooks" class="btn btn-dark" style="margin-top:70px; margin-left:50px;"><span>Done</span></a>
                      </div>
              </div>
            </div>
           </div>
          </div>
          
</x-layout>
