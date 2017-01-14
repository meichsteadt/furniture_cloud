var classes = ['indie', 'satisfy', 'handlee', 'pacifico', 'kalam', 'courgette']
function indie() {
  $('#indie').click(function() {
    classes.forEach(function(style) {
      $('.brand-logo').removeClass(style)
    });
    $('.brand-logo').addClass('indie');
  })
  $('#pacifico').click(function() {
    classes.forEach(function(style) {
      $('.brand-logo').removeClass(style)
    });
    $('.brand-logo').addClass('pacifico');
  })
$('#satisfy').click(function() {
    classes.forEach(function(style) {
      $('.brand-logo').removeClass(style)
    });
    $('.brand-logo').addClass('satisfy');
  })
$('#courgette').click(function() {
    classes.forEach(function(style) {
      $('.brand-logo').removeClass(style)
    });
    $('.brand-logo').addClass('courgette');
  })
$('#kalam').click(function() {
    classes.forEach(function(style) {
      $('.brand-logo').removeClass(style)
    });
    $('.brand-logo').addClass('kalam');
  })
$('#handlee').click(function() {
    classes.forEach(function(style) {
      $('.brand-logo').removeClass(style)
    });
    $('.brand-logo').addClass('handlee');
  })
}

$(function() {
  indie();
})
