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
                  @foreach($CategoryRoom as $CR)
                  <li><a href="{{route('RoomListMaster',['id'=>$CR->id])}}" class="{{($loop->index == 0) ? "active" :""}}">{{$CR->name}}</a></li>
                  @endforeach
                </ul>
              </nav>
            </div>
            <div class="col-md-6">
              <nav>
                <ul>
                  @foreach($CategoryService as $CS)
                  <li><a href="{{route('serviceMasterNotIdRoom',['id'=>$CS->id])}}">{{$CS->name}}</a></li>
                  @endforeach
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
        @foreach($blog_footer as $b_f)
        <div class="row2">
          <div class="khunganh">
            @foreach($blogImages as $bI)
            <?php $check = ($bI->blog_id == $b_f->id) ? $bI->image : ""?>
            @if($check != "")
            <a href="{{route('blogDetail',[$b_f->id])}}"></a>
            <img src="public/uploads/images/Blog/{{$check}}" alt="" style="width:100%;height:100%" />
            @break
            @endif
            @endforeach
          </div>
          <div class="text active">
            <p class="tren" style="height:50px; overflow:hidden"><a href="{{route('blogDetail',[$b_f->id])}}">{{$b_f->title}}</a></p>
            <p>{{$b_f->created_at}}</p>
          </div>
        </div>
        @endforeach
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