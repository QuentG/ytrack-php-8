<?php

function getFunctionContent(string $functionName): ?string
{
    try {
        $reflection = new ReflectionFunction($functionName);
    } catch (ReflectionException $e) {
        return null;
    }

    $filename = $reflection->getFileName();
    $startLine = $reflection->getStartLine();
    $length = $reflection->getEndLine() - $startLine;

    return implode("", array_slice(file($filename), $startLine, $length));
}