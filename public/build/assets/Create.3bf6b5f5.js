import{L as l}from"./Layout.848b6efc.js";import p from"./Form.e5bb9c3f.js";import{_ as d,r as e,o as u,c as f,a as r,b as o,e as _,h as m,t as a}from"./app.6f67d15f.js";import"./Dropdown.0d591d5e.js";import"./FlashMessages.27b32e92.js";import"./debounce.bd2534f1.js";import"./TextInput.95a38f33.js";import"./InputError.4ad247ad.js";import"./RadioInput.998b7fea.js";import"./SelectInput.b94c1730.js";import"./TextareaInput.079bf942.js";import"./CheckboxInput.86a6ee38.js";import"./LoadingButton.59da3bfe.js";import"./DeleteRestoreComponent.174a4301.js";import"./Dialog.7f9a1131.js";import"./Modal.c57bed3f.js";const h={layout:l,components:{MForm:p},props:{iservices:Array,icustomers:Array},metaInfo(){return{title:this.$t("create_x",{x:this.$tc("Measurement")})}}},x={class:"mb-6 mt-2 font-bold text-lg md:text-2xl"},v=r("span",{class:"text-gray-400 font-medium mx-2"},"/",-1),y={class:"bg-white rounded shadow overflow-hidden max-w-3xl"};function w(t,g,s,k,$,b){const i=e("Icons"),n=e("Link"),c=e("m-form");return u(),f("div",null,[r("h1",x,[o(n,{class:"text-gray-600 hover:text-gray-800 inline-flex items-center",href:t.route("measurements")},{default:_(()=>[o(i,{name:"back",class:"flex-shrink-0 w-3 h-3 md:w-5 md:h-5 fill-current ltr:mr-2 rtl:ml-2 rtl:rotate"}),m(" "+a(t.$tc("Measurement",2)),1)]),_:1},8,["href"]),v,m(" "+a(t.$t("Create")),1)]),r("div",y,[o(c,{modal:!1,iservices:s.iservices,icustomers:s.icustomers},null,8,["iservices","icustomers"])])])}const G=d(h,[["render",w]]);export{G as default};
