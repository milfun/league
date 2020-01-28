/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : wzdx

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2019-10-18 17:07:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wz_blog
-- ----------------------------
DROP TABLE IF EXISTS `wz_blog`;
CREATE TABLE `wz_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` varchar(100) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `acontent` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `common` int(11) NOT NULL,
  `hot` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `music` varchar(255) NOT NULL,
  `is_music` int(11) NOT NULL,
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wz_blog
-- ----------------------------
INSERT INTO `wz_blog` VALUES ('64', 'd006c12912beaee095c278a89f2d956d5cd13dbc', '但愿无人无物与你来争我心', '&lt;p&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;img src=&quot;http://milfun.fun/s/ueditor/php/upload/20181107/15415933806397.jpg&quot;/&gt;&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 巴兰是外邦先知，当巴勒王第一次差派人来邀请他咒诅从埃及上来的那民。因为他为谁祝福，谁就得福，咒诅谁谁就受咒诅。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 巴兰回答说，你们今夜在这里住宿，我必照耶和华所告诉我的回报你们。他求问神之后，神对巴兰说，你不可同他们去，也不可咒诅那民，因为那民是蒙福的。他就如实回复来的人，没跟他们同去。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 巴勒又差遣首领，比先前的更多更尊贵。差人告诉他，&amp;quot;因为我必使你得极大的尊荣；你向我说什么，我就去作；只求你来为我咒诅这民。&amp;quot;&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;巴兰回答巴勒的臣仆说，即使巴勒将他满屋的金银给我，我也不可越过耶和华我神的话作事，少作多作都不可。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 民22:19&amp;nbsp; 现在请你们今夜也在这里住宿，等我得知耶和华还要对我说什么。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 巴兰动心了，面对这么大的尊荣诱惑，他放不下于是留他们下来。再求问神，想着神或许同意他去，或许就有机会得到这么大的荣耀了。后面神许可他去了。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 这看起来很不错，他一直求问神的意思如何，他不敢越过神而做些事。但是他后面又求他们住下，待求问神之后再答复。难道神说那民是蒙福的今天就不蒙福了？难道不可咒诅那民今天就可以咒诅了？&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 读到这里，感慨万千！其实很多时候我们也这样，为了一件事情，神已经跟你说不可以，里面给你感觉不平安，可是你总想着神一定要答应这件事，这件事你一定要做…就祷告神，与神交涉，勉强神许可你这样那样。结果呢？你赢了，你硬是要这样那样，神斗不过你，就放你这样那样做。神是真斗不过你吗？不是，祂只是许可你。许可不是同意，不等于喜悦。这是你喜悦的不是祂喜悦的。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 士师记里的那些日子，以色列中没有王，各人行自己眼中看为正的事。当我们陷在自己里面，以为自己做的事都是正确的，却不知是在黑暗中走路，离开了神的引导，终会迷失方向。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 神放弃了巴兰了吗？没有，神对于巴兰的决定发怒了，祂派天使站在路上抵挡他，那天使站在路中间，手里拔着刀，连续三次挡着他。神不敢杀他吗？不是，神在等他回心转意！巴兰的驴看见天使三次转离方向，而巴兰不仅没有看见天使，还怪驴弄伤他的脚。以致驴竟发人声与他争辩。后面神开巴兰的眼叫他能看见。巴兰对耶和华的使者说，我有罪了，我不知道你站在路上阻挡我；你若不喜欢我去，我就转回。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 你若不喜欢我去，我就转回，难道神的心意还不明显吗？只是他的心已经转离神，偏行己路。他已经被巴勒那巨大的诱惑迷了心窍，我们呢？当我们在祂面前痛苦挣扎，在祂面前求祂的许可，我们是否也是在黑暗里呢？神一次次的许可，当祂真的失望的时候，那就换来神的任凭了！&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 以弗所书 4:19&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 他们感觉既然丧尽，就任凭自己放荡，以致贪行种种的污秽。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 他们感觉丧尽…，就任凭自己…。任凭自己陷入无限的欲望里，任凭自己跳进游戏的网罗里。贪行种种的污秽，因为在黑暗里行，就怕接近光。因为黑暗怕光，就越来越远离光，结果就真黑暗了！&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 罗马书 1:28&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 他们既然不以认识神为美，神就任凭他们存可弃绝的心思，行那些不合宜的事，&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 神就任凭他们！什么是任凭？就是因着你一次次不理会里面的感觉，一次次背着神作许多不合祂心意的事，神就任凭你，不管你了……多么可怕，什么时候神任凭我们，就是祂对我们感觉失望，祂也为我们叹气，祂也无可奈何。当我们的父母对我们失望至极，我们就是落入一种&amp;quot;没人管&amp;quot;的地步，没有谁可以约束你限制你，你&amp;quot;自由&amp;quot;了。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 世人都随心所欲，Follow their heart，但愿我们这些属神的人，要顺从神在我们里面给我们的感觉，Follow The spirit，活在祂的眼目标示之下。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 世人都推崇己，都想凭着自己的努力登上巅峰，都以自己行的为美；而我们呢？能否向这位神忠心，不偏离左右，来依靠祂求问祂，照祂喜悦而行。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 来 3:14“你们今日若听见祂的声音，就不可硬着心…&amp;quot;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://milfun.fun/s/ueditor/php/upload/20181107/15415936259444.png&quot;/&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 主啊，但愿无人无物与你来争我心！&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size:1.00em;&quot;&gt;『巴兰与巴勒的经文参考民数记二十二-二十四 』&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', 'MilFun', 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1539828388199&di=3660ddd17d6b8d82507839b3bed7af0b&imgtype=0&src=http%3A%2F%2Fimg4q.duitang.com%2Fuploads%2Fitem%2F201112%2F13%2F20111213192322_B5dQy.thumb.700_0.jpg', '25', '0', '613', '1', 'https://res.wx.qq.com/voice/getvoice?mediaid=MzA4ODU1MDg4M18yNjUwNTYwMDYw', '0', '156235523');

-- ----------------------------
-- Table structure for wz_config
-- ----------------------------
DROP TABLE IF EXISTS `wz_config`;
CREATE TABLE `wz_config` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `note` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wz_config
-- ----------------------------
INSERT INTO `wz_config` VALUES ('1', 'site_name', '怪兽研习社', '网站名称', '');
INSERT INTO `wz_config` VALUES ('2', 'site_domain', 'http://milfun.com', '网站域名', '');
INSERT INTO `wz_config` VALUES ('3', 'copy_right', 'Copyright © 2019 MILFUN>FUN All Right Reserved', '底部其他', '');
INSERT INTO `wz_config` VALUES ('4', 'icp', '闽ICP备18017810号', '备案信息', '');
INSERT INTO `wz_config` VALUES ('5', 'is_close', '0', '是否关闭', '');
