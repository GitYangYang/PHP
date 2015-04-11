-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-10 02:56:54
-- 服务器版本： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- 表的结构 `food1data`
--

CREATE TABLE IF NOT EXISTS `food1data` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `food1data`
--

INSERT INTO `food1data` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('一美韩食馆', '地址:延吉市公园派出所斜对面', 'food/c_1_5.png', 'food/food1_5.html', '推荐:海鲜锅,排骨锅'),
('以勒包饭', '地址:延吉市爱丹路44号', 'food/c_1_1.png', 'food/food1_1.html', '推荐：生菜包饭，铁板牛肉，酱花生'),
('全州拌饭馆', '地址:延吉市发展恒润第一城', 'food/c_1_4.png', 'food/food1_4.html', '推荐:营养牛肉饭 ，蔬菜石锅饭，百年石锅饭'),
('南元水豆腐', '地址:延南路与长海胡同交汇处东侧', 'food/c_1_2.png', 'food/food1_2.html', '推荐:水豆腐，南元风味鸡，石板碟鱼头'),
('奔斯烤鸡', '地址:延边大学东侧10米', 'food/c_1_6.png', 'food/food1_6.html', '推荐:烤鸡,炸鸡'),
('韩城狗肉馆', '地址:中山区延安路', 'food/c_1_3.png', 'food/food1_3.html', '推荐:狗肉火锅，红烧狗排，红烧狗爪'),
('韩林阁烤肉', '地址:延吉市丰盛胡同与局子街交汇处东侧', 'food/c_1_7.png', 'food/food1_7.html', '推荐:营养石锅饭，石锅拌饭');

-- --------------------------------------------------------

--
-- 表的结构 `food2data`
--

CREATE TABLE IF NOT EXISTS `food2data` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `food2data`
--

INSERT INTO `food2data` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('德庄火锅', '地址:友谊路与进学街交汇处大洲运动城4层', 'food/c_2_2.png', 'food/food2_2.html', '推荐:重庆火锅'),
('新大海明太屋', '地址:恒润第一城全州拌饭北50米', 'food/c_2_7.png', 'food/food2_7.html', '推荐:火辣辣肥肠锅，辣蒸明太鱼'),
('昆仑饭店', '地址:延吉市市医院对面', 'food/c_2_3.png', 'food/food2_3.html', '推荐:：昆仑鱼头，牛肉蘑菇锅，宫廷烧牛尾'),
('牛犁黄牛', '地址:延吉市海关斜对面', 'food/c_2_6.png', 'food/food2_6.html', '推荐:牛五花肉，烤风干肠'),
('考世茂餐厅', '地址:新兴街788号', 'food/c_2_5.png', 'food/food2_5.html', '推荐:生拌牛肉，生吃金抢鱼 ，豆浆面'),
('荷塘月色', '地址:迎宾桥瑞元大厦B座', 'food/c_2_1.png', 'food/food2_1.html', '推荐:川菜'),
('蒙肥羊烧烤', '地址:延大文化城一楼门市', 'food/c_2_4.png', 'food/food2_4.html', '推荐:烤全兔 ，牛肉蘑菇锅，宫廷烧牛尾');

-- --------------------------------------------------------

--
-- 表的结构 `food3data`
--

CREATE TABLE IF NOT EXISTS `food3data` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `food3data`
--

INSERT INTO `food3data` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('元奶奶参鸡汤', '地址:延吉市公园梨花小学西侧（白宫串店旁边）', 'food/c_3_5.png', 'food/food3_5.html', '推荐:参鸡汤 ,韩食'),
('帽儿山金氏土鸡店', '地址:延吉市明新村1大队', 'food/c_3_6.png', 'food/food3_6.html', '推荐:牛五花肉，烤风干肠'),
('延吉金达莱冷面', '地址:延吉市海蓝路388号', 'food/c_3_1.png', 'food/food3_1.html', '推荐:冷面'),
('御宫烤贝', '地址:原长白市场胡同南30米道西', 'food/c_3_4.png', 'food/food3_4.html', '推荐:生吃生蚝,八爪鱼汤,海鲜啤酒锅,特色牛肉'),
('柳京饭店', '地址:新兴街24号', 'food/c_3_3.png', 'food/food3_3.html', '推荐:清蒸毛蟹,卢思烧烤，平壤冷面'),
('罗先海鲜烧烤', '地址:河南区金达莱美食街北头', 'food/c_3_2.png', 'food/food3_2.html', '推荐:北极贝（烤/拌），象贝，辣炒海螺丝');

-- --------------------------------------------------------

--
-- 表的结构 `food4data`
--

CREATE TABLE IF NOT EXISTS `food4data` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `food4data`
--

