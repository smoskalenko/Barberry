<?php
namespace Barberry\Test;

class Data {

    public static function gif1x1() {
        return file_get_contents(APPLICATION_PATH . '/test/data/1x1.gif');
    }

    public static function ottTemplate() {
        return file_get_contents(APPLICATION_PATH . '/test/data/document1.ott');
    }

    public static function docDocument() {
        return file_get_contents(APPLICATION_PATH . '/test/data/document1.doc');
    }

    public static function odtDocument() {
        return file_get_contents(APPLICATION_PATH . '/test/data/document1.odt');
    }

    public static function otsTemplate() {
        return file_get_contents(APPLICATION_PATH . '/test/data/spreadsheet1.ots');
    }

    public static function xlsSpreadsheet() {
        return file_get_contents(APPLICATION_PATH . '/test/data/spreadsheet1.xls');
    }

    public static function odsSpreadsheet() {
        return file_get_contents(APPLICATION_PATH . '/test/data/spreadsheet1.ods');
    }

    public static function pdfDocument() {
        return file_get_contents(APPLICATION_PATH . '/test/data/sample.pdf');
    }
}
