
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script type="text/javascript">
        // swich mode dark-ligth
        const swichMode = document.getElementById('swichMode');
        if(swichMode !== null){
            swichMode.addEventListener('click', (e)=>{
                console.log(document.body)
                if(document.body.hasAttribute('data-bs-theme')) {
                    document.body.removeAttribute('data-bs-theme');
                    document.querySelector('nav a svg g').setAttribute('fill', '#555')
                }
                else {
                    document.body.setAttribute('data-bs-theme', 'dark')
                    document.querySelector('nav a svg g').setAttribute('fill', '#fff')
                };
                swichMode.classList.toggle('btn-outline-info');
                swichMode.classList.toggle('btn-info');
            })
        }
    </script>
  </body>
</html>