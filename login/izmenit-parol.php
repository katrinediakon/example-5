<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Изменить пароль");
?>&nbsp;<?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.changepasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "",
		"AUTH_REGISTER_URL" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>