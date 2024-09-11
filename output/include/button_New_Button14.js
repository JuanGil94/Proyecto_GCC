
Runner.buttonEvents["New_Button14"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button14';if(!pageObj.buttonEventBefore['New_Button14']){pageObj.buttonEventBefore['New_Button14']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['New_Button14']){pageObj.buttonEventAfter['New_Button14']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.history.back();}}
$('a[id="New_Button14"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="New_Button14"+"_"+Runner.genId();var button_New_Button14=new Runner.form.Button({id:this.id,btnName:"New_Button14"});button_New_Button14.init({args:[pageObj,proxy,pageid]});});};