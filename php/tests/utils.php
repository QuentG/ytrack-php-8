<?php

const PHP_EXTENSION = "php";

function getFunctionContent(ReflectionFunction $function): string
{
    $filename = $function->getFileName();
    $startLine = $function->getStartLine();
    $length = $function->getEndLine() - $startLine;

    // Remove comment in function content, to prevent if student write unauthorized function name in comment
    return preg_replace(
        '@(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|((?<!:)//.*)|[\t\r\n]@i',
        '',
        implode("", array_slice(file($filename), $startLine, $length))
    );
}

function getFileContent(string $fileName): bool|string
{
    return file_get_contents($fileName . PHP_EXTENSION);
}

function countLinesInFile(string $fileName): int
{
    return count(file($fileName . PHP_EXTENSION));
}

function executeFile(string $fileName): bool|string
{
    return exec("php " . $fileName  . PHP_EXTENSION);
}