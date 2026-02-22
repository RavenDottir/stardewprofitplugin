jQuery(function($){

  let frame;

  $('#sv-portrait-upload').on('click', function(e){
    e.preventDefault();

    if(frame){ frame.open(); return; }

    frame = wp.media({
      title: 'Select Portrait',
      button: { text: 'Use this portrait' },
      multiple: false
    });

    frame.on('select', function(){
      const attachment = frame.state().get('selection').first().toJSON();
      $('#sv-portrait-input').val(attachment.url);
      $('#sv-portrait-preview').attr('src', attachment.url).show();
    });

    frame.open();
  });

  $('#sv-portrait-remove').on('click', function(){
    $('#sv-portrait-input').val('');
    $('#sv-portrait-preview').hide();
  });

});
