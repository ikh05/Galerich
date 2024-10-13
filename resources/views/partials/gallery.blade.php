{{-- images --}}
<style type="text/css">
      .grid:after {
            content: '';
            display: block;
            clear: both;
      }
      .gallery .card:hover{
            border-width: 2px;
      }
      .gallery .card:hover img{
            width: calc(.5rem + 100%);
      }
      .gallery .card:hover .card-footer{
            background-color: var(--bs-gray-700);
      }
      .gallery .card{
            max-height: 100vh;
            border-width: 1px;
            transition: all 1s;
      }
      .gallery .card img{
            transition: all 1s;
            width: 100%;
      }
      .gallery .card .card-footer{
            transition: all .5s;
      }
</style>
<div class="grid row gallery">
      @foreach ($images as $image)
            <div class="p-1 grid-item float-start col col-sm-6 col-lg-4">
                  <div class="card border-light-subtle">
                  	<div class="card-body p-0 d-flex justify-content-center align-items-center overflow-hidden">
                  		<img class="animate__animated d-block rounded-top" animate="bounce" animated-triger="scroll" src="../img/{{ $image->href }}" alt="{{ $image->href }}">
                  	</div>
                  	<div class="card-footer d-flex justify-content-between align-items-center">
                  		<small><a href="/person/{{ $image->uploader->username }}" class="link-underline-opacity-0 link-underline text-light link-underline-opacity-75-hover link-underline-light">{{ "@".$image->uploader->username }}</a></small>
                  		<a href="/image/{{ $image->href }}" class="btn btn-outline-light btn-sm">Detail</a>
                  	</div>
                  </div>
            </div>
      @endforeach

</div>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript">
    function fiksHeigth(query) {
         let allImage = document.querySelectorAll(query);
         Array.from(allImage).map((e)=>{
            let style = e.getAttribute('style');
            console.log(style)
            e.setAttribute('style', '');
            e.setAttribute('style', `height: ${e.offsetHeight}px;`);
            // e.style.height = e.offsetHeight+'px';
         })
    }
    window.addEventListener('DOMContentLoaded',()=>{
      let grid = document.querySelector('.grid');

      let msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        percentPosition: true
      });

      imagesLoaded( grid ).on( 'progress', function() {
        // layout Masonry after each image loads
        msnry.layout();
      });


      fiksHeigth('.gallery .card-body');
      fiksHeigth('.gallery .card-body');
    });
    window.addEventListener('resize', ()=>{
      console.log('resize')
      fiksHeigth('.gallery .card-body');
    })
</script>