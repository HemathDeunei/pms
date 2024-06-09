<li class="nav-item">
    <!-- label-->
    <p class="navbar-vertical-label">Faculty</p>
    <hr class="navbar-vertical-line" /><!-- parent pages-->
    <div class="nav-item-wrapper">
        <a class="nav-link label-1" href="{{route('add_faculty')}}" role="button" data-bs-toggle=""
            aria-expanded="false">
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span data-feather="user-plus"></span>
                </span>
                <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Add Faculty</span>
                </span>
            </div>
        </a>
    </div><!-- parent pages-->
    <div class="nav-item-wrapper">
    <a class="nav-link label-1" href="{{route('faculty_list')}}" role="button" data-bs-toggle="" aria-expanded="false">
        <div class="d-flex align-items-center">
            <span class="nav-link-icon">
                <span data-feather="users"></span>
            </span>
            <span class="nav-link-text-wrapper">
                <span class="nav-link-text">All Faculty</span>
            </span>
        </div>
    </a>
</div>


</li>