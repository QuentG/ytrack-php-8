<?php

function getFunctionContent(ReflectionFunction $function): string
{
    $filename = $function->getFileName();
    $startLine = $function->getStartLine();
    $length = $function->getEndLine() - $startLine;

    return implode("", array_slice(file($filename), $startLine, $length));
}