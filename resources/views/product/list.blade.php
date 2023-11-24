<div id="tab-content">
    <div id="tab-content-1" class="tab-content-item" style="display: block">
        <div class="list-sps">
            <div class="row">
                @foreach ($products as $key => $product)
                    
                    <div class="box-product box_tab_index prdWrapper pro-loop "
                    >
                        <div class="item col-lg-3 col-md-4 col-xs-6 col-sm-6">
                            <div class="inner-item sold-out product-item" 
                                data-img="">
                                <div class="p-image">
                                    <a class="a-image"
                                        href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                                        <img data-sizes="auto"
                                            src="{{$product->thumb}}"
                                            {{-- data-src="https://pos.nvncdn.net/5a10ca-97757/ps/20220316_BA58ynpFAIIWCRxZK5EXOPds.jpeg" --}}
                                            class="attachment-medium size-medium wp-post-image lazyload productHover productHover37834087"
                                            alt="Giày Nike Air Force 1 Shadow SE Women’s “Solar Red” DB3902-100" />
                                    </a>
                                    <div class="btn-quickview tp_button" ><i
                                            class="fal fa-eye"></i><span> Xem nhanh</span></div>
                                </div>
                                <div class="box-text">
                                    <p class="title"><a class="tp_product_name"
                                            href=""
                                            title="Giày Nike Air Force 1 Shadow SE Women’s “Solar Red” DB3902-100">{{$product->name}}</a>
                                    </p>

                                    <p class="price">
                                        <strong class="f-left">
                                            <span class="tp_product_price">{{$product->price}} ₫ </span>
                                        </strong>
                                    </p>
                                    <p class="discount-percent"></p>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>