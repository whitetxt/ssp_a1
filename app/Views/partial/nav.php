<div class="drawer z-50">
    <input id="nav-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <div class="navbar bg-base-100 shadow-xl p-4">
            <div class="navbar-start gap-8">
                <label for="nav-drawer" class="btn btn-outline btn-primary drawer-button">Menu</label>
            </div>
            <div class="navbar-center">
                <a class="text-xl font-bold"><?= $title ?></a>
            </div>
            <div class="navbar-end">
            </div>
        </div>
    </div>
    <div class="drawer-side">
        <label for="nav-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <!-- Sidebar content here -->
            <li><a class="btn" href="/">Homepage</a></li>
            <li><a class="btn" href="/animals">Animals</a></li>
        </ul>
    </div>
</div>