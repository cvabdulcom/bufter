$(document).ready(function(){
    

  const urlParams = new URLSearchParams(window.location.search);
  const code = urlParams.get('code');
  const redirect_uri = "https://app.portalindo.net/dashboard" // replace with your redirect_uri;
  const client_secret = "fOY-OIyB7Vm5h6U9Z0ct29K1"; // replace with your client secret
  const scope = "https://www.googleapis.com/auth/drive";
  var access_token= "";
  var client_id = "683300083577-urdfhps7ao0190u3gcbj73ehed6bq5j7.apps.googleusercontent.com"// replace it with your client id;
  

  $.ajax({
      type: 'POST',
      url: "https://www.googleapis.com/oauth2/v4/token",
      data: {code:code
          ,redirect_uri:redirect_uri,
          client_secret:client_secret,
      client_id:client_id,
      scope:scope,
      grant_type:"authorization_code"},
      dataType: "json",
      success: function(resultData) {
         
          
         localStorage.setItem("accessToken",resultData.access_token);
         localStorage.setItem("refreshToken",resultData.refreshToken);
         localStorage.setItem("expires_in",resultData.expires_in);
         window.history.pushState({}, document.title, "/dashboard");
         
         
         
         
      }
});

  function stripQueryStringAndHashFromPath(url) {
      return url.split("?")[0].split("#")[0];
  }   

  var Upload = function (file) {
      this.file = file;
  };
  
  Upload.prototype.getType = function() {
      localStorage.setItem("type",this.file.type);
      return this.file.type;
  };
  Upload.prototype.getSize = function() {
      localStorage.setItem("size",this.file.size);
      return this.file.size;
  };
  Upload.prototype.getName = function() {
      return this.file.name;
  };
  Upload.prototype.doUpload = function () {
      var that = this;
      var formData = new FormData();
  
      // add assoc key values, this will be posts values
      formData.append("file", this.file, this.getName());
      formData.append("upload_file", true);
  
      $.ajax({
          type: "POST",
          beforeSend: function(request) {
              request.setRequestHeader("Authorization", "Bearer" + " " + localStorage.getItem("accessToken"));
              
          },
          url: "https://www.googleapis.com/upload/drive/v2/files",
          data:{
              uploadType:"media"
          },
          xhr: function () {
              var myXhr = $.ajaxSettings.xhr();
              if (myXhr.upload) {
                  myXhr.upload.addEventListener('progress', that.progressHandling, false);
              }
              return myXhr;
          },
          success: function (data) {
              console.log(data.id);
              document.getElementById('id_file').value = data.id;
              $('#button_upload').attr('disabled', true);
              $('#UPLOAD').modal('hide');
              
              $('#nama_outlet').attr('readonly', false);
              $('#nama_outlet').focus();
              var html = '<button type="submit" id="button_model" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>';
              $('#show_tombol').html(html);
          },
          error: function (error) {
              console.log(error);
              // taruh alert pop up gagal atau harus verifikasi dulu
              alert('anda harus verifikasi !');
          },
          async: true,
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          timeout: 60000
      });
  };
  
  Upload.prototype.progressHandling = function (event) {
      var percent = 0;
      var position = event.loaded || event.position;
      var total = event.total;
      var progress_bar_id = "#progress-wrp";
      if (event.lengthComputable) {
          percent = Math.ceil(position / total * 100);
      }
      // update progressbars classes so it fits your code
      $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
      $(progress_bar_id + " .status").text(percent + "%");
  };

  $("#upload").on("click", function (e) {
      var file = $("#files")[0].files[0];
      var upload = new Upload(file);
  
      // maby check size or type here with upload.getSize() and upload.getType()
  
      // execute upload
      upload.doUpload();
  });



  
});