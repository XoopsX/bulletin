<?php /* English Translation by Marcelo Yuji Himoro <http://yuji.ws> & Suin <http://suin.jp>*/
// Module Info

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) ) $mydirname = 'bulletin' ;
$constpref = '_MI_' . strtoupper( $mydirname ) ;

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( $constpref.'_LOADED' ) ) {

// a flag for this language file has already been read or not.



// Appended by Xoops Language Checker -GIJOE- in 2009-01-18 07:28:25
define($constpref.'_COM_ORDER','Order of comment-integration');

// Appended by Xoops Language Checker -GIJOE- in 2008-05-19 05:51:18
define($constpref.'_CONFIG145','feed RSS into backend.php (only for XCL)');
define($constpref.'_CONFIG145_D','');
define($constpref.'_COM_DIRNAME','dirname of d3forum integrated as the comment system');
define($constpref.'_COM_FORUM_ID','forum_id of d3forum integrated');
define($constpref.'_COM_VIEW','View of comment-integration');
define($constpref.'_COM_POSTSNUM','Max posts displayed in comment-integration');

// Appended by Xoops Language Checker -GIJOE- in 2007-05-15 04:44:32
define($constpref.'_CONFIG19','use common/fckeditor');
define($constpref.'_CONFIG19_D','Posters can use FCKeditor on XOOPS if he/she is allowed to use HTML');

define( $constpref.'_LOADED' , 1 ) ;

// The name of this module
define($constpref."_NAME","Bulletin");

// A brief description of this module
define($constpref."_DESC","Creates a Slashdot-like news system, where users can post comments freely.");

// Names of blocks for this module (Not all module has blocks)
define($constpref.'_BNAME1', '新增新闻类别');
define($constpref.'_BDESC1', '');
define($constpref.'_BNAME2', '今天热门新闻');
define($constpref.'_BDESC2', '');
define($constpref.'_BNAME3', '日历');
define($constpref.'_BDESC3', '');
define($constpref.'_BNAME4', '最新消息');
define($constpref.'_BDESC4', '');
define($constpref.'_BNAME5', '类别最新消息');
define($constpref.'_BDESC5', '');
define($constpref.'_BNAME6', '最新评论');
define($constpref.'_BDESC6', '');

// Sub menu
define($constpref.'_SMNAME1', '提交新闻');
define($constpref.'_SMNAME2', '新闻存档');

// Admin
define($constpref.'_ADMENU2', '类别管理');
define($constpref.'_ADMENU3', '发表/编辑新闻');
define($constpref.'_ADMENU4', '发表权限管理');
define($constpref.'_ADMENU5', '新闻管理');
define($constpref.'_ADMENU7', '从新闻模块 (News) 导入');
define($constpref.'_ADMENU_MYLANGADMIN','语言管理');
define($constpref.'_ADMENU_MYTPLSADMIN','模板管理');
define($constpref.'_ADMENU_MYBLOCKSADMIN','区块/权限管理');

// Title of config items
define($constpref.'_CONFIG1', '首页显示的新闻数量');
define($constpref.'_CONFIG1_D', '设定首页要显示的新闻数量。');
define($constpref.'_CONFIG2', '显示导航区块？');
define($constpref.'_CONFIG2_D', '选择“是”将在每个新闻页面的最上方显示一个类别导航区块。');
define($constpref.'_CONFIG3', '提交/编辑 文本编辑框高度');
define($constpref.'_CONFIG3_D', '设定submit.php页面的文本编辑框行数');
define($constpref.'_CONFIG4', '提交/编辑 文本编辑框宽度');
define($constpref.'_CONFIG4_D', '设定submit.php页面的文本编辑框列数');
define($constpref.'_CONFIG5', '时间格式');
define($constpref.'_CONFIG5_D', '请使用PHP的时间格式');
define($constpref.'_CONFIG6', '投稿加入该用户的文章发表数量');
define($constpref.'_CONFIG6_D', '当通过submit.php提交的新闻被核准时，该用户的文章发表数量会随之增加。');
define($constpref.'_CONFIG7', '类别图示目录的路径');
define($constpref.'_CONFIG7_D', '请设定绝对路径。');
define($constpref.'_CONFIG8', '打印页面图标的网址');
define($constpref.'_CONFIG8_D', '设定显示于打印页面的网站logo的网址');
define($constpref.'_CONFIG9', '修改网站名称为文章名称');
define($constpref.'_CONFIG9_D', '以文章标题替换网站名称显示于浏览器标题栏，这样便于搜索引擎的查找。');
define($constpref.'_CONFIG10', '在xoops_module_header指定RSS网址');
define($constpref.'_CONFIG10_D', '');
// 1.01 added
define($constpref.'_CONFIG11', '显示“打印”图标？');
define($constpref.'_CONFIG11_D', '');
define($constpref.'_CONFIG12', '显示“转发好友”图标？');
define($constpref.'_CONFIG12_D', '');
define($constpref.'_CONFIG13', '使用“Tell A Friend”模块？');
define($constpref.'_CONFIG13_D', '');
define($constpref.'_CONFIG14', '显示RSS链接？');
define($constpref.'_CONFIG14_D', '');
// 2.00 added
define($constpref."_CONFIG15","启用相关文章功能？");
define($constpref."_CONFIG15_D","");
define($constpref."_CONFIG16","显示同一类别中的最新文章？");
define($constpref."_CONFIG16_D","在每篇文章的底部显示一个本类别中的文章列表。");
define($constpref."_CONFIG17","同类别中的最新文章数量。");
define($constpref."_CONFIG17_D","");
define($constpref."_CONFIG18","显示类别导航？");
define($constpref."_CONFIG18_D","在每篇文章的顶部显示类别位置。");

// Text for notifications
define($constpref.'_GLOBAL_NOTIFY', '全局的');
define($constpref.'_GLOBAL_NOTIFYDSC', '全局的新闻通知选项。');

define($constpref.'_STORY_NOTIFY', '当前新闻');
define($constpref.'_STORY_NOTIFYDSC', '应用到当前这篇新闻的通知选项。');

define($constpref.'_GLOBAL_NEWCATEGORY_NOTIFY', '新类别');
define($constpref.'_GLOBAL_NEWCATEGORY_NOTIFYCAP', '有新类别建立时通知我。');
define($constpref.'_GLOBAL_NEWCATEGORY_NOTIFYDSC', '有新类别建立时接收通知。');
define($constpref.'_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自动通知：有新类别建立');

define($constpref.'_GLOBAL_STORYSUBMIT_NOTIFY', '新闻提交');       
define($constpref.'_GLOBAL_STORYSUBMIT_NOTIFYCAP', '有新闻提交时通知我。');                           
define($constpref.'_GLOBAL_STORYSUBMIT_NOTIFYDSC', '有新闻提交时接收通知。');                
define($constpref.'_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自动通知：有新闻提交');                      

define($constpref.'_GLOBAL_NEWSTORY_NOTIFY', '新闻发布');       
define($constpref.'_GLOBAL_NEWSTORY_NOTIFYCAP', '有新闻发布时通知我。');
define($constpref.'_GLOBAL_NEWSTORY_NOTIFYDSC', '有新闻发布时接收通知。');
define($constpref.'_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自动通知：新闻发布');

define($constpref.'_STORY_APPROVE_NOTIFY', '新闻已核准');
define($constpref.'_STORY_APPROVE_NOTIFYCAP', '新闻核准时通知我。');
define($constpref.'_STORY_APPROVE_NOTIFYDSC', '新闻核准时接收通知。');
define($constpref.'_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自动通知：新闻已核准');

// added 2.01
define($constpref."_NOTIFY5_TITLE", "发表新评论");
define($constpref."_NOTIFY5_CAPTION", "有新评论发表时通知我。");
define($constpref."_NOTIFY5_DESC", "有新评论发表时接收通知。");
define($constpref."_NOTIFY5_SUBJECT", "[{X_SITENAME}] {X_MODULE} 自动通知：发表新评论");

}
?>