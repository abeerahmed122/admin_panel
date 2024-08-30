@section('title')
Borrowed books

@endsection
<x-layout>
    
<div class="col-lg-9 grid-margin stretch-card" style="margin-left:40px;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Borrowed Books </h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Book ID</th>
                        <th>User ID</th>
                        <th>Borrowed At</th>
                        <th>Due Date</th>
                        <th>Returned At</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($bbooks as $bbook)
                      <tr>
                      <td>{{ $bbook['id'] }}</td>
                      <td>  //<!-- {{ $bbook['user_id'] }} --></td> 
                      <td>{{ $bbook['borrowed_at'] }}</td>
                      <td>{{ $bbook['due_date'] }}</td>
                      <td>{{ $bbook['returned_at'] }}</td>
                      <td class="actions-colomn">
            <a href="{{ url('ViewBBook/' . $bbook['id']) }}" class="btn btn-warning btn-sm">Details</a>
            <a href="{{ url('EditBBook/' . $bbook['id']) }}" class="btn btn-success btn-sm">Edit</a>
            <form action="{{ url('DeleteBBook/' . $bbook['id']) }}" method="post" style="display:inline;">
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
              </div>
            </div>
           </div>
          </div>
          
</x-layout>
