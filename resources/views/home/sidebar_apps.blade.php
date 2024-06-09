<li class="nav-item">
                            <!-- label-->
                            <p class="navbar-vertical-label">Project</p>
                            <hr class="navbar-vertical-line" /><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('project-create')}}"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="plus-circle"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Project create</span></span></div>
                                </a></div>
                                <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{route('project-list')}}"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="list"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Project List</span></span></div>
                                </a></div>
                                
                                
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-e-commerce">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="shopping-cart"></span></span><span class="nav-link-text">E Commerce</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-e-commerce">
                                        <li class="collapsed-nav-item-title d-none">E commerce</li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-admin"
                                                data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-admin">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Admin</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                    id="nv-admin">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/add-product.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Add product</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/products.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Products</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/customers.html"
                          i                                data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Customers</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/customer-details.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Customer details</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/orders.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Orders</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/order-details.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Order details</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/admin/refund.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Refund</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#nv-customer"
                                                data-bs-toggle="collapse" aria-expanded="true"
                                                aria-controls="nv-customer">
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown-indicator-icon"><span
                                                            class="fas fa-caret-right"></span></div><span
                                                        class="nav-link-text">Customer</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                            <div class="parent-wrapper">
                                                <ul class="nav collapse parent show" data-bs-parent="#e-commerce"
                                                    id="nv-customer">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/homepage.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Homepage</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/product-details.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Product details</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/products-filter.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Products filter</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/cart.html" data-bs-toggle=""
                                                            aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Cart</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/checkout.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Checkout</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/shipping-info.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Shipping info</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/profile.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Profile</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/favourite-stores.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Favourite stores</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/wishlist.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Wishlist</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/order-tracking.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Order tracking</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="apps/e-commerce/landing/invoice.html"
                                                            data-bs-toggle="" aria-expanded="false">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="nav-link-text">Invoice</span></div>
                                                        </a><!-- more inner pages-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-CRM"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-CRM">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span data-feather="phone"></span></span><span
                                            class="nav-link-text">CRM</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-CRM">
                                        <li class="collapsed-nav-item-title d-none">CRM</li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/analytics.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Analytics</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/deals.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Deals</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/deal-details.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Deal
                                                        details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/leads.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Leads</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/lead-details.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Lead
                                                        details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/reports.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Reports</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/reports-details.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Reports details</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/crm/add-contact.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Add
                                                        contact</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-project-management" role="button" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="nv-project-management">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="clipboard"></span></span><span
                                            class="nav-link-text">Project management</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-project-management">
                                        <li class="collapsed-nav-item-title d-none">Project management</li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/project-management/create-new.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Create new</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/project-management/project-list-view.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project list view</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/project-management/project-card-view.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project card view</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/project-management/project-board-view.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project board view</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/project-management/todo-list.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Todo
                                                        list</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/project-management/project-details.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Project details</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/chat.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="message-square"></span></span><span
                                            class="nav-link-text-wrapper"><span class="nav-link-text">Chat</span></span>
                                    </div>
                                </a></div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-email" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-email">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span data-feather="mail"></span></span><span
                                            class="nav-link-text">Email</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-email">
                                        <li class="collapsed-nav-item-title d-none">Email</li>
                                        <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Inbox</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/email/email-detail.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Email
                                                        detail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/email/compose.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Compose</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-events" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-events">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="bookmark"></span></span><span
                                            class="nav-link-text">Events</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-events">
                                        <li class="collapsed-nav-item-title d-none">Events</li>
                                        <li class="nav-item"><a class="nav-link" href="apps/events/create-an-event.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Create an event</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/events/event-detail.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span class="nav-link-text">Event
                                                        detail</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-kanban" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-kanban">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="trello"></span></span><span
                                            class="nav-link-text">Kanban</span><span
                                            class="fa-solid fa-circle text-info ms-1 new-page-indicator"
                                            style="font-size: 6px"></span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-kanban">
                                        <li class="collapsed-nav-item-title d-none">Kanban</li>
                                        <li class="nav-item"><a class="nav-link" href="apps/kanban/kanban.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Kanban</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/kanban/boards.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Boards</span><span
                                                        class="badge ms-2 badge badge-phoenix badge-phoenix-info ">New</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="apps/kanban/create-kanban-board.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Create board</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1"
                                    href="#nv-social" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="nv-social">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span>
                                        </div><span class="nav-link-icon"><span
                                                data-feather="share-2"></span></span><span
                                            class="nav-link-text">Social</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="nv-social">
                                        <li class="collapsed-nav-item-title d-none">Social</li>
                                        <li class="nav-item"><a class="nav-link" href="apps/social/profile.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Profile</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="apps/social/settings.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text">Settings</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- parent pages-->
                            <div class="nav-item-wrapper"><a class="nav-link label-1" href="apps/calendar.html"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                data-feather="calendar"></span></span><span
                                            class="nav-link-text-wrapper"><span
                                                class="nav-link-text">Calendar</span></span></div>
                                </a></div>
                        </li>