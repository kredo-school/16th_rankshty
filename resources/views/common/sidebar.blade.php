<div class="col-3">
    {{-- Buyer Sidebar --}}
    @if (request()->is('buyer/*'))
        <div class="list-group">
            <span class="list-group-item">
                <h3>Buyer Navigation</h3>
            </span>
            <a href="#" class="list-group-item">
                My Page
            </a>
            <a href="#" class="list-group-item">
                Order History
            </a>
            <a href="#" class="list-group-item">
                Favorites List
            </a>
            <a href="#" class="list-group-item">
                Shopping Cart
            </a>
            <a href="#" class="list-group-item">
                Follow/Block List
            </a>
        </div>
        {{-- Seller Sidebar --}}
    @elseif (request()->is('Seller/*'))
        <div class="list-group">
            <span class="list-group-item">
                <h3>Seller Navigation</h3>
            </span>
            <a href="#" class="list-group-item">
                My Page
            </a>
            <a href="#" class="list-group-item">
                Order Management
            </a>
            <a href="#" class="list-group-item">
                Sales Management
            </a>
            <a href="#" class="list-group-item">
                Direct Messages
            </a>
            <a href="#" class="list-group-item">
                Ranking
            </a>
            <a href="#" class="list-group-item">
                Products List
            </a>
            <a href="#" class="list-group-item">
                Draft List
            </a>
        </div>
        {{-- Admin Sidebar --}}
    @elseif (request()->is('admin/*'))
        <div class="list-group">
            <span class="list-group-item">
                <h3>Admin Navigation</h3>
            </span>
            <a href="#" class="list-group-item">
                User Management
            </a>
            <a href="#" class="list-group-item">
                Content Management
            </a>
            <a href="#" class="list-group-item">
                Complain Handling
            </a>
            <a href="#" class="list-group-item">
                Connection With Buyer/Seller
            </a>
            <a href="#" class="list-group-item">
                Category Add/Delete
            </a>
            <a href="#" class="list-group-item">
                Notification
            </a>
            <a href="#" class="list-group-item">
                Navbar/Dropdown
            </a>
            <a href="#" class="list-group-item">
                Follower/Following List
            </a>
            <a href="#" class="list-group-item">
                Dashboard
            </a>
            <a href="#" class="list-group-item">
                Ranking
            </a>
            <a href="#" class="list-group-item">
                Customization
            </a>
        </div>
    @endif
</div>
