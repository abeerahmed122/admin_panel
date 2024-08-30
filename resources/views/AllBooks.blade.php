
@section('title')
All books

@endsection
<x-layout>
    
<div class="col-lg-9 grid-margin stretch-card" style="margin-left:40px;">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">All Books </h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Book ID</th>
                        <!-- -> book cover <- -->
                        <!-- <th>Cover</th> -->
                        <th>Title</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Publish Year</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                      <tr>
                      <td>{{ $book['id'] }}</td>
                      <!-- -> book cover <- -->
                      <!-- <td> <div class="d-flex ">
                      {{ $book['cover'] }}
                                    <div> </td> -->
                      <td>{{ $book['title'] }}</td>
                      <td>{{ $book['author'] }}</td>
                      <td>{{ $book['description'] }}</td>
                      <td>{{ $book['published_year'] }}</td>
                      <td class="actions-colomn">
            <a href="{{ url('ViewBook/' . $book['id']) }}" class="btn btn-warning btn-sm">Details</a>
            <a href="{{ url('EditBook/' . $book['id']) }}" class="btn btn-success btn-sm">Edit</a>
            <form action="{{ url('DeleteBook/' . $book['id']) }}" method="post" style="display:inline;">
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
    <a href="{{ url('/AddBook') }}" class="btn btn-dark " style="margin-top:70px; margin-left:50px;"><span>ADD NEW BOOK</span></a>
</div>
              </div>
            </div>
           </div>
          </div>
          
</x-layout>
