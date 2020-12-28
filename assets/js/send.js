 $(document).ready(function(){
  $("#loginForm").unbind('submit').bind('submit', function() {

    var form = $(this);
    var url = form.attr('action');
    var type = form.attr('method');

    $.ajax({
      url  : url,
      type : type,
      data : form.serialize(),
      dataType: 'json',
      success:function(response) {
        if(response.success == true) {
          window.location = 'login';
        }
        else {
          Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'Nim / Password anda Salah'
          })

          } // /else
        } // /if
      });

    return false;
  });
});

