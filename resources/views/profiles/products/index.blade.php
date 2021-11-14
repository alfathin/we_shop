@extends('profiles.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Product</h1>
  </div>

  <div class="table-responsive col-lg-10">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
						@foreach ( $products as $product )
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $product->title }}</td>
              <td>{{ $product->category->name }}</td>
              <td>
								<a href="/profile/products/{{ $product->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
								<a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
								<a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
							</td>
            </tr>
						@endforeach
          </tbody>
        </table>
      </div>
@endsection