INSERT INTO `food4data` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('卡浓咖啡', '地址:延吉市公新银浦东侧60米处', 'food/c_4_4.png', 'food/food4_4.html', '推荐:咖啡'),
('哈纳吐司', '地址:延边2中西门往北50米', 'food/c_4_7.png', 'food/food4_7.html', '推荐:巴黎烤翅，鸡米花'),
('嗨皮哪啦披萨', '地址:延吉市新兴街明日胡同18号', 'food/c_4_3.png', 'food/food4_3.html', '推荐:披萨'),
('李先生餐厅', '地址:延吉市新兴街人民路316号', 'food/c_4_1.png', 'food/food4_1.html', '推荐:牛肉面'),
('比比客快餐', '地址:延吉市新苗幼儿园东侧30米', 'food/c_4_2.png', 'food/food4_2.html', '推荐:披萨'),
('第一寿司店', '地址:延吉市新时代购物广场七楼', 'food/c_4_6.png', 'food/food4_6.html', '推荐：鸭片鱼寿司'),
('肯德基', '地址:人民路与太平街交汇处西侧', 'food/c_4_5.png', 'food/food4_5.html', '');

-- --------------------------------------------------------

--
-- 表的结构 `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `hotel`
--

INSERT INTO `hotel` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('大宗大宇饭店★★★★', '地址:延吉市局子街3118号', 'hotel/6.png', 'hotel/house6.html', '电话:0433-2528888、2529898'),
('如家快捷酒店★★', '地址:延吉市长白山路2562号', 'hotel/5.png', 'hotel/house5.html', '电话:0433-2805599'),
('延吉万隆酒店★★', '地址:延吉市站前街28号', 'hotel/21.png', 'hotel/house21.html', '电话:0433-2871111'),
('延吉乐佰家居商务宾馆★★', '地址:延吉市河南街乐佰大厦金座6楼', 'hotel/17.png', 'hotel/house17.html', '电话:0433-2871111'),
('延吉大洲酒店★★★★', '地址:延吉市河南区铁北路439号', 'hotel/10.png', 'hotel/house10.html', '电话:0433-6195555'),
('延吉延京宾馆★★', '地址:延吉市新兴街爱丹路139-1号', 'hotel/23.png', 'hotel/house23.html', '电话:0433-2528846'),
('延吉延边成宝温州酒店★★★', '地址:延吉市解放路350号', 'hotel/22.png', 'hotel/house22.html', '电话:0433-2901112'),
('延吉弘大宾馆★★', '地址:延吉市站前街28号', 'hotel/13.png', 'hotel/house13.html', '电话:0433-2211188'),
('延吉明仕主题客栈★★', '地址:延吉市公园路977号', 'hotel/19.png', 'hotel/house19.html', '电话:0433-2713999'),
('延吉桔子酒店★★', '地址:延吉市解放路256-1号', 'hotel/16.png', 'hotel/house16.html', '电话:0433-2588999'),
('延吉欢乐宫酒店★★', '地址:延吉市铁北路816号', 'hotel/14.png', 'hotel/house14.html', '电话:0433-2790000'),
('延吉潘多拉时尚宾馆★★', '地址:延吉市进学街步行街延边医药大厦综合楼', 'hotel/20.png', 'hotel/house20.html', '电话0433-2870000'),
('延吉罗京饭店★★★', '地址:延吉市公园路58号', 'hotel/18.png', 'hotel/house18.html', '电话:0433-5013333'),
('延吉金凯悦假日酒店★★', '地址:延吉市永乐街45号', 'hotel/15.png', 'hotel/house15.html', '电话:0433-5115999'),
('延吉长白松宾馆★★★', '地址:延吉市公园街588号', 'hotel/24.png', 'hotel/house24.html', '电话:0433-8337777'),
('延吉长虹大厦★★★', '地址:延吉市光明街1030号', 'hotel/25.png', 'hotel/house25.html', '电话:0433-8355555'),
('延吉韩城世纪酒店★★★★', '地址:延吉市参花街238号', 'hotel/12.png', 'hotel/house12.html', '电话:0433-2502222、2501577'),
('延吉高丽大厦★★', '地址:延吉市爱单路32号光华路', 'hotel/11.png', 'hotel/house11.html', '电话:0433-2509501'),
('延边国际饭店★★★★★', '地址:延吉市友谊路118号', 'hotel/8.png', 'hotel/house8.html', '推荐:牛肉面'),
('延边洲际国际商务酒店★★★', '地址:延吉市站前街809号', 'hotel/9.png', 'hotel/house9.html', '电话:0433-2265555'),
('延边白山大厦★★★★', '地址:延吉市友谊路66号', 'hotel/7.png', 'hotel/house7.html', '电话:0433-2581111'),
('绿源大酒店★★★', '地址:延吉市站前街28号', 'hotel/4.png', 'hotel/house4.html', '电话:0433-2871111'),
('金洲假日酒店 ★★（延吉公园店）', '地址:延吉市参花街130号', 'hotel/1.png', 'hotel/house1.html', '电话:0433-2581666'),
('金洲假日酒店 ★★（延吉爱丹路店）', '地址:延吉市爱丹路689号', 'hotel/2.png', 'hotel/house2.html', '电话:0433-8389222'),
('锦江之星★★', '地址:延吉市光华路789号', 'hotel/3.png', 'hotel/house3.html', '电话:0433-2820777');

-- --------------------------------------------------------

--
-- 表的结构 `jingdian`
--

CREATE TABLE IF NOT EXISTS `jingdian` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `jingdian`
--

INSERT INTO `jingdian` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('仙境台风景名胜区', '地址:和龙仙境台', 'gg/gg_7.png', 'gg/gg_7.html', ''),
('安图峡谷浮石林', '地址:长白山北山门延图和线行驶6公里', 'gg/gg_11.png', 'gg/gg_11.html', ''),
('延边博物馆', '地址:延吉市新兴街', 'gg/gg_3.png', 'gg/gg_3.html', ''),
('延边国贸农业科技文化园', '地址:南溪村西(国贸大厦斜对面)', 'gg/gg_1.png', 'gg/gg_1.html', ''),
('延边革命烈士陵园', '地址:延吉市体校东侧', 'gg/gg_4.png', 'gg/gg_4.html', ''),
('敦化六顶山金鼎大佛', '地址:六鼎山风景区内', 'gg/gg_6.png', 'gg/gg_6.html', ''),
('海兰湖风景区', '地址:河龙村东2公里', 'gg/gg_2.png', 'gg/gg_2.html', ''),
('满天星旅游景区', '地址:汪清县满天星景区旅游', 'gg/gg_10.png', 'gg/gg_10.html', ''),
('防川风景区', '地址:珲春防川', 'gg/gg_5.png', 'gg/gg_5.html', ''),
('静泊湖', '地址:黑龙江省牡丹江市宁安市', 'gg/gg_12.png', 'gg/gg_12.html', ''),
('非物质文化遗产展览馆', '地址:图门', 'gg/gg_8.png', 'gg/gg_8.html', '');

-- --------------------------------------------------------

--
-- 表的结构 `shopping`
--

CREATE TABLE IF NOT EXISTS `shopping` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopping`
--

