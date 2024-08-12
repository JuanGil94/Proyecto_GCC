
Runner.buttonEvents["Buscar5"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Buscar5';if(!pageObj.buttonEventBefore['Buscar5']){pageObj.buttonEventBefore['Buscar5']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;var recaudo_ano=$('#Recaudo_Ano_Id').val();params['recaudo_ano']=recaudo_ano;}}
if(!pageObj.buttonEventAfter['Buscar5']){pageObj.buttonEventAfter['Buscar5']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.location.reload();}}
$('a[id="Buscar5"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Buscar5"+"_"+Runner.genId();var button_Buscar5=new Runner.form.Button({id:this.id,btnName:"Buscar5"});button_Buscar5.init({args:[pageObj,proxy,pageid]});});};