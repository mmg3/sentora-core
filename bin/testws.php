<?php

/**
 * Just a temporary play ground for my web service implementation into ZPX.
 */
$raw_path = str_replace("\\", "/", dirname(__FILE__));
$root_path = str_replace("/bin", "/", $raw_path);
chdir($root_path);

// Include some files that we need.
require_once 'dryden/loader.inc.php';
require_once 'cnf/db.php';
require_once 'inc/dbc.inc.php';


$test_xml ="<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n".
        "<xmws>".
        "\t<apikey>sdfdsfsdfsdfsfdsfd--</apikey>\n" .
        "\t<request>StaticDataReturnExample</request>\n" .
        "\t<authuser>test2</authuser>\n" .
        "\t<authpass>password</authpass>\n" .
        "\t<content>Bobby Allen</content>".
        "</xmws>";

//echo ws_generic::DoPostRequest('http://127.0.0.1/zpanelx/bin/api.php?m=test', $test_xml);
echo ws_generic::DoPostRequest('http://127.0.0.1/zpanelx/api/test/', $test_xml);

$test_xml ="<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\n".
        "<xmws>".
        "\t<apikey>sdfdsfsdfsdfsfdsfd--</apikey>\n" .
        "\t<request>AnotherDataReturnExample</request>\n" .
        "\t<content>Ruby and Molly</content>".
        "</xmws>";

//echo ws_generic::DoPostRequest('http://127.0.0.1/zpanelx/bin/api.php?m=test', $test_xml);
echo ws_generic::DoPostRequest('http://127.0.0.1/zpanelx/api/test/', $test_xml);
?>
