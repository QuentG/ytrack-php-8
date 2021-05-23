<?php

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