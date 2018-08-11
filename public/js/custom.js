$(function() {
  $("#search-bar").autocomplete({
    source: 'http://ebook.test/search/autocomplete',
  });
});

// flash msg
$('#flash-overlay-modal').modal();