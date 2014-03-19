<?php

class PhpBuildTest extends PHPUnit_Framework_TestCase
{
  public function testPhpExtensions() {
    $exts = "bcmath bz2 calendar cgi-fcgi ctype curl date dba dom exif filter ftp gd gettext hash iconv imagick imap json ldap libxml mbstring mcrypt memcache mongo mssql mysql mysqli openssl pcre PDO pdo_dblib pdo_mysql pdo_pgsql pdo_sqlite pgsql posix Reflection session shmop SimpleXML soap sockets SPL standard sysvmsg tidy tokenizer uploadprogress wddx xhprof xml xmlreader xmlrpc xmlwriter xsl zip zlib";
    $expected_exts = array_fill_keys(explode(' ', $exts), true);
    $actual_exts = array_fill_keys(get_loaded_extensions(), true);
    $this->assertEquals($expected_exts, $actual_exts);
  }
}
