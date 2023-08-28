<x-frontend-template>
<!-- section 1: Top 4 article -->
<section>
    <div class="container">
        <div class="row">
            @foreach ($latestPost as $index=>$post)
                @if ($index<4)
                <div class="col-md-12 my-2">
                    <div class="card bg-light">
                        <div class="card-body ">
                           <div class="d-flex justify-content-center align-items-center w-100">
                            <div class="w-75">
                               <a href="/post/{{ $post->id }}" class="text-decoration-none text-black"> <h1> {{ $post->title }}</h1></a>
                           <h6 class="text-muted"> {{ nepalidate($post->created_at) }}</h6>
                            <img src="{{ asset($post->image) }}" class="w-100" alt="{{ $post->image }}">
                            {{-- <br> --}}
                            {{-- {!! $post->description !!} --}}
                            {{-- {!! Str::words($post->description, 20, '...') !!} --}}

                            {{-- <br> --}}
                            {{-- <a href="/post/{{ $post->id }}" class="btn btn-primary btn-sm text-decoration-none text-black">Read More</a> --}}
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<!-- section 1 End -->

<!-- Section Ads 1 -->
<section class="py-2">
    <div class="container">
        <div class="row">
            @foreach ($sectionAds as $index=>$item)
            @if ($index<1)
            <div class="col-md-12">
               <a href="{{ $item->link }}"> <img src="{{ asset($item->image) }}" class="img-fluid"  alt="{{ $item->title }}"></a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- End of Section Ads 1 -->

<!-- section 2: मुख्य सामाचार with Technology update -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- left side -->
            <div class="col-md-9">
                <div class="py-2" style="background-color:#0b6bb5">
                    <h5 class="text-white mx-2">Technology Updates</h5>
                </div>
                <div class="row">
                    <div class="col-md-9 my-2">
                        <img src="{{ asset($technologies[0]->image) }}" class="img-fluid py-1" alt="Technology image">
                        <a href="/post/{{ $technologies[0]->id }}" class="text-decoration-none text-black"><h3>{{ Str::words($technologies[0]->title, 7, '...') }}</h3></a>
                        <h6 class="text-muted">
                            {{ nepalidate($technologies[0]->created_at) }}
                        </h6>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            @foreach ($technologies as $index=>$item)
                            @if ($index>0 && $index<3)
                            <div class="col-md-12 my-2">
                                <img src="{{ asset($item->image) }}" class="img-fluid" alt="Technology Image">
                               <a href="/post/{{ $item->id }}" class="text-decoration-none text-black"> <h5>{{ $item->title }}</h5></a>
                                <div>
                                    <h6 class="text-muted">{{ nepalidate($item->created_at) }}</h6>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right side -->
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Latest Post</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Popular Post</button>

                            </div>

                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <!-- Latest post -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                @foreach ($latestPost as $index=>$item)
                                @if ($index<4)
                                <div class="card my-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 py-1">
                                                <img src="{{ asset($item->image) }}" class="img-fluid rounded" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                {{-- <h6>{{ Str::words($item->title, 7, '...') }}</h6> --}}
                                                <a href="/post/{{ $item->id }}" class="text-decoration-none text-black"><h6>{{ $item->title }}</h6></a>
                                                <div>
                                                    <h6 class="text-muted">{{ nepalidate($item->created_at) }}</h6>
                                                </div>
                                            </div>
                                           </div>
                                    </div>
                                   </div>
                                @endif
                                @endforeach

                            </div>
                            <!-- Latest Post End -->

                            <!-- Popular Post -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                            </div>
                            <!-- Popular Post End -->
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 2 End  -->

<!-- Section-Ads 2 -->
<section class="py-2">
    <div class="container">
        <div class="row">
            @foreach ($sectionAds as $index=>$item)
            @if ($index<2 && $index>0)
            <div class="col-md-12">
              <a href="{{ $item->link }}"><img src="{{ asset($item->image) }}" class="img-fluid"  alt="{{ $item->title }}"></a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- End of Section Ads 2 -->

