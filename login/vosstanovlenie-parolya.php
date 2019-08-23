<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("восстановление пароля");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "",
		"AUTH_REGISTER_URL" => "registratsiya.php"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>