<?php

declare(strict_types=1);

class Tester implements TesterInterface
{
    private const STUDENT_SOLUTION_BASE_PATH = "/jail/student/";

    private ?string $exerciseName = null;

    public function retrieveExerciseName(): void
    {
        $exerciseName = getopt('t:', ['required:'])['t'] ?? null;

        if (null === $exerciseName) {
            $this->fatal("Missing exercise, usage:\nphp test.php -texercise-name");
        }

        $exerciseName = $this->parseString($exerciseName);

        if ('test' === $exerciseName) {
            $this->fatal("Can't execute test for this filename.");
        }

        $this->exerciseName = $exerciseName;
    }

    public function run(): void
    {
        $this->retrieveExerciseName();
        $this->checkFiles();

        require_once self::STUDENT_SOLUTION_BASE_PATH . $this->exerciseName  . '.php'; // Student Solution
        require_once "../app/" . $this->exerciseName  . '_test.php'; // Solution

        $eq = fn ($a, $b): bool => $a === $b;

        foreach ($tests as $i => $t) {
            try {
                if (!$t($eq)) {
                    throw new Error('Test failed', 1);
                }
            } catch (Error $e) {
                $this->fatal("Test #" . $i + 1 . " failed:\n\nError: " . $e->getMessage());
            }
        }

        
        echo "Exercise " . $this->exerciseName . ' passed (' . count($tests) . ' tests)';
    }

    private function fatal(string $message): void
    {
        echo $message;
        exit(1);
    }

    private function parseString(string $name): string
    {
        return strtolower(trim($name));
    }

    private function checkFiles(): void
    {
        if (!file_exists(self::STUDENT_SOLUTION_BASE_PATH . $this->exerciseName . '.php')) {
            $this->fatal("Unable to find student solution.");
        }

        if (!file_exists("../app/" . $this->exerciseName  . '_test.php')) {
            $this->fatal("Unable to find solution.");
        }
    }
}