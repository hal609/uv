<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <title><?php require("i18n.php");
  require("specialforms.php");
  echo $th; ?></title>
  <link href="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
    rel="stylesheet">
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    body {
      padding-top: 60px;
    }
  </style>
</head>

<body>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $th; ?></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
            aria-expanded="false"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
            <?php require("i18n.php");
            echo $langf; ?>
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?lang=ar">العربية (ar)</a></li>
            <li><a href="index.php?lang=ca">Català (ca)</a></li>
            <li><a href="index.php?lang=de">Deutsch (de)</a></li>
            <li><a href="index.php?lang=es">Español (es)</a></li>
            <li><a href="index.php?lang=en">English (en)</a></li>
            <li><a href="index.php?lang=hy">Հայերեն (hy)</a></li>
            <li><a href="index.php?lang=id">Bahasa Indonesia (id)</a></li>
            <li><a href="index.php?lang=ja">日本語 (ja)</a></li>
            <li><a href="index.php?lang=ru">Pусский (ru)</a></li>
            <li><a href="index.php?lang=zh">中文 (zh)</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://github.com/hal609/uv">Edit / Translate</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <?php echo $t0; ?>
    <br>
    <div class="well form-submit">
      <form action="index.php">
        <?php

        // Force errors to show
        // ini_set('display_errors', 1);
        // ini_set('display_startup_errors', 1);
        // error_reporting(E_ALL);
        
        if (!empty($_GET["specialform"])) {
          if ($_GET["specialform"] == "dewiki") {
            echo "<input type=\"hidden\" name=\"specialform\" value=\"dewiki\" />";
            echo "<b><p>Neuer Benutzername:</p></b>";
          } elseif ($_GET["specialform"] == "eswiki") {
            echo "<input type=\"hidden\" name=\"specialform\" value=\"eswiki\" />";
            echo "<b><p>Solicita un nombre de usuario nuevo por el que quieras que se te conozca a través de todos los proyectos:</p></b>";
          }
        }
        ?>
        <input type="text" name="username" class="form-control" id="username" placeholder="<?php echo $un; ?>"><br>
        <input type="hidden" name="lang" value="<?php echo $lang; ?>" />
        <input class="btn btn-primary btn-success" value="<?php echo $t9; ?>" type="submit">
      </form>
    </div>
    <br>

    <?php
    function errormsg($text)
    {
      echo "<div class=\"alert alert-danger\" role=\"alert\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> ";
      echo "$text";
      echo "</div>";
    }

    function warnmsg($text)
    {
      echo "<div class=\"alert alert-warning\" role=\"alert\"><span class=\"glyphicon glyphicon-warning-sign\" aria-hidden=\"true\"></span> ";
      echo "$text";
      echo "</div>";
    }

    function okmsg($text)
    {
      echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span> ";
      echo "$text";
      echo "</div>";
    }

    function twosentencewarnmsg($text1, $text2, $username)
    {
      echo "<div class=\"alert alert-warning\" role=\"alert\"><span class=\"glyphicon glyphicon-warning-sign\" aria-hidden=\"true\"></span> ";
      echo "$text1 $username $text2";
      echo "</div>";
    }

    if (isset($_GET["username"]) && !empty($_GET["username"])) {
      $username = $_GET['username'];

      echo "<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> <b>";
      echo $un;
      echo ":</b> ";
      echo htmlspecialchars($username);
      echo "<br><br>";

      // Strip trailing underscores and spaces to match Wikipedia behaviour
      while ((substr($username, -1) == ' ') | (substr($username, -1) == '_')) {
        $username = substr($username, 0, -1);
      }

      // Strip leading underscores and spaces to match Wikipedia behaviour
      while ((substr($username, 0, 1) == ' ') | (substr($username, 0, 1) == '_')) {
        $username = substr($username, 1, );
      }

      $change_warn = "false";

      // Warn about replacing underscores with spaces
      if (str_contains($username, '_')) {
        $username = str_replace('_', ' ', $username);
        $change_warn = 'true';
      }

      // Warn about capitalising the first letter
      if (preg_match('/^[a-z].*$/', $username)) {
        $username = strtoupper(substr($username, 0, 1)) . substr($username, 1);
        $change_warn = 'true';
      }

      if (preg_match('/\@/', $username)) {
        errormsg($t2);
        $valid = "false";
      } elseif (preg_match('/.{40}/', $username)) {
        errormsg($t3);
        $valid = "false";
      } elseif (preg_match('/(\/|\#|\<|\>|\[|\]|\||\{|\}|@|:|=)/', $username)) {
        errormsg($t4);
        $valid = "false";
        // Username must not start with '~2'
      } elseif ((substr($username, 0, 2) == '~2')) {
        errormsg($t10);
        $valid = "false";
        // Check for invalid Unicode characters
      } elseif (preg_match('/[\x{0080}-\x{009F}\x{00A0}\x{2000}-\x{200F}\x{2028}-\x{202F}\x{3000}\x{E000}-\x{F8FF}]/u', $username)) {
        errormsg($t11);
        $valid = "false";
        // Check for emoji characters
      } elseif (preg_match("/([\x{2030}-\x{329f}\x{1F000}-\x{1FAFF}])/u", $username)) {
        errormsg($t11);
        $valid = "false";
        // Check name is not reserved
      } elseif (in_array($username, $wgReservedUsernames)) {
        errormsg($t12);
        $valid = "false";
        // Check name does not resemble IP address
      } elseif (preg_match('/\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b/', $username)) {
        errormsg($t13);
        $valid = "false";
        // Check name does not imply elevated privilege
      } elseif (preg_match('/\b(admin|administrator|sysop|moderator|bureaucrat|steward|checkuser|oversight)\b/i', $username)) {
        errormsg($t14);
        $valid = "false";
        // Name should not include top-level domains
      } elseif (preg_match('/(\.gov|\.edu|\.com|\.org|\.net|\.co\.uk|\.uk)/', $username)) {
        errormsg($t15);
        $valid = "false";
        // Check for trailing full stop
      } else if (substr($username, -1) == '.') {
        errormsg($t15);
        $valid = "false";
      } else {
        $valid = "true";
      }

      if ($valid == "true") {
        if ($change_warn == "true") {
          twosentencewarnmsg($adjustWarn1, $adjustWarn2, $username);
        }

        okmsg($t5);

        $tools_pw = posix_getpwuid(posix_getuid());
        $tools_mycnf = parse_ini_file($tools_pw['dir'] . "/replica.my.cnf");
        $db = new mysqli(
          's7.web.db.svc.wikimedia.cloud',
          $tools_mycnf['user'],
          $tools_mycnf['password'],
          'centralauth_p'
        );
        if ($db->connect_errno)
          die("Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error);
        $r = $db->query('select gu_name from globaluser where gu_name = "' . $db->real_escape_string($username) . '" limit 1;');
        unset($tools_mycnf, $tools_pw);
        $cnt = $r->num_rows;
        if ($cnt == "1") {
          errormsg($t6);
        } else {
          okmsg($t7);

          // Handle special forms
          if ($_GET["specialform"] == "enwiki") {
            enform($username);
          } elseif ($_GET["specialform"] == "dewiki") {
            deform($username);
          } elseif ($_GET["specialform"] == "eswiki") {
            esform($username);
          }
        }
      }
    } else {
      echo $t8;
    }

    ?>