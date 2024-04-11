
Runner.buttonEvents["CierreMes"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='CierreMes';if(!pageObj.buttonEventBefore['CierreMes']){pageObj.buttonEventBefore['CierreMes']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['CierreMes']){pageObj.buttonEventAfter['CierreMes']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="CierreMes"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="CierreMes"+"_"+Runner.genId();var button_CierreMes=new Runner.form.Button({id:this.id,btnName:"CierreMes"});button_CierreMes.init({args:[pageObj,proxy,pageid]});});};