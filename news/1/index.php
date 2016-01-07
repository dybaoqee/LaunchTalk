<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <title>L@unch Talk - Everyone was running</title>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/cedar/style.css" />
    <link rel="stylesheet" href="../resources/colorbox.css" />
    <script src="../resources/jquery.min.js"></script>
    <script src="../resources/jquery.colorbox-min.js"></script>
    <script src="/wp-content/themes/cedar/assets/js/medium-editor.min.js"></script>
    <script language="JavaScript">
        $(document).ready(function(){
            $(".postheadimage").colorbox({iframe:true, width:"80%", height:"80%", href:"../resources/running.html"});

            var editor = new MediumEditor('.editable', {
                toolbar: false,
                placeholder: {
                    /* This example includes the default options for placeholder,
                     if nothing is passed this is what it used */
                    text: '你的评论'
                }
            });

            var zz = new MediumEditor('.question, .answer');
        });
    </script>
    <style>
        body {
            margin: 0px;
        }
        .post-content{
            margin: 10px auto;
            width: 960px;
        }
        .postheadimage {
            position: relative;
            cursor: pointer;
            width: 100%;
            height: auto;
            border-bottom: 2px solid #f2f2f2;
            z-index: 1500;
            -webkit-transition: -webkit-transform 150ms ease-in-out, left 500ms ease-in-out;
            -moz-transition: -moz-transform 150ms ease-in-out, left 500ms ease-in-out;
            transition: transform 150ms ease-in-out, left 500ms ease-in-out;
        }
        .postheadimage img {
            width: 100%;
        }
        .post-title {
            font-size: 42px;
            font-weight: bold;
            padding: 60px 0;
        }
        .post-quote {
            color: rgba(35, 37, 40, 0.7);
            border-bottom: 1px solid rgba(0,0,0,0.15);
        }
        .quote-title {
            font-size: 24px;
            padding: 10px 0px;
        }
        .quote-content {
            padding: 10px 0px;
            line-height: 21pt;
            font-size: 14px;
        }
        .qa {
            padding: 10px 0px;
            line-height: 21pt;
            font-size: 14px;
        }
        .question, .answer {
            padding: 20px 0px;
        }
        .qa .button--circle>.avatar, .qa .button--circle>.avatar>.avatar-image {
            height: 32px;
            width: 32px;
        }
        .qa .authorname {
            line-height: 18pt;
            font-size: 12px;
            color: #00ab6b;
        }
        .authorcontainer {
            float: left;
            position: relative;
            margin-right: 5px;
        }
        .question-content, .answer-content {
            font-size: 14px;
            line-height: 2.1em;
            display: table;
        }
        .question-content p:first-child, .answer-content p:first-child {
            margin-top: -0.5em;
        }
        .answer-content {
            color: rgba(35, 37, 40, 0.7);
        }
        .qa img{
            margin: 0 auto;
            display: block;
        }
        .qa .image-caption {
            text-align: center;
            font-size: 12px;
            color: gray;
        }

        .post-authors {
            margin: 10px auto;
            width: 960px;
            border-bottom: 1px solid rgba(0,0,0,0.15);
        }

        .post-authors .button--circle>.avatar, .post-authors .button--circle>.avatar>.avatar-image {
            width: 47px;
            height: 47px;
        }

        .card-imageWrapper {
            display: table-cell;
        }

        .card-content {
            display: table-cell;
            vertical-align: top;
            padding-left: 15px;
            word-break: break-word;
            word-wrap: break-word;
        }

        .card-name {
            font-size: 18px;
            color: rgba(0,0,0,0.8);
            line-height: 1.1;
            margin: 0px;
            margin-top: 1px;
        }

        .card-name a{
            text-decoration: none;
        }

        .card-description {
            font-size: 14px;
            line-height: 1.3;
            margin-bottom: 4px;
            margin-top: 10px;
        }
        .u-floatRight {
            float: right !important;
        }

        .card-user {
            position: relative;
            width: 100%;
            display: inline-block;
            vertical-align: top;
            color: rgba(0,0,0,0.6);
            padding: 18px 0;
        }


        .button--primary:focus, .button--primary:active, .button--primary:hover {
            border-color: #02b875;
            color: #1c9963;
        }

        .button--primary {
            border-color: #00ab6b;
        }

        .post-comments {
            margin: 10px auto;
            width: 960px;
        }

        .related-article{
            margin: 10px auto;
            width: 960px;
        }

        .newspost {
            margin: 10px auto;
            width: 960px;
        }
        .newsauthor {
            margin: 40px 0px;
            display: inline-block;
        }
        .newsbrief {
            font-size: 14px;
        }
        .related-title {
            text-transform: uppercase;
            font-weight: 400;
            letter-spacing: .1em;
            color: rgba(0,0,0,0.44);
            border-bottom: solid 1px rgba(0,0,0,0.15);
            padding-top: 50px;
            padding-bottom: 15px
        }

        .authorcontainer {
            float: left;
            margin-right: 10px;
        }
        .authorcontainer > button {
            width: 100%;
        }
        .authorname{
            font-size: 14px;
            color: #00ab6b;
            line-height: 18pt;
        }
        .avatar {
            margin: 0 auto;
        }
        .category-title {
            position: absolute;
            left: 0px;
            top: 40%;
            right: 0px;
            bottom: 0px;
            display: block;
            margin: 0 auto;
            width: 600px;
        }
        .category-title .title {
            position: relative;
            font-weight: bold;
            color: #ffffff;
            display: inline;
            background-color: black;
            font-size: 48px;
            line-height: 65px;
            font-family: Arial;
        }
    </style>
