@extends('layoutweb.index')
@section('content')

    <section id="headernhochung" class="align-items-center">
        <div class="container">
            <div class="khoichu ">
                <h1>Service</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="tinhnang2 feature-section-two">
      <div class="wcu-section section-padding">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="section-title">
                <span class="title-top">Why Choose Us</span>
                <h1>
                  Since1990 We Provides <br />
                  Professional Service
                </h1>
              </div>
              <div class="listcart">
                <div class="car">
                  <div class="car-header">
                    <button type="button" class="active">
                      Why Choose Our Product?
                    </button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
                <div class="car">
                  <div class="car-header">
                    <button type="button">
                      Meet Respond Testing To Make Build?
                    </button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
                <div class="car">
                  <div class="car-header">
                    <button type="button">
                      Css Gird Chanllenge:Build A Template?
                    </button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
                <div class="car">
                  <div class="car-header">
                    <button type="button">Why Choose Our Product?</button>

                    <div class="car-body">
                      But must explain to you how all this mistaken idea
                      denounie pleasure and praising pain was borand omnis dolor
                      Tempbus autem officiis debitis rerum necessitatibus saepe
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-accordion-img text-right">
                <img src="public/web/images/img/tile-gallery/03.jpg" alt="Image" />
                <div class="degin-shape">
                  <div class="shape-one">
                    <img src="public/web/images/img/shape/11.png" alt="Shape" />
                  </div>
                  <div class="shape-two">
                    <img src="public/web/images/img/shape/12.png" alt="Shape" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="dichvu service-section section-padding section-bg">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					<span class="title-top">Our Services</span>
					<h1>We Provide Most Exclusive <br> Hotel &amp; Room Services </h1>
				</div>

				<!-- Service Boxes -->
				<div class="row">
          <?php $i = 1 ?>
          @foreach($CategoryService as $Cate)
					<div class="col-lg-4 col-md-6">
						<!-- SingleBox -->
            <div class="single-service-box service-white-bg text-center wow fadeIn  animated" data-wow-duration="1500ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeIn;">
            
							<span class="service-counter">0{{$i}}</span>
							<div class="service-icon">
								<img src="public/uploads/images/CategoryService/{{$Cate->image}}" alt="Icon" class="first-icon">
								<img src="public/uploads/images/CategoryService/{{$Cate->image_hover}}" alt="Hover Icon" class="second-icon">
							</div>
							<h4>{{$Cate->name}}</h4>
							<p>Great explorer of the truth the ter-blade human happiness one reject</p>
							<a href="" class="read-more">read more <i class="fas fa-long-arrow-alt-right"></i></a>
						</div>
          </div>
          <?php $i++ ?>
          @endforeach
				</div>
			</div>
		</section>

@stop