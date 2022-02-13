<div class="wrap__side-nav">
    <h2 class="heading fs-4 mb-6"><i class="fas fa-tools mr-1"></i>Admin Panel</h2>
    <h3 class="fs-2 mb-2">Main Dashboard</h3>
    <ul class="mb-4">
        <li><a href="/"><i class="fas fa-home mr-1"></i>Home</a></li>
        <li><a href="/inventory"><i class="fas fa-times-circle mr-1"></i>Inventory</a></li>
    </ul>
    <h3 class="fs-2 mb-2">Store Management</h3>
    <ul class="mb-4">
        <li><a href="{{ route('products.index') }}"><i class="fas fa-database mr-1"></i>All Products</a></li>
        <li><a href="{{ route('orders.index') }}"><i class="fas fa-cart-arrow-down mr-1"></i>Orders</a></li>
        <li><a href="/completed-orders"><i class="fas fa-check-square mr-1"></i>Completed Orders</a></li>
        <li><a href="/cancelled-orders"><i class="fas fa-times-circle mr-1"></i>Cancelled Orders</a></li>
        <li><a href="{{ route('expenses.index') }}"><i class="fas fa-times-circle mr-1"></i>Cost of Sales</a></li>
    </ul>
</div>