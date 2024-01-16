<li class="nav-item">
    @if($page=='dashboard')
    <a href="{{ route('dashboard') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Dashboard</p>
    </a>
    @else
    <a href="{{ route('dashboard') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Dashboard</p>
    </a>
    @endif
</li>

<li class="nav-item">
    @if($page=='user')
    <a href="{{ route('user') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>User</p>
    </a>
    @else
    <a href="{{ route('user') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>User</p>
    </a>
    @endif
</li>

<li class="nav-item">
    @if($page=='car')
    <a href="{{ route('car') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Cars</p>
    </a>
    @else
    <a href="{{ route('car') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Cars</p>
    </a>
    @endif
</li>

<li class="nav-item">
    @if($page=='supplier')
    <a href="{{ route('supplier') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Supplier</p>
    </a>
    @else
    <a href="{{ route('supplier') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Supplier</p>
    </a>
    @endif
</li>

<li class="nav-item">
    @if($page=='stockorder')
    <a href="{{ route('stockorder') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Stock Order</p>
    </a>
    @else
    <a href="{{ route('stockorder') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Stock Order</p>
    </a>
    @endif
</li>

<li class="nav-item">
    @if($page=='member')
    <a href="{{ route('member') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Member</p>
    </a>
    @else
    <a href="{{ route('member') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Member</p>
    </a>
    @endif
</li>