<li class="nav-item">
    <!-- parent pages-->
    <div class="nav-item-wrapper">
        <a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
            <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div>
                <span class="nav-link-icon"><span data-feather="pie-chart"></span></span>
                <span class="nav-link-text">Home</span>
            </div>
        </a>
        <div class="parent-wrapper label-1">
            <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                <li class="collapsed-nav-item-title d-none">Home</li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('show_dashboard')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span data-feather="grid"></span></span>
                            <span class="nav-link-text">Dashboard</span>
                        </div>
                    </a>
                    <!-- more inner pages-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show_team')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span data-feather="users"></span></span>
                            <span class="nav-link-text">Add Team</span>
                        </div>
                    </a>
                    <!-- more inner pages-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show_roles')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span data-feather="user-check"></span></span>
                            <span class="nav-link-text">Add Roles</span>
                        </div>
                    </a>
                    <!-- more inner pages-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('show_batch')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><span data-feather="layers"></span></span>
                            <span class="nav-link-text">Add Batch</span>
                        </div>
                    </a>
                    <!-- more inner pages-->
                </li>
            </ul>
        </div>
    </div>
</li>
