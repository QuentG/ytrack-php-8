<?php

const STUDENT_SOLUTION_BASE_PATH = "/jail/student/";
const PHP_EXTENSION = ".php";

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

function executeFile(string $fileName): array
{
    $result = [];
    exec("php " . STUDENT_SOLUTION_BASE_PATH . $fileName . PHP_EXTENSION, $result);

    return $result;
}


function countLinesInFile(string $fileName): int
{
    $content = file(STUDENT_SOLUTION_BASE_PATH . $fileName . PHP_EXTENSION);
    if (!$content) {
        return 0;
    }

    $content = array_filter(
        preg_replace('~[\r\n]+~', "", $content), // Replace white space by empty string
        static fn ($val) => "<?php" !== $val && "" !== $val // Delete <?php and empty string in array
    );

    return count($content);
}