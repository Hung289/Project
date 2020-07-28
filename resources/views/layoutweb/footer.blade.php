<footer>
  <div class="container">
    <div class="row tongoai">
      <div class="col-md-4 col-sm-12 footer-left">
        <div class="footerlogo">
          <div class="khoilogo">
            @foreach($logo as $l)
            <img src="public/uploads/images/System/{{$l->data}}" alt="" />
            @endforeach
            <div class="chulogo">
              <p class="to">Avson</p>
              <p class="nho">Hotel & room Services</p>
            </div>
          </div>
          <div class="chuduoilogo clearfix">

          </div>
          <div class="footeremail">
            <img src="public/web/images/images/emailicon_03.png" alt="" />
            @foreach($email as $e)
            {{$e->data}}
            @endforeach
          </div>
          <div class="footersdt">
            <img src="public/web/images/02_Home_02_06.png" alt="" />
            @foreach($hostline as $e)
            {{$e->data}}
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 footer-mid">
        <div class="chuto">
          Quick links
        </div>
        <div class="listCateFoot">
          <div class="row">
            <div class="col-md-6">
              <nav>
                <ul>
                  <li><a href="" class="active">Latest Services</a></li>
                  <li><a href="">Need A Career</a></li>
                  <li><a href="">Meet The Team</a></li>
                  <li><a href="">Setting & Privacy</a></li>
                  <li><a href="">Case Study</a></li>
                  <li><a href="">Company Fact</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-md-6">
              <nav>
                <ul>
                  <li><a href="">Our History</a></li>
                  <li><a href="">My Account</a></li>
                  <li><a href="">Web Security</a></li>
                  <li><a href="">Domain & hosting</a></li>
                  <li><a href="">Server System</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 footer-right">
        <div class="chuto">
          Recent New
        </div>
        <div class="row2">
          <div class="khunganh">
            <img src="public/web/images/img/recent-post/01.jpg" alt="" />
          </div>
          <div class="text active">
            <p class="tren">Using Low Vision As My Me Teach WordPress</p>
            <p>05 Jan 20</p>
          </div>
        </div>
        <div class="row2">
          <div class="khunganh">
            <img src="public/web/images/img/recent-post/02.jpg" alt="" />
          </div>
          <div class="text">
            <p>Using Low Vision As My Me Teach WordPress</p>
            <p>05 Jan 20</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row tongoatduoi">
      <div class="col-md-6 footerUnderLeft">
        Copyright 2020. All Rights Reserver
      </div>
      <div class="col-md-6 footerUnderRight">
        <nav>
          <ul>
            @foreach($mangIcon as $iS)
            <li><img src="public/uploads/images/System/{{$iS}}" alt="" /></li>
            @endforeach
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>