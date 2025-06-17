<div id="sidebar" class="bg-white">
    <ul id="sidebar-menu">
        <li class="nav-link <?= menu_active('/') ?>">
            <a href="<?= admin_url('/') ?>">
                Dashboard
            </a>
        </li>

        <li class="nav-link">
            <a href="?view=list-post">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Trang
                <i class="arrow fas fa-angle-right"></i>
            </a>
            <ul class="sub-menu" style="display: none;">
                <li><a href="?view=add-post">Thêm mới</a></li>
                <li><a href="?view=list-post">Danh sách</a></li>
            </ul>
        </li>

        <li class="nav-link <?= menu_active('blog') ?>">
            <a href="<?= admin_url('blog') ?>">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Bài viết
                <i class="arrow fas fa-angle-down"></i>
            </a>
            <ul class="sub-menu">
                <li class="<?= menu_active('blog/add-blog', true) ?>">
                    <a href="<?= admin_url('blog/add-blog') ?>">Thêm mới</a>
                </li>
                <li class="<?= menu_active('blog', true) ?>">
                    <a href="<?= admin_url('blog') ?>">Danh sách</a>
                </li>
                <li class="<?= menu_active('blog/cat-blog', true) ?>">
                    <a href="<?= admin_url('blog/cat-blog') ?>">Danh mục</a>
                </li>
            </ul>

        </li>

        <li class="nav-link <?= menu_active('product') ?>">
            <a href="<?= admin_url('product') ?>">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Sản phẩm
                <i class="arrow fas fa-angle-down"></i>
            </a>
            <ul class="sub-menu">
                <li class="<?= menu_active('product/add-product', true) ?>">
                    <a href="<?= admin_url('product/add-product') ?>">Thêm mới</a>
                </li>
                <li class="<?= menu_active('product', true) ?>">
                    <a href="<?= admin_url('product') ?>">Danh sách</a>
                </li>
                <li class="<?= menu_active('product/cat-product', true) ?>">
                    <a href="<?= admin_url('product/cat-product') ?>">Danh mục</a>
                </li>
            </ul>

        </li>

        <li class="nav-link">
            <a href="?view=list-order">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Bán hàng
                <i class="arrow fas fa-angle-right"></i>
            </a>
            <ul class="sub-menu" style="display: none;">
                <li><a href="?view=list-order">Đơn hàng</a></li>
            </ul>
        </li>

        <li class="nav-link">
            <a href="?view=list-user">
                <div class="nav-link-icon d-inline-flex">
                    <i class="far fa-folder"></i>
                </div>
                Users
                <i class="arrow fas fa-angle-right"></i>
            </a>
            <ul class="sub-menu" style="display: none;">
                <li><a href="?view=add-user">Thêm mới</a></li>
                <li><a href="?view=list-user">Danh sách</a></li>
            </ul>
        </li>
    </ul>
</div>