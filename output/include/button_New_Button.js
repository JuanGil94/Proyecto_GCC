
Runner.buttonEvents["New_Button"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button';if(!pageObj.buttonEventBefore['New_Button']){pageObj.buttonEventBefore['New_Button']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['New_Button']){pageObj.buttonEventAfter['New_Button']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;if(result["Errr"]===1){swal("Info",result["mensaje"],"info");}
else if(result["Dev"]===1){swal("Warning","No se puede crear el Proceso si esta en tramite Devolucion","warning");}
else if(result["total"]){swal({icon:"success",text:"El Chequeo "+result["ChequeoId"]+" contiene Sancionado. Se crea el proceso Correctamente"}).then(function(value){switch(value){default:location.reload();break;}});}
else{swal("Warning","El Proceso debe contener un Sancionado!","warning");}}}
$('a[id="New_Button"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="New_Button"+"_"+Runner.genId();var button_New_Button=new Runner.form.Button({id:this.id,btnName:"New_Button"});button_New_Button.init({args:[pageObj,proxy,pageid]});});};