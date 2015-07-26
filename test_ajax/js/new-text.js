(function ($, Drupal) {
    function render(results) {
        $('.response').append(results);
    }
    $('.js-click button').on('click', function() {
        var hellos =  $('.js-click input').val();
        $.ajax({
            url: Drupal.url('resp_ajax/new_hello_text'),
            type: 'POST',
            data: {'hellos[]': hellos },
            dataType: 'json',
            success: render
        });
    });
})(jQuery, Drupal);
