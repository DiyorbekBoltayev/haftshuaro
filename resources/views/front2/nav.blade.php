<div class="navbar-div">
    <div class="rectangle-div9"></div>
    <div class="component-47-div">
        <div class="group-div14">
            <div class="frame-div5">
                <img
                    class="language-black-24dp-1-1"
                    alt=""
                    src="{{asset('f/public/language-black-24dp-1-1.svg')}}"
                />

                <div class="dropdown-container-div">
                    <button class="dropdown-button">{{  strtoupper(\Illuminate\Support\Facades\Session::get('locale'))}}</button>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="{{route('setlocale','uz')}}">UZ</a></li>
                            <li><a href="{{route('setlocale','ru')}}">RU</a></li>
                            <li><a href="{{route('setlocale','en')}}">EN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="component-40-div">
        <div class="bosh-sahifa-div"><a href="{{route('front.bosh_sahifa')}}"  style="text-decoration: none; color: #646260">Bosh sahifa</a></div>
    </div>
    <div class="component-43-div">
        <div class="bosh-sahifa-div">
            <a href="{{route('front.kutubxonam')}}"  style="text-decoration: none; color: #646260">Kutubxona</a>
            </div>
    </div>
    <div class="component-44-div">
        <div class="bosh-sahifa-div">
            <a href="{{route('front.maqola',1)}}"  style="text-decoration: none; color: #646260">Biz haqimizda</a>

        </div>
    </div>
    <div class="component-45-div">
        <div class="bosh-sahifa-div">
            <a href="{{route('front.tadqiqotlar')}}"  style="text-decoration: none; color: #646260">Tadqiqotlar</a>
            </div>
    </div>
    <div class="component-46-div">
        <img class="language-black-24dp-1-1" alt="" src="{{asset('f/public/frame4.svg')}}" />
        <div class="bosh-sahifa-div">+998 99 501 67 16</div>
    </div>
    <div class="line-div1"></div>
    <div class="haft-shuaro-div1">Haft Shuaro</div>
</div>
