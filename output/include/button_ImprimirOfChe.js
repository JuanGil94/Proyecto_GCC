
Runner.buttonEvents["ImprimirOfChe"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='ImprimirOfChe';if(!pageObj.buttonEventBefore['ImprimirOfChe']){pageObj.buttonEventBefore['ImprimirOfChe']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["ChequeoId"]=row.getFieldValue("ChequeoId");params["ChequeoOficioId"]=row.getFieldValue("ChequeoOficioId");console.log("Valor ChequeoId: "+params["ChequeoId"]);params["OficioId"]=row.getFieldValue("OficioId");obligacion=$.ajax({type:"method",url:"consultas.php?w4="+params["ChequeoId"],dataType:'text',async:false,success:function(response){console.log("enviado valor de select por GET");}}).responseText;obligacionTotal=$.ajax({type:"method",url:"consultas.php?w4="+params["ChequeoId"],dataType:'text',async:false,success:function(response){console.log("enviado valor de select por GET");}}).responseText;obligacion=Number(obligacion);obligacionTotal=Number(obligacionTotal);function Unidades(num){switch(num)
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
function NumeroALetras(num,centavos){var data={numero:num,enteros:Math.floor(num),centavos:(((Math.round(num*100))-(Math.floor(num)*100))),letrasCentavos:""};if(centavos==undefined||centavos==false){data.letrasMonedaPlural="PESOS M/CTE";data.letrasMonedaSingular="PESO M/CTE";}else{data.letrasMonedaPlural="CENTAVOS";data.letrasMonedaSingular="CENTAVOS";}
if(data.centavos>0)
data.letrasCentavos="CON "+NumeroALetras(data.centavos,true);if(data.enteros==0)
return"CERO "+data.letrasMonedaPlural+" "+data.letrasCentavos;if(data.enteros==1)
return Millones(data.enteros)+" "+data.letrasMonedaSingular+" "+data.letrasCentavos;else
return Millones(data.enteros)+" "+data.letrasMonedaPlural+" "+data.letrasCentavos;}
params["obligacionLetras"]=NumeroALetras(obligacion);params["obligacionTotalLetras"]=NumeroALetras(obligacionTotal);}}
if(!pageObj.buttonEventAfter['ImprimirOfChe']){pageObj.buttonEventAfter['ImprimirOfChe']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;}}
$('a[id="ImprimirOfChe"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="ImprimirOfChe"+"_"+Runner.genId();var button_ImprimirOfChe=new Runner.form.Button({id:this.id,btnName:"ImprimirOfChe"});button_ImprimirOfChe.init({args:[pageObj,proxy,pageid]});});};