</head>

<body>

<div class="post-container">
    <div class="postheadimage">
        <img src="../images/greece-protest.jpg">
        <div class="category-title">
            <h1 class="title">News: <br>Everyone was running</h1>
        </div>
    </div>
    <div class="post-content">
        <div class="post-title">Talk: 美国的危机</div>
        <div class="post-quote">
            <div class="quote-title">
                说到此书的出版过程，陈燕妮说其实也有曲折
            </div>
            <div class="quote-content">
                <p>
                    自2000年出版过采访录《美国之后》之后，著名旅美女作家陈燕妮沉寂了相当长的一段时间，近日，她又与合作多年的作家出版社合作，出版了最新文集《陈燕妮：洛杉矶已久》。这本书是她以一九九五年迄今的旅美生活为主题的杂文结集，内容涵盖海外政治、生活、艺术、生存现状等各方面内容。书中包括《讨厌欧洲》、《我与美国之音》、《美国海关》、《三回纽约》等文。全书装祯精美、编辑扎实，总书厚达三百多页。此著作为陈燕妮本人继1994年及之后陆续推出《告诉你一个真美国》、《陈燕妮：纽约意识》、《遭遇美国：五十个中国人的美国经历》、《陈燕妮：再回纽约》、《粉红通知》、《美国之后》之后的第七部著作。
                </p>
                <p>
                    在这本《陈燕妮：洛杉矶已久》的自序中，作者陈燕妮这样写道：我的这一本《陈燕妮：洛杉矶以久》在年份上与上一本《美国之后》的二零零零年竟然相差了四年，这是我没有想到的。
                </p>
            </div>
        </div>
        <div class="qa">
            <div class="question">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile5.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">强哥</div>
                    </button>
                </div>
                <div class="question-content">
                    <p>
                    你能否谈一下《陈燕妮：洛杉矶已久》一书的创作过程？
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="answer">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">陈燕妮</div>
                    </button>
                </div>
                <div class="answer-content">
                    <p>
                    这本书是我过去多年的一个杂文结集，过去也曾经把杂文结集出版，但是文章的写作年限基本上停止于1996年的《陈燕妮：再回纽约》，因此，此次出版的新书，在文章写作年代的跨度上涵盖了从1996年到今天将近十年的时间。
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="question">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile4.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">李姗</div>
                    </button>
                </div>
                <div class="question-content">
                    <p>
                    十年的写作，你觉得自己的创作有否变化？
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="answer">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">陈燕妮</div>
                    </button>
                </div>
                <div class="answer-content">
                    <p>
                        其实我个人认为，凡是2000年之后写的东西我本人都还算满意，但我觉得新书中角度比较新颖的文章是《讨厌欧洲》和《湖北老家》等一些感性文字。在《讨厌欧洲》中我用了十篇系列文章的篇幅描述了我在欧洲走动时的所遇和所想。
                    </p>
                    <figure>
                        <img src="../images/ff_heresies3_f.jpg" >
                        <figcaption class="image-caption">我想实实在在地打破地球上很多人对欧洲那个地方莫名其妙的崇拜</figcaption>
                    </figure>
                    <p>
                        其实我个人认为，凡是2000年之后写的东西我本人都还算满意，但我觉得新书中角度比较新颖的文章是《讨厌欧洲》和《湖北老家》等一些感性文字。在《讨厌欧洲》中我用了十篇系列文章的篇幅描述了我在欧洲走动时的所遇和所想。
                    </p>
                    <p>
                        其实我个人认为，凡是2000年之后写的东西我本人都还算满意，但我觉得新书中角度比较新颖的文章是《讨厌欧洲》和《湖北老家》等一些感性文字。在《讨厌欧洲》中我用了十篇系列文章的篇幅描述了我在欧洲走动时的所遇和所想。
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="question">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile5.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">强哥</div>
                    </button>
                </div>
                <div class="question-content">
                    <p>
                    从1994年算起，中国人出国的热潮在最近十多年来一直没有间断，因此，国人对美国的了解一直也在加深，你知不知道这一一点？又是如何应对的？
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="answer">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">陈燕妮</div>
                    </button>
                </div>
                <div class="answer-content">
                    <p>
                    对此我非常了解，因为我在美国所居住的城市就是中国移民最为密集的洛杉矶，而且我又是新闻从业人员，因此，对中国移民乃至国内人士在美国的过境游览状况了解相当多，这也要求我们这样的作者必须正确、翔实地反映美国现状，深入解剖美国各种层面，完全不能出错，如此，才能赶上国内读者对美国知的飞跃。
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>

        </div>

        <div class="post-quote">
            <div class="quote-content">
                <p>
                    自2000年出版过采访录《美国之后》之后，著名旅美女作家陈燕妮沉寂了相当长的一段时间，近日，她又与合作多年的作家出版社合作，出版了最新文集《陈燕妮：洛杉矶已久》。这本书是她以一九九五年迄今的旅美生活为主题的杂文结集，内容涵盖海外政治、生活、艺术、生存现状等各方面内容。书中包括《讨厌欧洲》、《我与美国之音》、《美国海关》、《三回纽约》等文。全书装祯精美、编辑扎实，总书厚达三百多页。此著作为陈燕妮本人继1994年及之后陆续推出《告诉你一个真美国》、《陈燕妮：纽约意识》、《遭遇美国：五十个中国人的美国经历》、《陈燕妮：再回纽约》、《粉红通知》、《美国之后》之后的第七部著作。
                </p>
            </div>
        </div>
    </div>

    <div class="post-authors">
        <div class="card-user">
            <div class="u-floatRight">
                <span class="followState js-followState buttonSet-inner" data-user-id="545f8095edf9">
                    <button class="button button--primary button--small u-noUserSelect button--withChrome button--follow js-followButton" data-action="toggle-subscribe-user" data-action-value="545f8095edf9" data-action-source="footer_card_follow" data-subscribe-source="footer_card">
                        <span class="button-label  button-defaultState js-buttonLabel">
                            关注
                        </span>
                    </button>
                </span>
            </div>
            <div class="card-imageWrapper ">
                <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                    <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                </button>
            </div>
            <div class="card-content">
                <h3 class="card-name">
                    <a class="link link--primary" href="" property="cc:attributionName" title="Go to the profile of Dan Gillmor" aria-label="Go to the profile of Dan Gillmor" rel="author cc:attributionUrl" data-user-id="545f8095edf9" dir="auto">
                        陈燕妮
                    </a>
                </h3>
                <p class="card-description">
                    著名作家
                </p>
            </div>
        </div>

        <div class="card-user">
            <div class="u-floatRight">
                <span class="followState js-followState buttonSet-inner" data-user-id="545f8095edf9">
                    <button class="button button--primary button--small u-noUserSelect button--withChrome button--follow js-followButton" data-action="toggle-subscribe-user" data-action-value="545f8095edf9" data-action-source="footer_card_follow" data-subscribe-source="footer_card">
                        <span class="button-label  button-defaultState js-buttonLabel">
                            关注
                        </span>
                    </button>
                </span>
            </div>
            <div class="card-imageWrapper ">
                <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                    <div class="avatar"><img src="../images/profile4.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                </button>
            </div>
            <div class="card-content">
                <h3 class="card-name">
                    <a class="link link--primary" href="" property="cc:attributionName" title="Go to the profile of Dan Gillmor" aria-label="Go to the profile of Dan Gillmor" rel="author cc:attributionUrl" data-user-id="545f8095edf9" dir="auto">
                        李姗
                    </a>
                </h3>
                <p class="card-description">
                    美食家，兼职记者
                </p>
            </div>
        </div>

        <div class="card-user">
            <div class="u-floatRight">
                <span class="followState js-followState buttonSet-inner" data-user-id="545f8095edf9">
                    <button class="button button--primary button--small u-noUserSelect button--withChrome button--follow js-followButton" data-action="toggle-subscribe-user" data-action-value="545f8095edf9" data-action-source="footer_card_follow" data-subscribe-source="footer_card">
                        <span class="button-label  button-defaultState js-buttonLabel">
                            关注
                        </span>
                    </button>
                </span>
            </div>
            <div class="card-imageWrapper ">
                <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                    <div class="avatar"><img src="../images/profile5.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                </button>
            </div>
            <div class="card-content">
                <h3 class="card-name">
                    <a class="link link--primary" href="" property="cc:attributionName" title="Go to the profile of Dan Gillmor" aria-label="Go to the profile of Dan Gillmor" rel="author cc:attributionUrl" data-user-id="545f8095edf9" dir="auto">
                        强哥
                    </a>
                </h3>
                <p class="card-description">
                    工程师
                </p>
            </div>
        </div>
    </div>

    <div class="post-comments">
        <div class="new">
            <div class="editable">

            </div>
        </div>
        <div class="others">
            <div style="border-bottom: 1px solid rgba(0,0,0,0.15);  font-size: 16px;">其他评论</div>
            <div class="answer">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">陈燕妮</div>
                    </button>
                </div>
                <div class="answer-content">
                    <p>
                        写的不错，再接再厉
                    </p>
                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="answer">
                <div class="authorcontainer">
                    <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                        <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                        <div class="authorname">陈燕妮</div>
                    </button>
                </div>
                <div class="answer-content">
                    <p>
                        这本书是我过去多年的一个杂文结集，过去也曾经把杂文结集出版，但是文章的写作年限基本上停止于1996年的《陈燕妮：再回纽约》，因此，此次出版的新书，在文章写作年代的跨度上涵盖了从1996年到今天将近十年的时间。
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="related-article">
        <div class="related-title">相关文章</div>
        <div class="newspost">
            <div class="newsinfo">
                <h2 class="newstitle">
                    伊斯兰教的起源
                </h2>
                <p class="newsbrief">
                    伊斯兰教起源可以追溯到７世纪的沙特阿拉伯。因此伊斯兰是几大世界宗教中最年轻的。先知穆罕默德（约公元５７０－６３２年）于公元６１０年在据说被天使探望之后创立伊斯兰教。默罕默德口授了伊斯兰圣书《古兰经》，穆斯林教徒认为《古兰经》在默罕默德之前就已存在，是安拉的圣语。                </p>
                <div class="newsauthor">
                    <div class="authorcontainer">
                        <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                            <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                            <div class="authorname">陈燕妮</div>
                        </button>
                    </div>
                    <div class="authorcontainer">
                        <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                            <div class="avatar"><img src="../images/profile4.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                            <div class="authorname">李姗</div>
                        </button>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>

            <div class="newsinfo">
                <h2 class="newstitle">
                    中国在南海的布局
                </h2>
                <p class="newsbrief">
                    近期的动态表明，中国在南海争端上的‘控局’的能力得到了急剧加强。中国的南海政策不妨更自信一些。”北京大学中国战略研究中心的副研究员胡波表示。
                </p>
                <div class="newsauthor">
                    <div class="authorcontainer">
                        <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                            <div class="avatar"><img src="../images/profile1.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                            <div class="authorname">陈燕妮</div>
                        </button>
                    </div>
                    <div class="authorcontainer">
                        <button class="button button--circle button--borderless button--boxShadowBorder button--withChrome is-inSiteNavBar js-userActions" aria-haspopup="true" data-action="open-userActions">
                            <div class="avatar"><img src="../images/profile3.png" class="avatar-image avatar-image--smaller" alt="avatar" data-no-retina="true"></div>
                            <div class="authorname">冯金铭</div>
                        </button>
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
</div>
</body>
</html>