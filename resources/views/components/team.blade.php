<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h2 class="abtp-title">Meet Our Team</h2>
        </div>
        @forelse($teams as $key => $team)
        <div class="col-md-4 col-sm-6">
            <div class="team-wrapper">
                <div class="team-img">
                    <img src="{{$team->image}}">
                    <ul class="social-links">
                        <li class="social-facebook">
                            <a class="tooltip-top" target="_blank" href="{{$team->facebook}}" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="{{$team->twitter}}" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="{{$team->instagram}}" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="{{$team->linkedin}}" data-tooltip="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3>{{$team->name}}</h3>
                    <span>{{$team->designation}}</span>
                </div>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</div>
