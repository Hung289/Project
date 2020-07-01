<section id="icontrenfooter">
      <div class="container">
        <div class="row">
          <div class="owl-carousel owl-theme" id="mot">  
            @foreach($brands as $brand)
            <div class="item">
              <div class="ngoaianh1">
                <a href="">
                  <img src="public/uploads/images/Brand/{{$brand->logo}}" alt="Ảnh thương hiệu" />
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        
      </div>
    </section>