<?php

function getFunctionContent(string $functionName): ?string
{
    try {
        $reflection = new ReflectionFunction($functionName);
    } catch (ReflectionException $e) {
        return null;
    }

    $filename = $reflection->getFileName();
    $startLine = $reflection->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
    $length = $reflection->getEndLine() - $startLine;

    return implode("", array_slice(file($filename), $startLine, $length));
}