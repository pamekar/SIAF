/*
 *  Document   : base_ui_activity.js
 *  Author     : pixelcave
 */
var BaseUIActivity={init:function(){jQuery(".js-bar-randomize").on("click",function(){jQuery(this).parents(".block").find(".progress-bar").each(function(){var e=jQuery(this),n=Math.floor(91*Math.random()+10)+"%";e.css("width",n),e.parent().hasClass("progress-mini")||e.html(n)})}),swal.setDefaults({buttonsStyling:!1,confirmButtonClass:"btn btn-success push-5-r",cancelButtonClass:"btn btn-danger",inputClass:"form-control"}),jQuery(".js-swal-alert").on("click",function(){swal("Hi, this is a simple alert!")}),jQuery(".js-swal-success").on("click",function(){swal("Success","Everything updated perfectly!","success")}),jQuery(".js-swal-error").on("click",function(){swal("Oops...","Something went wrong!","error")}),jQuery(".js-swal-confirm").on("click",function(){swal({title:"Are you sure?",text:"You will not be able to recover this imaginary file!",type:"warning",showCancelButton:!0,confirmButtonColor:"#d26a5c",confirmButtonText:"Yes, delete it!",html:!1,preConfirm:function(){return new Promise(function(e){setTimeout(function(){e()},50)})}}).then(function(e){e.value?swal("Deleted!","Your imaginary file has been deleted.","success"):"cancel"===e.dismiss&&swal("Cancelled","Your imaginary file is safe :)","error")})})}};jQuery(function(){BaseUIActivity.init()});