INSERT INTO `shopping` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('圣手美甲', '地址:延吉市步行街千盛广场南门往西5米远', 'shop/sp_11.png', 'shop/sp_11.html', ''),
('地下商场', '地址:延吉市系市场对面', 'shop/sp_8.png', 'shop/sp_8.html', ''),
('太平洋美容医院', '地址:延吉市人民路188号(国贸大厦斜对面)', 'shop/sp_1.png', 'shop/sp_1.html', ''),
('巴黎斯美丽清晨', '地址:延吉市公园对面信息产业园2楼', 'shop/sp_10.png', 'shop/sp_10.html', ''),
('延吉成宝', '地址:延吉市解放路350号', 'shop/sp_5.png', 'shop/sp_5.html', ''),
('延吉西市场', '地址:延吉市新兴街', 'shop/sp_3.png', 'shop/sp_3.html', ''),
('延吉金华城', '地址:延吉市参花街627号由北向南方向西市场站点', 'shop/sp_6.png', 'shop/sp_6.html', ''),
('时代广场地下商场', '地址：延吉市时代广场', 'shop/sp_7.png', 'shop/sp_7.html', ''),
('金光善整形美容医院', '地址:延吉市海兰路34号', 'shop/sp_2.png', 'shop/sp_2.html', ''),
('长白神特产超市', '地址:延吉市日报社附近', 'shop/sp_9.png', 'shop/sp_9.html', ''),
('韩百百货', '地址:延吉市新兴街附近', 'shop/sp_4.png', 'shop/sp_4.html', '');

-- --------------------------------------------------------

--
-- 表的结构 `yangshen`
--

CREATE TABLE IF NOT EXISTS `yangshen` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `yangshen`
--

INSERT INTO `yangshen` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('延吉市温泉桑拿洗浴中心', '电话:0433-5006777', 'gg/am_3.png', 'gg/am_3.html', ''),
('延吉远航按摩中心', '电话:0433-2851299', 'gg/am_1.png', 'gg/am_1.html', ''),
('延吉银铺', '电话:0433-2763377', 'gg/am_2.png', 'gg/am_2.html', '');

-- --------------------------------------------------------

--
-- 表的结构 `yule`
--

CREATE TABLE IF NOT EXISTS `yule` (
  `title` varchar(40) NOT NULL,
  `address` varchar(40) DEFAULT NULL,
  `pic` varchar(40) DEFAULT NULL,
  `html` varchar(40) DEFAULT NULL,
  `ch1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `yule`
--

INSERT INTO `yule` (`title`, `address`, `pic`, `html`, `ch1`) VALUES
('万达长白山滑雪场', '电话:4000987666', 'gg/sk2_1.png', 'gg/sk2_1.html', ''),
('东方熊乐园', '电话:0433-7889966', 'gg/sk3.png', 'gg/sk3.html', ''),
('梦都美滑雪场', '电话:0433-8330777', 'gg/sk1_1.png', 'gg/sk1_1.html', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food1data`
--
ALTER TABLE `food1data`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `food2data`
--
ALTER TABLE `food2data`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `food3data`
--
ALTER TABLE `food3data`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `food4data`
--
ALTER TABLE `food4data`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `jingdian`
--
ALTER TABLE `jingdian`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `shopping`
--
ALTER TABLE `shopping`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `yangshen`
--
ALTER TABLE `yangshen`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `yule`
--
ALTER TABLE `yule`
 ADD PRIMARY KEY (`title`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
