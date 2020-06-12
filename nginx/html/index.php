<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <title>계명대학교 :: 게임모바일공학과 홈페이지</title>
    <link rel="stylesheet" href="/css/main.css">
    <!-- 공통 외부 라이브러리 CDN -->
    <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-shim.min.js"></script>
    <script src="https://www.promisejs.org/polyfills/promise-6.1.0.js"></script>
</head>
<body>
    <div class="wrapper">
        <header class="header-menu-bar">
            <div class="header-menu-wrap">
                <h1 class="header-logo-wrap">
                    <a href="" class="kmu-logo-link">계명대학교</a>
                    <a href="" class="gmc-logo-link">게임모바일공학과</a>
                </h1>
                <nav>
                    <a href="">소개</a>
                    <span style="color: #fff;">|</span>
                    <a href="">연혁</a>
                    <span style="color: #fff;">|</span>
                    <a href="">모집요강</a>
                    <span style="color: #fff;">|</span>
                    <a href="">포럼</a>
                </nav>
                <a href="" class="header-menu-border-btn">로그인</a>
            </div>
        </header>
        <main>
            <section class="main-logo">
                <div class="video-bg">
                    <video playsinline autoplay="autoplay" muted="muted" loop="loop">
                        <source src="/media/intro.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="describe center">
                    <div class="main-describe-wrap-left dsp-table">
                        <div class="main-describe-text table-v-center">
                            <div>
                                <h2 style="margin: 0; font-size: 25px; text-shadow: 2px 2px 4px gray;">대한민국 게임콘텐츠 개발&교육의 자존심</h2>
                                <h2 style="margin: 0; font-size: 43px; text-shadow: 2px 2px 4px gray;">계명대학교 게임모바일공학과</h2>
                                <p style="text-shadow: 2px 2px 4px gray;">계명대학교 게임모바일콘텐츠학과는 글로벌 수준에 맞는 게임개발 능력을 갖춘 국제적 인재와 프로젝트 기반의 교과 과정으로 창의적이고 실무적인 인력을 양성하는데 목표를 두고 있습니다. 게임이론 및 실습뿐 아니라 다양한 프로젝트 기반의 강의가 여러 산업체와의 활발한 산학협력을 통해서 이루어져 실무능력을 갖출 수 있는 인재를 양성하고 있습니다. 또한, 게임 관련 분야의 전문가를 양성하기 위한 대구 경북 유일한 4년제 학과입니다. 2012년 8월에는 성서캠퍼스 신축 건물로 이전하였으며, 최신 설비의 기자재를 기반으로 활발한 연구, 프로젝트 활동을 수행하고 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-wrap">
                <div class="describe center">
                    <div class="dsp-table">
                        <div class="table-v-center main-decribe-wrap-left">
                            <div class="main-describe">
                                <h3>게임을 <span class="txt-under-deco">기획</span>하고, <span class="txt-under-deco">개발</span>하고 <span class="txt-under-deco">플레이</span>하자!</h3>
                                <p style="line-height: 28px;">학과 커리큘럼에서 기획의 기술과 개발에 필요한 기초 프로그래밍 및 cocos2d-x, Unity3D, Unreal 엔진 등을 학습하고 배운 내용을 통해서 직접 기획부터 개발까지 하여 나만의 게임을 만들 수 있습니다.</p>
                            </div>
                        </div>
                        <div class="table-v-center main-describe-wrap-right">
                            <div class="main-secribe">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-wrap" style="background-color: #F7F9F9;">
                <div class="describe center">
                    <div class="dsp-table">
                        <div class="table-v-center main-describe-wrap-right">
                            <div class="main-secribe">
                            </div>
                        </div>
                        <div class="table-v-center main-decribe-wrap-left">
                            <div class="main-describe">
                                <h3>학생들의 학업을 위한,<br><span class="txt-under-deco">최신 설비</span>와 <span class="txt-under-deco">지원</span>!</h3>
                                <p style="line-height: 28px;">학생들의 학업을 위한 스터디룸과 원활한 개발을 위한 고사양 PC와 강의실, 그리고 최신 장비를 구비하고 교내외에서 주체하는 공모전에 참가할 수 있는 기회를 제공하여 학업뿐만 아니라 다양한 경험을 할 수 있도록 학과에서는 학생들을 위해 노력합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="kakaomap-embedded">
                <div id="daumRoughmapContainer1590481941690" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%"></div>
            </section>
        </main>
        <footer>

        </footer>
    </div>
    <!-- Kakaomap JS -->
    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
    <script charset="UTF-8">
        new daum.roughmap.Lander({
            "timestamp" : "1590481941690",
            "key" : "yj6r",
            "mapHeight" : "360"
        }).render();

        $(document).ready(function() {
            $(".wrap_controllers").remove();
            $(".wrap_btn_zoom").remove();
        });
    </script>
</body>
</html>
