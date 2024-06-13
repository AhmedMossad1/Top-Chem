<div class="sidebar" data-color="purple" data-background-color="black" data-image="/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a class="simple-text logo-normal" href="{{ route('frontend.landing') }}" >
        TOP CHEM
    </a>
    </div>
    <div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item {{ is_active('home') }}">>
        <a class="nav-link" href="{{ route('admin.home') }}">
            <i class="material-icons">dashboard</i>
            <p>Home</p>
        </a>
        </li>
        <li class="nav-item {{ is_active('users') }}">
            <a  class="nav-link"  href="{{ route('users.index') }}">
                <i class="material-icons">person</i>
            <p>Users</p>
            </a>
        </li>
        <li class="nav-item {{ is_active('categories') }}">
            <a  class="nav-link"  href="{{ route('categories.index') }}">
                <i class="material-icons">bubble_chart</i>
                <p>Categories</p>
            </a>
        </li>


        <li class="nav-item {{ is_active('products') }}">
            <a  class="nav-link"  href="{{ route('products.index') }}">
                <i class="material-icons">shopping_bag</i>
                <p>Products</p>
            </a>
            </li>
            <li class="nav-item {{ is_active('messages') }}">
                <a  class="nav-link"  href="{{ route('messages.index') }}">
                    <i class="material-icons">mark_email_unread</i>
                    <p>Messages</p>
                </a>
                </li>
        <!-- your sidebar here -->
    </ul>
    </div>
</div>
