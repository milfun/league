/*
* @Author: MilFun
* @Date:   2019-10-12 15:16:11
* @Last Modified by:   milfun
* @Last Modified time: 2019-10-12 16:43:05
*/
class Common {
  constructor() {
  	this.switchTab(0);
  }

  switchTab(arg=0) {
    if (arg == 0) {
			$('.pswd-load').show();
			$('.mobi-load').hide();
			$('.code-load').hide();
		}else if(arg == 1){
			$('.pswd-load').hide();
			$('.mobi-load').show();
			$('.code-load').hide();
		}else if(arg == 2){
			$('.pswd-load').hide();
			$('.mobi-load').hide();
			$('.code-load').show();
		}else{

	}
  }
}
var co = new Common();
