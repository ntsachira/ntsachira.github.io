function toggleSidebar() {
  $(document.getElementById("sidebar"))
  .sidebar({ dimPage: false })
    .sidebar("setting", "transition", "overlay")
    
    .sidebar("toggle");
}

function toggleModal(image){
  document.getElementById('modal-image').src = image;
  $(document.getElementById('modal')).modal('show');
}

$('.special.cards .image').dimmer({ on: 'hover'});