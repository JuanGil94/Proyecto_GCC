
Runner.buttonEvents["New_Button2"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button2';if(!pageObj.buttonEventBefore['New_Button2']){pageObj.buttonEventBefore['New_Button2']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['New_Button2']){pageObj.buttonEventAfter['New_Button2']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;location.reload();}}
$('a[id="New_Button2"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="New_Button2"+"_"+Runner.genId();var button_New_Button2=new Runner.form.Button({id:this.id,btnName:"New_Button2"});button_New_Button2.init({args:[pageObj,proxy,pageid]});});};