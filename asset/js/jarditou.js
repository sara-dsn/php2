$(document).ready(function(){
    
    $("#envoi").click(function(){
       
        f_valid();
    });



function f_valid() {
var envoi=true;

var nom = $("#nom").val();
console.log(nom) ;
   if(nom===""){
        envoi=false;
        $("#n").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#n").hide();
        
    };


    var prenom = $("#prenom").val();
    if(prenom===""){
        envoi=false;
        $("#p").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#p").hide();
        document.forms[0].submit();
    };


    
   
    var cp = $("#cp").val();
    if(cp===""){
        envoi=false;
        $("#c").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#c").hide();
        document.forms[0].submit();
    };
  
   


    var email = $("#email").val();
    if(email===""){
        envoi=false;
        $("#e").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#e").hide();
        document.forms[0].submit();
    };
   
   
    
    var date = $("input#date").val();
    if(date===""){
        envoi=false;
        $("#d").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#d").hide();
        document.forms[0].submit();
    };
   

    var question = $("textarea#question").val();
if(question===""){
    envoi=false;
    $("#q").show();
    e.preventDefault();
}
else if(envoi=true){
    $("#q").hide();
    document.forms[0].submit();
};

   
    var genre=$("input[name='genre']:checked").val();
    if(genre===undefined){
        envoi=false;
        $("#g").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#g").hide();
        document.forms[0].submit();
    };

  

    var sujet=$("select#sujet").val();
    if(sujet=="rien"){
        envoi=false;
        $("#s").show();
        e.preventDefault();
    }
    else if(envoi=true){
        $("#s").hide();
        document.forms[0].submit();
    };

 
   
    var ok= $("input#ok").prop("checked");
   if(!ok){
    envoi=false;
    $("#o").show();
    e.preventDefault();
}
else if(envoi=true){
    $("#o").hide();
    document.forms[0].submit();
};


};
});