<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #66CDAA;">
    <div class="container">
        <a class="navbar-brand" href="#">My Store Database</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Products") ? 'active' : '' }}" href="/">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Add Item") ? 'active' : '' }}" href="/addform">Add Item</a>
                </li>
            </ul>
        </div>
    </div>
</nav>