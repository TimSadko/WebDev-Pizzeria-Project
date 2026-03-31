<nav class="header-nav">
    <div class="header-container">
        <a class="header-logo" href="/">BigPizza</a>

        <ul class="header-links-container">
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu's</a></li>
            <li><a href="/pizza">Pizza</a></li>
            <li><a href="/rib">Ribs</a></li>
            <li><a href="/burger">Burgers</a></li>
            <li><a href="/side">Side Dishes</a></li>
            <li><a href="/dessert">Desserts</a></li> 
            <li><a href="/drink">Drinks</a></li>
        </ul>

        <div class="header-user-section">
            <? if(isset($vie_model->user)): ?>
                
            <? else: ?>
                <a href="/login" class="header-btn-login">Login</a>
            <? endif; ?>

            <a href="/cart" class="header-cart">
                <i class="bi bi-cart3"></i>
                <span class="header-cart-number">0</span>
            </a>
        </div>
    </div>
</nav>