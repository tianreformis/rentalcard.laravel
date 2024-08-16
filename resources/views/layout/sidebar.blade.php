<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-home me-2"></i>RENT CAR</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{auth()->user()->name}}</h6>
                <span>{{auth()->user()->role}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            
            <a href="widget.html" class="nav-item nav-link"><i class="fa fa-thin fa-wallet me-2"></i>Transaksi</a>
            <a href="form.html" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Laporan Transaksi</a>
            <a href="table.html" class="nav-item nav-link"><i class="fa fa-car me-2"></i>Mobil</a>
            <a href="{{route('users')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>User</a>
        
        </div>
    </nav>
</div>
