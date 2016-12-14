<?php
error_reporting(0);
@session_start();
// ������ ��������� ��� ������ ������
$LangArray = array("ua", "en", "ru");
// ���� �� ���������
$DefaultLang = "ua";

// ���� ���� ��� ������ � �������� � ������ ���������� ��� �������
if(@$_SESSION['NowLang']) {
	// ��������� ���� ��������� ���� �������� ��� ������
	if(!in_array($_SESSION['NowLang'], $LangArray)) {
		// ������������ �����, ���������� ���� �� ���������
		$_SESSION['NowLang'] = $DefaultLang;
	}
}
 else {
 	$_SESSION['NowLang'] = $DefaultLang;
 }

// ��������� ���� ��������� ������� ����� GET
$language = addslashes($_GET['lang']);
if($language) {
	// ��������� ���� ��������� ���� �������� ��� ������
	if(!in_array($language, $LangArray)) {
		// ������������ �����, ���������� ���� �� ���������
		$_SESSION['NowLang'] = $DefaultLang;
	}
	 else {
	 	// ��������� ���� � ������
	 	$_SESSION['NowLang'] = $language;
	 }
}

// ��������� ������� ����
$CurentLang = addslashes($_SESSION['NowLang']);
include_once ("../static/lang/lang.".$CurentLang.".php");
?>