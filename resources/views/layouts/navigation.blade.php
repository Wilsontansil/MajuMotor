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




