/*
* @Author: MilFun
* @Date:   2019-10-12 15:16:24
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-25 16:25:08
*/
class commit {

  constructor(pppp) {
  	
    console.log(this.url)
  }

  getAll(aaa){
  	var acontent,title,caterogy,tag,img;
  	title = $('#article-title').text();
  	caterogy = $('#article-type').text();
  	tag = $('#article-tag').text();
  	acontent = $('#result').html();
    img =  $('#article-imgurl').text();
  	console.log(acontent)
  	var data = {acontent:acontent,aname:title,caterogy:caterogy,tag:tag,img:img};
  	this.commit(data,aaa);
  }
  commit(data,aaa){
    var url= aaa+'/mark/addblog';
  	$.ajax({
        type: "POST",
        url:url,
        dataType: "json",
        data:data,
        success: function(json){
          console.log(json)
          }
      });
  }
}

var co =new commit(domain);