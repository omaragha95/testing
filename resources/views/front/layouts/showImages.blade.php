    @foreach($posts as $post)
        <div class="col-lg-4 col-md-6 mb-4 text-right">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" height="150px" src="{{ asset('storage/img/'.$post->images->first()['image']) }}" onerror="this.onerror=null;this.src='storage/img/default.jpg';" alt="image" ></a>
                <div class="card-body">
                    <h5 class="card-title">
                      <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
                    </h5>
                    <h6>{{ $post->price }}</h6>
                </div>
            </div>            
        </div>
    @endforeach()
