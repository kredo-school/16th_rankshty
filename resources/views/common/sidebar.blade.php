    {{-- Buyer Sidebar --}}
    {{-- @if (request()->is('buyer/*')) --}}
    <div class="col-3">
        <div class="list-group">
            <span class="list-group-item">
                <h3>Buyer Navigation</h3>
            </span>
            {{-- <a href="{{ route('buyer.mypage') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('buyer.mypage') ? 'active' : '' }}">
                My Page
            </a>
            {{-- <a href="{{ route('buyer.orderhistory') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('buyer.orderhistory') ? 'active' : '' }}">
                Order History
            </a>
            {{-- <a href="{{ route('buyer.favoriteslist') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('buyer.favoriteslist') ? 'active' : '' }}">
                Favorites List
            </a>
            {{-- <a href="{{ route('buyer.shoppingcart') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('buyer.shoppingcart') ? 'active' : '' }}">
                Shopping Cart
            </a>
            {{-- <a href="{{ route('buyer.followblocklist') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('buyer.followblocklist') ? 'active' : '' }}">
                Follow/Block List
            </a>
        </div>
    </div>
    {{-- @endif --}}

    {{-- Seller Sidebar --}}
    {{-- @if (request()->is('Seller/*')) --}}
    <div class="col-3">

        <div class="list-group">
            <span class="list-group-item">
                <h3>Seller Navigation</h3>
            </span>
            {{-- <a href="{{ route('seller.mypage') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('seller.mypage') ? 'active' : '' }}">
                My Page
            </a>
            {{-- <a href="{{ route('seller.ordermanagement') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('seller.ordermanagement') ? 'active' : '' }}">
                Order Management
            </a>
            {{-- <a href="{{ route('seller.salesmanagement') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('seller.salesmanagement') ? 'active' : '' }}">
                Sales Management
            </a>
            <a href="#" class="list-group-item {{ request()->is('seller.directmessages') ? 'active' : '' }}">
                Direct Messages
            </a>
            <a href="#" class="list-group-item {{ request()->is('seller.ranking') ? 'active' : '' }}">
                Ranking
            </a>
            <a href="#" class="list-group-item {{ request()->is('seller.productslist') ? 'active' : '' }}">
                Products List
            </a>
            <a href="#" class="list-group-item {{ request()->is('seller.draftlist') ? 'active' : '' }}">
                Draft List
            </a>
        </div>
    </div>
    {{-- @endif --}}

    {{-- Admin Sidebar --}}
    {{-- @if (request()->is('admin/*')) --}}
    <div class="col-3">
        <div class="list-group">
            <span class="list-group-item">
                <h3>Admin Navigation</h3>
            </span>
            {{-- <a href="{{ route('admin.usermanagement') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('admin/usermanagement') ? 'active' : '' }}">
                User Management
            </a>
            {{-- <a href="{{ route('admin.contentmanagement') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('admin/contentmanagement') ? 'active' : '' }}">
                Content Management
            </a>
            {{-- <a href="{{ route('admin.complainhandling') }}" --}}
            <a href="#" class="list-group-item {{ request()->is('admin/complainhandling') ? 'active' : '' }}">
                Complain Handling
            </a>
            <a href="#"
                class="list-group-item {{ request()->is('admin/connectionwithbuyerseller') ? 'active' : '' }}">
                Connection With Buyer/Seller
            </a>
            <a href="#" class="list-group-item {{ request()->is('admin/categoryadddelete') ? 'active' : '' }}">
                Category Add/Delete
            </a>
            <a href="#" class="list-group-item {{ request()->is('admin/notification') ? 'active' : '' }}">
                Notification
            </a>
            <a href="#" class="list-group-item {{ request()->is('admin/navbardropdown') ? 'active' : '' }}">
                Navbar/Dropdown
            </a>
            <a href="#"
                class="list-group-item {{ request()->is('admin/followerfollowinglist') ? 'active' : '' }}">
                Follower/Following List
            </a>
            <a href="#" class="list-group-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
            <a href="#" class="list-group-item {{ request()->is('admin/ranking') ? 'active' : '' }}">
                Ranking
            </a>
            <a href="#" class="list-group-item {{ request()->is('admin/customization') ? 'active' : '' }}">
                Customization
            </a>
        </div>
    </div>
    {{-- @endif --}}
