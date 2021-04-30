//client id
//519718253602-pddt6i993k8jmi42mbnf9m1m8fh9up64.apps.googleusercontent.com

//secret id
//EH4Z3F_K_gUNqo_V9dsEueZf
//cek

$(document).ready(function(){
     
     // client id of the project

     var clientId = "683300083577-urdfhps7ao0190u3gcbj73ehed6bq5j7.apps.googleusercontent.com";

     // redirect_uri of the project

     var redirect_uri = "https://app.portalindo.net/dashboard";

     // scope of the project

     var scope = "https://www.googleapis.com/auth/drive";

     // the url to which the user is redirected to

     var url = "";


     // this is event click listener for the button

     $("#login").click(function(){

        // this is the method which will be invoked it takes four parameters

        signIn(clientId,redirect_uri,scope,url);

     });

     function signIn(clientId,redirect_uri,scope,url){
      
        // the actual url to which the user is redirected to 

        url = "https://accounts.google.com/o/oauth2/v2/auth?redirect_uri="+redirect_uri
        +"&prompt=consent&response_type=code&client_id="+clientId+"&scope="+scope
        +"&access_type=offline";

        // this line makes the user redirected to the url

        window.location = url;




     }



});