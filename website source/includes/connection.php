<?php

error_reporting(0);

$link = mysqli_connect("localhost", "databaseUsernameHere", "databasePasswordHere", "databaseNameHere");

if ($link === false) {
    die("Error with db...");
}

// Discord Bot
$client_id = "1246478538098475101";
$client_secret = "DiscordBotClientSecret";
$BotToken = "DiscordBotToken";

$redirect_uri = "https://restorecord.com/auth/"; // AUTH
$verify_uri = "https://restorecord.com/verify/";
$ShoppySecret = ""; // replace with your webhook secret
$shoppyApiKey = "";

// Webhooks
$AdminLogs = "https://discord.com/api/webhooks/1246479063812538402/IqvMb2MlU6SF_8w5SMuUvOknwXirEEyWl_u2SgU1R_2TVfL5Wcb5LkFUm4IDAy_yaFmI";
$Logs = "https://discord.com/api/webhooks/1246479256071180361/qoT7a-s5ssT9JpSKWbjDgM8QC463-2W5H1DiEOPrMTaQ9Dm_SFWDTiz9YCuDHWdi2bZc";

?>
