        <aside class="col-md-4 blog-sidebar">

                      @if(Auth::check())
                        @if(Auth::user()->is_admin)

            <div class="text-center mb-3">
              {!! Form::open(array('route' => 'blogs.post','method'=>'GET','files'=>'false')) !!}
              {!! Form::submit('Post News',['class'=>'btn btn-outline-primary']) !!}
              {!! Form::close() !!}
            </div>

                        @endif
            @endif

          <div class="p-3 mb-3 bg-light rounded">






            <h4 class="font-italic">
            <a href="/about">About</a>
            
            </h4>


            
            <p class="mb-0">Vintage Boat Association was started in 1995 by Simon Gellar. It has since grown to a Canada wide organization. The Ontario Chapter has operated since Janaury 9, 1997.</p>
          </div>




          <div class="p-3">
            <h4 class="font-italic">Social</h4>
            <ol class="list-unstyled">
{{--               <li><a href="#">GitHub</a></li>
 --}}              <li><a href="https://twitter.com/VBAOntario">Twitter</a></li>
              <li><a href="https://www.facebook.com/VBAOntario/">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->