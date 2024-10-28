<div class="drawer z-50 row-span-1">
    <input id="nav-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <div class="navbar bg-base-100 shadow-xl p-4">
            <div class="navbar-start gap-8">
                <label for="nav-drawer" class="btn btn-primary drawer-button">Menu</label>
            </div>
            <div class="navbar-center">
                <a class="text-xl font-bold"><?= $title ?></a>
            </div>
            <div class="navbar-end">
                <label class="grid cursor-pointer place-items-center">
                    <input type="checkbox" value="dim"
                        class="toggle theme-controller bg-base-content col-span-2 col-start-1 row-start-1"
                        onchange="themeChange()" id="themeCheckbox" />
                    <svg class="stroke-base-100 fill-base-100 col-start-1 row-start-1"
                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="5" />
                        <path
                            d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                    </svg>
                    <svg class="stroke-base-100 fill-base-100 col-start-2 row-start-1"
                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </label>
            </div>
        </div>
    </div>
    <div class="drawer-side">
        <label for="nav-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-300 text-base-content min-h-full w-80 gap-4">
            <li><a class="btn" href="/">Homepage</a></li>
            <li><a class="btn" href="/animals">Animals</a></li>
            <li><a class="btn" href="/events">Events</a></li>
        </ul>
    </div>
</div>