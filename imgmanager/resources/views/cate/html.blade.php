
<li><a href="/" class="">Home</a>
          @foreach($cates as $cate)

          @if($cate->parent == 0)
  

        <li><a onclick="myCategory({{$cate->id}})" aria-expanded="false" class="">{{$cate->cname}}</a>

          <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-left" style="left: 0px; top: 80px;">

            <ul class="uk-nav uk-navbar-dropdown-nav">
              
              @foreach($cates as $cate1)


              @if($cate1->parent == $cate->id)


              <li class="uk-active"><a onclick="myCategory({{$cate1->id}})">{{$cate1->cname}}</a></li>

   @endif

                @endforeach
            </ul>

          </div>

        </li>

        @endif


         @endforeach