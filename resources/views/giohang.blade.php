<div id="site-cart-handle" class="icon-cart" aria-label="Open cart" title="Giỏ hàng">
    <a href="/carts">
        <span class="cart-menu" aria-hidden="true">
            <i class="far fa-shopping-cart"></i>
            <span class="count-holder">
                <span class="count">({{ is_null(Illuminate\Support\Facades\Session::get('carts'))? 0 : count(Illuminate\Support\Facades\Session::get('carts'))}})</span>
            </span>
        </span>
    </a>
    <div class="loadBodyCart"></div>
</div>
