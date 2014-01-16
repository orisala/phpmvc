<?php
class Functions
{

    public function __construct($model) {

    }

    public static function createHeader() {
        return "<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
      <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
      <header>
        <div id=\"centrat\">
        <div class=\"top_links\"><span>SIGN IN · REGISTER · TEAM ACCOUNT</span></div>
        </div>

          <div id=\"top_bar2\">
            <div id=\"centrat_2\">
              <h1 class=\"logo\"><a href=\"\"></a></h1>

              <ul class=\"menu_main\">
                    <li><a href=\"index.php?page=technology\">THE TECHNOLOGY</a></li>
                    <li><a href=\"index.php?page=sport\">IN SPORT</a></li>
                    <li><a href=\"index.php?page=wear\">WEAR</a></li>
                    <li><a href=\"index.php?page=shop\">SHOP</a></li>
                    <li><a href=\"index.php?page=where_to_buy\">WHERE TO BUY</a></li>
                    <li><a href=\"index.php?page=news\">NEWS</a></li>
                    <li><a href=\"index.php?page=contact\">CONTACT</a></li>
                </ul>
            </div>

          </div>

      </header>";

    }
}
