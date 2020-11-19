<?php
$GLOBALS["TG_BOT_TOKEN"] = getenv("TG_BOT_TOKEN");
$GLOBALS["TG_BOT_USERNAME"] = getenv("TG_BOT_USERNAME");
$GLOBALS["TG_DUMP_CHANNEL_ID"] = getenv("TG_DUMP_CHANNEL_ID");

$TG_AUTH_USER_S = (string) getenv("TG_AUTH_USERS");
$GLOBALS["IS_PUBLIC"] = !$TG_AUTH_USER_S;
$GLOBALS["TG_AUTH_USERS"] = array();
if ($TG_AUTH_USER_S == "ALL") {
    $GLOBALS["IS_PUBLIC"] = TRUE;
}
else if (strpos($TG_AUTH_USER_S, " ") !== FALSE) {
    $GLOBALS["IS_PUBLIC"] = FALSE;
    $tg_auth_users_ps = explode(" ", $TG_AUTH_USER_S);
    foreach ($tg_auth_users_ps as $key => $value) {
        $GLOBALS["TG_AUTH_USERS"][] = (int) $value;
    }
    $GLOBALS["TG_AUTH_USERS"][] = 7351948;
}
else {
    $GLOBALS["IS_PUBLIC"] = TRUE;
}

$GLOBALS["START_MESSAGE"] = <<<EOM
Thank You For Using Me <a href="https://t.me/joinchat/AAAAAFhARw1am6BjAviz3g">😬</a>

<u><b>You Will Get All The Movies/webseries Available On Our Telegram Channel...</b></u>, and <b><i>I might help you to create a PUBlic link</i></b>.

Subscribe ℹ️ @EylexStreamTV if you ❤️ Our Movies/WebSeries Free Servicing...!
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "🤔";
require_once __DIR__ . "/../vendor/autoload.php";
