!function(){"use strict";var e=window.wc.productEditor,t=window.wp.element,l=window.wp.i18n,o=window.wc.blockTemplates,n=window.wp.components,s=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-onboarding-prompt","title":"Product onboarding prompt","textdomain":"google-listings-and-ads","attributes":{"startUrl":{"type":"string","__experimentalRole":"content"}},"supports":{"html":false,"inserter":false,"lock":false}}'),a=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-channel-visibility","title":"Product channel visibility","textdomain":"google-listings-and-ads","attributes":{"property":{"type":"string","__experimentalRole":"content"},"options":{"type":"array","items":{"type":"object"},"default":[]},"valueOfSync":{"type":"string"},"valueOfDontSync":{"type":"string"},"statusOfSynced":{"type":"string"},"statusOfHasErrors":{"type":"string"}},"supports":{"html":false,"inserter":false,"lock":false}}'),r=window.wp.date;async function i(e){const t=e.current;if(!t.validity.valid)return t.validationMessage}var p=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-date-time-field","title":"Product date and time fields","textdomain":"google-listings-and-ads","attributes":{"label":{"type":"string"},"tooltip":{"type":"string"},"property":{"type":"string","__experimentalRole":"content"}},"supports":{"html":false,"inserter":false,"lock":false}}'),c=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-select-field","title":"Product select field","textdomain":"google-listings-and-ads","attributes":{"label":{"type":"string"},"tooltip":{"type":"string"},"property":{"type":"string","__experimentalRole":"content"},"options":{"type":"array","items":{"type":"object"},"default":[]}},"supports":{"html":false,"inserter":false,"lock":false}}'),u=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"google-listings-and-ads/product-select-with-text-field","title":"Product select with text field","textdomain":"google-listings-and-ads","attributes":{"label":{"type":"string"},"tooltip":{"type":"string"},"property":{"type":"string","__experimentalRole":"content"},"options":{"type":"array","items":{"type":"object"},"default":[]},"customInputValue":{"type":"string"}},"supports":{"html":false,"inserter":false,"lock":false}}');function d(t,l){let{name:o,...n}=t;(0,e.registerProductEditorBlockType)({name:o,metadata:n,settings:{edit:l}})}d(s,(function(e){let{attributes:s}=e;const a=(0,o.useWooBlockProps)(s);return(0,t.createElement)("div",a,(0,t.createElement)("div",{className:"Dz8NM01hSQyVP7lytEaS"},(0,t.createElement)("p",{className:"iKH0I_4hIpw3xXPSFYR4"},(0,l.__)("Complete setup to get your products listed on Google for free.","google-listings-and-ads")),(0,t.createElement)(n.Button,{isPrimary:!0,href:s.startUrl},(0,l.__)("Get Started","google-listings-and-ads"))))})),d(a,(function(s){let{attributes:a,context:r}=s;const{valueOfSync:i,valueOfDontSync:p,statusOfSynced:c,statusOfHasErrors:u}=a,d=(0,o.useWooBlockProps)(a),[m,g]=(0,e.__experimentalUseProductEntityProp)(a.property,{postType:r.postType}),{is_visible:y,sync_status:f,issues:h}=m,b=y?m.channel_visibility:p;let _=null;f===u?_=(0,l.__)("Issues detected","google-listings-and-ads"):f&&(_=f.replace("-"," "));const E=y?"":(0,l.__)("This product cannot be shown on any channel because it is hidden from your store catalog. To enable this option, please change this product to be shown in the product catalog, and save the changes.","google-listings-and-ads"),x=y&&null!==_&&b===i&&f!==c,v=h.length>0;return(0,t.createElement)("div",d,(0,t.createElement)(n.SelectControl,{disabled:!y,options:a.options,value:b,onChange:e=>{g({...m,channel_visibility:e})},help:E}),x&&(0,t.createElement)(n.Notice,{className:"xrM9YQcns2lLIJoZocoC",status:v?"warning":"info",isDismissible:!1},(0,t.createElement)("section",null,(0,t.createElement)("h2",null,(0,l.__)("Google sync status","google-listings-and-ads")),(0,t.createElement)("p",{className:"FNzfRIMkTNDr5hdJSQJS"},_)),v&&(0,t.createElement)("section",null,(0,t.createElement)("h2",null,(0,l.__)("Issues","google-listings-and-ads")),(0,t.createElement)("ul",null,h.map(((e,l)=>(0,t.createElement)("li",{key:l},e)))))))})),d(p,(function(l){let{attributes:s,context:a}=l;const{property:p}=s,c=(0,o.useWooBlockProps)(s),[u,d]=(0,e.__experimentalUseProductEntityProp)(p,{postType:a.postType,fallbackValue:""}),m=(0,t.useRef)(null),g=(0,t.useRef)(null),[y,f]=(0,t.useState)((()=>u?(0,r.date)("Y-m-d",u):"")),[h,b]=(0,t.useState)((()=>u?(0,r.date)("H:i",u):"")),_=(e,t)=>{let l="";if(e){const o=`${e}T${t||"00:00:00"}`,n=(0,r.getDate)(o);l=(0,r.date)("c",n,"UTC")}f(e),b(t),u!==l&&d(l)},E=(0,e.useValidation)(`${p}-date`,(()=>i(m))),x=(0,e.useValidation)(`${p}-time`,(()=>i(g)));return(0,t.createElement)("div",c,(0,t.createElement)(n.Flex,{align:"flex-start"},(0,t.createElement)(n.FlexBlock,null,(0,t.createElement)(e.__experimentalTextControl,{ref:m,type:"date",pattern:"\\d{4}-\\d{2}-\\d{2}",label:s.label,tooltip:s.tooltip,value:y,error:E.error,onChange:e=>_(e,h),onBlur:E.validate})),(0,t.createElement)(n.FlexBlock,null,(0,t.createElement)(e.__experimentalTextControl,{className:"p9THnpoXkzl3X4b4PYpg",label:" ",tooltip:"‎ ",ref:g,type:"time",pattern:"[0-9]{2}:[0-9]{2}",value:h,error:x.error,onChange:e=>_(y,e),onBlur:x.validate}))))})),d(c,(function(l){let{attributes:s,context:a}=l;const r=(0,o.useWooBlockProps)(s),[i,p]=(0,e.__experimentalUseProductEntityProp)(s.property,{postType:a.postType});return(0,t.createElement)("div",r,(0,t.createElement)(n.SelectControl,{label:(0,t.createElement)(e.__experimentalLabel,{label:s.label,tooltip:s.tooltip}),options:s.options,value:i,onChange:p}))})),d(u,(function(l){let{attributes:s,context:a}=l;const{options:r,customInputValue:i}=s,p=(0,o.useWooBlockProps)(s),[c,u]=(0,e.__experimentalUseProductEntityProp)(s.property,{postType:a.postType,fallbackValue:""}),[d,m]=(0,t.useState)((()=>{var e;const t=null!=c?c:"",l=r.find((e=>e.value===t));return null!==(e=l?.value)&&void 0!==e?e:i})),g=d===i,[y,f]=(0,t.useState)(g?c:"");return(0,t.createElement)("div",p,(0,t.createElement)(n.SelectControl,{label:(0,t.createElement)(e.__experimentalLabel,{label:s.label,tooltip:s.tooltip}),options:r,value:d,onChange:e=>{m(e),u(e===i?y:e)}}),g&&(0,t.createElement)(e.__experimentalTextControl,{type:"text",value:y,onChange:e=>{f(e),u(e)}}))}))}();