<!-- Section 5:Society -->
<section style="background-color:#c7ac34">
    <div class="container">
        <div class="row">
            <!-- Left side -->
            <div class="col-md-9 py-2">
                <div class="py-2" style="background-color:#0b6bb5">
                    <h5 class="text-white mx-2">Society</h5>
                </div>

                <div class="row py-2">
                    @foreach ($society as $index=>$item)
                        @if ($index<7)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <a href="/post/{{ $item->id }}" class="text-decoration-none text-black"><h5 class="card-title">{{ Str::words($item->title, 8, '...') }}</h5></a>
                                  <p class="card-text">
                                    {{-- {!! Str::words($item->description, 50, '...') !!} --}}
                                    {{-- {!! $item->description !!} --}}
                                  </p>
                                  <a href="/post/{{ $item->id }}" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- End of left side -->

            <!-- Right side -->
            <div class="col-md-3 py-2">
                <div class="row">
                    @foreach ($sideAds as $index=>$item)
                    @if ($index>3 && $index<5)
                    <div class="col-md-12 mb-2">
                        <a href="{{ $item->link }}"><img src="{{ asset($item->image) }}" class="img-fluid" alt="{{ $item->title }}"></a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <!-- End of Right side -->
        </div>
    </div>
</section>
<!-- End of section 4 -->

<section class="py-5">
    <div class="container">
        <div class="d-flex">
            <div class="w-75">
                <!-- section 3: politics -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="py-2" style="background-color:#0b6bb5">
                            <h5 class="text-white mx-2">Politics</h5>
                        </div>
                        <div class="row">
                            <div class="col-md-9 my-2">
                                <img src="{{ asset($politics[0]->image) }}" class="img-fluid" alt="">
                                <a href="/post/{{ $politics[0]->id }}" class="text-decoration-none text-black"><h3>{{ Str::words($politics[0]->title, 7, '...') }}</h3></a>
                                <h6 class="text-muted">
                                    {{ nepalidate($politics[0]->created_at) }}
                                </h6>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    @foreach ($politics as $index=>$item)
                                    @if ($index>0 && $index<3)
                                    <div class="col-md-12 my-2">
                                        <img src="{{ asset($item->image) }}" class="img-fluid" alt="Technology Image">
                                       <a href="/post/{{ $item->id }}" class="text-decoration-none text-black"> <h5>{{ $item->title }}</h5></a>
                                        <div>
                                            <h6 class="text-muted">{{ nepalidate($item->created_at) }}</h6>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Politics -->


                <!-- Section-Ads 3 -->
                <section class="py-2">
                    <div class="container">
                        <div class="row">
                            @foreach ($sectionAds as $index=>$item)
                            @if ($index<3 && $index>1)
                            <div class="col-md-12">
                                <a href="{{ $item->link}}"><img src="{{ asset($item->image) }}" class="img-fluid"  alt="{{ $item->title }}"></a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- End of Section Ads 3 -->


                <!-- section 4:Sports -->
                <section class="py-2">
                    <div class="container">
                        <div class="row">
                            <!-- left side -->
                            <div class="col-md-12">
                                <div class="py-2" style="background-color:#0b6bb5">
                                    <h5 class="text-white mx-2">Sports</h5>
                                </div>
                                <div class="row py-2">
                                    @foreach ($sports as $index=>$item)
                                        @if ($index<7)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                <a href="/post/{{ $item->id }}" class="text-decoration-none text-black"><h5 class="card-title">{{ Str::words($item->title, 8, '...') }}</h5></a>
                                                <p class="card-text">
                                                    {{-- {!! Str::words($item->description, 50, '...') !!} --}}
                                                    {{-- {!! $item->description !!} --}}
                                                </p>
                                                <a href="/post/{{ $item->id }}" class="btn btn-primary">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <!-- End of left side -->
                        </div>
                    </div>
                </section>
                <!-- End of section 4 -->
            </div>

                <!-- This is Side Ads Section -->
            <div class="w-25">
                <div class="row">
                    @foreach ($sideAds as $item)
                    <div class="col-md-12 mb-2">
                       <a href="{{ $item->link }}"> <img src="{{ asset($item->image) }}" class="img-fluid" alt="{{ $item->title }}"></a>

                    </div>
                    @endforeach
                </div>
            </div>
            <!-- End of side Ads -->
        </div>
    </div>
</section>


</x-frontend-template>
