/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/CKEDITOR.dialog.add("button",function(e){function t(e){var t=this,n=t.getValue();if(n){e.attributes[t.id]=n;t.id=="name"&&(e.attributes["data-cke-saved-name"]=n)}else{delete e.attributes[t.id];t.id=="name"&&delete e.attributes["data-cke-saved-name"]}}return{title:e.lang.button.title,minWidth:350,minHeight:150,onShow:function(){var e=this;delete e.button;var t=e.getParentEditor().getSelection().getSelectedElement();if(t&&t.is("input")){var n=t.getAttribute("type");if(n in{button:1,reset:1,submit:1}){e.button=t;e.setupContent(t)}}},onOk:function(){var e=this.getParentEditor(),t=this.button,n=!t,r=t?CKEDITOR.htmlParser.fragment.fromHtml(t.getOuterHtml()).children[0]:new CKEDITOR.htmlParser.element("input");this.commitContent(r);var i=new CKEDITOR.htmlParser.basicWriter;r.writeHtml(i);var s=CKEDITOR.dom.element.createFromHtml(i.getHtml(),e.document);if(n)e.insertElement(s);else{s.replace(t);e.getSelection().selectElement(s)}},contents:[{id:"info",label:e.lang.button.title,title:e.lang.button.title,elements:[{id:"name",type:"text",label:e.lang.common.name,"default":"",setup:function(e){this.setValue(e.data("cke-saved-name")||e.getAttribute("name")||"")},commit:t},{id:"value",type:"text",label:e.lang.button.text,accessKey:"V","default":"",setup:function(e){this.setValue(e.getAttribute("value")||"")},commit:t},{id:"type",type:"select",label:e.lang.button.type,"default":"button",accessKey:"T",items:[[e.lang.button.typeBtn,"button"],[e.lang.button.typeSbm,"submit"],[e.lang.button.typeRst,"reset"]],setup:function(e){this.setValue(e.getAttribute("type")||"")},commit:t}]}]}});