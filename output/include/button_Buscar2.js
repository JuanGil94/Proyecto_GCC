
Runner.buttonEvents["Buscar2"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Buscar2';if(!pageObj.buttonEventBefore['Buscar2']){pageObj.buttonEventBefore['Buscar2']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var mesDeudor=$('#BDME_Guia_Deudor_MesId').val();params["mesDeudor"]=mesDeudor;}}
if(!pageObj.buttonEventAfter['Buscar2']){pageObj.buttonEventAfter['Buscar2']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload();}}
$('a[id="Buscar2"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Buscar2"+"_"+Runner.genId();var button_Buscar2=new Runner.form.Button({id:this.id,btnName:"Buscar2"});button_Buscar2.init({args:[pageObj,proxy,pageid]});});};