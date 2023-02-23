import{p as g}from"./pickBy.03b72c80.js";import{L as w}from"./Layout.848b6efc.js";import{t as x}from"./throttle.bc3acd91.js";import{S as k,m as v}from"./SearchFilter.5021ee74.js";import{P as V}from"./Pagination.7e0712da.js";import{_ as $,r as n,o as r,c as a,a as e,t as o,b as l,e as u,F as C,j as B,d as m,h as N,f as T}from"./app.6f67d15f.js";import"./debounce.bd2534f1.js";import"./Dropdown.0d591d5e.js";import"./FlashMessages.27b32e92.js";const j={layout:w,components:{Pagination:V,SearchFilter:k},props:{expenses:Object,filters:Object},metaInfo(){return{title:this.$tc("Expense",2)}},data(){return{form:{search:this.filters.search,trashed:this.filters.trashed}}},watch:{form:{handler:x(function(){let t=g(this.form);this.$inertia.replace(this.route("expenses",Object.keys(t).length?t:{remember:"forget"}))},250),deep:!0}},methods:{rowClicked(t){this.$inertia.visit(this.route("expenses.edit",t))},reset(){this.form=v(this.form,()=>null)}}},E={class:"mb-6 mt-2 font-bold text-lg md:text-2xl"},L={class:"np mb-6 flex justify-between items-center"},I={class:"block text-gray-700"},O={class:"inline md:hidden"},F={class:"hidden md:inline"},S={class:"bg-white rounded shadow overflow-x-auto scroll-on-light"},D={class:"w-full whitespace-no-wrap"},P={class:"text-left font-bold"},R={class:"px-6 pt-6 pb-4"},U={class:"px-6 pt-6 pb-4"},q={class:"px-6 pt-6 pb-4"},A={class:"px-6 pt-6 pb-4",colspan:"2"},W=["onClick"],z={class:"border-t px-6 py-4"},G={class:"flex items-center"},H={class:"border-t px-6 py-4 text-right"},J={class:"border-t px-6 py-4 leading-normal"},K={key:0},M={class:"border-t px-6 py-4 max-w-lg truncate"},Q={class:"border-t px-6 py-4 w-8"},X={key:0},Y={class:"border-t px-6 py-4",colspan:"5"};function Z(t,i,d,ee,c,p){const _=n("v-select"),f=n("search-filter"),h=n("Icons"),b=n("Link"),y=n("pagination");return r(),a("div",null,[e("h1",E,o(t.$tc("Expense",2)),1),e("div",L,[l(f,{modelValue:c.form.search,"onUpdate:modelValue":i[1]||(i[1]=s=>c.form.search=s),class:"w-full max-w-md ltr:mr-4 rtl:ml-4",onReset:p.reset},{default:u(()=>[e("label",I,o(t.$t("Trashed")),1),l(_,{modelValue:c.form.trashed,"onUpdate:modelValue":i[0]||(i[0]=s=>c.form.trashed=s),options:[{value:"",label:"Not Trashed"},{value:"with",label:t.$t("With Trashed")},{value:"only",label:t.$t("Only Trashed")}],reduce:s=>s.value},null,8,["modelValue","options","reduce"])]),_:1},8,["modelValue","onReset"]),l(b,{class:"btn-gray",href:t.route("expenses.create")},{default:u(()=>[e("span",O,[l(h,{name:"add",class:"w-4 h-4 fill-white group-hover:fill-white"})]),e("span",F,o(t.$t("create_x",{x:t.$tc("Expense")})),1)]),_:1},8,["href"])]),e("div",S,[e("table",D,[e("thead",null,[e("tr",P,[e("th",R,o(t.$t("Type Name")),1),e("th",U,o(t.$t("Amount")),1),e("th",q,o(t.$t("Created By")),1),e("th",A,o(t.$t("Description")),1)])]),e("tbody",null,[(r(!0),a(C,null,B(d.expenses.data,s=>(r(),a("tr",{key:s.id,onClick:te=>p.rowClicked(s.id),class:"cursor-pointer hover:bg-teal-200 focus-within:bg-teal-200"},[e("td",z,[e("div",G,[N(o(s.name)+" ",1),s.deleted_at?(r(),T(h,{key:0,name:"trash",class:"flex-shrink-0 w-3 h-3 fill-gray-400 ml-2"})):m("",!0)])]),e("td",H,o(t.$number(s.amount)),1),e("td",J,[s.user?(r(),a("div",K,[e("div",null,o(s.user.name),1),e("div",null,o(s.user.phone),1)])):m("",!0)]),e("td",M,o(s.description),1),e("td",Q,[l(h,{name:"cheveron-right",class:"block w-6 h-6 fill-gray-400 rtl:rotate"})])],8,W))),128)),d.expenses.data.length===0?(r(),a("tr",X,[e("td",Y,o(t.$t("no_x_found",{x:t.$tc("Expense")})),1)])):m("",!0)])])]),l(y,{links:d.expenses.links,meta:d.expenses.meta},null,8,["links","meta"])])}const he=$(j,[["render",Z]]);export{he as default};
