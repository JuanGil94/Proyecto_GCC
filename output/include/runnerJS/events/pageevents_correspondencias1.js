
Runner.pages.PageSettings.addPageEvent('dbo.Correspondencias1',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'Discounted');if(ctrl.getValue()=='on')
alert('Checked');});