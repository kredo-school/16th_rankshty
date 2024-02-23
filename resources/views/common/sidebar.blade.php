<div class="col-3 sidebar">
    {{-- Buyer Sidebar --}}
    @if (request()->is('buyer/*'))
        <div class="list-group">
            <span class="list-group-item disabled">
                <h3>Buyer Navigation</h3>
            </span>
            <a href="{{ route('buyer.myPage') }}" class="list-group-item">
                My Page
            </a>
            <a href="{{ route('buyer.purchase-history') }}" class="list-group-item">
                Order History
            </a>
            <a href="{{ route('buyer.favorite') }}" class="list-group-item">
                Favorites List
            </a>
            <a href="{{ route('buyer.cart') }}" class="list-group-item">
                Shopping Cart
            </a>
            <a href="{{ route('buyer.followblock') }}" class="list-group-item">
                Follow/Block List
            </a>
        </div>
        {{-- Seller Sidebar --}}
    @elseif (request()->is('seller/*'))
        <div class="list-group">
            <span class="list-group-item  disabled">
                <h3>Seller Navigation</h3>
            </span>
            <a href="{{ route('seller.myPage') }}" class="list-group-item">
                My Page
            </a>
            <a href="{{ route('seller.orderManagementDashboard') }}" class="list-group-item">
                Order Management
            </a>
            {{-- <a href="#" class="list-group-item">
                Sales Management
            </a> --}}
            <a href="{{ route('seller.follower-list') }}" class="list-group-item">
                Follower List
            </a>
            <a href="{{ route('seller.connection') }}" class="list-group-item">
                Direct Messages
            </a>
            <a href="{{ route('seller.ranking') }}" class="list-group-item">
                Ranking
            </a>
            <a href="{{ route('seller.productslist') }}" class="list-group-item">
                Products List
            </a>
            <a href="{{ route('seller.draftlist') }}" class="list-group-item">
                Draft List
            </a>
            <a href="{{ route('seller.produtRegisty') }}" class="list-group-item">
                Product Registry
            </a>
        </div>
        {{-- Admin Sidebar --}}
    @elseif (request()->is('admin/*'))
        <div class="list-group">
            <span class="list-group-item  disabled">
                <h3>Admin Navigation</h3>
            </span>
            <a href="{{ route('admin.users') }}" class="list-group-item">
                User Management
            </a>
            <a href="{{ route('admin.contentmanagement') }}" class="list-group-item">
                Content Management
            </a>
            <a href="{{ route('admin.complainhandling') }}" class="list-group-item">
                Complain Handling
            </a>
            <a href="{{ route('admin.connection') }}" class="list-group-item">
                Connection With Buyer/Seller
            </a>
            <a href="{{ route('admin.category') }}" class="list-group-item">
                Category Add/Delete
            </a>
            <a href="{{ route('admin.notifications') }}" class="list-group-item">
                Notification
            </a>
            <a href="#" class="list-group-item">
                Navbar/Dropdown
            </a>
            <a href="{{ route('admin.followerfollowinglist') }}" class="list-group-item">
                Follower/Following List
            </a>
            <a href="{{ route('admin.dashboard') }}" class="list-group-item">
                Dashboard
            </a>
            <a href="{{ route('admin.ranking') }}" class="list-group-item">
                Ranking
            </a>
            {{-- <a href="#" class="list-group-item">
                Customization
            </a> --}}
        </div>
    @endif
</div>
