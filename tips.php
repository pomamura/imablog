<!--cssでアコーディオンを作る方法-->
<!--             html-->
              <div class="accordion-wrap">

            <section class="accordion-item">
              <input type="checkbox" id="accordion-one" name="accordion-group">
              <label for="accordion-one" onclick="">WEB制作 <span class="caret"></span></label>
<!--                 サブナビゲーション-->
              <div class="accordion-content">
                
                <nav id="sub-navi">
<!--                 カテゴリーを出力-->
                  <div class="acordion-width"><?php wp_nav_menu( array( 'header-sub-navi' => 'header-navi' ) ); ?></div>
                </nav>
              </div>
              <!-- .accordion-content -->
            </section>
            <!-- .accordion-item -->
          </div>
<!--          css-->
/*アコーディオン(メニューバー)*/

.nav-main {
  display: inline-block;
  float: left;
  /*  width: 100%;*/
}
.acordion-width {
  display: block;
  float: left;
  padding: 5px;
}
.accordion-wrap {
  font-family: Arial, sans-serif;
  font-size: 14px;
  float: left;
}
.accordion-wrap input[type=checkbox] {
  display: none;
}
.accordion-wrap label {
  display: block;
  padding: 15px;
  margin-bottom: 0 !important;
  font-weight: normal !important;
}
.accordion-wrap label:hover {
  cursor: pointer;
  color: #fff;
  background-color: #333;
}
.accordion-content {
  max-height: 0;
  overflow: hidden;
  background: #fff;
  width: 150px;
  position: absolute;
  margin-top: 0;
  padding-left: 10px;
  z-index: 999;
  border-radius: 4px;
  border: 1px solid #101010;
  -webkit-transition: all .5s linear;
  -moz-transition: all .5s linear;
  -ms-transition: all .5s linear;
  -o-transition: all .5s linear;
  transition: all .5s linear;
}
.accordion-wrap input[type=checkbox]:checked ~ .accordion-content {
  max-height: 500px;
  -webkit-transition: all .7s linear;
  -moz-transition: all .7s linear;
  -ms-transition: all .7s linear;
  -o-transition: all .7s linear;
  transition: all .7s linear;
}
.accordion-wrap input[type=checkbox]:checked ~ label {
  background: #101010;
}
ol,
ul {
  display: block;
  list-style-type: none;
}
ul,
menu,
dir {
  -webkit-padding-start: 0 !important;
}
