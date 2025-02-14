
Runner.buttonEvents["Calc"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Calc';if(!pageObj.buttonEventBefore['Calc']){pageObj.buttonEventBefore['Calc']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["ProcesoId"]=row.getFieldValue("ProcesoId");params["Numero"]=row.getFieldValue("Numero");}}
if(!pageObj.buttonEventAfter['Calc']){pageObj.buttonEventAfter['Calc']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="Calc"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Calc"+"_"+Runner.genId();var button_Calc=new Runner.form.Button({id:this.id,btnName:"Calc"});button_Calc.init({args:[pageObj,proxy,pageid]});});};