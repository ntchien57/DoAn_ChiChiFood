<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon"
                        class="custom-control-input" value="icon-style-1" checked="" />
                    <label class="custom-control-label" for="sidebaricon-1"><i
                            class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon"
                        class="custom-control-input" value="icon-style-2" />
                    <label class="custom-control-label" for="sidebaricon-2"><i
                            class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon"
                        class="custom-control-input" value="icon-style-3" />
                    <label class="custom-control-label" for="sidebaricon-3"><i
                            class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-1" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-1"><i
                            class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-2" />
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                            aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-3" />
                    <label class="custom-control-label" for="sidebariconlist-3"><i
                            class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-4" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-4"><i
                            class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-5" />
                    <label class="custom-control-label" for="sidebariconlist-5"><i
                            class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon"
                        class="custom-control-input" value="icon-list-style-6" />
                    <label class="custom-control-label" for="sidebariconlist-6"><i
                            class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <div class="pt-2">
            <a class="text-light" href="index.html">
            <img class="w-25" src="/templates/guest/assets/img/logochichi.svg" alt="">
            <span class="pl-2">ChiChiFood</span>
            </a>
        </div>

        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span><span class="">Trang chủ</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon ti ti-user"></span><span class="mtext">Quản trị</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.html">Tài khoản</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-menu-button-wide"></span><span class="mtext">Quản lý danh mục</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.category.add') }}">Thêm danh mục</a></li>
                        <li><a href="index2.html">Danh sách danh mục</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-stack"></span><span class="mtext">Quản lý sản phẩm</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.html">Thêm sản phẩm</a></li>
                        <li><a href="index2.html">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-people"></span><span class="mtext">Khách hàng</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index2.html">Danh sách khách hàng</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-cart3"></span><span class="mtext">Quản lý đơn hàng</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index2.html">Đơn hàng</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
