jQuery(document).ready(function($){

  const frame = wp.media({
    title: 'Select Portrait',
    button: { text: 'Use portrait' },
    multiple: false
  });

  $('#sv_portrait_upload').on('click', function(e){
    e.preventDefault();

    frame.open();

    frame.on('select', function(){
      const attachment = frame.state().get('selection').first().toJSON();
      $('#sv_portrait_field').val(attachment.url);
      $('#sv_portrait_preview').attr('src', attachment.url).show();
    });
  });

  $('#sv_portrait_remove').on('click', function(){
    $('#sv_portrait_field').val('');
    $('#sv_portrait_preview').hide();
  });

});
