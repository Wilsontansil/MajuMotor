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

@can('View Member')
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
@endcan

@can('View Event')
<li class="nav-item">
    @if($page=='event')
    <a href="{{ route('event') }}" class="nav-link active">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Event</p>
    </a>
    @else
    <a href="{{ route('event') }}" class="nav-link">
        <i class="fas fa-tachometer-alt nav-icon"></i>
        <p>Event</p>
    </a>
    @endif
</li>
@endcan

@can('View User')
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
@endcan

