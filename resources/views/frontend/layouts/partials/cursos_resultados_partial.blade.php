<section id="popular-course" class="popular-course-section ">
    <div class="container">
        <div class="section-title h-100 mt-4 mb-5 headline text-center">
            <span class="subtitle text-uppercase">{{__('Cursos')}}</span>
            {{-- <h2>@lang('labels.frontend.layouts.partials.browse_course_by_category')</h2> --}}
        </div>

        <div id="course-slide-item" class="course-slide">
            
            @foreach($cursos as $item)

            <div class="course-item-pic-text best-course-pic-text relative-position mt-2 ml-1 mb-1 shadow-sm rounded pl-1 pr-1">
                <div class="best-course-pic course-pic relative-position mb-1 w-100" style="background-image: url('{{!empty($item->image_src) ? $item->image_src : asset('images/sem-imagem.jpg')}}')">
                    
                    <div class="course-details-btn">
                        <a class="text-uppercase" href="{{route('open_route.cursos.show.detalhes', [$item->id])}}">
                            + Detalhes 
                        </a>
                    </div>
                    <div class="blakish-overlay"></div>
                    
                </div><!-- /best-course-pic -->
                
                <div class="course-item-text text-left mt-3 pb-3">
                    <div class="course-meta">
                        <span class="course-category text-primary">
                            <a href="{{route('open_route.cursos.buscar',['categoria' => $item->categoria_id])}}">{{$item->nome_categoria}}</a>
                        </span>
                        
                        {{-- @todo --}}
                        {{-- @if ($item->inscritos && intval($item->inscritos) > 0)
                        <span class="course-author">
                            @if ($item->inscritos > 1)
                            {{ $item->inscritos }} {{ __('inscritos')}}
                            @else
                            {{ $item->inscritos }} {{ __('inscrito')}}
                            @endif
                        </span>
                        @endif --}}
                    </div>
                    <div class="course-title mt10 headline pb45 relative-position">
                        <a class="h5 text-dark" href="{{route('open_route.cursos.show.detalhes', [$item->id])}}">{{$item->nome}}</a>
                    </div>
                </div> <!-- /course-item-text -->
            </div><!-- /course-item-pic-text -->
            
            @endforeach

            
        </div>
        


    </div>
</section>

@push('after-scripts')

<script type="text/javascript">
    $(document).ready(function () {
        // $('#course-slide-item').owlCarousel({
        //     margin: 30,
        //     responsiveClass: true,
        //     nav: true,
        //     loop: true,
        //     dots: false,
        //     autoplay: true,
        //     navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        //     smartSpeed: 1000,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         400: {
        //             items: 1
        //         },
        //         600: {
        //             items: 2
        //         },
        //         700: {
        //             items: 2
        //         },
        //         800: {
        //             items: 3
        //         },
        //         1000: {
        //             items: 3

        //         }
        //     }
        // })
    })
</script>
@endpush
