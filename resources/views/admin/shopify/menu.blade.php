<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <h1><a href="/" class="navbar-brand">DryRun Pro<sup>Ver 1</sup></a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route("admin.shopify-integration.index") }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.shopify-integration.bulkMigration") }}">Bulk Migration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.shopify-integration.selectiveMigration") }}">Selective Migration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.shopify-integration.themeDeployments") }}">Theme Deployments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.shopify-integration.history") }}">History & Rollback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("admin.shopify-integration.settings") }}">Settings</a>
                    </li>
                </ul>
                <a href="#">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 7.84424H12.3795C12.2419 7.03933 11.8579 6.29697 11.2804 5.71956C10.703 5.14214 9.96067 4.75813 9.15576 4.62051V0C11.1841 0.156681 13.0895 1.03344 14.5281 2.47195C15.9666 3.91046 16.8433 5.81592 17 7.84424ZM17 9.15576C16.8433 11.1841 15.9666 13.0895 14.5281 14.5281C13.0895 15.9666 11.1841 16.8433 9.15576 17V12.3795C9.96067 12.2419 10.703 11.8579 11.2804 11.2804C11.8579 10.703 12.2419 9.96067 12.3795 9.15576H17ZM0.00131143 9.15576H4.62182C4.75937 9.96049 5.14318 10.7027 5.72034 11.2801C6.2975 11.8575 7.03957 12.2416 7.84424 12.3795V17C5.81592 16.8433 3.91046 15.9666 2.47195 14.5281C1.03344 13.0895 0.156681 11.1841 0 9.15576H0.00131143ZM0.00131143 7.84424C0.157952 5.81612 1.03452 3.91084 2.47277 2.47235C3.91101 1.03387 5.81615 0.15698 7.84424 0V4.62051C7.03933 4.75813 6.29697 5.14214 5.71956 5.71956C5.14214 6.29697 4.75813 7.03933 4.62051 7.84424H0H0.00131143Z" fill="#29845A" />
                    </svg>
                    Help
                </a>
            </div>
        </div>
    </nav>
</header>
