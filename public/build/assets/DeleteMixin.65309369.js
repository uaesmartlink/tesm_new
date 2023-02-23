import{A as E}from"./app.6f67d15f.js";var h={exports:{}};/*!
 * inflection
 * Copyright(c) 2011 Ben Lin <ben@dreamerslab.com>
 * MIT Licensed
 *
 * @fileoverview
 * A port of inflection-js to node.js module.
 */(function(g,$){(function(u,e){g.exports=e()})(E,function(){var u=["accommodation","adulthood","advertising","advice","aggression","aid","air","aircraft","alcohol","anger","applause","arithmetic","assistance","athletics","bacon","baggage","beef","biology","blood","botany","bread","butter","carbon","cardboard","cash","chalk","chaos","chess","crossroads","countryside","dancing","deer","dignity","dirt","dust","economics","education","electricity","engineering","enjoyment","envy","equipment","ethics","evidence","evolution","fame","fiction","flour","flu","food","fuel","fun","furniture","gallows","garbage","garlic","genetics","gold","golf","gossip","gratitude","grief","guilt","gymnastics","happiness","hardware","harm","hate","hatred","health","heat","help","homework","honesty","honey","hospitality","housework","humour","hunger","hydrogen","ice","importance","inflation","information","innocence","iron","irony","jam","jewelry","judo","karate","knowledge","lack","laughter","lava","leather","leisure","lightning","linguine","linguini","linguistics","literature","litter","livestock","logic","loneliness","luck","luggage","macaroni","machinery","magic","management","mankind","marble","mathematics","mayonnaise","measles","methane","milk","minus","money","mud","music","mumps","nature","news","nitrogen","nonsense","nurture","nutrition","obedience","obesity","oxygen","pasta","patience","physics","poetry","pollution","poverty","pride","psychology","publicity","punctuation","quartz","racism","relaxation","reliability","research","respect","revenge","rice","rubbish","rum","safety","scenery","seafood","seaside","series","shame","sheep","shopping","sleep","smoke","smoking","snow","soap","software","soil","spaghetti","species","steam","stuff","stupidity","sunshine","symmetry","tennis","thirst","thunder","timber","traffic","transportation","trust","underwear","unemployment","unity","validity","veal","vegetation","vegetarianism","vengeance","violence","vitality","warmth","wealth","weather","welfare","wheat","wildlife","wisdom","yoga","zinc","zoology"],e={plural:{men:new RegExp("^(m|wom)en$","gi"),people:new RegExp("(pe)ople$","gi"),children:new RegExp("(child)ren$","gi"),tia:new RegExp("([ti])a$","gi"),analyses:new RegExp("((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$","gi"),databases:new RegExp("(database)s$","gi"),drives:new RegExp("(drive)s$","gi"),hives:new RegExp("(hi|ti)ves$","gi"),curves:new RegExp("(curve)s$","gi"),lrves:new RegExp("([lr])ves$","gi"),aves:new RegExp("([a])ves$","gi"),foves:new RegExp("([^fo])ves$","gi"),movies:new RegExp("(m)ovies$","gi"),aeiouyies:new RegExp("([^aeiouy]|qu)ies$","gi"),series:new RegExp("(s)eries$","gi"),xes:new RegExp("(x|ch|ss|sh)es$","gi"),mice:new RegExp("([m|l])ice$","gi"),buses:new RegExp("(bus)es$","gi"),oes:new RegExp("(o)es$","gi"),shoes:new RegExp("(shoe)s$","gi"),crises:new RegExp("(cris|ax|test)es$","gi"),octopuses:new RegExp("(octop|vir)uses$","gi"),aliases:new RegExp("(alias|canvas|status|campus)es$","gi"),summonses:new RegExp("^(summons|bonus)es$","gi"),oxen:new RegExp("^(ox)en","gi"),matrices:new RegExp("(matr)ices$","gi"),vertices:new RegExp("(vert|ind)ices$","gi"),feet:new RegExp("^feet$","gi"),teeth:new RegExp("^teeth$","gi"),geese:new RegExp("^geese$","gi"),quizzes:new RegExp("(quiz)zes$","gi"),whereases:new RegExp("^(whereas)es$","gi"),criteria:new RegExp("^(criteri)a$","gi"),genera:new RegExp("^genera$","gi"),ss:new RegExp("ss$","gi"),s:new RegExp("s$","gi")},singular:{man:new RegExp("^(m|wom)an$","gi"),person:new RegExp("(pe)rson$","gi"),child:new RegExp("(child)$","gi"),drive:new RegExp("(drive)$","gi"),ox:new RegExp("^(ox)$","gi"),axis:new RegExp("(ax|test)is$","gi"),octopus:new RegExp("(octop|vir)us$","gi"),alias:new RegExp("(alias|status|canvas|campus)$","gi"),summons:new RegExp("^(summons|bonus)$","gi"),bus:new RegExp("(bu)s$","gi"),buffalo:new RegExp("(buffal|tomat|potat)o$","gi"),tium:new RegExp("([ti])um$","gi"),sis:new RegExp("sis$","gi"),ffe:new RegExp("(?:([^f])fe|([lr])f)$","gi"),hive:new RegExp("(hi|ti)ve$","gi"),aeiouyy:new RegExp("([^aeiouy]|qu)y$","gi"),x:new RegExp("(x|ch|ss|sh)$","gi"),matrix:new RegExp("(matr)ix$","gi"),vertex:new RegExp("(vert|ind)ex$","gi"),mouse:new RegExp("([m|l])ouse$","gi"),foot:new RegExp("^foot$","gi"),tooth:new RegExp("^tooth$","gi"),goose:new RegExp("^goose$","gi"),quiz:new RegExp("(quiz)$","gi"),whereas:new RegExp("^(whereas)$","gi"),criterion:new RegExp("^(criteri)on$","gi"),genus:new RegExp("^genus$","gi"),s:new RegExp("s$","gi"),common:new RegExp("$","gi")}},x=[[e.plural.men],[e.plural.people],[e.plural.children],[e.plural.tia],[e.plural.analyses],[e.plural.databases],[e.plural.drives],[e.plural.hives],[e.plural.curves],[e.plural.lrves],[e.plural.foves],[e.plural.aeiouyies],[e.plural.series],[e.plural.movies],[e.plural.xes],[e.plural.mice],[e.plural.buses],[e.plural.oes],[e.plural.shoes],[e.plural.crises],[e.plural.octopuses],[e.plural.aliases],[e.plural.summonses],[e.plural.oxen],[e.plural.matrices],[e.plural.feet],[e.plural.teeth],[e.plural.geese],[e.plural.quizzes],[e.plural.whereases],[e.plural.criteria],[e.plural.genera],[e.singular.man,"$1en"],[e.singular.person,"$1ople"],[e.singular.child,"$1ren"],[e.singular.drive,"$1s"],[e.singular.ox,"$1en"],[e.singular.axis,"$1es"],[e.singular.octopus,"$1uses"],[e.singular.alias,"$1es"],[e.singular.summons,"$1es"],[e.singular.bus,"$1ses"],[e.singular.buffalo,"$1oes"],[e.singular.tium,"$1a"],[e.singular.sis,"ses"],[e.singular.ffe,"$1$2ves"],[e.singular.hive,"$1ves"],[e.singular.aeiouyy,"$1ies"],[e.singular.matrix,"$1ices"],[e.singular.vertex,"$1ices"],[e.singular.x,"$1es"],[e.singular.mouse,"$1ice"],[e.singular.foot,"feet"],[e.singular.tooth,"teeth"],[e.singular.goose,"geese"],[e.singular.quiz,"$1zes"],[e.singular.whereas,"$1es"],[e.singular.criterion,"$1a"],[e.singular.genus,"genera"],[e.singular.s,"s"],[e.singular.common,"s"]],f=[[e.singular.man],[e.singular.person],[e.singular.child],[e.singular.drive],[e.singular.ox],[e.singular.axis],[e.singular.octopus],[e.singular.alias],[e.singular.summons],[e.singular.bus],[e.singular.buffalo],[e.singular.tium],[e.singular.sis],[e.singular.ffe],[e.singular.hive],[e.singular.aeiouyy],[e.singular.x],[e.singular.matrix],[e.singular.mouse],[e.singular.foot],[e.singular.tooth],[e.singular.goose],[e.singular.quiz],[e.singular.whereas],[e.singular.criterion],[e.singular.genus],[e.plural.men,"$1an"],[e.plural.people,"$1rson"],[e.plural.children,"$1"],[e.plural.databases,"$1"],[e.plural.drives,"$1"],[e.plural.genera,"genus"],[e.plural.criteria,"$1on"],[e.plural.tia,"$1um"],[e.plural.analyses,"$1$2sis"],[e.plural.hives,"$1ve"],[e.plural.curves,"$1"],[e.plural.lrves,"$1f"],[e.plural.aves,"$1ve"],[e.plural.foves,"$1fe"],[e.plural.movies,"$1ovie"],[e.plural.aeiouyies,"$1y"],[e.plural.series,"$1eries"],[e.plural.xes,"$1"],[e.plural.mice,"$1ouse"],[e.plural.buses,"$1"],[e.plural.oes,"$1"],[e.plural.shoes,"$1"],[e.plural.crises,"$1is"],[e.plural.octopuses,"$1us"],[e.plural.aliases,"$1"],[e.plural.summonses,"$1"],[e.plural.oxen,"$1"],[e.plural.matrices,"$1ix"],[e.plural.vertices,"$1ex"],[e.plural.feet,"foot"],[e.plural.teeth,"tooth"],[e.plural.geese,"goose"],[e.plural.quizzes,"$1"],[e.plural.whereases,"$1"],[e.plural.ss,"ss"],[e.plural.s,""]],d=["and","or","nor","a","an","the","so","but","to","of","at","by","from","into","on","onto","off","out","in","over","with","for"],m=new RegExp("(_ids|_id)$","g"),v=new RegExp("_","g"),w=new RegExp("[ _]","g"),y=new RegExp("([A-Z])","g"),b=new RegExp("^_"),o={_apply_rules:function(i,a,s,n){if(n)i=n;else{var t=o.indexOf(s,i.toLowerCase())>-1;if(!t){for(var r=0,l=a.length;r<l;r++)if(i.match(a[r][0])){a[r][1]!==void 0&&(i=i.replace(a[r][0],a[r][1]));break}}}return i},indexOf:function(i,a,s,n){s||(s=-1);for(var t=-1,r=s,l=i.length;r<l;r++)if(i[r]===a||n&&n(i[r],a)){t=r;break}return t},pluralize:function(i,a){return o._apply_rules(i,x,u,a)},singularize:function(i,a){return o._apply_rules(i,f,u,a)},inflect:function(i,a,s,n){return a=parseFloat(a,10),isNaN(a)?i:a===1?o._apply_rules(i,f,u,s):o._apply_rules(i,x,u,n)},camelize:function(i,a){for(var s=i.split("/"),n=0,t=s.length,r,l,p,c;n<t;n++){for(r=s[n].split("_"),l=0,p=r.length;l<p;l++)l!==0&&(r[l]=r[l].toLowerCase()),c=r[l].charAt(0),c=a&&n===0&&l===0?c.toLowerCase():c.toUpperCase(),r[l]=c+r[l].substring(1);s[n]=r.join("")}return s.join("::")},underscore:function(i,a){if(a&&i===i.toUpperCase())return i;for(var s=i.split("::"),n=0,t=s.length;n<t;n++)s[n]=s[n].replace(y,"_$1"),s[n]=s[n].replace(b,"");return s.join("/").toLowerCase()},humanize:function(i,a){return i=i.toLowerCase(),i=i.replace(m,""),i=i.replace(v," "),a||(i=o.capitalize(i)),i},capitalize:function(i){return i=i.toLowerCase(),i.substring(0,1).toUpperCase()+i.substring(1)},dasherize:function(i){return i.replace(w,"-")},titleize:function(i){i=i.toLowerCase().replace(v," ");for(var a=i.split(" "),s=0,n=a.length,t,r,l;s<n;s++){for(t=a[s].split("-"),r=0,l=t.length;r<l;r++)o.indexOf(d,t[r].toLowerCase())<0&&(t[r]=o.capitalize(t[r]));a[s]=t.join("-")}return i=a.join(" "),i=i.substring(0,1).toUpperCase()+i.substring(1),i},demodulize:function(i){var a=i.split("::");return a[a.length-1]},tableize:function(i){return i=o.underscore(i),i=o.pluralize(i),i},classify:function(i){return i=o.camelize(i),i=o.singularize(i),i},foreign_key:function(i,a){return i=o.demodulize(i),i=o.underscore(i)+(a?"":"_")+"id",i},ordinalize:function(i){for(var a=i.split(" "),s=0,n=a.length;s<n;s++){var t=parseInt(a[s],10);if(!isNaN(t)){var r=a[s].substring(a[s].length-2),l=a[s].substring(a[s].length-1),p="th";r!="11"&&r!="12"&&r!="13"&&(l==="1"?p="st":l==="2"?p="nd":l==="3"&&(p="rd")),a[s]+=p}}return a.join(" ")},transform:function(i,a){for(var s=0,n=a.length;s<n;s++){var t=a[s];o.hasOwnProperty(t)&&(i=o[t](i))}return i}};return o.version="1.13.1",o})})(h);function _(g,$){const u=h.exports.pluralize(g),e=h.exports.titleize(h.exports.humanize(g));return $&&(g=$),{data(){return{Id:""}},methods:{destroy(){console.log("DialogModal"),this.$vfm.show("dialog",{title:this.$t("delete_x",{x:this.$tc(e)}),text:this.$t("ask_delete_x",{x:this.$tc(e)}),buttons:[{title:"Yes",class:"px-6 py-3 bg-gray-200 hover:bg-gray-400",handler:()=>{this.$vfm.hide("dialog"),this.$inertia.delete(this.route(u+".destroy",this[g].id))}},{title:"No",class:"px-6 py-3 border-l bg-gray-200 hover:bg-gray-400"}]})},destroyPermanently(){this.$vfm.show("dialog",{title:this.$t("Delete Permanently"),text:this.$t("ask_final_delete_x",{x:this.$tc(e)}),buttons:[{title:"Yes",class:"px-6 py-3 bg-gray-200 hover:bg-gray-400",handler:()=>{this.$vfm.hide("dialog"),this.$inertia.delete(this.route(u+".delete",this[g].id))}},{title:"No",class:"px-6 py-3 border-l bg-gray-200 hover:bg-gray-400"}]})},restore(){this.$vfm.show("dialog",{title:this.$t("retore_x",{x:this.$tc(e)}),text:this.$t("ask_retore_x",{x:this.$tc(e)}),buttons:[{title:"Yes",class:"px-6 py-3 bg-gray-200 hover:bg-gray-400",handler:()=>{this.$vfm.hide("dialog"),this.$inertia.put(this.route(u+".restore",this[g].id))}},{title:"No",class:"px-6 py-3 border-l bg-gray-200 hover:bg-gray-400"}]})}}}}export{_ as d};
