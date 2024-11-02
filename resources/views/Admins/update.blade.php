@extends('layouts.content')
  
@section('content')
<x-header />
    <div class="app-wrapper">
          
      <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
          
          <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                  <h1 class="app-page-title mb-0">Product Details</h1>
            </div>
          </div><!--//row-->
        
          
          <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
            <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
        </nav>
        
        
        <div class="tab-content" id="orders-table-tab-content">
              <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
              <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                  <div class="table-responsive">
                      <table class="table app-table-hover mb-0 text-left">
                    <thead>
                      <tr>
                        <th class="cell">Products ID</th>
                        <th class="cell">product_name</th>
                        <th class="cell">product_price</th>
                                                <th class="cell">Description</th>
                        <th class="cell">Date Created</th>
                        <th class="cell">Date Updated</th>
                                                <th class="cell">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ( $update as $update)
                        <tr>
                          <td class="cell">{{ $update ->id }}</td>
                          <td class="cell"><span class="truncate">{{ $update ->product_name }}</span></td>
                          <td class="cell">{{  $update ->price }}</td>
                                                    <td class="cell">{{ $update->description }}</td>
                          <td class="cell"><span>{{ $update->created_at }}</span></td>
                          <td class="cell"><span class="badge bg-success">{{ $update->updated_at }}</span></td>
                          
                          <td class="cell"><a class="btn-sm app-btn-secondary" href="/admin/edit/{{ $update->id }}">Edit</a></td>
                          <td class="cell">
                            
                            <form action="/admin/delete/{{ $update->id }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit">Delete</button>
                            </form> 
                            
                          </td>
                        </tr>
                      @endforeach
                    
                      
                    </tbody>
                  </table>
                    </div><!--//table-responsive-->
                  
                </div><!--//app-card-body-->		
            </div><!--//app-card-->
            <nav class="app-pagination">
              {{-- {{ $update->links() }} --}}
            </nav><!--//app-pagination-->
            
              </div><!--//tab-pane-->
              
        </div><!--//tab-content-->
        
        
          
        </div><!--//container-fluid-->
      </div><!--//app-content-->
      
      <footer class="app-footer">
        <div class="container text-center py-3">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            
          
        </div>
      </footer><!--//app-footer-->
      
    </div><!--//app-wrapper-->    					


    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  


    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
@endsection
    

</body>
</html> 

