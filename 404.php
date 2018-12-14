<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?><div class="page-content">
	<table cellpadding="0" cellsapcing="0" style="width:100%; height:100%; text-align:center; vertical-align: middle;">
	<tbody>
	<tr>
		<td style="vertical-align:top;">
			<div style="width:600px; margin:10px auto; padding:10px;">
 <a href="/"><img alt="ЦПУ «Имею право»" src="/bitrix/images/logo.png"></a><br>
 <br>
				<h1>Ошибка 404</h1>
				<p>
					 Запрошенный документ не найден, попробуйте начать с <a href="/">главной страницы</a>.
				</p>
			</div>
		</td>
	</tr>
	</tbody>
	</table>
</div>
<br><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>