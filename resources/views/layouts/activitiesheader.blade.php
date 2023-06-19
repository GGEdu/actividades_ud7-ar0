
<div class="Center">
    <div class="site-logo">
        <h1><a href="{{ route('activities.index') }}">D<span>W</span>E<span>S</span></a></h1>
    </div>
    <div id="mobile_sec">
    <div class="mobile"><i class="fa fa-bars"></i><i class="fa fa-times"></i></div>
    <div class="menumobile">
        <!-- \\ Begin Navigation \\ -->
        <nav class="Navigation">
            <ul class="d-md-flex justify-content-end">
            <li><a href="{{ route('activities.index') }}">Todas</a></li>    
                @foreach($phases as $phase)
                    <li>
                        <a href="{{ route('activities.index', ['phase' => $phase->phase]) }}">{!! $phase->phase !!}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- // End Navigation // -->
    </div>
    </div>
    <div class="clear"></div>
</div>
