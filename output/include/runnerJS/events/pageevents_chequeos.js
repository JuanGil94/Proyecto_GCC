
Runner.pages.PageSettings.addPageEvent('dbo.Chequeos',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){$("#value_ObligacionLetras_"+pageid+"").css({'width':'500px','display':'block','margin':'0 auto','background-color':'#71B98A','color':'#FFFFFF','pointer-events':'none'});$("#value_CantidadLetras_"+pageid+"").css({'width':'350.5px','display':'block','margin':'0 auto','background-color':'#71B98A','color':'#FFFFFF','pointer-events':'none'});$("#value_Obligacion_"+pageid+"").css({'display':'block','margin':'0 auto','pointer-events':'none'});$("#value_CarteraTipoId_"+pageid+"").css({'display':'block','margin':'0 auto','pointer-events':'none'});$("#value_FechaPago_"+pageid+"").hide();$("label[for='dayvalue_FechaPago_"+pageid+"']").hide();$("#imgCal_value_FechaPago_"+pageid+"").hide();$("#dayvalue_FechaPago_"+pageid+"").hide();$("#monthvalue_FechaPago_"+pageid+"").hide();$("#yearvalue_FechaPago_"+pageid+"").hide();this.on('afterSave',function(formObj,fieldControlsArr,pageObj){swal({icon:"success",text:"Se crea la Lista de Chequeo Correctamente"}).then(function(value){switch(value){default:location.reload();break;}});});});Runner.pages.PageSettings.addPageEvent('dbo.Chequeos',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){$("#value_ObligacionLetras_"+pageid+"").css({'width':'500px','display':'block','margin':'0 auto','background-color':'#71B98A','color':'#FFFFFF','pointer-events':'none'});$("#value_CantidadLetras_"+pageid+"").css({'width':'350.5px','display':'block','margin':'0 auto','background-color':'#71B98A','color':'#FFFFFF','pointer-events':'none'});$("#value_Obligacion_"+pageid+"").css({'display':'block','margin':'0 auto','pointer-events':'none'});$("#value_CarteraTipoId_"+pageid+"").css({'display':'block','margin':'0 auto','pointer-events':'none'});$("#value_FechaPago_"+pageid+"").hide();$("label[for='dayvalue_FechaPago_"+pageid+"']").hide();$("#imgCal_value_FechaPago_"+pageid+"").hide();$("#dayvalue_FechaPago_"+pageid+"").hide();$("#monthvalue_FechaPago_"+pageid+"").hide();$("#yearvalue_FechaPago_"+pageid+"").hide();this.on('afterSave',function(formObj,fieldControlsArr,pageObj){swal({icon:"success",text:"Se edita el registro Correctamente"})});});Runner.pages.fieldsEvents["Tipo_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'Tipo_event',btnName:'Tipo_event'}),before=function(){params["value"]=this.getValue();params["valorAnno"]=$("#yearvalue_FechaSancion_"+pageid+"").val();params["cantidad"]=$("#value_Cantidad_"+pageid+"").val();},after=function(result){function Unidades(num){switch(num)
{case 1:return"UN";case 2:return"DOS";case 3:return"TRES";case 4:return"CUATRO";case 5:return"CINCO";case 6:return"SEIS";case 7:return"SIETE";case 8:return"OCHO";case 9:return"NUEVE";}
return"";}
function Decenas(num){decena=Math.floor(num/10);unidad=num-(decena*10);switch(decena)
{case 1:switch(unidad)
{case 0:return"DIEZ";case 1:return"ONCE";case 2:return"DOCE";case 3:return"TRECE";case 4:return"CATORCE";case 5:return"QUINCE";default:return"DIECI"+Unidades(unidad);}
case 2:switch(unidad)
{case 0:return"VEINTE";default:return"VEINTI"+Unidades(unidad);}
case 3:return DecenasY("TREINTA",unidad);case 4:return DecenasY("CUARENTA",unidad);case 5:return DecenasY("CINCUENTA",unidad);case 6:return DecenasY("SESENTA",unidad);case 7:return DecenasY("SETENTA",unidad);case 8:return DecenasY("OCHENTA",unidad);case 9:return DecenasY("NOVENTA",unidad);case 0:return Unidades(unidad);}}
function DecenasY(strSin,numUnidades){if(numUnidades>0)
return strSin+" Y "+Unidades(numUnidades)
return strSin;}
function Centenas(num){centenas=Math.floor(num/100);decenas=num-(centenas*100);switch(centenas)
{case 1:if(decenas>0)
return"CIENTO "+Decenas(decenas);return"CIEN";case 2:return"DOSCIENTOS "+Decenas(decenas);case 3:return"TRESCIENTOS "+Decenas(decenas);case 4:return"CUATROCIENTOS "+Decenas(decenas);case 5:return"QUINIENTOS "+Decenas(decenas);case 6:return"SEISCIENTOS "+Decenas(decenas);case 7:return"SETECIENTOS "+Decenas(decenas);case 8:return"OCHOCIENTOS "+Decenas(decenas);case 9:return"NOVECIENTOS "+Decenas(decenas);}
return Decenas(decenas);}
function Seccion(num,divisor,strSingular,strPlural){cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
letras="";if(cientos>0)
if(cientos>1)
letras=Centenas(cientos)+" "+strPlural;else
letras=strSingular;if(resto>0)
letras+="";return letras;}
function Miles(num){divisor=1000;cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
strMiles=Seccion(num,divisor,"MIL","MIL");strCentenas=Centenas(resto);if(strMiles=="")
return strCentenas;return strMiles+" "+strCentenas;}
function Millones(num){divisor=1000000;cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
strMillones=Seccion(num,divisor,"UN MILLON","MILLONES");strMiles=Miles(resto);if(strMillones=="")
return strMiles;return strMillones+" "+strMiles;}
function NumeroALetras(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="PESOS";data.letrasMonedaSingular="PESO";}else{data.letrasMonedaPlural="CENTAVOS";data.letrasMonedaSingular="CENTAVOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasSalarios(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="SALARIOS";data.letrasMonedaSingular="SALARIOS";}else{data.letrasMonedaPlural="SALARIOS";data.letrasMonedaSingular="SALARIOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasUvts(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="UVTs";data.letrasMonedaSingular="UVTs";}else{data.letrasMonedaPlural="UVTs";data.letrasMonedaSingular="UVTs";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasUbvs(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="Ubvs";data.letrasMonedaSingular="Ubvs";}else{data.letrasMonedaPlural="Ubvs";data.letrasMonedaSingular="Ubvs";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function formatToPesos(number){return number.toLocaleString('es-CO',{style:'currency',currency:'COP'});}
NumeroALetras(result["valor"]);$("#value_ObligacionLetras_"+pageid+"").val(NumeroALetras(result["valor"]));var formatoValor=formatToPesos(result["valor"]);$("#value_Obligacion_"+pageid+"").val(formatoValor);$("#value_Obligacion_"+pageid+"").css('color','red');if(result["upper"]==1){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetras(result["valor"]));}
else if(result["upper"]==2){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetrasSalarios(result["cantidad"]));}
else if(result["upper"]==3){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetrasUvts(result["cantidad"]));}
else if(result["upper"]==4){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetrasUbvs(result["cantidad"]));}},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"Tipo_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["Tipo_event1"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'Tipo_event1',btnName:'Tipo_event1'}),before=function(){console.log("valor"+pageid);params["cantidad"]=this.getValue();params["valorAnno"]=$("#yearvalue_FechaSancion_"+pageid+"").val();params["tipo"]=$("#value_Tipo_"+pageid+"").val();},after=function(result){function Unidades(num){switch(num)
{case 1:return"UN";case 2:return"DOS";case 3:return"TRES";case 4:return"CUATRO";case 5:return"CINCO";case 6:return"SEIS";case 7:return"SIETE";case 8:return"OCHO";case 9:return"NUEVE";}
return"";}
function Decenas(num){decena=Math.floor(num/10);unidad=num-(decena*10);switch(decena)
{case 1:switch(unidad)
{case 0:return"DIEZ";case 1:return"ONCE";case 2:return"DOCE";case 3:return"TRECE";case 4:return"CATORCE";case 5:return"QUINCE";default:return"DIECI"+Unidades(unidad);}
case 2:switch(unidad)
{case 0:return"VEINTE";default:return"VEINTI"+Unidades(unidad);}
case 3:return DecenasY("TREINTA",unidad);case 4:return DecenasY("CUARENTA",unidad);case 5:return DecenasY("CINCUENTA",unidad);case 6:return DecenasY("SESENTA",unidad);case 7:return DecenasY("SETENTA",unidad);case 8:return DecenasY("OCHENTA",unidad);case 9:return DecenasY("NOVENTA",unidad);case 0:return Unidades(unidad);}}
function DecenasY(strSin,numUnidades){if(numUnidades>0)
return strSin+" Y "+Unidades(numUnidades)
return strSin;}
function Centenas(num){centenas=Math.floor(num/100);decenas=num-(centenas*100);switch(centenas)
{case 1:if(decenas>0)
return"CIENTO "+Decenas(decenas);return"CIEN";case 2:return"DOSCIENTOS "+Decenas(decenas);case 3:return"TRESCIENTOS "+Decenas(decenas);case 4:return"CUATROCIENTOS "+Decenas(decenas);case 5:return"QUINIENTOS "+Decenas(decenas);case 6:return"SEISCIENTOS "+Decenas(decenas);case 7:return"SETECIENTOS "+Decenas(decenas);case 8:return"OCHOCIENTOS "+Decenas(decenas);case 9:return"NOVECIENTOS "+Decenas(decenas);}
return Decenas(decenas);}
function Seccion(num,divisor,strSingular,strPlural){cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
letras="";if(cientos>0)
if(cientos>1)
letras=Centenas(cientos)+" "+strPlural;else
letras=strSingular;if(resto>0)
letras+="";return letras;}
function Miles(num){divisor=1000;cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
strMiles=Seccion(num,divisor,"MIL","MIL");strCentenas=Centenas(resto);if(strMiles=="")
return strCentenas;return strMiles+" "+strCentenas;}
function Millones(num){divisor=1000000;cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
strMillones=Seccion(num,divisor,"UN MILLON","MILLONES");strMiles=Miles(resto);if(strMillones=="")
return strMiles;return strMillones+" "+strMiles;}
function NumeroALetras(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="PESOS";data.letrasMonedaSingular="PESO";}else{data.letrasMonedaPlural="CENTAVOS";data.letrasMonedaSingular="CENTAVOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasSalarios(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="SALARIOS";data.letrasMonedaSingular="SALARIOS";}else{data.letrasMonedaPlural="SALARIOS";data.letrasMonedaSingular="SALARIOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasUvts(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="UVTs";data.letrasMonedaSingular="UVTs";}else{data.letrasMonedaPlural="UVTs";data.letrasMonedaSingular="UVTs";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasUvbs(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="UVBs";data.letrasMonedaSingular="UVBs";}else{data.letrasMonedaPlural="UVBs";data.letrasMonedaSingular="UVBs";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function formatToPesos(number){return number.toLocaleString('es-CO',{style:'currency',currency:'COP'});}
$("#value_ObligacionLetras_"+pageid+"").val(NumeroALetras(result["valor"]));var valorFormato=formatToPesos(result["valor"]);console.log("Value 1 "+typeof valorFormato);console.log("Value 2 "+typeof result["valor"]);$("#value_Obligacion_"+pageid+"").val(valorFormato);$("#value_Obligacion_"+pageid+"").css('color','red');if(result["tipo"]==1){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetras(result["valor"]));}
else if(result["tipo"]==2){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetrasSalarios(result["upper"]));}
else if(result["tipo"]==3){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetrasUvts(result["upper"]));}
else if(result["tipo"]==4){$("#value_CantidadLetras_"+pageid+"").val(NumeroALetrasUvbs(result["upper"]));}},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"Tipo_event1",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["cantidadLetras"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'cantidadLetras',btnName:'cantidadLetras'}),before=function(){params["value"]=this.getValue();},after=function(result){function Unidades(num){switch(num)
{case 1:return"UN";case 2:return"DOS";case 3:return"TRES";case 4:return"CUATRO";case 5:return"CINCO";case 6:return"SEIS";case 7:return"SIETE";case 8:return"OCHO";case 9:return"NUEVE";}
return"";}
function Decenas(num){decena=Math.floor(num/10);unidad=num-(decena*10);switch(decena)
{case 1:switch(unidad)
{case 0:return"DIEZ";case 1:return"ONCE";case 2:return"DOCE";case 3:return"TRECE";case 4:return"CATORCE";case 5:return"QUINCE";default:return"DIECI"+Unidades(unidad);}
case 2:switch(unidad)
{case 0:return"VEINTE";default:return"VEINTI"+Unidades(unidad);}
case 3:return DecenasY("TREINTA",unidad);case 4:return DecenasY("CUARENTA",unidad);case 5:return DecenasY("CINCUENTA",unidad);case 6:return DecenasY("SESENTA",unidad);case 7:return DecenasY("SETENTA",unidad);case 8:return DecenasY("OCHENTA",unidad);case 9:return DecenasY("NOVENTA",unidad);case 0:return Unidades(unidad);}}
function DecenasY(strSin,numUnidades){if(numUnidades>0)
return strSin+" Y "+Unidades(numUnidades)
return strSin;}
function Centenas(num){centenas=Math.floor(num/100);decenas=num-(centenas*100);switch(centenas)
{case 1:if(decenas>0)
return"CIENTO "+Decenas(decenas);return"CIEN";case 2:return"DOSCIENTOS "+Decenas(decenas);case 3:return"TRESCIENTOS "+Decenas(decenas);case 4:return"CUATROCIENTOS "+Decenas(decenas);case 5:return"QUINIENTOS "+Decenas(decenas);case 6:return"SEISCIENTOS "+Decenas(decenas);case 7:return"SETECIENTOS "+Decenas(decenas);case 8:return"OCHOCIENTOS "+Decenas(decenas);case 9:return"NOVECIENTOS "+Decenas(decenas);}
return Decenas(decenas);}
function Seccion(num,divisor,strSingular,strPlural){cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
letras="";if(cientos>0)
if(cientos>1)
letras=Centenas(cientos)+" "+strPlural;else
letras=strSingular;if(resto>0)
letras+="";return letras;}
function Miles(num){divisor=1000;cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
strMiles=Seccion(num,divisor,"MIL","MIL");strCentenas=Centenas(resto);if(strMiles=="")
return strCentenas;return strMiles+" "+strCentenas;}
function Millones(num){divisor=1000000;cientos=Math.floor(num/divisor)
resto=num-(cientos*divisor)
strMillones=Seccion(num,divisor,"UN MILLON","MILLONES");strMiles=Miles(resto);if(strMillones=="")
return strMiles;return strMillones+" "+strMiles;}
function NumeroALetras(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="PESOS";data.letrasMonedaSingular="PESO";}else{data.letrasMonedaPlural="CENTAVOS";data.letrasMonedaSingular="CENTAVOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasSalarios(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="SALARIOS";data.letrasMonedaSingular="SALARIOS";}else{data.letrasMonedaPlural="SALARIOS";data.letrasMonedaSingular="SALARIOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
function NumeroALetrasUvts(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="UVTs";data.letrasMonedaSingular="UVTs";}else{data.letrasMonedaPlural="UVTs";data.letrasMonedaSingular="UVTs";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
NumeroALetras(result["valor"]);$("#obligacionLetras").val(NumeroALetras(result["valor"]));},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"cantidadLetras",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["Remisorio_event_uperrcase"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'Remisorio_event_uperrcase',btnName:'Remisorio_event_uperrcase'}),before=function(){},after=function(result){$("#value_Remisorio_"+pageid+"").css('text-transform','uppercase');},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"Remisorio_event_uperrcase",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["calcular_diasPlazo"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'calcular_diasPlazo',btnName:'calcular_diasPlazo'}),before=function(){params["value"]=this.getValue();params["valDiaEj"]=$("#dayvalue_Ejecutoria_"+pageid+"").val();params["valMesEj"]=$("#monthvalue_Ejecutoria_"+pageid+"").val();params["valAnnoEj"]=$("#yearvalue_Ejecutoria_"+pageid+"").val();},after=function(result){if(result['dia']<10){result['dia']=0+result['dia'];}
else if(result['mes']<10){result['mes']=0+result['mes'];}
var valor=result['anno']+"-"+result['mes']+"-"+result['dia']
$("#dayvalue_Plazo_"+pageid+"").val(result['dia']);$("#monthvalue_Plazo_"+pageid+"").val(result['mes']);$("#yearvalue_Plazo_"+pageid+"").val(result['anno']);$("#value_Plazo_"+pageid+"").val(valor);console.log("Valor fecha Ejecutoria: "+$("#value_Ejecutoria_"+pageid+"").val());console.log("Valor fecha Plazo: "+$("#value_Plazo_"+pageid+"").val());},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"calcular_diasPlazo",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["Ejecutoria_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'Ejecutoria_event',btnName:'Ejecutoria_event'}),before=function(){params["valDiaEj"]=$("#dayvalue_Ejecutoria_"+pageid+"").val();params["valMesEj"]=$("#monthvalue_Ejecutoria_"+pageid+"").val();params["valAnnoEj"]=$("#yearvalue_Ejecutoria_"+pageid+"").val();params["value"]=$("#value_Dias_"+pageid+"").val();},after=function(result){if(result['dia']<10){result['dia']=0+result['dia'];}
else if(result['mes']<10){result['mes']=0+result['mes'];}
var valor=result['anno']+"-"+result['mes']+"-"+result['dia']
$("#dayvalue_Plazo_"+pageid+"").val(result['dia']);$("#monthvalue_Plazo_"+pageid+"").val(result['mes']);$("#yearvalue_Plazo_"+pageid+"").val(result['anno']);$("#value_Plazo_"+pageid+"").val(valor);console.log("Valor fecha Ejecutoria: "+$("#value_Ejecutoria_"+pageid+"").val());console.log("Valor fecha Plazo: "+$("#value_Plazo_"+pageid+"").val());},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"Ejecutoria_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["TramiteId_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'TramiteId_event',btnName:'TramiteId_event'}),before=function(){params["value"]=this.getValue();console.log(params["value"]);},after=function(result){if(result['flag']===1){$("#value_PrimeraCopia_"+pageid+"").prop('disabled',true);$("#value_PrestaMeritoEjecutivo_"+pageid+"").prop('disabled',true);$("#value_Expresa_"+pageid+"").prop('disabled',true);$("#value_CompetenciaDEAJ_"+pageid+"").prop('disabled',true);$("#value_FaltaCompetencia_"+pageid+"").prop('disabled',true);$("#value_Autentica_"+pageid+"").prop('disabled',true);$("#value_Clara_"+pageid+"").prop('disabled',true);$("#value_ActualmenteExigible_"+pageid+"").prop('disabled',true);$("#value_FaltaRequisitos_"+pageid+"").prop('disabled',true);$("#value_PorPrescripcion_"+pageid+"").prop('disabled',true);$("#value_Cantidad_"+pageid+"").prop('disabled',true);$("#imgCal_value_FechaSancion_"+pageid+"").prop('disabled',true);$("#dayvalue_FechaSancion_"+pageid+"").prop('disabled',true);$("#monthvalue_FechaSancion_"+pageid+"").prop('disabled',true);$("#yearvalue_FechaSancion_"+pageid+"").prop('disabled',true);$("#value_Folios_"+pageid+"").prop('disabled',true);$("#value_SeccionalIdDestino_"+pageid+"").prop('disabled',true);$("#value_Tipo_"+pageid+"").prop('disabled',true);}
else{$("#value_FaltaCompetencia_"+pageid+"").prop('disabled',false);$("#value_PrimeraCopia_"+pageid+"").prop('disabled',false);$("#value_PrestaMeritoEjecutivo_"+pageid+"").prop('disabled',false);$("#value_Expresa_"+pageid+"").prop('disabled',false);$("#value_CompetenciaDEAJ_"+pageid+"").prop('disabled',false);$("#value_Autentica_"+pageid+"").prop('disabled',false);$("#value_Clara_"+pageid+"").prop('disabled',false);$("#value_ActualmenteExigible_"+pageid+"").prop('disabled',false);$("#value_FaltaRequisitos_"+pageid+"").prop('disabled',false);$("#value_PorPrescripcion_"+pageid+"").prop('disabled',false);$("#value_Cantidad_"+pageid+"").prop('disabled',false);$("#imgCal_value_FechaSancion_"+pageid+"").prop('disabled',false);$("#dayvalue_FechaSancion_"+pageid+"").prop('disabled',false);$("#monthvalue_FechaSancion_"+pageid+"").prop('disabled',false);$("#yearvalue_FechaSancion_"+pageid+"").prop('disabled',false);$("#value_Folios_"+pageid+"").prop('disabled',false);$("#value_SeccionalIdDestino_"+pageid+"").prop('disabled',false);$("#value_Tipo_"+pageid+"").prop('disabled',false);}},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"TramiteId_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["ConceptoId_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'ConceptoId_event',btnName:'ConceptoId_event'}),before=function(){params["value"]=this.getValue();},after=function(result){if(result['flag']===1){$("#value_FechaPago_"+pageid+"").show();$("label[for='dayvalue_FechaPago_"+pageid+"']").show();$("#imgCal_value_FechaPago_"+pageid+"").show();$("#dayvalue_FechaPago_"+pageid+"").show();$("#monthvalue_FechaPago_"+pageid+"").show();$("#yearvalue_FechaPago_"+pageid+"").show();}
else{$("#value_FechaPago_"+pageid+"").hide();$("label[for='dayvalue_FechaPago_"+pageid+"']").hide();$("#imgCal_value_FechaPago_"+pageid+"").show();$("#imgCal_value_FechaPago_"+pageid+"").hide();$("#dayvalue_FechaPago_"+pageid+"").hide();$("#monthvalue_FechaPago_"+pageid+"").hide();$("#yearvalue_FechaPago_"+pageid+"").hide();}},submit=function(){params["table"]="dbo.Chequeos";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"ConceptoId_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};