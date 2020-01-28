/*
* @Author: MilFun
* @Date:   2019-10-12 15:18:20
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-25 09:59:04
*/
class Milfun {
  constructor(list,pat) {
  	this.path= pat+'/public/static/js/';
  	this.init(list,this.path);
  }

  init(list,path) {
  	var p ;
    for(var i=0;i<list.length;i++){
    	console.log(list[i])
    	console.log(this.path)
    	 p = this.path+list[i]+'.js'
    	//console.log(p)
	// 使用juqery的同步ajax加载js.
	// 使用document.write 动态添加的js会在当前js的后面，可能会有js引用问题
	// 动态创建script脚本，是非阻塞下载，也会出现引用问题


	$.getScript(p, function() {
		//alert("Load was performed.");
		console.log(p)
	});
  
	//$.ajax({type:'GET',url:this.path+list[i]+'.js',async:false,dataType:'script'});
	}
  }
}

