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