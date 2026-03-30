<nav class="header-nav">
    <div class="header-container">
        <a class="header-logo" href="/">BigPizza</a>

        <ul class="header-links-container">
            <li><a href="/">Home</a></li>
            <li><a href="/">Menu's</a></li>
            <li><a href="/tickets">Pizza</a></li>
            <li><a href="/jazz">Ribs</a></li>
            <li><a href="/yummy">Burgers</a></li>
            <li><a href="/history">Side Dishes</a></li>
            <li><a href="/stories">Desserts</a></li> 
            <li><a href="/dance">Drinks</a></li>
        </ul>

        <div class="header-user-section">
            <? if(isset($vie_model->user)): ?>
                
            <? else: ?>
                <a href="/login" class="header-btn-login">Login</a>
            <? endif; ?>

            <a href="/cart" class="header-cart">
                <i class="bi bi-cart3"></i>
                <span class="cart-badge">0</span>
            </a>
        </div>
    </div>
</nav>