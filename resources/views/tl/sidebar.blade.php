<li class="nav-item">
    <!-- parent pages-->
    <div class="nav-item-wrapper">
        <a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
            <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon">
                    <span class="fas fa-caret-right"></span>
                </div>
                <span class="nav-link-icon">
                    <span data-feather="pie-chart"></span>
                </span>
                <span class="nav-link-text">Home</span>
            </div>
        </a>
        <div class="parent-wrapper label-1">
            <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard/project-management.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-text">Project management</span>
                        </div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </div>
    </div>
</li>

<li class="nav-item">
    <!-- label-->
    <p class="navbar-vertical-label">PAGES</p>
    <hr class="navbar-vertical-line" />
    <!-- parent pages-->
    <div class="nav-item-wrapper">
        <a class="nav-link label-1" href="{{route('project-create')}}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="archive"></span>
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">All Projects</span>
                </span>
            </div>
        </a>
    </div>
    <div class="nav-item-wrapper">
        <a class="nav-link label-1" href="{{route('project-list')}}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="users"></span>
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Team</span>
                </span>
            </div>
        </a>
    </div>
    <div class="nav-item-wrapper">
        <a class="nav-link label-1" href="{{route('project-details')}}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="user"></span>
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Students</span>
                </span>
            </div>
        </a>
    </div>
    <div class="nav-item-wrapper">
        <a class="nav-link label-1" href="{{route('project-details')}}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="check-circle"></span>
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Attendance</span>
                </span>
            </div>
        </a>
    </div>
    <div class="nav-item-wrapper">
    <a class="nav-link label-1" href="{{route('project-details')}}" role="button" data-bs-toggle="" aria-expanded="false">
        <div class="d-flex align-items-center">
            <span class="nav-link-icon">
                <span data-feather="check-square"></span>
            </span>
            <span class="nav-link-text-wrapper">
                <span class="nav-link-text">Task</span>
            </span>
        </div>
    </a>
</div>
</li>
@php
$userRole = auth()->user()->roles_name; // Get the user's role
@endphp

@if($userRole == 'admin' || $userRole == 'team-leader' || $userRole == 'faculty' || $userRole == 'project-manager' || $userRole == 'developer' || $userRole == 'reviewer')
<li class="nav-item">
    <!-- label -->
    <p class="navbar-vertical-label">APPS</p>
    <hr class="navbar-vertical-line" />
    <!-- parent pages -->

    <!-- Display All Projects link for admin, team leader, faculty, and project manager -->
    <div class="nav-item-wrapper">
        @if($userRole == 'admin' || $userRole == 'team-leader' || $userRole == 'faculty' || $userRole == 'project-manager')
        <a class="nav-link label-1" href="{{ route('project-create') }}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="archive"></span> <!-- Archive icon -->
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">All Projects</span> <!-- Link text -->
                </span>
            </div>
        </a>
        @endif
    </div>

    <!-- Display Team link for admin and team leader -->
    <div class="nav-item-wrapper">
        @if($userRole == 'admin' || $userRole == 'team-leader')
        <a class="nav-link label-1" href="{{ route('project-list') }}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="users"></span> <!-- Users icon -->
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Team</span> <!-- Link text -->
                </span>
            </div>
        </a>
        @endif
    </div>

    <!-- Display Developer Page link for developers -->
    <div class="nav-item-wrapper">
        @if($userRole == 'developer')
        <a class="nav-link label-1" href="{{ route('developer-page') }}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="code"></span> <!-- Code icon -->
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Developer Page</span> <!-- Link text -->
                </span>
            </div>
        </a>
        @endif
    </div>

    <!-- Display Reviewer Page link for reviewers -->
    <div class="nav-item-wrapper">
        @if($userRole == 'reviewer')
        <a class="nav-link label-1" href="{{ route('reviewer-page') }}" role="button" data-bs-toggle="" aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="eye"></span> <!-- Eye icon -->
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Reviewer Page</span> <!-- Link text -->
                </span>
            </div>
        </a>
        @endif
    </div>
</li>
@endif
