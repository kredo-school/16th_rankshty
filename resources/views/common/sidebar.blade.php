<div class="col-3 sidebar">
    {{-- Buyer Sidebar --}}
    @if (request()->is('buyer/*'))
        <div class="list-group">
            <span class="list-group-item disabled">
                <h3>Buyer Navigation</h3>
            </span>
            <a href="{{ route('buyer.myPage') }}"
                class="list-group-item {{ request()->is('buyer/my-page') ? 'focused' : '' }}">
                My Page
            </a>
            <a href="{{ route('buyer.purchase-history') }}"
                class="list-group-item {{ request()->is('buyer/purchase-history') ? 'focused' : '' }}">
                Order History
            </a>
            <a href="{{ route('buyer.favorite') }}"
                class="list-group-item {{ request()->is('buyer/favorite') ? 'focused' : '' }}">
                Favorites List
            </a>
            <a href="{{ route('buyer.cart') }}"
                class="list-group-item {{ request()->is('buyer/cart') ? 'focused' : '' }}">
                Shopping Cart
            </a>
            <a href="{{ route('buyer.followblock') }}"
                class="list-group-item {{ request()->is('buyer/followblock') ? 'focused' : '' }}">
                Follow/Block List
            </a>
            <a href="{{ route('buyer.connection') }}"
                class="list-group-item {{ request()->is('buyer/connection') ? 'focused' : '' }}">
                Direct Messages
            </a>
        </div>
        {{-- Seller Sidebar --}}
    @elseif (request()->is('seller/*'))
        <div class="list-group">
            <span class="list-group-item  disabled">
                <h3>Seller Navigation</h3>
            </span>
            <a href="{{ route('seller.myPage') }}"
                class="list-group-item {{ request()->is('seller/my-page') ? 'focused' : '' }}">
                My Page
            </a>
            <a href="{{ route('seller.orderManagementDashboard') }}"
                class="list-group-item {{ request()->is('seller/ordermanagement/dashboard') ? 'focused' : '' }}">
                Order Management
            </a>
            {{-- <a href="#" class="list-group-item">
                Sales Management
            </a> --}}
            <a href="{{ route('seller.follower-list') }}"
                class="list-group-item {{ request()->is('seller/follower-list') ? 'focused' : '' }}">
                Follower List
            </a>
            <a href="{{ route('seller.connection') }}"
                class="list-group-item {{ request()->is('seller/connection') ? 'focused' : '' }}">
                Direct Messages
            </a>
            <a href="{{ route('seller.ranking') }}"
                class="list-group-item {{ request()->is('seller/ranking') ? 'focused' : '' }}">
                Ranking
            </a>
            <a href="{{ route('seller.productslist') }}"
                class="list-group-item {{ request()->is('seller/productslist') ? 'focused' : '' }}">
                Products List
            </a>
            <a href="{{ route('seller.draftlist') }}"
                class="list-group-item {{ request()->is('seller/draftlist') ? 'focused' : '' }}">
                Draft List
            </a>
            <a href="{{ route('seller.produtRegisty') }}"
                class="list-group-item {{ request()->is('seller/product-registry') ? 'focused' : '' }}">
                Product Registry
            </a>
        </div>
        {{-- Admin Sidebar --}}
    @elseif (request()->is('admin/*'))
        <div class="list-group">
            <span class="list-group-item  disabled">
                <h3>Admin Navigation</h3>
            </span>
            <a href="{{ route('admin.users') }}"
                class="list-group-item {{ request()->is('admin/usermanagement') ? 'focused' : '' }}">
                User Management
            </a>
            <a href="{{ route('admin.contentmanagement') }}"
                class="list-group-item {{ request()->is('admin/contentmanagement') ? 'focused' : '' }}">
                Content Management
            </a>
            <a href="{{ route('admin.complainhandling') }}"
                class="list-group-item {{ request()->is('admin/complainhandling') ? 'focused' : '' }}">
                Complain Handling
            </a>
            <a href="{{ route('admin.connection') }}"
                class="list-group-item {{ request()->is('admin/connection') ? 'focused' : '' }}">
                Connection With Buyer/Seller
            </a>
            <a href="{{ route('admin.category') }}"
                class="list-group-item {{ request()->is('admin/category') ? 'focused' : '' }}">
                Category Add/Delete
            </a>
            <a href="{{ route('admin.notifications') }}"
                class="list-group-item {{ request()->is('admin/notification') ? 'focused' : '' }}">
                Notification
            </a>
            {{-- <a href="#" class="list-group-item">
                Navbar/Dropdown
            </a> --}}
            <a href="{{ route('admin.followerfollowinglist') }}"
                class="list-group-item {{ request()->is('admin/followerfollowinglist') ? 'focused' : '' }}">
                Follower/Following List
            </a>
            <a href="{{ route('admin.dashboard') }}"
                class="list-group-item {{ request()->is('admin/dashboard') ? 'focused' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('admin.ranking') }}"
                class="list-group-item {{ request()->is('admin/ranking') ? 'focused' : '' }}">
                Ranking
            </a>
            {{-- Customization Page are not created
            <a href="#" class="list-group-item">
                Customization
            </a> --}}
        </div>
    @endif
</div>
