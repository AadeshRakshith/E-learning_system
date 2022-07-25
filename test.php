<html>
    <head>
        <title>jkhd</title>
    </head>
    <body>
        <a href="#"><button class = "heelo open"> edit </button> </a>

<dialog class="modal">
  <button class="close"> close </button>
</dialog>
<script>
    const modal = document.querySelector('.modal');
    const open = document.querySelector('.open');
    const close = document.querySelector('.close');
    
    
    open.addEventListener('click', ()=>{
      modal.showModal();
    })
    
    close.addEventListener('click', ()=>{
      modal.close();
    })
</script>
    </body>
</html>