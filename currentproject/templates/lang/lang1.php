<?php
@session_start();
// ������ ��������� ��� ������ ������
$LangArray = array("ua", "ro", "ru");
// ���� �� ���������
$DefaultLang = "ru";

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
include_once ("lang/lang.".$CurentLang.".php");
?>